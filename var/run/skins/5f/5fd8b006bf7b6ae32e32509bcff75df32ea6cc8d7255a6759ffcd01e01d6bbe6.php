<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.subtotal.twig */
class __TwigTemplate_acd9a42974e0be8d062397a371bfd00ed9dd3150cccafa892328624b8914e0e9 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div class=\"items-row clearfix\">
  <a href=\"#\" ";
        // line 9
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getItemsCountLinkAttributes", [], "method")], "method");
        echo ">";
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["X items in bag", ["count" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "countQuantity", [], "method")]]);
        echo "</a>
  <span class=\"price\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getDisplaySubtotal", [], "method"), "currency" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "getCurrency", [], "method")]]), "html", null, true);
        echo "
  </span>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.subtotal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 11,  23 => 9,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.subtotal.twig", "");
    }
}
