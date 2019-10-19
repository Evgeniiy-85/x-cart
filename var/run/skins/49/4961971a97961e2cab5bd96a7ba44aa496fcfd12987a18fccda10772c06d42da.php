<?php

/* form_field/inline/input/text/price.twig */
class __TwigTemplate_760ef408199d25a5c0cc6a3b3f69bb33098c361e3ab5a2192ba1ec4faf8b0bc4 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "currency", []), "getPrefix", [], "method")) {
            // line 6
            echo "  <span class=\"symbol";
            if ( !$this->getAttribute(($context["this"] ?? null), "isSymbolVisible", [0 => $this->getAttribute(($context["this"] ?? null), "singleField", [])], "method")) {
                echo " hidden";
            }
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "currency", []), "getPrefix", [], "method");
            echo "</span>
";
        }
        // line 8
        echo "<span class=\"value\">";
        echo $this->getAttribute(($context["this"] ?? null), "getViewValue", [0 => $this->getAttribute(($context["this"] ?? null), "singleField", [])], "method");
        echo "</span>
";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "currency", []), "getSuffix", [], "method")) {
            // line 10
            echo "  <span class=\"symbol ";
            if ( !$this->getAttribute(($context["this"] ?? null), "isSymbolVisible", [0 => $this->getAttribute(($context["this"] ?? null), "singleField", [])], "method")) {
                echo " hidden";
            }
            echo "\">";
            echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "currency", []), "getSuffix", [], "method");
            echo "</span>
";
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "form_field/inline/input/text/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  41 => 10,  39 => 9,  34 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/inline/input/text/price.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_field\\inline\\input\\text\\price.twig");
    }
}
