<?php

/* items_list/model/table/parts/create.twig */
class __TwigTemplate_a67f3554efd07d701a7d51f339b1bd86e0c05e13ce386f26dd64fd87fb6b6554 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getCreateButtonLabel", [], "method")]), "location" => $this->getAttribute(($context["this"] ?? null), "getCreateURL", [], "method")]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/create.twig";
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
        return new Twig_Source("", "items_list/model/table/parts/create.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\parts\\create.twig");
    }
}
