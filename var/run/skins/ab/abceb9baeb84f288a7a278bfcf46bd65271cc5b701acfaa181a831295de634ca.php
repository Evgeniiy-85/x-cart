<?php

/* /home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.twig */
class __TwigTemplate_da763d7215d111a6cdb89df8254e0677e3940085ec65ae1a7410f485c3a2feab extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isShippingSectionVisible", [], "method")) {
            // line 8
            echo "  <td class=\"address shipping\">
    <div class=\"wrapper";
            // line 9
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "trackingNumbers", []), "isEmpty", [], "method")) {
                echo " tracking-info-section-included";
            }
            echo "\">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "invoice.bottom.method.shipping", "baddress" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "profile", []), "billing_address", []), "saddress" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "profile", []), "shipping_address", [])]]), "html", null, true);
            echo "
    </div>
  </td>
";
        }
        // line 14
        echo "
";
        // line 15
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isPaymentSectionVisible", [], "method")) {
            // line 16
            echo "  <td class=\"address payment";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isShippingSectionVisible", [], "method")) {
                echo " payment-wrapping";
            }
            echo "\">
    <div class=\"wrapper\">
    ";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "invoice.bottom.method.payment", "baddress" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "profile", []), "billing_address", []), "saddress" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "profile", []), "shipping_address", [])]]), "html", null, true);
            echo "
    </div>
  </td>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  45 => 16,  43 => 15,  40 => 14,  33 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.twig", "");
    }
}
