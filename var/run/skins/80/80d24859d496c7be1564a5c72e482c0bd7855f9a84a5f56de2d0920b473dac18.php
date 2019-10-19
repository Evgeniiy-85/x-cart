<?php

/* cache_management_actions/cell/action.twig */
class __TwigTemplate_42051c3d97136173045f5708672541304aadff05aad75246e0c7aa7b4ec528d6 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "column", []), "value", []), 1 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "viewParams", [])]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "cache_management_actions/cell/action.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
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
 # Action button
 #}

{{ widget(this.column.value, this.entity.viewParams) }}", "cache_management_actions/cell/action.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\cache_management_actions\\cell\\action.twig");
    }
}
