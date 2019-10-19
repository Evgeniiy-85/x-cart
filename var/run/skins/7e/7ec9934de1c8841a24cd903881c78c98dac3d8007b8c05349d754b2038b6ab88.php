<?php

/* common/dialog.twig */
class __TwigTemplate_a63740ea2da337224fa75b21f150d930b8c2fc0dfc58a01fb513e32b9d51386e extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "head", [])) {
            // line 6
            echo "  <h2>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "head", [])]), "html", null, true);
            echo "</h2>
";
        }
        // line 8
        echo "
<div class=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDialogCSSClass", [], "method"), "html", null, true);
        echo "\">
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 10
($context["this"] ?? null), "body", []));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "body", []), "common/dialog.twig", 10)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "common/dialog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 11,  37 => 10,  33 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
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
 # Common dialog
 #}

{% if this.head %}
  <h2>{{ t(this.head) }}</h2>
{% endif %}

<div class=\"{{ this.getDialogCSSClass() }}\">
  {% include this.body %}
</div>
", "common/dialog.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\common\\dialog.twig");
    }
}
