<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/Sale/sale_discount_types/parts/hidden_percent.twig */
class __TwigTemplate_3d6cb55d4ed75947b9f6be52037172ef7ced9fc184e5597eecbda9ff14d68d93 extends \XLite\Core\Templating\Twig\Template
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
        echo "
 ";
        // line 7
        if (($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "discountType"], "method") == twig_constant("XLite\\Model\\Product::SALE_DISCOUNT_TYPE_PERCENT"))) {
            // line 8
            echo "   <input type=\"hidden\"
     id=\"sale-price-value\"
     name=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getNamePostedData", [0 => "salePriceValue"], "method"), "html", null, true);
            echo "\"
     value=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPercentOffValue", [], "method"), "html", null, true);
            echo "\" />
 ";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/Sale/sale_discount_types/parts/hidden_percent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/Sale/sale_discount_types/parts/hidden_percent.twig", "");
    }
}