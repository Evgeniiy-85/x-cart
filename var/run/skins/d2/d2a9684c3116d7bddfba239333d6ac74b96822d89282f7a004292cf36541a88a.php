<?php

/* common/sticky_panel.twig */
class __TwigTemplate_50a66949749a6790be65a80c56bbc75bda08b5dfd79bb452181d15fb323cff76 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getClass", [], "method"), "html", null, true);
        echo "\">
  <div class=\"box\">
    ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 6
($context["this"] ?? null), "getBody", [], "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getBody", [], "method"), "common/sticky_panel.twig", 6)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 7
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "common/sticky_panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  25 => 6,  19 => 4,);
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
 # Sticky panel
 #}
<div class=\"{{ this.getClass() }}\">
  <div class=\"box\">
    {% include this.getBody() %}
  </div>
</div>
", "common/sticky_panel.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\common\\sticky_panel.twig");
    }
}
