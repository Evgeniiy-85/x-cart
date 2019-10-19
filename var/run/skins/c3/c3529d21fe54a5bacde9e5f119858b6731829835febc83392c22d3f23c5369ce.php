<?php

/* model/form/content.twig */
class __TwigTemplate_a1163ad8da74c9a2caf3db02a7fe7c29f664b88fbdafb87929ade6d1b4127481 extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getFormFieldsForDisplay", [], "method"));
        foreach ($context['_seq'] as $context["section"] => $context["data"]) {
            // line 6
            echo "  <fieldset>
    ";
            // line 7
            if ($this->getAttribute(($context["this"] ?? null), "isShowSectionHeader", [0 => $context["section"]], "method")) {
                // line 8
                echo "      <legend>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "sectionParamWidget", []), "display", [], "method"), "html", null, true);
                echo "</legend>
    ";
            }
            // line 10
            echo "
    <div ";
            // line 11
            if ($this->getAttribute(($context["this"] ?? null), "isSectionCollapsible", [0 => $context["section"]], "method")) {
                echo "class=\"";
                if ($this->getAttribute(($context["this"] ?? null), "isSectionCollapsed", [0 => $context["section"]], "method")) {
                    echo "collapse";
                }
                echo "\" id=\"section-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["section"], "html", null, true);
                echo "\" aria-expanded=\"true\"";
            }
            echo ">
      <ul class=\"table ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "-table\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "sectionParamFields", []));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 14
                echo "          <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemClass", [0 => $this->getAttribute($context["loop"], "index", []), 1 => $this->getAttribute($context["loop"], "length", []), 2 => $context["field"]], "method"), "html", null, true);
                echo "\">
            ";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getFieldCommentedData", [0 => $context["field"]], "method")], "method"), "html", null, true);
                echo "
            ";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["field"], "display", [], "method"), "html", null, true);
                echo "
            ";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayViewSubList", [0 => "field", 1 => ["section" => $context["section"], "field" => $context["field"]]], "method"), "html", null, true);
                echo "
          </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </ul>
    </div>

  </fieldset>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
";
        // line 27
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "form.content"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "model/form/content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 27,  113 => 25,  103 => 20,  86 => 17,  82 => 16,  78 => 15,  73 => 14,  56 => 13,  52 => 12,  40 => 11,  37 => 10,  31 => 8,  29 => 7,  26 => 6,  22 => 5,  19 => 4,);
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
 # Form content
 #}

{% for section, data in this.getFormFieldsForDisplay() %}
  <fieldset>
    {% if this.isShowSectionHeader(section) %}
      <legend>{{ data.sectionParamWidget.display() }}</legend>
    {% endif %}

    <div {% if this.isSectionCollapsible(section) %}class=\"{% if this.isSectionCollapsed(section) %}collapse{% endif %}\" id=\"section-{{ section }}\" aria-expanded=\"true\"{% endif %}>
      <ul class=\"table {{ section }}-table\">
        {% for field in data.sectionParamFields %}
          <li class=\"{{ this.getItemClass(loop.index, loop.length, field) }}\">
            {{ this.displayCommentedData(this.getFieldCommentedData(field)) }}
            {{ field.display() }}
            {{ this.displayViewSubList('field', {'section': section, 'field': field}) }}
          </li>
        {% endfor %}
      </ul>
    </div>

  </fieldset>
{% endfor %}

{# @todo: remove (see \\XLite\\Module\\CDev\\Wholesale\\View\\MinimumQuantity) #}
{{ widget_list('form.content') }}
", "model/form/content.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\model\\form\\content.twig");
    }
}
