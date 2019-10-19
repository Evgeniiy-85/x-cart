<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/header/parts/preloaded_labels.twig */
class __TwigTemplate_6c313dc01049c753c57ff073d903d99c381f1130d032373b2fd3f97bbf4d1a28 extends \XLite\Core\Templating\Twig\Template
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
        return "/home/vagrant/next/output/xcart/src/skins/admin/header/parts/preloaded_labels.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/header/parts/preloaded_labels.twig", "");
    }
}
