<?php

/* header/parts/canonical.twig */
class __TwigTemplate_be5f258ea4d3ec7be7ed00834e3482eec81e0cced6cad92f4c3a4fb2b5ee4f9e extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getCanonicalURL", [], "method")) {
            // line 8
            echo "  <link rel=\"canonical\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCanonicalURL", [], "method"), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "header/parts/canonical.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header/parts/canonical.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\canonical.twig");
    }
}
