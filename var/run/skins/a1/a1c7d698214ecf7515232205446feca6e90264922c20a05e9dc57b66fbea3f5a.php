<?php

/* settings/base.twig */
class __TwigTemplate_3acf5831060b615594e370a3019ce27f843b88775d26f2b2873cf4aaa4ef79ed extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\SettingsDialog"]]), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "settings/base.twig";
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
 # Common tab
 #}
{{ widget('XLite\\\\View\\\\SettingsDialog') }}

", "settings/base.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\settings\\base.twig");
    }
}
