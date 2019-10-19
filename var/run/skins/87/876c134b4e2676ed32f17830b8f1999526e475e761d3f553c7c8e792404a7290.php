<?php

/* top_links/version_notes/parts/core.twig */
class __TwigTemplate_cf2c77a7bb3c55fe6c499def586c34276a8baae7b2d4e469eff693e4f6213f57 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"version\"><div>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["X-Cart"]), "html", null, true);
        echo "</div><div>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEditionName", [], "method"), "html", null, true);
        echo "&nbsp;";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCurrentCoreVersion", [], "method"), "html", null, true);
        echo "</div></div>
";
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/core.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # \"Core version\" info
 #}
<div class=\"version\"><div>{{ t('X-Cart') }}</div><div>{{ this.getEditionName() }}&nbsp;{{ this.getCurrentCoreVersion() }}</div></div>
", "top_links/version_notes/parts/core.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\top_links\\version_notes\\parts\\core.twig");
    }
}
