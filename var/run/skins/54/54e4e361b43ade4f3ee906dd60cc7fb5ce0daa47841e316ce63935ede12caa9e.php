<?php

/* footer/right/site.twig */
class __TwigTemplate_2226cc6b83fa9ad91540766d0acdd08ac4efbcb0eebc83e9d0e9fa20c763277e extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "auth", []), "isAdmin", [], "method")) {
            // line 7
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getXCartURL", [], "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Official website"]), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "footer/right/site.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "footer/right/site.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\footer\\right\\site.twig");
    }
}
