<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/order/page/parts/shipping.address.twig */
class __TwigTemplate_51da379fcd746d6b0d7bbd0e26f8bcf2d8820f84aaf2895750e7c97fd94e63e7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isShippingAddressVisible", [], "method")) {
            // line 7
            echo "  <div class=\"address\">
    <strong>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Shipping address"]), "html", null, true);
            echo "</strong>
  
    <div class=\"address-section shipping-address-section\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "orderForm", []), "displayComplexField", [0 => "shippingAddress"], "method"), "html", null, true);
            echo "</div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/order/page/parts/shipping.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  24 => 8,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/order/page/parts/shipping.address.twig", "");
    }
}
