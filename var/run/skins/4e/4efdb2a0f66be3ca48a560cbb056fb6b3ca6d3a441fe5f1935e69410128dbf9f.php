<?php

/* E:\Server\projects\x-cart\skins\admin\items_list\model\table\countries\parts\cell.states.twig */
class __TwigTemplate_2456a072c9c7a6eb8d42424542bc98397d93f389a858bd0c26440003b706f191 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "hasStates", [], "method")) {
            // line 8
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "states", "", ["country_code" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getCode", [], "method")]]), "html", null, true);
            echo "\" class=\"country-states\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Click to edit states"]), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Edit states (X)", ["count" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getStatesCount", [], "method")]]), "html", null, true);
            echo "</a>
";
        }
        // line 10
        echo "
";
        // line 11
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "hasStates", [], "method")) {
            // line 12
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "states", "", ["country_code" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getCode", [], "method")]]), "html", null, true);
            echo "\" class=\"country-states no-states\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Click to add states"]), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add states"]), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\countries\\parts\\cell.states.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  37 => 11,  34 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\countries\\parts\\cell.states.twig", "");
    }
}
