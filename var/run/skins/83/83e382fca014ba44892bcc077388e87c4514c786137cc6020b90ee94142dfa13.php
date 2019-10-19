<?php

/* common/tooltip.twig */
class __TwigTemplate_2a21f67c1826a901a903fbd90fe066c0449e4f267097bdba1d4f66ed9a578e0d extends \XLite\Core\Templating\Twig\Template
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
        ob_start();
        // line 6
        echo "  <span
      data-toggle=\"popover\"
      data-trigger=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTrigger", [], "method"), "html", null, true);
        echo "\"
      data-placement=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "placement"], "method"), "html", null, true);
        echo "\"
      data-content=\"";
        // line 10
        if ($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "helpWidget"], "method")) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "helpWidget"], "method"), "html", null, true);
        } else {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "text"], "method"), "html", null, true);
        }
        echo "\"
      data-html=\"true\"
      data-help-id=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getHelpId", [], "method"), "html", null, true);
        echo "\"
      data-delay=\"";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDelay", [], "method"), "html", null, true);
        echo "\"
      data-keep-on-hover=\"";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "isKeepOnHover", [], "method"), "html", null, true);
        echo "\"
      v-xlite-tooltip
      class=\"tooltip-main\">
";
        // line 17
        if ($this->getAttribute(($context["this"] ?? null), "isImageTag", [], "method")) {
            // line 18
            echo "  <i ";
            echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
            echo "></i>
";
        } else {
            // line 20
            echo "  <span ";
            echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
            echo ">";
            echo $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "caption"], "method");
            echo "</span>
";
        }
        // line 22
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "common/tooltip.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  67 => 20,  61 => 18,  59 => 17,  53 => 14,  49 => 13,  45 => 12,  36 => 10,  32 => 9,  28 => 8,  24 => 6,  22 => 5,  19 => 4,);
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
 # Tooltip widget
 #}

{% spaceless %}
  <span
      data-toggle=\"popover\"
      data-trigger=\"{{ this.getTrigger() }}\"
      data-placement=\"{{ this.getParam('placement') }}\"
      data-content=\"{% if this.getParam('helpWidget') %}{{ this.getParam('helpWidget') }}{% else %}{{ this.getParam('text') }}{% endif %}\"
      data-html=\"true\"
      data-help-id=\"{{ this.getHelpId() }}\"
      data-delay=\"{{ this.getDelay() }}\"
      data-keep-on-hover=\"{{ this.isKeepOnHover() }}\"
      v-xlite-tooltip
      class=\"tooltip-main\">
{% if this.isImageTag() %}
  <i {{ this.getAttributesCode()|raw }}></i>
{% else %}
  <span {{ this.getAttributesCode()|raw }}>{{ this.getParam('caption')|raw }}</span>
{% endif %}
</span>
{% endspaceless %}
", "common/tooltip.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\common\\tooltip.twig");
    }
}
