<?php

/* E:\Server\projects\x-cart\skins\customer\modules\XC\ThemeTweaker\themetweaker_panel\panel\tabs.custom_css.twig */
class __TwigTemplate_4e7fa9939310fc931582598db72878928103fed19e0e2823074039b6ac42f202 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab", "svg" => "modules/XC/ThemeTweaker/themetweaker_panel/icons/code.svg", "label" => "Custom CSS", "style" => ("themetweaker-tab themetweaker-tab_custom_css " . $this->getAttribute(        // line 10
($context["this"] ?? null), "getTabClass", [0 => "custom_css"], "method")), "disabled" =>  !$this->getAttribute(        // line 11
($context["this"] ?? null), "isTabAvailable", [0 => "custom_css"], "method"), "disabledTooltip" => $this->getAttribute(        // line 12
($context["this"] ?? null), "getTabDisabledTooltip", [0 => "custom_css"], "method"), "attributes" => $this->getAttribute(        // line 13
($context["this"] ?? null), "getTabAttributes", [0 => "custom_css"], "method")]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel\\tabs.custom_css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 13,  25 => 12,  24 => 11,  23 => 10,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker_panel\\panel\\tabs.custom_css.twig", "");
    }
}
