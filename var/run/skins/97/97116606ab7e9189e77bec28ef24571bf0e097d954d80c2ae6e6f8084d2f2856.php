<?php

/* layout/content/center.twig */
class __TwigTemplate_a7fd857a30ef4212f11f8645611956d030c6965c7c5345e929279f8aca0b1526 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "center.top"]]), "html", null, true);
        echo "

";
        // line 7
        if (($this->getAttribute(($context["this"] ?? null), "isTitleVisible", [], "method") && $this->getAttribute(($context["this"] ?? null), "getTitle", [], "method"))) {
            // line 8
            echo "  <h1 class=\"title\" id=\"page-title\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMainTitle", [], "method"), "html", null, true);
            echo "</h1>
";
        }
        // line 10
        echo "
";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("layout/content/center_top.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 11
        $this->loadTemplate("layout/content/center_top.twig", "layout/content/center.twig", 11)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 12
        echo "
";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "center.bottom"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout/content/center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  48 => 12,  43 => 11,  35 => 10,  29 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/content/center.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\layout\\content\\center.twig");
    }
}
