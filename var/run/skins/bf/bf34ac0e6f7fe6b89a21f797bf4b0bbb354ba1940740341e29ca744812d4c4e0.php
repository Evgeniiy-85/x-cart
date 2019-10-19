<?php

/* form_field/form_field.twig */
class __TwigTemplate_1b8f2bf75f4ff2aea8c2720a2e1f9760472ad3b9c21d8ea10c1f808543b384ff extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute(($context["this"] ?? null), "getParam", [0 => "fieldOnly"], "method")) {
            // line 6
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(($context["this"] ?? null), "getFieldLabelTemplate", [], "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getFieldLabelTemplate", [], "method"), "form_field/form_field.twig", 6)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
        // line 8
        echo "
<div class=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getValueContainerClass", [], "method"), "html", null, true);
        echo "\">
  <div class=\"input-internal-wrapper\">
    ";
        // line 11
        if ($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "editOnClick"], "method")) {
            // line 12
            echo "      <div ";
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getContainerAttributes", [], "method")], "method");
            echo ">
        <div ";
            // line 13
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getViewContainerAttributes", [], "method")], "method");
            echo ">";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(($context["this"] ?? null), "getViewTemplate", [], "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getViewTemplate", [], "method"), "form_field/form_field.twig", 13)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            echo "</div>
        <div ";
            // line 14
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getFieldContainerAttributes", [], "method")], "method");
            echo ">
          ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath((($this->getAttribute(            // line 15
($context["this"] ?? null), "getDir", [], "method") . "/") . $this->getAttribute(($context["this"] ?? null), "getFieldTemplate", [], "method")));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate((($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/") . $this->getAttribute(($context["this"] ?? null), "getFieldTemplate", [], "method")), "form_field/form_field.twig", 15)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 16
            echo "        </div>
      </div>
    ";
        } else {
            // line 19
            echo "      ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath((($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/") . $this->getAttribute(($context["this"] ?? null), "getFieldTemplate", [], "method")));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate((($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/") . $this->getAttribute(($context["this"] ?? null), "getFieldTemplate", [], "method")), "form_field/form_field.twig", 19)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 20
            echo "    ";
        }
        // line 21
        echo "    ";
        if ($this->getAttribute(($context["this"] ?? null), "hasHelp", [], "method")) {
            // line 22
            echo "      <div class=\"help-wrapper\">
        ";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getParam", [0 => "help"], "method")]), "helpWidget" => $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "helpWidget"], "method"), "isImageTag" => "true", "className" => "help-icon"]]), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 26
        echo "  </div>
  ";
        // line 27
        if ($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "linkHref"], "method")) {
            // line 28
            echo "    ";
            if ($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "linkImg"], "method")) {
                // line 29
                echo "      <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "linkImg"], "method"), "html", null, true);
                echo "\" class=\"form-field-link-img\" alt=\"\" height=\"20\">
    ";
            }
            // line 31
            echo "    <a class=\"form-field-link ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFieldId", [], "method"), "html", null, true);
            echo "-link\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "linkHref"], "method"), "html", null, true);
            echo "\">
      ";
            // line 32
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getParam", [0 => "linkText"], "method")]);
            echo "
    </a>
  ";
        }
        // line 35
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "comment"], "method")) {
            // line 36
            echo "    <div class=\"form-field-comment ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFieldId", [], "method"), "html", null, true);
            echo "-comment\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getParam", [0 => "comment"], "method")]);
            echo "</div>
  ";
        }
        // line 38
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getFormFieldJSData", [], "method")) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getFormFieldJSData", [], "method")], "method"), "html", null, true);
        }
        // line 39
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getInlineJSCode", [], "method")) {
            // line 40
            echo "    <script type=\"text/javascript\">";
            echo $this->getAttribute(($context["this"] ?? null), "getInlineJSCode", [], "method");
            echo "</script>
  ";
        }
        // line 42
        echo "</div>

";
        // line 44
        if ( !$this->getAttribute(($context["this"] ?? null), "getParam", [0 => "fieldOnly"], "method")) {
            // line 45
            echo "  <div class=\"clear\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "form_field/form_field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 45,  166 => 44,  162 => 42,  156 => 40,  153 => 39,  148 => 38,  140 => 36,  137 => 35,  131 => 32,  124 => 31,  118 => 29,  115 => 28,  113 => 27,  110 => 26,  104 => 23,  101 => 22,  98 => 21,  95 => 20,  84 => 19,  79 => 16,  69 => 15,  65 => 14,  51 => 13,  46 => 12,  44 => 11,  39 => 9,  36 => 8,  24 => 6,  22 => 5,  19 => 4,);
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
 # Form field
 #}

{% if not this.getParam('fieldOnly') %}
  {% include this.getFieldLabelTemplate() %}
{% endif %}

<div class=\"{{ this.getValueContainerClass() }}\">
  <div class=\"input-internal-wrapper\">
    {% if this.getParam('editOnClick') %}
      <div {{ this.printTagAttributes(this.getContainerAttributes())|raw }}>
        <div {{ this.printTagAttributes(this.getViewContainerAttributes())|raw }}>{% include this.getViewTemplate() %}</div>
        <div {{ this.printTagAttributes(this.getFieldContainerAttributes())|raw }}>
          {% include this.getDir() ~ '/' ~ this.getFieldTemplate() %}
        </div>
      </div>
    {% else %}
      {% include this.getDir() ~ '/' ~ this.getFieldTemplate() %}
    {% endif %}
    {% if this.hasHelp() %}
      <div class=\"help-wrapper\">
        {{ widget('XLite\\\\View\\\\Tooltip', text=t(this.getParam('help')), helpWidget=this.getParam('helpWidget'), isImageTag='true', className='help-icon') }}
      </div>
    {% endif %}
  </div>
  {% if this.getParam('linkHref') %}
    {% if this.getParam('linkImg') %}
      <img src=\"{{ this.getParam('linkImg') }}\" class=\"form-field-link-img\" alt=\"\" height=\"20\">
    {% endif %}
    <a class=\"form-field-link {{ this.getFieldId() }}-link\" href=\"{{ this.getParam('linkHref') }}\">
      {{ t(this.getParam('linkText'))|raw }}
    </a>
  {% endif %}
  {% if this.getParam('comment') %}
    <div class=\"form-field-comment {{ this.getFieldId() }}-comment\">{{ t(this.getParam('comment'))|raw }}</div>
  {% endif %}
  {% if this.getFormFieldJSData() %}{{ this.displayCommentedData(this.getFormFieldJSData()) }}{% endif %}
  {% if this.getInlineJSCode() %}
    <script type=\"text/javascript\">{{ this.getInlineJSCode()|raw }}</script>
  {% endif %}
</div>

{% if not this.getParam('fieldOnly') %}
  <div class=\"clear\"></div>
{% endif %}
", "form_field/form_field.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_field\\form_field.twig");
    }
}
