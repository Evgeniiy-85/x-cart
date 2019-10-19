<?php

/* form_field/input/checkbox/on_off.twig */
class __TwigTemplate_9709d3e09419279491b5e4cee62e91473c708d0de30849ad293bdd5b43fe242d extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"input-field-wrapper ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWrapperClass", [], "method"), "html", null, true);
        echo "\">
  <div class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCssClass", [], "method"), "html", null, true);
        echo "\"";
        if (($this->getAttribute(($context["this"] ?? null), "isDisabled", [], "method") && $this->getAttribute(($context["this"] ?? null), "getDisabledTitle", [], "method"))) {
            echo " title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDisabledTitle", [], "method"), "html", null, true);
            echo "\"";
        }
        echo ">
    ";
        // line 6
        if ( !$this->getAttribute(($context["this"] ?? null), "isDisabled", [], "method")) {
            // line 7
            echo "      <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
            echo "\" value=\"\" />
    ";
        }
        // line 9
        echo "    ";
        if ($this->getAttribute(($context["this"] ?? null), "isDisabled", [], "method")) {
            // line 10
            echo "      <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
            echo "\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getValue", [], "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 12
        echo "    <input";
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo " />
    <label for=\"";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFieldId", [], "method"), "html", null, true);
        echo "\">
      <div class=\"onoffswitch-inner\">
        <div class=\"on-caption\">";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getOnLabel", [], "method")]), "html", null, true);
        echo "</div>
        <div class=\"off-caption\">";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getOffLabel", [], "method")]), "html", null, true);
        echo "</div>
      </div>
      <span class=\"onoffswitch-switch\"></span>
    </label>
  </div>
</span>";
    }

    public function getTemplateName()
    {
        return "form_field/input/checkbox/on_off.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  63 => 15,  58 => 13,  53 => 12,  45 => 10,  42 => 9,  36 => 7,  34 => 6,  24 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/input/checkbox/on_off.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_field\\input\\checkbox\\on_off.twig");
    }
}
