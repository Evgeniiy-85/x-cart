<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/address/order/parts/shipping.twig */
class __TwigTemplate_d597ea9a9dd9b3d97d7c06fba92d04f276f84a4825f3fce19cb26c68d6371865 extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getShippingContainerAttributes", [], "method")], "method");
        echo ">
  <h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Shipping address"]), "html", null, true);
        echo "</h3>
  <div class=\"expander\"><a href=\"#\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Show"]), "html", null, true);
        echo "</a></div>
  <div class=\"collapser\"><a href=\"#\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Hide"]), "html", null, true);
        echo "</a></div>
  ";
        // line 11
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayAddressButton", [], "method")) {
            // line 12
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\SimpleLink", "label" => "Address book", "style" => "btn regular-button address-book", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "order", "", ["order_number" => $this->getAttribute($this->getAttribute(            // line 15
($context["this"] ?? null), "order", []), "orderNumber", []), "atype" => "s", "widget" => "XLite\\View\\SelectAddressOrder"]])]]), "html", null, true);
            // line 16
            echo "
  ";
        }
        // line 18
        echo "  <div class=\"same-note\">
    <span>";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Order will be delivered to the billing address."]), "html", null, true);
        echo "</span>
    <a href=\"#\">";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Change"]), "html", null, true);
        echo "</a>
  </div>
  ";
        // line 22
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Model\\Address\\Order", "template" => $this->getAttribute(($context["this"] ?? null), "getModelTemplate", [], "method"), "addressType" => "shipping"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/address/order/parts/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  55 => 20,  51 => 19,  48 => 18,  44 => 16,  42 => 15,  40 => 12,  38 => 11,  34 => 10,  30 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/address/order/parts/shipping.twig", "");
    }
}
