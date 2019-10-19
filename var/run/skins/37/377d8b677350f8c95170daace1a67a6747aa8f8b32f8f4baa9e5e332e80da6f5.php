<?php

/* E:\Server\projects\x-cart\skins\mail\common\order\invoice\parts\bottom.statuses.twig */
class __TwigTemplate_9544500e56456fd47e202970f21ef158adda73502157247de179c5667ba4fa2b extends \XLite\Core\Templating\Twig\Template
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
            echo "  ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getShippingStatus", [], "method")) {
                // line 9
                echo "    <td class=\"shipping-status\">
      <div class=\"wrapper\">
        <strong class=\"title\">";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Shipping status"]), "html", null, true);
                echo ":</strong>
        ";
                // line 12
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "shippingStatus", []), "getCustomerName", [], "method");
                echo "
      </div>
    </td>
  ";
            }
        }
        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isPaymentSectionVisible", [], "method")) {
            // line 19
            echo "  ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentStatus", [], "method")) {
                // line 20
                echo "    <td class=\"payment-status\">
      <div class=\"wrapper\">
        <strong class=\"title\">";
                // line 22
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Payment status"]), "html", null, true);
                echo ":</strong>
        ";
                // line 23
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "paymentStatus", []), "getCustomerName", [], "method");
                echo "
      </div>
    </td>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\mail\\common\\order\\invoice\\parts\\bottom.statuses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  55 => 22,  51 => 20,  48 => 19,  46 => 18,  43 => 17,  35 => 12,  31 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\mail\\common\\order\\invoice\\parts\\bottom.statuses.twig", "");
    }
}
