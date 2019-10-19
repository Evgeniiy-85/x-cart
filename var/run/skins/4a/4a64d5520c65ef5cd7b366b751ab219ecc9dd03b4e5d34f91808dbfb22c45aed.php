<?php

/* layout/header/header_settings/logout.twig */
class __TwigTemplate_c571cd51ae1625492f6571074b9f975dea5dc249c6829e10ccb0144f2faa2a6b extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isLogged", [], "method")) {
            // line 9
            echo "\t<ul class='quick-links'>
\t\t<li class=\"account-link-logoff\">
\t\t\t<a href=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "login", "logoff"]), "html", null, true);
            echo "\" class=\"log-off icon-logout\">
\t\t\t\t<span>";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Log out"]), "html", null, true);
            echo "</span>
\t\t\t</a>
\t\t</li>
\t</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header_settings/logout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/header_settings/logout.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\header_settings\\logout.twig");
    }
}
