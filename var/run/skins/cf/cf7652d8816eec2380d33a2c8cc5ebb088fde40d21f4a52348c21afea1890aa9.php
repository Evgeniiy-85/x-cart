<?php

/* E:\Server\projects\x-cart\skins\admin\order\page\parts\line1.twig */
class __TwigTemplate_5423a40a70276fe724106ad24422c0a5823016c52954ea65a848742a5ccd38e3 extends \XLite\Core\Templating\Twig\Template
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

<div class=\"line-1 clearfix\">
    <div class=\"payment-and-shipping\">
        <div class=\"clearfix\">
            ";
        // line 11
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isPaymentSectionVisible", [], "method")) {
            // line 12
            echo "                <div class=\"order-part payment\">
                    <h4>";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Payment method"]), "html", null, true);
            echo "</h4>
                    <div class=\"box\">";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "order.payment.method"]]), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 17
        echo "
            ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isShippingSectionVisible", [], "method")) {
            // line 19
            echo "                <div class=\"order-part shipping\">
                    <h4>";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Shipping method"]), "html", null, true);
            echo "</h4>
                    <div class=\"box\">";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "order.shipping.method"]]), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 24
        echo "        </div>

        <div class=\"clearfix\">
            ";
        // line 27
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isPaymentSectionVisible", [], "method")) {
            // line 28
            echo "                <div class=\"order-part payment\">
                    <div class=\"box\">";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "order.payment.address"]]), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 32
        echo "
            ";
        // line 33
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isShippingSectionVisible", [], "method")) {
            // line 34
            echo "                <div class=\"order-part shipping\">
                    <div class=\"box\">";
            // line 35
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "order.shipping.address"]]), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 38
        echo "        </div>
    </div>

    <div class=\"actions\">
        ";
        // line 42
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "order.actions"]]), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\page\\parts\\line1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 42,  89 => 38,  83 => 35,  80 => 34,  78 => 33,  75 => 32,  69 => 29,  66 => 28,  64 => 27,  59 => 24,  53 => 21,  49 => 20,  46 => 19,  44 => 18,  41 => 17,  35 => 14,  31 => 13,  28 => 12,  26 => 11,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\page\\parts\\line1.twig", "");
    }
}
