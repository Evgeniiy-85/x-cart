<?php

/* items_list/model/additional_buttons.twig */
class __TwigTemplate_0ca0edaa335384b14a6604c42ee459f42b72049a950aed0de000822bf20ca79b extends \XLite\Core\Templating\Twig\Template
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
<div class=\"additional-buttons\">
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayORLabel", [], "method")) {
            // line 7
            echo "    <div class=\"or\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["or"]), "html", null, true);
            echo "</div>
  ";
        }
        // line 9
        echo "
  <div class=\"btn-group\">
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAdditionalButtons", [], "method"));
        foreach ($context['_seq'] as $context["buttonName"] => $context["button"]) {
            // line 12
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["button"], "display", [], "method"), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['buttonName'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/additional_buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 14,  39 => 12,  35 => 11,  31 => 9,  25 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/additional_buttons.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\additional_buttons.twig");
    }
}
