<?php

/* header/parts/preloaded_labels.twig */
class __TwigTemplate_df9a6cb0fddce6bb9984692e74b29f5fc7b078c79d153de825cd7d680d84a804 extends \XLite\Core\Templating\Twig\Template
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
<script type=\"text/javascript\">
  window.xlite_preloaded_labels =";
        // line 8
        echo $this->getAttribute(($context["this"] ?? null), "getPreloadedLabelsJSON", [], "method");
        echo ";
</script>
";
    }

    public function getTemplateName()
    {
        return "header/parts/preloaded_labels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
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
 # Head list children
 #
 # @ListChild (list=\"head\", weight=\"1500\")
 #}

<script type=\"text/javascript\">
  window.xlite_preloaded_labels ={{ this.getPreloadedLabelsJSON()|raw }};
</script>
", "header/parts/preloaded_labels.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\header\\parts\\preloaded_labels.twig");
    }
}
