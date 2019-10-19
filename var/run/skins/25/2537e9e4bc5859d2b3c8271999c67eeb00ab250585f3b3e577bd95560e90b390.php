<?php

/* layout/content/category_description.twig */
class __TwigTemplate_b3a72b2e1826fa53a71910c46b85557bea571208e183dccdf7905cff20278892 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 5
        if (($this->getAttribute(($context["this"] ?? null), "getDescription", [], "method") || $this->getAttribute(($context["this"] ?? null), "isInInlineEditorMode", [], "method"))) {
            // line 6
            echo "<div class=\"category-description\" ";
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "getCategory", [], "method"), "getFieldMetadata", [0 => "description"], "method")], "method");
            echo ">";
            echo $this->getAttribute(($context["this"] ?? null), "getDescription", [], "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/content/category_description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/content/category_description.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\layout\\content\\category_description.twig");
    }
}
