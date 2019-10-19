<?php

/* menu/marketplace/body.twig */
class __TwigTemplate_a0bb30bde6954047c985c29569d50143cb1487e3579df94b6be479f97e8c16a3 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div ";
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getContainerTagAttributes", [], "method")], "method");
        echo ">
  ";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "getItems", [], "method")) {
            // line 6
            echo "    <ul class=\"menu\">
      ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getItems", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 8
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", [], "method"), "html", null, true);
                echo "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "    </ul>
  ";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "menu/marketplace/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  42 => 10,  33 => 8,  29 => 7,  26 => 6,  24 => 5,  19 => 4,);
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
 # Left side info menu
 #}
<div {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>
  {% if this.getItems() %}
    <ul class=\"menu\">
      {% for item in this.getItems() %}
        {{ item.display() }}
      {% endfor %}
    </ul>
  {% endif %}
</div>
", "menu/marketplace/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\menu\\marketplace\\body.twig");
    }
}
