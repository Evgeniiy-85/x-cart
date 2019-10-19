<?php

/* layout/header/header_settings/email.twig */
class __TwigTemplate_742a7781d2baf8bad699bfaf1269260e7e18f4760014475480f579ec862f1567 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute(($context["this"] ?? null), "isLogged", [], "method") && $this->getAttribute(($context["this"] ?? null), "getProfileLogin", [], "method"))) {
            // line 8
            echo "\t<ul class='quick-links'>
\t\t<li class=\"account-email\">
\t\t\t<span>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProfileLogin", [], "method"), "html", null, true);
            echo "</span>
\t\t</li>
\t</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header_settings/email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/header_settings/email.twig", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/email.twig");
    }
}
