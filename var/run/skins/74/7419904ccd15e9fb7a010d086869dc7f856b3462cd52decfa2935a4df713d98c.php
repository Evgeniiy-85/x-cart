<?php

/* lazy_load/body.twig */
class __TwigTemplate_fd4cdae2e9cc7d0117b30ea135c3e278745983375da06e35eb6cd7f30c7768ef extends \XLite\Core\Templating\Twig\Template
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
        return new Twig_Source("", "lazy_load/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\lazy_load\\body.twig");
    }
}
