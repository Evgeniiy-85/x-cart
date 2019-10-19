<?php

/* modules/XC/ThemeTweaker/themetweaker/custom_css/css.twig */
class __TwigTemplate_20d1c0f3f9c80c250f4c02d0466b87e7fa17f606d2715d929e6154c5a00ffcf0 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isInCustomCssMode", [], "method")) {
            // line 8
            echo "
    ";
            // line 9
            if ($this->getAttribute(($context["this"] ?? null), "isCustomCssEnabled", [], "method")) {
                // line 10
                echo "        <style rel=\"stylesheet\" media=\"screen\" type=\"text/css\" data-custom-css>
        ";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCustomCssText", [], "method"), "html", null, true);
                echo "
        </style>
    ";
            } else {
                // line 14
                echo "        <script type=\"text/css\" data-custom-css>
        ";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCustomCssText", [], "method"), "html", null, true);
                echo "
        </script>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/ThemeTweaker/themetweaker/custom_css/css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  38 => 14,  32 => 11,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/ThemeTweaker/themetweaker/custom_css/css.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\ThemeTweaker\\themetweaker\\custom_css\\css.twig");
    }
}
