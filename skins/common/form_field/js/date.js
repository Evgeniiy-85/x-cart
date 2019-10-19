/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Date field controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function datePickerPostprocess(input, elm)
{
}

CommonElement.prototype.handlers.push(
  {
    canApply: function () {
      return this.$element.is('input[type="text"].datepicker')
    },
    handler: function () {
      var options = core.getCommentedData(this.$element.parents('.input-field-wrapper'))
      var locale = options.locale
      var defaultDate = this.$element.val()

      var formatDefaultLocaleDate = function (format, date) {
        return $.datepicker.formatDate(format, new Date(date), {
          dayNamesShort: $.datepicker.regional[''].dayNamesShort,
          dayNames: $.datepicker.regional[''].dayNames,
          monthNamesShort: $.datepicker.regional[''].monthNamesShort,
          monthNames: $.datepicker.regional[''].monthNames
        })
      }

      var changeHiddenValue = function ($el) {
        $($el).siblings('.datepicker-value-input')
          .val(formatDefaultLocaleDate($($el).datepicker('option', 'dateFormat'), $($el).datepicker('getDate')))
      }

      $.datepicker.setDefaults($.datepicker.regional[''])
      if ($.datepicker.regional[locale] !== undefined) {
        $.datepicker.setDefaults($.datepicker.regional[locale])

        if (defaultDate !== undefined && defaultDate !== '') {
          defaultDate = $.datepicker.formatDate(options.dateFormat, new Date(defaultDate))
          this.$element.val(defaultDate)
        }
      }

      var yearRange = (typeof options.highYear !== 'undefined' && typeof options.lowYear !== 'undefined')
        ? options.highYear + ':' + options.lowYear
        : 'c-10:c+10'

      this.$element
        .change(function () {
          changeHiddenValue(this)
        })
        .datepicker({
          dateFormat: options.dateFormat,
          firstDay: options.firstDay,
          yearRange: yearRange,
          beforeShow: datePickerPostprocess,
          selectOtherMonths: true,
          onSelect: function () {
            changeHiddenValue(this)
            jQuery(this).change()
          }
        })
    }
  }
)

