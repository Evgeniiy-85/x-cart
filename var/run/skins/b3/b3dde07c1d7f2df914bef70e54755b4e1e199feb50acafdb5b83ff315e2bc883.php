<?php

/* form_field/form_field.twig */
class __TwigTemplate_c9b30fbd0c4c15dc838651d8a4ed1c8bcd724ca716490dfb05a25dd0d8404c94 extends \XLite\Core\Templating\Twig\Template
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
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath((($this->getAttribute(        // line 10
($context["this"] ?? null), "getDir", [], "method") . "/") . $this->getAttribute(($context["this"] ?? null), "getFieldTemplate", [], "method")));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate((($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/") . $this->getAttribute(($context["this"] ?? null), "getFieldTemplate", [], "method")), "form_field/form_field.twig", 10)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 11
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "hasHelp", [], "method")) {
            // line 12
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getParam", [0 => "help"], "method")]), "helpWidget" => $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "helpWidget"], "method"), "isImageTag" => "true", "className" => "help-icon"]]), "html", null, true);
            echo "
  ";
        }
        // line 14
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "comment"], "method")) {
            // line 15
            echo "    <div class=\"form-field-comment ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFieldId", [], "method"), "html", null, true);
            echo "-comment\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getParam", [0 => "comment"], "method")]), "html", null, true);
            echo "</div>
  ";
        }
        // line 17
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getFormFieldJSData", [], "method")) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getFormFieldJSData", [], "method")], "method"), "html", null, true);
        }
        // line 18
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getInlineJSCode", [], "method")) {
            // line 19
            echo "    <script>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getInlineJSCode", [], "method"), "html", null, true);
            echo "</script>
  ";
        }
        // line 21
        echo "</div>

";
        // line 23
        if ( !$this->getAttribute(($context["this"] ?? null), "getParam", [0 => "fieldOnly"], "method")) {
            // line 24
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
        return array (  93 => 24,  91 => 23,  87 => 21,  81 => 19,  78 => 18,  73 => 17,  65 => 15,  62 => 14,  56 => 12,  53 => 11,  43 => 10,  39 => 9,  36 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/form_field.twig", "/home/vagrant/next/output/xcart/src/skins/customer/form_field/form_field.twig");
    }
}
