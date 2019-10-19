<?php

/* modules/XC/Reviews/product.items_list.rating.twig */
class __TwigTemplate_a6fd7e947518010975c1cf8fcba48b037ebbf0683f4ff493a8dad351d02fe4ce extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\ItemsList\\AverageRating", "productId" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "id", []), "widgetMode" => $this->getAttribute(($context["this"] ?? null), "getDisplayMode", [], "method")]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/product.items_list.rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Reviews/product.items_list.rating.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\Reviews\\product.items_list.rating.twig");
    }
}
