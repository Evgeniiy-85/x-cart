<?php

/* model\body.twig */
class __TwigTemplate_14a66062fefc6d8c7405f554fb2713d6934a7a8fff8facd23fefa9fe06dbfeb7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getTopInlineJSCode", [], "method")) {
            // line 6
            echo "  <script type=\"text/javascript\">";
            echo $this->getAttribute(($context["this"] ?? null), "getTopInlineJSCode", [], "method");
            echo "</script>
";
        }
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath(($this->getAttribute(        // line 8
($context["this"] ?? null), "getDir", [], "method") . "/header.twig"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate(($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/header.twig"), "model\\body.twig", 8)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 9
        echo "
  ";
        // line 10
        $this->startForm($this->getAttribute(($context["this"] ?? null), "getFormClass", [], "method"), $this->getAttribute(($context["this"] ?? null), "getFormWidgetParams", [], "method"));        // line 11
        echo "
    <div class=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getContainerClass", [], "method"), "html", null, true);
        echo "\">
      ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath(($this->getAttribute(        // line 13
($context["this"] ?? null), "getDir", [], "method") . "/form_content.twig"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate(($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/form_content.twig"), "model\\body.twig", 13)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 14
        echo "      ";
        if ( !$this->getAttribute(($context["this"] ?? null), "useButtonPanel", [], "method")) {
            // line 15
            echo "        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath((($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/") . $this->getAttribute(($context["this"] ?? null), "getFormTemplate", [0 => "buttons"], "method")));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate((($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/") . $this->getAttribute(($context["this"] ?? null), "getFormTemplate", [0 => "buttons"], "method")), "model\\body.twig", 15)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 16
            echo "      ";
        }
        // line 17
        echo "      ";
        if ($this->getAttribute(($context["this"] ?? null), "useButtonPanel", [], "method")) {
            // line 18
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "buttonPanel", []), "display", [], "method"), "html", null, true);
            echo "
      ";
        }
        // line 20
        echo "    </div>

  ";
        $this->endForm();        // line 23
        echo "
";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath(($this->getAttribute(        // line 24
($context["this"] ?? null), "getDir", [], "method") . "/footer.twig"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate(($this->getAttribute(($context["this"] ?? null), "getDir", [], "method") . "/footer.twig"), "model\\body.twig", 24)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 25
        echo "
";
        // line 26
        if ($this->getAttribute(($context["this"] ?? null), "getBottomInlineJSCode", [], "method")) {
            // line 27
            echo "  <script type=\"text/javascript\">";
            echo $this->getAttribute(($context["this"] ?? null), "getBottomInlineJSCode", [], "method");
            echo "</script>
";
        }
    }

    public function getTemplateName()
    {
        return "model\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  107 => 26,  104 => 25,  94 => 24,  91 => 23,  87 => 20,  81 => 18,  78 => 17,  75 => 16,  64 => 15,  61 => 14,  51 => 13,  47 => 12,  44 => 11,  43 => 10,  40 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "model\\body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\model\\body.twig");
    }
}
