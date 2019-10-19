<?php

/* form_field/inline/input/text/integer/product_quantity.twig */
class __TwigTemplate_9a35d1e8aa64d99420cd968b663a9dd4756acabba92f173941b55e000b741198 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getInventoryEnabled", [], "method")) {
            // line 6
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("form_field/inline/view.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("form_field/inline/view.twig", "form_field/inline/input/text/integer/product_quantity.twig", 6)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        } else {
            // line 8
            echo "  &infin;
";
        }
    }

    public function getTemplateName()
    {
        return "form_field/inline/input/text/integer/product_quantity.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/inline/input/text/integer/product_quantity.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_field\\inline\\input\\text\\integer\\product_quantity.twig");
    }
}
