<?php

/* lazy_load/body.twig */
class __TwigTemplate_57a1289a3fe8079c711e7dc1978b2040322c96434e7160ac356aac38ea6e2c97 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div ";
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getAttributes", [], "method")], "method");
        echo ">
  ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "getLazyContent", [], "method");
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "lazy_load/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 5,  19 => 4,);
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
 # Lazy load container
 #}
<div {{ this.printTagAttributes(this.getAttributes())|raw }}>
  {{ this.getLazyContent()|raw }}
</div>", "lazy_load/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\lazy_load\\body.twig");
    }
}
