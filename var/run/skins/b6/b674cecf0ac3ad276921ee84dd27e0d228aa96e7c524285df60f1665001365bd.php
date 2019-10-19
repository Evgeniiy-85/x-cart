<?php

/* items_list\body.twig */
class __TwigTemplate_814b572ffa0774b756b4218da6af4d249bba1b31a8bf0cb339fd01070b087278 extends \XLite\Core\Templating\Twig\Template
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
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getWidgetTagAttributes", [], "method")], "method");
        echo ">
  ";
        // line 6
        $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getJSData", [], "method")], "method");
        // line 7
        echo "
  ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isHeadVisible", [], "method")) {
            // line 9
            echo "    <div class=\"head-h2 ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getListHeadClass", [], "method"), "html", null, true);
            echo "\">";
            echo $this->getAttribute(($context["this"] ?? null), "getListHead", [], "method");
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isPagerVisible", [], "method")) {
            // line 12
            echo "    <div class=\"list-pager\">";
            $this->getAttribute($this->getAttribute(($context["this"] ?? null), "pager", []), "display", [], "method");
            echo "</div>
  ";
        }
        // line 14
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isHeaderVisible", [], "method")) {
            // line 15
            echo "    <div class=\"list-header\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header", "type" => "inherited"]]), "html", null, true);
            echo "</div>
  ";
        }
        // line 17
        echo "
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 18
($context["this"] ?? null), "getPageBodyTemplate", [], "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getPageBodyTemplate", [], "method"), "items_list\\body.twig", 18)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 19
        echo "
  ";
        // line 20
        if (($this->getAttribute(($context["this"] ?? null), "isPagerVisible", [], "method") && $this->getAttribute($this->getAttribute(($context["this"] ?? null), "pager", []), "isPagesListVisible", [], "method"))) {
            // line 21
            echo "    <div class=\"list-pager list-pager-bottom\">";
            $this->getAttribute($this->getAttribute(($context["this"] ?? null), "pager", []), "display", [], "method");
            echo "</div>
  ";
        }
        // line 23
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isFooterVisible", [], "method")) {
            // line 24
            echo "    <div class=\"list-footer\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "footer", "type" => "inherited"]]), "html", null, true);
            echo "</div>
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        if ($this->getAttribute(($context["this"] ?? null), "isEmptyListTemplateVisible", [], "method")) {
            // line 28
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(($context["this"] ?? null), "getEmptyListTemplate", [], "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getEmptyListTemplate", [], "method"), "items_list\\body.twig", 28)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 29
            echo "  ";
        }
        // line 30
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 30,  108 => 29,  97 => 28,  95 => 27,  92 => 26,  86 => 24,  83 => 23,  77 => 21,  75 => 20,  72 => 19,  62 => 18,  59 => 17,  53 => 15,  50 => 14,  44 => 12,  41 => 11,  33 => 9,  31 => 8,  28 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list\\body.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\items_list\\body.twig");
    }
}
