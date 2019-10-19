<?php

/* modules/XC/NextPreviousProduct/items-list/cookie-data.twig */
class __TwigTemplate_71b250333da3ba0f589889a12a187dc384627da1c783df2a1451b48f548c2250 extends \XLite\Core\Templating\Twig\Template
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
        // line 13
        echo "
<div
  style=\"display: none;\"
  class=\"next-previous-cookie-data\"
  data-xc-product-id=\"";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getProductId", [], "method"), "html", null, true);
        echo "\"
  data-xc-next-previous=\"";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDataString", [], "method"), "html", null, true);
        echo "\">
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NextPreviousProduct/items-list/cookie-data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 18,  25 => 17,  19 => 13,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/NextPreviousProduct/items-list/cookie-data.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\NextPreviousProduct\\items-list\\cookie-data.twig");
    }
}
