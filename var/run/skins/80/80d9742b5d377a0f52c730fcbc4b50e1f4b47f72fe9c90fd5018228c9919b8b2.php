<?php

/* form_model/theme.twig */
class __TwigTemplate_9d61d33efd7d0d34132c8b6af94cc475bf9d84d0a28b1bde3af7c4ba583fdb2c extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("twig_form/bootstrap_3_horizontal_layout.html.twig", "form_model/theme.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."twig_form/bootstrap_3_horizontal_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_end' => [$this, 'block_form_end'],
                'form_row' => [$this, 'block_form_row'],
                'form_input_wrapper' => [$this, 'block_form_input_wrapper'],
                'checkbox_radio_row' => [$this, 'block_checkbox_radio_row'],
                'form_row_class' => [$this, 'block_form_row_class'],
                'form_group_class' => [$this, 'block_form_group_class'],
                'form_label' => [$this, 'block_form_label'],
                'form_label_class' => [$this, 'block_form_label_class'],
                'form_errors' => [$this, 'block_form_errors'],
                'widget_attributes' => [$this, 'block_widget_attributes'],
                'widget_validation' => [$this, 'block_widget_validation'],
                'base_field_set_row' => [$this, 'block_base_field_set_row'],
                'base_field_set_label' => [$this, 'block_base_field_set_label'],
                'base_field_set_label_attributes' => [$this, 'block_base_field_set_label_attributes'],
                'base_composite_widget' => [$this, 'block_base_composite_widget'],
                'old_widget' => [$this, 'block_old_widget'],
                'promo_widget' => [$this, 'block_promo_widget'],
                'switcher_widget' => [$this, 'block_switcher_widget'],
                'low_stock_notification_widget' => [$this, 'block_low_stock_notification_widget'],
                'datepicker_widget' => [$this, 'block_datepicker_widget'],
                'caption_widget' => [$this, 'block_caption_widget'],
                'symbol_widget' => [$this, 'block_symbol_widget'],
                'dimensions_widget' => [$this, 'block_dimensions_widget'],
                'clean_url_widget' => [$this, 'block_clean_url_widget'],
                'uploader_widget' => [$this, 'block_uploader_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 8
        echo "
    ";
        // line 9
        $this->displayBlock('form_end', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('form_row', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('form_input_wrapper', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('form_row_class', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('form_label', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('form_errors', $context, $blocks);
        // line 118
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 124
        $this->displayBlock('widget_validation', $context, $blocks);
        // line 134
        echo "
";
        // line 135
        $this->displayBlock('base_field_set_row', $context, $blocks);
        // line 144
        echo "
";
        // line 145
        $this->displayBlock('base_field_set_label', $context, $blocks);
        // line 162
        $this->displayBlock('base_field_set_label_attributes', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        $this->displayBlock('base_composite_widget', $context, $blocks);
        // line 181
        echo "
";
        // line 183
        $this->displayBlock('old_widget', $context, $blocks);
        // line 187
        echo "
";
        // line 189
        $this->displayBlock('promo_widget', $context, $blocks);
        // line 193
        echo "
";
        // line 196
        $this->displayBlock('switcher_widget', $context, $blocks);
        // line 216
        echo "
";
        // line 219
        $this->displayBlock('low_stock_notification_widget', $context, $blocks);
        // line 224
        echo "
";
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('datepicker_widget', $context, $blocks);
        // line 234
        echo "
";
        // line 236
        echo "
";
        // line 238
        echo "
";
        // line 239
        $this->displayBlock('caption_widget', $context, $blocks);
        // line 242
        echo "
";
        // line 244
        echo "
";
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('symbol_widget', $context, $blocks);
        // line 262
        echo "
";
        // line 264
        echo "
";
        // line 266
        $this->displayBlock('dimensions_widget', $context, $blocks);
        // line 274
        echo "
";
        // line 276
        $this->displayBlock('clean_url_widget', $context, $blocks);
        // line 334
        echo "
";
        // line 336
        echo "
";
        // line 337
        $this->displayBlock('uploader_widget', $context, $blocks);
        // line 340
        echo "
";
    }

    // line 3
    public function block_form_start($context, array $blocks = [])
    {
        // line 4
        echo "<xlite-form-model inline-template :form=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["data_object"] ?? null), "html", null, true);
        echo "\" :original=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["view_object"] ?? null), "html", null, true);
        echo "\">";
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 6
        echo "<validator name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "\">";
    }

    // line 9
    public function block_form_end($context, array $blocks = [])
    {
        // line 10
        echo "  </validator>
  </form>
</xlite-form-model>
";
    }

    // line 15
    public function block_form_row($context, array $blocks = [])
    {
        // line 16
        ob_start();
        // line 17
        echo "    <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        // line 18
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\"
        ";
        // line 19
        if ((twig_length_filter($this->env, ($context["v_validators"] ?? null)) > 0)) {
            echo " v-bind:class=\"";
            echo "{";
            echo " 'has-error': ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_validator"] ?? null), "html", null, true);
            echo ".invalid && ( ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_form"] ?? null), "html", null, true);
            echo ".submitted || ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_validator"] ?? null), "html", null, true);
            echo ".dirty ) ";
            echo "}";
            echo "\" ";
        }
        // line 20
        echo "        ";
        if ((twig_length_filter($this->env, ($context["v_show"] ?? null)) > 0)) {
            echo " v-show=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_show"] ?? null), "html", null, true);
            echo "\" ";
        }
        // line 21
        echo "    >

      ";
        // line 23
        if (($context["show_label_block"] ?? null)) {
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        }
        // line 24
        echo "
      <div class=\"input-widget ";
        // line 25
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
        ";
        // line 26
        $this->displayBlock("form_input_wrapper", $context, $blocks);
        echo "

        ";
        // line 28
        if ( !twig_test_empty(($context["description"] ?? null))) {
            // line 29
            echo "          <span class=\"help-block";
            // line 30
            if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
                echo " hide";
            }
            echo "\"
              ";
            // line 31
            if ((twig_length_filter($this->env, ($context["v_validators"] ?? null)) > 0)) {
                echo " v-bind:class=\"";
                echo "{";
                echo "'hide': ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_validator"] ?? null), "html", null, true);
                echo ".invalid ";
                echo "}";
                echo "\" ";
            }
            // line 32
            echo "          >";
            echo ($context["description"] ?? null);
            echo "</span>
        ";
        }
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 36
        echo "</div>

    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 42
    public function block_form_input_wrapper($context, array $blocks = [])
    {
        // line 43
        echo "  <div class=\"input-wrapper\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 45
        if ( !twig_test_empty(($context["help"] ?? null))) {
            // line 46
            echo "<div class=\"help-wrapper\">
        ";
            // line 47
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "text" => ($context["help"] ?? null)]]), "html", null, true);
            echo "
      </div>";
        }
        // line 50
        echo "  </div>
