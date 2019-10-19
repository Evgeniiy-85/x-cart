<?php

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.logout.twig */
class __TwigTemplate_fe9cd7a89fa1c8a888f3c8e7b2f7c7dcf002b8e78f08b1c6e0bb8ff503ffda50 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"separator\"><hr /></li>
<li class=\"account-link-logoff\">
\t<a href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "login", "logoff"]), "html", null, true);
        echo "\" class=\"log-off icon-logout\">
\t\t<span>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Log out"]), "html", null, true);
        echo "</span>
\t</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.logout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.logout.twig", "");
    }
}
