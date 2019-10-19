<?php

/* left_menu/node.twig */
class __TwigTemplate_a6f03843b99d0f95b3f4d3890f0ae5388995a1cb43cd8657f8583ccc6d5e7c38 extends \XLite\Core\Templating\Twig\Template
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
<li ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getContainerTagAttributes", [], "method")], "method");
        echo ">
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 6
($context["this"] ?? null), "getLinkTemplate", [], "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getLinkTemplate", [], "method"), "left_menu/node.twig", 6)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 7
        echo "
  ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "hasChildren", [], "method")) {
            // line 9
            echo "    <div class=\"box\">
      <ul>
        <li class=\"menu-item title\">
          ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(            // line 12
($context["this"] ?? null), "getLinkTemplate", [], "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getLinkTemplate", [], "method"), "left_menu/node.twig", 12)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 13
            echo "        </li>
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getChildren", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 15
                echo "          ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["child"], "display", [], "method"), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getListName", [], "method")]]), "html", null, true);
            echo "
      </ul>
    </div>
  ";
        }
        // line 21
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "left_menu/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 21,  72 => 17,  63 => 15,  59 => 14,  56 => 13,  46 => 12,  41 => 9,  39 => 8,  36 => 7,  26 => 6,  22 => 5,  19 => 4,);
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
 # Left side menu node
 #}

<li {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>
  {% include this.getLinkTemplate() %}

  {% if this.hasChildren() %}
    <div class=\"box\">
      <ul>
        <li class=\"menu-item title\">
          {% include this.getLinkTemplate() %}
        </li>
        {% for child in this.getChildren() %}
          {{ child.display() }}
        {% endfor %}
        {{ widget_list(this.getListName()) }}
      </ul>
    </div>
  {% endif %}
</li>
", "left_menu/node.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\left_menu\\node.twig");
    }
}
