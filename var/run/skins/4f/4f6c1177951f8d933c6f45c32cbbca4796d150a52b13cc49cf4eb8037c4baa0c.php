<?php

/* items_list/product/parts/common.product-price.twig */
class __TwigTemplate_66dd7ab6b697a322c40ca76983815f2574b23bad55ab00b7326e5d60b431178d extends \XLite\Core\Templating\Twig\Template
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
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Price", "product" => $this->getAttribute(($context["this"] ?? null), "product", []), "displayOnlyPrice" => "1", "allowRange" => "1"]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.product-price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 10,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/product/parts/common.product-price.twig", "/home/vagrant/next/output/xcart/src/skins/customer/items_list/product/parts/common.product-price.twig");
    }
}
