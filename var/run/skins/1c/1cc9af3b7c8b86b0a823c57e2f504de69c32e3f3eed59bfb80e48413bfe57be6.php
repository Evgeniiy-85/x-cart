<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/FacebookMarketing/items_list/product/parts/facebook_product_sku.twig */
class __TwigTemplate_1ad2c655e17c54fcddb6c4a31c6842e48625882e61dcdb029da5be23d18ab8f5 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "<input type=\"hidden\" name=\"facebook_pixel_sku\" class=\"facebook-pixel-sku-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "getProduct", [], "method"), "getId", [], "method"), "html", null, true);
        echo "\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFacebookPixelProductSku", [], "method"), "html", null, true);
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/FacebookMarketing/items_list/product/parts/facebook_product_sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/FacebookMarketing/items_list/product/parts/facebook_product_sku.twig", "");
    }
}
