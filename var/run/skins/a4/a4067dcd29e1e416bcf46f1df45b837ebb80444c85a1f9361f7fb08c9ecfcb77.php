<?php

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.email.twig */
class __TwigTemplate_bfe178204d1e563e3aa6f5909ed0418c08082de866d7eb26fb862e5466894fac extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getProfileLogin", [], "method")) {
            // line 8
            echo "\t<li class=\"account-email\">
\t\t<span>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProfileLogin", [], "method"), "html", null, true);
            echo "</span>
\t</li>
\t<li class=\"separator\"><hr /></li>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.email.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.email.twig", "");
    }
}