";
    }

    // line 53
    public function block_checkbox_radio_row($context, array $blocks = [])
    {
        // line 54
        ob_start();
        // line 55
        echo "    <div class=\"";
        $this->displayBlock("form_row_class", $context, $blocks);
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\"
        ";
        // line 56
        if ((twig_length_filter($this->env, ($context["v_show"] ?? null)) > 0)) {
            echo " v-show=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_show"] ?? null), "html", null, true);
            echo "\" ";
        }
        // line 57
        echo "    >
      ";
        // line 58
        if (($context["show_label_block"] ?? null)) {
            // line 59
            echo "      <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        }
        // line 60
        echo "      <div class=\"input-widget ";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
      </div>
    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 68
    public function block_form_row_class($context, array $blocks = [])
    {
        // line 69
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["form_row_class"] ?? null), "html", null, true);
    }

    // line 72
    public function block_form_group_class($context, array $blocks = [])
    {
        // line 73
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["input_grid"] ?? null), "html", null, true);
    }

    // line 76
    public function block_form_label($context, array $blocks = [])
    {
        // line 77
        ob_start();
        // line 78
        echo "    <div class=\"control-label\">
      ";
        // line 79
        $this->displayParentBlock("form_label", $context, $blocks);
        echo "
      ";
        // line 80
        if ( !twig_test_empty(($context["label_description"] ?? null))) {
            // line 81
            echo "        <span class=\"help-block\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["label_description"] ?? null), "html", null, true);
            echo "</span>
      ";
        }
        // line 83
        echo "    </div>
  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 87
    public function block_form_label_class($context, array $blocks = [])
    {
    }

    // line 90
    public function block_form_errors($context, array $blocks = [])
    {
        // line 91
        if ( !$this->getAttribute(($context["form"] ?? null), "parent", [])) {
            // line 92
            echo "    ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 93
                echo "<div class=\"alert alert-danger\">
        <ul class=\"list-unstyled\">";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 96
                    echo "<li v-xlite-backend-validator=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_model"] ?? null), "html", null, true);
                    echo "\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                echo "</ul>
      </div>
    ";
            }
            // line 101
            echo "  ";
        } else {
            // line 102
            echo "    ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 103
                echo "      <div class=\"help-block\">
        <ul class=\"list-unstyled\">";
                // line 105
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 106
                    echo "<li v-xlite-backend-validator=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_model"] ?? null), "html", null, true);
                    echo "\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["v_validators"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["validator"]) {
                    // line 109
                    echo "<li v-if=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["validator"], "html", null, true);
                    echo "\" v-text=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["validator"], "html", null, true);
                    echo "\"></li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['validator'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "</ul>
      </div>
    ";
            }
            // line 114
            echo "  ";
        }
    }

    // line 118
    public function block_widget_attributes($context, array $blocks = [])
    {
        // line 119
        if ( !twig_test_empty(($context["v_model"] ?? null))) {
            echo "v-model=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_model"] ?? null), "html", null, true);
            echo "\"";
        }
        // line 120
        echo "  ";
        $this->displayBlock("widget_validation", $context, $blocks);
        // line 121
        $this->displayParentBlock("widget_attributes", $context, $blocks);
    }

    // line 124
    public function block_widget_validation($context, array $blocks = [])
    {
        // line 125
        if ( !twig_test_empty(($context["v_validate"] ?? null))) {
            // line 126
            echo "    initial=\"off\" v-validate:";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_validate_path"] ?? null), "html", null, true);
            echo "=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_validate"] ?? null), "html", null, true);
            echo "\"
  ";
        }
        // line 128
        echo "  ";
        if ( !twig_test_empty(($context["v_validate_trigger"] ?? null))) {
            // line 129
            echo "    v-xlite-validate-trigger=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_validate_trigger"] ?? null), "html", null, true);
            echo "\"
  ";
        }
    }

    // line 135
    public function block_base_field_set_row($context, array $blocks = [])
    {
        // line 136
        echo "  <fieldset class=\"";
        if (((((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false)) &&  !($context["valid"] ?? null))) {
            echo "has-error";
        }
        echo "\">
    ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo "
    <div ";
        // line 138
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
      ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
      ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
    </div>
  </fieldset>
";
    }

    // line 145
    public function block_base_field_set_label($context, array $blocks = [])
    {
        // line 146
        echo "  <legend>
    ";
        // line 147
        if ( !twig_test_empty(($context["label"] ?? null))) {
            // line 148
            echo "      <h2 ";
            $this->displayBlock("base_field_set_label_attributes", $context, $blocks);
            echo ">";
            // line 149
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            // line 150
            if ( !twig_test_empty(($context["help"] ?? null))) {
                // line 151
                echo "<div class=\"help-wrapper\">
            ";
                // line 152
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "text" => ($context["help"] ?? null)]]), "html", null, true);
                echo "
          </div>";
            }
            // line 155
            echo "        ";
            if (($context["collapse"] ?? null)) {
                echo "<i class=\"fa fa-chevron-down\" aria-hidden=\"true\"></i>";
            }
            // line 156
            echo "      </h2>
      ";
            // line 157
            if ( !twig_test_empty(($context["description"] ?? null))) {
                echo "<span class=\"help-block\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["description"] ?? null), "html", null, true);
                echo "</span>";
            }
            // line 158
            echo "    ";
        }
        // line 159
        echo "  </legend>
