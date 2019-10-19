<?php

/* items_list/model/table/parts/switcher.twig */
class __TwigTemplate_271d75d0747090bdd4bdd8bf3b750977c01fa2c6bfa9bfc97cbcdac2097a78b2 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isAllowEntitySwitch", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "switcherField", []), "class", []), "idx" => $this->getAttribute(($context["this"] ?? null), "idx", []), "entity" => $this->getAttribute(($context["this"] ?? null), "entity", []), "column" => $this->getAttribute(($context["this"] ?? null), "column", []), "itemsList" => $this->getAttribute(($context["this"] ?? null), "getSelf", [], "method"), "fieldName" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "switcherField", []), "name", []), "fieldParams" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "switcherField", []), "params", [])]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/parts/switcher.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\parts\\switcher.twig");
    }
}
