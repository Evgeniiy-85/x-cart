<?php

/* promo.twig */
class __TwigTemplate_1e934d183fc97bcfb3294ede45b1566576361c698bda1e6ef2b6c47dfaf78f93 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "isPromoBlockVisible", [0 => $this->getAttribute(($context["this"] ?? null), "promoId", [])], "method")) {
            // line 6
            echo "  <div class=\"promo-block ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "promoId", []), "html", null, true);
            echo "-promo ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "additionalClasses", []), "html", null, true);
            echo "\" data-promo-id=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "promoId", []), "html", null, true);
            echo "\">
    <div class=\"promo-content\">";
            // line 7
            echo $this->getAttribute(($context["this"] ?? null), "promoContent", []);
            echo "</div>
    <div class=\"close\">";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displaySVGImage", [0 => "images/icon-close-round.svg"], "method"), "html", null, true);
            echo "</div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "promo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "promo.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\promo.twig");
    }
}
