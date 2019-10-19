<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/shipping/address.create.twig */
class __TwigTemplate_54e2ded68eb0a0fa180343a641cb98b08fb831249a7854d96bdcdd3274d387c0 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isAnonymous", [], "method")) {
            // line 8
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("modules/XC/FastLaneCheckout/blocks/address_form/address.create.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("modules/XC/FastLaneCheckout/blocks/address_form/address.create.twig", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/shipping/address.create.twig", 8)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/shipping/address.create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/shipping/address.create.twig", "");
    }
}
