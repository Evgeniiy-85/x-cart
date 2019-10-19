<?php

/* E:\Server\projects\x-cart\skins\customer\common\surcharge_parts\surcharge.twig */
class __TwigTemplate_4a50bd40083234cc728a802fcb55b1b9e08bbef17514738331d5d3f75d0a9287 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"surcharge-cell\">";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "formatPriceHTML", [0 => $this->getAttribute(($context["this"] ?? null), "getSurcharge", [], "method"), 1 => $this->getAttribute(($context["this"] ?? null), "getCurrency", [], "method"), 2 => 1], "method");
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\common\\surcharge_parts\\surcharge.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\common\\surcharge_parts\\surcharge.twig", "");
    }
}
