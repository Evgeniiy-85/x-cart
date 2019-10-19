<?php

/* modules/XC/ProductComparison/header_indicator.twig */
class __TwigTemplate_b07aea5d2f8cf9ee47110f5eedbab50bd587263273ef5cf77ebe364158805b15 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<div class=\"header_product-comparison compare-indicator ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getIndicatorClasses", [], "method"), "html", null, true);
        echo "\">
\t<a ";
        // line 2
        if ( !($context["disabled"] ?? null)) {
            echo "href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCompareURL", [], "method"), "html", null, true);
            echo "\" ";
        }
        echo " data-target=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCompareURL", [], "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLinkHelpMessage", [], "method"), "html", null, true);
        echo "\">
\t\t<span class=\"counter\">";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getComparedCount", [], "method"), "html", null, true);
        echo "</span>
\t</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/ProductComparison/header_indicator.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/ProductComparison/header_indicator.twig", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/modules/XC/ProductComparison/header_indicator.twig");
    }
}
