<?php

/* menu/quick_menu/link.twig */
class __TwigTemplate_f2402a78bfa9fc9c91d850b2aa86686f29f003757b9b28e1d9803eead5531680 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"line\">
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "getLink", [], "method")) {
            // line 7
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLink", [], "method"), "html", null, true);
            echo "\" class=\"link\"";
            if ($this->getAttribute(($context["this"] ?? null), "getTooltip", [], "method")) {
                echo " title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTooltip", [], "method"), "html", null, true);
                echo "\"";
            }
            if ($this->getAttribute(($context["this"] ?? null), "getBlankPage", [], "method")) {
                echo " target=\"_blank\"";
            }
            echo ">";
            echo $this->getAttribute(($context["this"] ?? null), "getIcon", [], "method");
            if ($this->getAttribute(($context["this"] ?? null), "getTitle", [], "method")) {
                echo "<span>";
                echo $this->getAttribute(($context["this"] ?? null), "getTitle", [], "method");
                echo "</span>";
            }
            echo "</a>
  ";
        } else {
            // line 9
            echo "    <span class=\"link\"";
            if ($this->getAttribute(($context["this"] ?? null), "getTooltip", [], "method")) {
                echo " title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTooltip", [], "method"), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo $this->getAttribute(($context["this"] ?? null), "getIcon", [], "method");
            if ($this->getAttribute(($context["this"] ?? null), "getTitle", [], "method")) {
                echo "<span>";
                echo $this->getAttribute(($context["this"] ?? null), "getTitle", [], "method");
                echo "</span>";
            }
            echo "</span>
  ";
        }
        // line 11
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getLabel", [], "method")) {
            // line 12
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLabelLink", [], "method"), "html", null, true);
            echo "\" class=\"label\"><span title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLabelTitle", [], "method"), "html", null, true);
            echo "\">";
            echo $this->getAttribute(($context["this"] ?? null), "getLabel", [], "method");
            echo "</span></a>
  ";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "menu/quick_menu/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  67 => 12,  64 => 11,  47 => 9,  25 => 7,  23 => 6,  19 => 4,);
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
 # Quick menu link
 #}

<div class=\"line\">
  {% if this.getLink() %}
    <a href=\"{{ this.getLink() }}\" class=\"link\"{% if this.getTooltip() %} title=\"{{ this.getTooltip() }}\"{% endif %}{% if this.getBlankPage() %} target=\"_blank\"{% endif %}>{{ this.getIcon()|raw }}{% if this.getTitle() %}<span>{{ this.getTitle()|raw }}</span>{% endif %}</a>
  {% else %}
    <span class=\"link\"{% if this.getTooltip() %} title=\"{{ this.getTooltip() }}\"{% endif %}>{{ this.getIcon()|raw }}{% if this.getTitle() %}<span>{{ this.getTitle()|raw }}</span>{% endif %}</span>
  {% endif %}
  {% if this.getLabel() %}
    <a href=\"{{ this.getLabelLink() }}\" class=\"label\"><span title=\"{{ this.getLabelTitle() }}\">{{ this.getLabel()|raw }}</span></a>
  {% endif %}
</div>
", "menu/quick_menu/link.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\menu\\quick_menu\\link.twig");
    }
}