";
    }

    // line 162
    public function block_base_field_set_label_attributes($context, array $blocks = [])
    {
        // line 163
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["title_attr"] ?? null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 164
            echo " ";
            // line 165
            if (($context["attrvalue"] === true)) {
                // line 166
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 167
$context["attrvalue"] === false)) {
                // line 168
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 176
    public function block_base_composite_widget($context, array $blocks = [])
    {
        // line 177
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-inline"))]);
        // line 178
        $this->displayBlock("form_widget_compound", $context, $blocks);
    }

    // line 183
    public function block_old_widget($context, array $blocks = [])
    {
        // line 184
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => ($context["fieldClass"] ?? null), 1 => ($context["fieldOptions"] ?? null)]]), "html", null, true);
    }

    // line 189
    public function block_promo_widget($context, array $blocks = [])
    {
        // line 190
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\SimplePromoBlock", "promoId" => ($context["promoId"] ?? null)]]), "html", null, true);
    }

    // line 196
    public function block_switcher_widget($context, array $blocks = [])
    {
        // line 197
        echo "<div class=\"onoffswitch\">
    ";
        // line 198
        if (($context["disabled"] ?? null)) {
            // line 199
            echo "      <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"/>
    ";
        } else {
            // line 201
            echo "      ";
            // line 202
            echo "    ";
        }
        // line 203
        echo "    <input
        type=\"checkbox\" ";
        // line 204
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["value"]) || array_key_exists("value", $context))) {
            echo " value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"";
        }
        if (($context["checked"] ?? null)) {
            echo " checked=\"checked\"";
        }
        echo " />
    <label for=\"";
        // line 205
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
      <div class=\"onoffswitch-inner\">
        <div class=\"on-caption\">";
        // line 207
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [($context["on_caption"] ?? null)]), "html", null, true);
        echo "</div>
        <div class=\"off-caption\">";
        // line 208
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [($context["off_caption"] ?? null)]), "html", null, true);
        echo "</div>
      </div>
      <span class=\"onoffswitch-switch\"></span>
    </label>
  </div>";
    }

    // line 219
    public function block_low_stock_notification_widget($context, array $blocks = [])
    {
        // line 220
        $this->displayBlock("switcher_widget", $context, $blocks);
    }

    // line 227
    public function block_datepicker_widget($context, array $blocks = [])
    {
        // line 228
        echo "<div class=\"input-group\">
    <span class=\"input-group-addon\"><i class=\"fa fa-calendar\" aria-hidden=\"true\"></i></span>
    <input type=\"hidden\" class=\"datepicker-value-input\" name=\"";
        // line 230
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["full_name"] ?? null), "html", null, true);
        echo "\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\">";
        // line 231
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 232
        echo "</div>";
    }

    // line 239
    public function block_caption_widget($context, array $blocks = [])
    {
        // line 240
        echo "<div class=\"caption\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["caption"] ?? null), "html", null, true);
        echo "</div>";
    }

    // line 247
    public function block_symbol_widget($context, array $blocks = [])
    {
        // line 248
        if ((($context["left_symbol"] ?? null) || ($context["right_symbol"] ?? null))) {
            // line 249
            echo "    <div class=\"input-group\">
      ";
            // line 250
            if ( !twig_test_empty(($context["left_symbol"] ?? null))) {
                // line 251
                echo "        <span class=\"input-group-addon\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["left_symbol"] ?? null), "html", null, true);
                echo "</span>
      ";
            }
            // line 253
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 254
            if ( !twig_test_empty(($context["right_symbol"] ?? null))) {
                // line 255
                echo "        <span class=\"input-group-addon\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["right_symbol"] ?? null), "html", null, true);
                echo "</span>
      ";
            }
            // line 257
            echo "    </div>
  ";
        } else {
            // line 259
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 266
    public function block_dimensions_widget($context, array $blocks = [])
    {
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "length", []), 'widget');
        echo "
    <span class=\"separator\">&#215;</span>
    ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "width", []), 'widget');
        echo "
    <span class=\"separator\">&#215;</span>
    ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "height", []), 'widget');
    }

    // line 276
    public function block_clean_url_widget($context, array $blocks = [])
    {
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "clean_url", []), 'row');
        echo "

  ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "clean_url_ext", []), 'row');
        echo "

  ";
        // line 282
        if (($context["hasForcibleConflict"] ?? null)) {
            // line 283
            echo "    <div class=\"clean-url-conflict help-block not-padded\" v-show=\"!isCleanUrlAutogenerate()\">
      <div class=\"clean-url-force\">
        ";
            // line 285
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "force", []), 'row');
            echo "
      </div>
      <div class=\"clean-url-force\">
        ";
            // line 288
            echo ($context["errorMessage"] ?? null);
            echo "
        ";
            // line 289
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\ToolTip", "text" => ($context["resolveHint"] ?? null), "caption" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Resolve the conflict"]), "isImageTag" => "false", "className" => "help-icon"]]), "html", null, true);
            echo "
      </div>
    </div>
  ";
        } elseif (        // line 292
($context["hasUnForcibleConflict"] ?? null)) {
            // line 293
            echo "    <div class=\"clean-url-conflict help-block not-padded\" v-show=\"!isCleanUrlAutogenerate()\">
      <div class=\"clean-url-force\">
        ";
            // line 295
            echo ($context["errorMessage"] ?? null);
            echo "
        ";
            // line 296
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\ToolTip", "text" => ($context["resolveHint"] ?? null), "caption" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Resolve the conflict"]), "isImageTag" => "false", "className" => "help-icon"]]), "html", null, true);
            echo "
      </div>
    </div>
  ";
        } elseif (        // line 299
($context["errorMessage"] ?? null)) {
            // line 300
            echo "    <div class=\"clean-url-conflict help-block not-padded\" v-show=\"!isCleanUrlAutogenerate()\">
      <div class=\"clean-url-force\">
        ";
            // line 302
            echo ($context["errorMessage"] ?? null);
            echo "
      </div>
    </div>
  ";
        }
        // line 306
        echo "
  ";
        // line 307
        if (($context["disabled"] ?? null)) {
            // line 308
            echo "    <div class=\"clean-url-disabled-info help-block not-padded\">
      ";
            // line 309
            echo ($context["disabledComment"] ?? null);
            echo "
    </div>
  ";
        }
        // line 312
        echo "
  <div class=\"clean-url-result help-block not-padded\"
       v-xlite-clean-url=\"";
        // line 314
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_model"] ?? null), "html", null, true);
        echo "\"
       clean-url-template=\"";
        // line 315
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["cleanUrlTemplate"] ?? null), "html", null, true);
        echo "\"
       clean-url-saved-value=\"";
        // line 316
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["savedValue"] ?? null), "html", null, true);
        echo "\"
       clean-url-extension=\"";
        // line 317
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["extension"] ?? null), "html", null, true);
        echo "\">
    <div class=\"clean-url-result-info\" v-show=\"!isCleanUrlAutogenerate()\">
      <span class=\"result-label\">";
        // line 319
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Result"]), "html", null, true);
        echo ": </span>
      ";
        // line 320
        if (($context["disabled"] ?? null)) {
            // line 321
            echo "        <span class=\"saved\" v-show=\"!isCleanURLChanged()\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["cleanUrl"] ?? null), "html", null, true);
            echo "</span>
      ";
        } else {
            // line 323
            echo "        <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["cleanUrl"] ?? null), "html", null, true);
            echo "\" target=\"_blank\" class=\"saved\" v-show=\"!isCleanURLChanged()\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["cleanUrl"] ?? null), "html", null, true);
            echo "</a>
      ";
        }
        // line 325
        echo "      <span class=\"calculated\" v-show=\"isCleanURLChanged()\">";
        echo "{{{";
        echo "getCleanURLResult()";
        echo "}}}";
        echo "</span>
    </div>
    <div class=\"clean-url-result-info\" v-else>";
        // line 327
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["The clean URL will be generated automatically."]), "html", null, true);
        echo "</div>
  </div>

  ";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "autogenerate", []), 'row');
    }

    // line 337
    public function block_uploader_widget($context, array $blocks = [])
    {
        // line 338
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => ($context["uploaderClass"] ?? null), 1 => ($context["options"] ?? null)]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "form_model/theme.twig";
    }

    public function getDebugInfo()
    {
        return array (  962 => 338,  959 => 337,  955 => 330,  949 => 327,  941 => 325,  933 => 323,  927 => 321,  925 => 320,  921 => 319,  916 => 317,  912 => 316,  908 => 315,  904 => 314,  900 => 312,  894 => 309,  891 => 308,  889 => 307,  886 => 306,  879 => 302,  875 => 300,  873 => 299,  867 => 296,  863 => 295,  859 => 293,  857 => 292,  851 => 289,  847 => 288,  841 => 285,  837 => 283,  835 => 282,  830 => 280,  825 => 278,  822 => 276,  818 => 271,  813 => 269,  808 => 267,  805 => 266,  800 => 259,  796 => 257,  790 => 255,  788 => 254,  786 => 253,  780 => 251,  778 => 250,  775 => 249,  773 => 248,  770 => 247,  764 => 240,  761 => 239,  757 => 232,  755 => 231,  750 => 230,  746 => 228,  743 => 227,  739 => 220,  736 => 219,  727 => 208,  723 => 207,  718 => 205,  706 => 204,  703 => 203,  700 => 202,  698 => 201,  690 => 199,  688 => 198,  685 => 197,  682 => 196,  678 => 190,  675 => 189,  671 => 184,  668 => 183,  664 => 178,  662 => 177,  659 => 176,  647 => 168,  645 => 167,  640 => 166,  638 => 165,  636 => 164,  632 => 163,  629 => 162,  624 => 159,  621 => 158,  615 => 157,  612 => 156,  607 => 155,  602 => 152,  599 => 151,  597 => 150,  595 => 149,  591 => 148,  589 => 147,  586 => 146,  583 => 145,  575 => 140,  571 => 139,  567 => 138,  563 => 137,  556 => 136,  553 => 135,  545 => 129,  542 => 128,  534 => 126,  532 => 125,  529 => 124,  525 => 121,  522 => 120,  516 => 119,  513 => 118,  508 => 114,  503 => 111,  493 => 109,  489 => 108,  479 => 106,  475 => 105,  472 => 103,  469 => 102,  466 => 101,  461 => 98,  451 => 96,  447 => 95,  444 => 93,  441 => 92,  439 => 91,  436 => 90,  431 => 87,  425 => 83,  419 => 81,  417 => 80,  413 => 79,  410 => 78,  408 => 77,  405 => 76,  401 => 73,  398 => 72,  394 => 69,  391 => 68,  382 => 62,  378 => 61,  373 => 60,  368 => 59,  366 => 58,  363 => 57,  357 => 56,  349 => 55,  347 => 54,  344 => 53,  339 => 50,  334 => 47,  331 => 46,  329 => 45,  327 => 44,  325 => 43,  322 => 42,  314 => 36,  312 => 35,  306 => 32,  296 => 31,  290 => 30,  288 => 29,  286 => 28,  281 => 26,  277 => 25,  274 => 24,  270 => 23,  266 => 21,  259 => 20,  245 => 19,  239 => 18,  236 => 17,  234 => 16,  231 => 15,  224 => 10,  221 => 9,  215 => 6,  213 => 5,  207 => 4,  204 => 3,  199 => 340,  197 => 337,  194 => 336,  191 => 334,  189 => 276,  186 => 274,  184 => 266,  181 => 264,  178 => 262,  176 => 247,  173 => 246,  170 => 244,  167 => 242,  165 => 239,  162 => 238,  159 => 236,  156 => 234,  154 => 227,  151 => 226,  148 => 224,  146 => 219,  143 => 216,  141 => 196,  138 => 193,  136 => 189,  133 => 187,  131 => 183,  128 => 181,  126 => 176,  123 => 174,  121 => 162,  119 => 145,  116 => 144,  114 => 135,  111 => 134,  109 => 124,  107 => 118,  105 => 90,  102 => 89,  100 => 87,  97 => 86,  95 => 76,  92 => 75,  90 => 72,  87 => 71,  85 => 68,  82 => 67,  80 => 53,  77 => 52,  75 => 42,  72 => 41,  70 => 15,  67 => 14,  65 => 9,  62 => 8,  60 => 3,  57 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_model/theme.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_model\\theme.twig");
    }
}
