<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.product-description.twig */
class __TwigTemplate_e130bb6bf03af2953edf6e9222ae64216185251042988d03bf91506fd5280c52 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"description product-description\" ";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getFieldMetadata", [0 => "description"], "method")], "method");
        echo " >";
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getProcessedDescription", [], "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.product-description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.product-description.twig", "");
    }
}
