<?php

/* file_uploader/body.twig */
class __TwigTemplate_80b72f0e90c1ceaef972bb06c3d66f1d81aa12985aee240b32850e5e63f64c80 extends \XLite\Core\Templating\Twig\Template
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
<xlite-file-uploader inline-template ";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "hasMultipleSelector", [], "method")) {
            echo ":multiple=\"true\"";
        }
        // line 6
        echo "                     help-message=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getHelp", [], "method")]), "html", null, true);
        echo "\">
  <div class=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDivStyle", [], "method"), "html", null, true);
        echo "\"
       data-object-id=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getObjectId", [], "method"), "html", null, true);
        echo "\"
       data-max-width=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMaxWidth", [], "method"), "html", null, true);
        echo "\"
       data-max-height=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMaxHeight", [], "method"), "html", null, true);
        echo "\"
       data-name=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\"
       v-data='{ \"basePath\": \"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getVModel", [], "method"), "html", null, true);
        echo "\",
       \"isRemovable\": \"";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "isRemovable", [], "method"), "html", null, true);
        echo "\",
       \"isTemporary\": \"";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "isTemporary", [], "method"), "html", null, true);
        echo "\",
       \"isImage\": \"";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "isImage", [], "method"), "html", null, true);
        echo "\",
       \"hasFile\": \"";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "hasFile", [], "method"), "html", null, true);
        echo "\",
       \"error\": \"";
        // line 17
        echo (($this->getAttribute(($context["this"] ?? null), "getMessage", [], "method")) ? ("1") : (""));
        echo "\",
       \"defaultErrorMessage\": \"";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getErrorMessageDefault", [], "method")]), "html", null, true);
        echo "\",
       \"realErrorMessage\": \"";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getMessage", [], "method")]), "html", null, true);
        echo "\"}'>
      <input type=\"checkbox\" name=\"";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
        echo "[delete]\" v-model=\"delete\" value=\"1\"
             class=\"input-delete\"
             v-if=\"isRemovable\"
             v-data='{ \"delete\": false }'/>
    ";
        // line 24
        if ($this->getAttribute(($context["this"] ?? null), "isMultiple", [], "method")) {
            // line 25
            echo "      <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
            echo "[position]\" v-model=\"position\"
             value=\"";
            // line 26
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPosition", [], "method"), "html", null, true);
            echo "\"
             class=\"input-position\"/>
    ";
        }
        // line 29
        echo "    ";
        if ($this->getAttribute(($context["this"] ?? null), "isTemporary", [], "method")) {
            // line 30
            echo "      <input type=\"hidden\" name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
            echo "[temp_id]\" v-model=\"temp_id\"
             value=\"";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "object", []), "id", []), "html", null, true);
            echo "\"
             v-if=\"isTemporary\"
             class=\"input-temp-id\"/>
    ";
        }
        // line 35
        echo "    <a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLink", [], "method"), "html", null, true);
        echo "\" class=\"link\" data-toggle=\"dropdown\">
      <i class=\"icon fa fa-camera\" v-if=\"isDisplayCamera\"></i>
      <i class=\"icon fa warning fa-exclamation-triangle\" v-if=\"errorMessage\"></i>
      <div class=\"preview\" v-if=\"isDisplayPreview\">
        ";
        // line 39
        echo $this->getAttribute(($context["this"] ?? null), "getPreview", [], "method");
        echo "
      </div>
      <div :class=\"error ? 'error' : 'help'\" v-html=\"message\" v-if=\"shouldShowMessage\"></div>
      <div class=\"icon\">
        <i class=\"";
        // line 43
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getIconStyle", [], "method"), "html", null, true);
        echo "\"></i>
      </div>
    </a>
    ";
        // line 46
        if ($this->getAttribute(($context["this"] ?? null), "hasAlt", [], "method")) {
            // line 47
            echo "      ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("file_uploader/parts/widget.alt.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("file_uploader/parts/widget.alt.twig", "file_uploader/body.twig", 47)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 48
            echo "    ";
        }
        // line 49
        echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
        // line 50
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "file-uploader.menu"]]), "html", null, true);
        echo "
    </ul>
  </div>
</xlite-file-uploader>
";
    }

    public function getTemplateName()
    {
        return "file_uploader/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 50,  155 => 49,  152 => 48,  141 => 47,  139 => 46,  133 => 43,  126 => 39,  118 => 35,  111 => 31,  106 => 30,  103 => 29,  97 => 26,  92 => 25,  90 => 24,  83 => 20,  79 => 19,  75 => 18,  71 => 17,  67 => 16,  63 => 15,  59 => 14,  55 => 13,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  31 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file_uploader/body.twig", "E:\\Server\\projects\\x-cart\\skins\\common\\file_uploader\\body.twig");
    }
}
