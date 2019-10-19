<?php

/* form_field/form_field.twig */
class __TwigTemplate_61c9e35c7d14fd8a9d9180d3e34f7c7e8f022dc9b2b08a9e5142568826e8046a extends \XLite\Core\Templating\Twig\Template
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
        return new Twig_Source("", "form_field/form_field.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_field\\form_field.twig");
    }
}
