<?php

/* E:\Server\projects\x-cart\skins\admin\export\parts\begin.sections.twig */
class __TwigTemplate_c85dc77ac6280b5f8d296e6afd43f54910f84e803299fdea1d1efd377bbce843 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"parts\">
  <h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["What to export"]), "html", null, true);
        echo "</h3>
  <ul class=\"clearfix sections\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getSections", [], "method"));
        foreach ($context['_seq'] as $context["i"] => $context["section"]) {
            // line 11
            echo "      <li>
        <input type=\"checkbox\" name=\"section[]\" value=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" id=\"section";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatClassNameToString", [0 => $context["i"]], "method"), "html", null, true);
            echo "\"";
            if ($this->getAttribute(($context["this"] ?? null), "isSectionSelected", [0 => $context["i"]], "method")) {
                echo "checked=\"checked\"";
            }
            if ($this->getAttribute(($context["this"] ?? null), "isSectionDisabled", [0 => $context["i"]], "method")) {
                echo " disabled=\"disabled\"";
            }
            echo " />
        <label for=\"section";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatClassNameToString", [0 => $context["i"]], "method"), "html", null, true);
            echo "\"";
            if ($this->getAttribute(($context["this"] ?? null), "isSectionDisabled", [0 => $context["i"]], "method")) {
                echo " class=\"disabled\"";
            }
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$context["section"]]), "html", null, true);
            echo "</label>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\export\\parts\\begin.sections.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  48 => 13,  35 => 12,  32 => 11,  28 => 10,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\export\\parts\\begin.sections.twig", "");
    }
}