<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.briefDescription.twig */
class __TwigTemplate_ee0e270ba592ca9bab7521d2a2c8c36a8d228ae8b1cc8fed100105c405e02f3a extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "briefDescription", []) || $this->getAttribute(($context["this"] ?? null), "isPreview", [], "method"))) {
            // line 8
            echo "  <div class=\"brief-descr product-description\" ";
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getFieldMetadata", [0 => "briefDescription"], "method")], "method");
            echo " >";
            echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getProcessedBriefDescription", [], "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.briefDescription.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.briefDescription.twig", "");
    }
}
