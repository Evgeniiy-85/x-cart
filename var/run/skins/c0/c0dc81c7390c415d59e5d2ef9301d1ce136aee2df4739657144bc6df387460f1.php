<?php

/* E:\Server\projects\x-cart\skins\customer\modules\XC\NextPreviousProduct\product\parts\body.cookie_data.twig */
class __TwigTemplate_2bcffda16a355ac54797c6d5dd7bcd452c93360d00e880be4acf95bb1807ee2a extends \XLite\Core\Templating\Twig\Template
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
<div style=\"display: none;\" class=\"next-previous-cookie-data\" data-xc-product-id=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getProductId", [], "method"), "html", null, true);
        echo "\"    data-xc-next-previous=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "dataString", []), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\NextPreviousProduct\\product\\parts\\body.cookie_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\NextPreviousProduct\\product\\parts\\body.cookie_data.twig", "");
    }
}
