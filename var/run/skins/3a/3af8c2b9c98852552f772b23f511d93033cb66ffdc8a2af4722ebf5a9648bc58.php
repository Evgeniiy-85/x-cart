<?php

/* E:\Server\projects\x-cart\skins\admin\zones\details\parts\field.state.twig */
class __TwigTemplate_21f1f0628e2e916089541105af1fb6fae571fd0378a6edb399ad4eb870cde08d extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Listbox\\State", "labelHelp" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["The countries to which the selected states belong will be added to the zone automatically."]), "fieldName" => "zone_states", "label" => "States", "labelFrom" => "All states", "labelTo" => "Selected states", "value" => $this->getAttribute($this->getAttribute(        // line 13
($context["this"] ?? null), "zone", []), "getZoneStates", [], "method"), "wrapperClass" => "zone-states"]]), "html", null, true);
        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\zones\\details\\parts\\field.state.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 14,  23 => 13,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\zones\\details\\parts\\field.state.twig", "");
    }
}
