<?php

/* header/parts/layout_options.twig */
class __TwigTemplate_82fc865cfd358358cff23545dc61332e3d9b233d640e675bd9a3ab5a106e19c6 extends \XLite\Core\Templating\Twig\Template
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
  var xliteLayoutOptions = {
    cloud_zoom: ";
        // line 9
        echo (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "layout", []), "isCloudZoomAllowed", [], "method")) ? ("true") : ("false"));
        echo ",
    lazy_load: ";
        // line 10
        echo (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "layout", []), "isLazyLoadEnabled", [], "method")) ? ("true") : ("false"));
        echo ",
  };
</script>
";
    }

    public function getTemplateName()
    {
        return "header/parts/layout_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header/parts/layout_options.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\layout_options.twig");
    }
}
