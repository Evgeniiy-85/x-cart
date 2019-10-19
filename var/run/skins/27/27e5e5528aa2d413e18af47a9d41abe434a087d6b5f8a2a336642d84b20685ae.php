<?php

/* header/parts/preloaded_labels.twig */
class __TwigTemplate_4684ffa4d3ad304e33ee6754e6f9617c146019b836c6f6c52b4582b1e404336e extends \XLite\Core\Templating\Twig\Template
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
<script>
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
        return new Twig_Source("", "header/parts/preloaded_labels.twig", "/home/vagrant/next/output/xcart/src/skins/customer/header/parts/preloaded_labels.twig");
    }
}
