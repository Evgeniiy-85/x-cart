<?php
namespace XLite\Module\CDev\Sale\View;
/**
 * Sale products block widget
 *
 * @ListChild (list="sidebar.first", zone="customer", weight="1000", name="main")
 * @ListChild (list="center.bottom", zone="customer", weight="350", preset="one", name="main")
 */
class SaleBlock extends \XLite\Module\XC\NextPreviousProduct\View\SaleBlock {}