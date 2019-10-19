<?php

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/locale/currency.twig */
class __TwigTemplate_e5fac7d6ea9e48af141ee3909a68cbf4165bdb6303468c4f82cc71b918a36b58 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute(($context["this"] ?? null), "isCurrencySelectorAvailable", [], "method") && $this->getAttribute(($context["this"] ?? null), "getCurrentCurrency", [], "method"))) {
            // line 8
            echo "<span class='currency-indicator'>
\t";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "getCurrentCurrency", [], "method"), "getCode", [], "method"), "html", null, true);
            echo "
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/locale/currency.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/locale/currency.twig", "");
    }
}
