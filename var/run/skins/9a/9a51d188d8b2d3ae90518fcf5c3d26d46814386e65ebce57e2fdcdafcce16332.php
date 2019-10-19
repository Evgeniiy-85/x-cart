<?php

/* modules/XC/ProductComparison/header_settings_link.twig */
class __TwigTemplate_abf6003a999ce40ab46546b6ba9c30fc71b1ebfd65538f334c2b76e8aa030dd9 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<li class=\"account-link-compare compare-indicator ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getIndicatorClasses", [], "method"), "html", null, true);
        echo "\">
  <a ";
        // line 6
        if ( !$this->getAttribute(($context["this"] ?? null), "isDisabled", [], "method")) {
            echo "href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCompareURL", [], "method"), "html", null, true);
            echo "\"";
        }
        echo " data-target=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCompareURL", [], "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLinkHelpMessage", [], "method"), "html", null, true);
        echo "\">
\t<span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Compare"]), "html", null, true);
        echo "</span>
\t<span class=\"counter\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ((($this->getAttribute(($context["this"] ?? null), "getComparedCount", [], "method") > 0)) ? ($this->getAttribute(($context["this"] ?? null), "getComparedCount", [], "method")) : ("")), "html", null, true);
        echo "</span>
  </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/ProductComparison/header_settings_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  38 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/ProductComparison/header_settings_link.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\modules\\XC\\ProductComparison\\header_settings_link.twig");
    }
}
