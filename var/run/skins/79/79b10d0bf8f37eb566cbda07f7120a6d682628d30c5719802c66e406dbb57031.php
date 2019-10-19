<?php

/* jscontainer/parts/register_resources.twig */
class __TwigTemplate_b223e06e218c98b10880c18bc3645e4cf81c5c8a29cd7ceb551eeb05a3e8b4ba extends \XLite\Core\Templating\Twig\Template
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
        echo "<script>
  (function () {
    var resources = ";
        // line 8
        echo $this->getAttribute(($context["this"] ?? null), "getResourceRegistry", [], "method");
        echo ";

    if (window.CoreAMD !== undefined) {
      require('js/core', function (core) {
        core.registerResources(resources);
        core.htmlResourcesLoadDeferred.resolve();
      });
    } else {
      document.addEventListener('amd-ready', function (event) {
        require('js/core', function (core) {
          core.registerResources(resources);
          core.htmlResourcesLoadDeferred.resolve();
        });
      });
    }
  })();
</script>
";
    }

    public function getTemplateName()
    {
        return "jscontainer/parts/register_resources.twig";
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
        return new Twig_Source("", "jscontainer/parts/register_resources.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\jscontainer\\parts\\register_resources.twig");
    }
}
