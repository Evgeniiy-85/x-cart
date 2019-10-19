<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/items_list/product/parts/common.field-select-product.twig */
class __TwigTemplate_3a642c3e9abfa7b58ae1150b10d11bb65e66e8ec4a90a414959c834dd8ec983d extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 6
        echo "<!--input type=\"checkbox\" name=\"select_{product.product_id}\" value=\"{product.product_id}\" class=\"selected-productid-{product.product_id}\" /-->
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/items_list/product/parts/common.field-select-product.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/items_list/product/parts/common.field-select-product.twig", "");
    }
}
