<?php

/* items_list/model/table_content.twig */
class __TwigTemplate_7eab00ef56b3ae9ad2d13304d11e068eb53fd631f61e07a75e8320156e88ccd2 extends \XLite\Core\Templating\Twig\Template
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
<a name=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAnchorName", [], "method"), "html", null, true);
        echo "\" class=\"list-anchor\"></a>
<div ";
        // line 6
        echo $this->getAttribute(($context["this"] ?? null), "getContainerAttributesAsString", [], "method");
        echo ">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getItemsListParams", [], "method")], "method"), "html", null, true);
        echo "
  ";
        // line 8
        if ( !$this->getAttribute(($context["this"] ?? null), "hasResults", [], "method")) {
            // line 9
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("items_list/model/empty_table_description.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("items_list/model/empty_table_description.twig", "items_list/model/table_content.twig", 9)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 10
            echo "  ";
        } else {
            // line 11
            echo "    <div class=\"no-items\" style=\"display: none;\"></div>
  ";
        }
        // line 13
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isHeaderVisible", [], "method")) {
            // line 14
            echo "    ";
            ob_start();
            // line 15
            echo "      <div class=\"list-header\">
        ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header.before", "type" => "inherited"]]), "html", null, true);
            echo "
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getTopActions", [], "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tpl"]) {
                // line 18
                echo "          <div class=\"button-container\">";
                $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($context["tpl"]);                list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                if ($templateWrapperText) {
echo $templateWrapperStart;
}

                $this->loadTemplate($context["tpl"], "items_list/model/table_content.twig", 18)->display($context);
                if ($templateWrapperText) {
                    echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                }
                echo "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tpl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header", "type" => "inherited"]]), "html", null, true);
            echo "
      </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 23
            echo "  ";
        }
        // line 24
        echo "
  ";
        // line 25
        if ($this->getAttribute(($context["this"] ?? null), "isPageBodyVisible", [], "method")) {
            // line 26
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(($context["this"] ?? null), "getPageBodyTemplate", [], "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getPageBodyTemplate", [], "method"), "items_list/model/table_content.twig", 26)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 27
            echo "  ";
        }
        // line 28
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isPagerVisible", [], "method")) {
            // line 29
            echo "    <div class=\"table-pager\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "pager", []), "display", [], "method"), "html", null, true);
            echo "</div>
  ";
        }
        // line 31
        echo "
  ";
        // line 32
        if ($this->getAttribute(($context["this"] ?? null), "isFooterVisible", [], "method")) {
            // line 33
            echo "    <div class=\"list-footer\">
      ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getBottomActions", [], "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tpl"]) {
                // line 35
                echo "        <div class=\"button-container\">";
                $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($context["tpl"]);                list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                if ($templateWrapperText) {
echo $templateWrapperStart;
}

                $this->loadTemplate($context["tpl"], "items_list/model/table_content.twig", 35)->display($context);
                if ($templateWrapperText) {
                    echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                }
                echo "</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tpl'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "footer", "type" => "inherited"]]), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 40
        echo "
</div>

";
        // line 43
        if ($this->getAttribute(($context["this"] ?? null), "isPanelVisible", [], "method")) {
            // line 44
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getPanelClass", [], "method")]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 44,  209 => 43,  204 => 40,  197 => 37,  172 => 35,  155 => 34,  152 => 33,  150 => 32,  147 => 31,  141 => 29,  138 => 28,  135 => 27,  124 => 26,  122 => 25,  119 => 24,  116 => 23,  109 => 20,  84 => 18,  67 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  50 => 11,  47 => 10,  36 => 9,  34 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
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
 # Table model list
 #}

<a name=\"{{ this.getAnchorName() }}\" class=\"list-anchor\"></a>
<div {{ this.getContainerAttributesAsString()|raw }}>
  {{ this.displayCommentedData(this.getItemsListParams()) }}
  {% if not this.hasResults() %}
    {% include 'items_list/model/empty_table_description.twig' %}
  {% else %}
    <div class=\"no-items\" style=\"display: none;\"></div>
  {% endif %}
  {% if this.isHeaderVisible() %}
    {% spaceless %}
      <div class=\"list-header\">
        {{ widget_list('header.before', type='inherited') }}
        {% for tpl in this.getTopActions() %}
          <div class=\"button-container\">{% include tpl %}</div>
        {% endfor %}
        {{ widget_list('header', type='inherited') }}
      </div>
    {% endspaceless %}
  {% endif %}

  {% if this.isPageBodyVisible() %}
    {% include this.getPageBodyTemplate() %}
  {% endif %}
  {% if this.isPagerVisible() %}
    <div class=\"table-pager\">{{ this.pager.display() }}</div>
  {% endif %}

  {% if this.isFooterVisible() %}
    <div class=\"list-footer\">
      {% for tpl in this.getBottomActions() %}
        <div class=\"button-container\">{% include tpl %}</div>
      {% endfor %}
      {{ widget_list('footer', type='inherited') }}
    </div>
  {% endif %}

</div>

{% if this.isPanelVisible() %}
  {{ widget(this.getPanelClass()) }}
{% endif %}
", "items_list/model/table_content.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table_content.twig");
    }
}
