<?php

/* items_list/product/parts/out-of-stock.label.twig */
class __TwigTemplate_5d3d359fe4e34e08ac2a8f2a17d2c513b3d8bbe8ec2811970bf2012e4e69522e extends \XLite\Core\Templating\Twig\Template
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
        echo "
 ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "isShowOutOfStockWarning", [], "method")) {
            // line 9
            echo " <span class=\"product-items-available out-of-stock\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Out of stock"]), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/out-of-stock.label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/product/parts/out-of-stock.label.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\items_list\\product\\parts\\out-of-stock.label.twig");
    }
}
