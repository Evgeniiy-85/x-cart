<?php

/* left_menu/link.twig */
class __TwigTemplate_f797680e47e6c228771b3521e5e60013fff115cf1742067adf14f347206621a9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"line";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "getLabel", [], "method")) {
            echo " with-label";
        }
        echo "\">
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
            echo "><span class=\"icon\">";
            echo $this->getAttribute(($context["this"] ?? null), "getIcon", [], "method");
            echo "</span>";
            if ($this->getAttribute(($context["this"] ?? null), "getTitle", [], "method")) {
                echo "<span class=\"title\">";
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
            echo "><span class=\"icon\">";
            echo $this->getAttribute(($context["this"] ?? null), "getIcon", [], "method");
            echo "</span>";
            if ($this->getAttribute(($context["this"] ?? null), "getTitle", [], "method")) {
                echo "<span class=\"title\">";
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
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getActionWidget", [], "method")) {
            // line 15
            echo "    <div class=\"action-widget\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "getActionWidget", [], "method"), "display", [], "method"), "html", null, true);
            echo "</div>
  ";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "left_menu/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  87 => 15,  84 => 14,  74 => 12,  71 => 11,  53 => 9,  30 => 7,  28 => 6,  22 => 5,  19 => 4,);
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
 # Left side menu link
 #}

<div class=\"line{% if this.getLabel() %} with-label{% endif %}\">
  {% if this.getLink() %}
    <a href=\"{{ this.getLink() }}\" class=\"link\"{% if this.getTooltip() %} title=\"{{ this.getTooltip() }}\"{% endif %}{% if this.getBlankPage() %} target=\"_blank\"{% endif %}><span class=\"icon\">{{ this.getIcon()|raw }}</span>{% if this.getTitle() %}<span class=\"title\">{{ this.getTitle()|raw }}</span>{% endif %}</a>
  {% else %}
    <span class=\"link\"{% if this.getTooltip() %} title=\"{{ this.getTooltip() }}\"{% endif %}><span class=\"icon\">{{ this.getIcon()|raw }}</span>{% if this.getTitle() %}<span class=\"title\">{{ this.getTitle()|raw }}</span>{% endif %}</span>
  {% endif %}
  {% if this.getLabel() %}
    <a href=\"{{ this.getLabelLink() }}\" class=\"label\"><span title=\"{{ this.getLabelTitle() }}\">{{ this.getLabel()|raw }}</span></a>
  {% endif %}
  {% if this.getActionWidget() %}
    <div class=\"action-widget\">{{ this.getActionWidget().display() }}</div>
  {% endif %}
</div>
", "left_menu/link.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\left_menu\\link.twig");
    }
}
