<?php

/* items_list/model/table/parts/remove.twig */
class __TwigTemplate_24335c8b6077cbf72a44749a298e6b5d6d8e24abde9b3dcd11dec37c1b57251e extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isAllowEntityRemove", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Remove", "buttonName" => ((($this->getAttribute(            // line 7
($context["this"] ?? null), "getRemoveDataPrefix", [], "method") . "[") . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getUniqueIdentifier", [], "method")) . "]"), "isCrossIcon" => $this->getAttribute(            // line 8
($context["this"] ?? null), "isCrossIcon", [], "method")]]), "html", null, true);
            // line 9
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  27 => 8,  26 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/parts/remove.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\parts\\remove.twig");
    }
}
