<?php

/* left_menu/body.twig */
class __TwigTemplate_789bb0a8f05a4c35888ca6b63ac87576ed0021c556a0b91de25b9f15fb63a5c4 extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getContainerTagAttributes", [], "method")], "method");
        echo ">
  ";
        // line 6
        $context["items"] = $this->getAttribute(($context["this"] ?? null), "getItems", [], "method");
        // line 7
        echo "  ";
        if (($context["items"] ?? null)) {
            // line 8
            echo "    <ul class=\"menu main-menu\">
      ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", [], "method"), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
  ";
        }
        // line 14
        echo "
  ";
        // line 15
        $context["bottomItems"] = $this->getAttribute(($context["this"] ?? null), "getBottomItems", [], "method");
        // line 16
        echo "  ";
        if (($context["bottomItems"] ?? null)) {
            // line 17
            echo "    <ul class=\"menu bottom-menu\">
      ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["bottomItems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 19
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["link"], "display", [], "method"), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
  ";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "left_menu/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 23,  75 => 21,  66 => 19,  62 => 18,  59 => 17,  56 => 16,  54 => 15,  51 => 14,  47 => 12,  38 => 10,  34 => 9,  31 => 8,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
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
 # Left side menu
 #}

<div {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>
  {% set items = this.getItems() %}
  {% if items %}
    <ul class=\"menu main-menu\">
      {% for item in items %}
        {{ item.display() }}
      {% endfor %}
    </ul>
  {% endif %}

  {% set bottomItems = this.getBottomItems() %}
  {% if bottomItems %}
    <ul class=\"menu bottom-menu\">
      {% for link in bottomItems %}
        {{ link.display() }}
      {% endfor %}
    </ul>
  {% endif %}
</div>
", "left_menu/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\left_menu\\body.twig");
    }
}
