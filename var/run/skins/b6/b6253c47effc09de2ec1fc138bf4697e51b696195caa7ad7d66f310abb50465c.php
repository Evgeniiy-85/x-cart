<?php

/* /home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/items/item.sku.twig */
class __TwigTemplate_2ff784c356d93003019de45e3592ae13eff9e0a9726c7e3ce8f913f5e6e4f588 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"sku\">
  <span class=\"name\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["SKU"]), "html", null, true);
        echo ": </span>
  <span class=\"sku-value\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getSku", [], "method"), "html", null, true);
        echo "</span>
</li>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/items/item.sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/items/item.sku.twig", "");
    }
}
