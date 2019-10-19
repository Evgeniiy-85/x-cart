<?php

/* E:\Server\projects\x-cart\skins\admin\order\page\parts\payment.method.twig */
class __TwigTemplate_e60723d081945adad3d0418d5b68482d24e183b24417ca345d4fb5972e2d14b0 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"method\">
  <ul>
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "orderForm", []), "getComplexField", [0 => "paymentMethods"], "method")) {
            // line 10
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "orderForm", []), "getComplexField", [0 => "paymentMethods"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 11
                echo "        <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", [], "method"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentMethodName", [], "method")) {
            // line 14
            echo "      <li class=\"method-name\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentMethodName", [], "method")]);
            echo "</li>
    ";
        } else {
            // line 16
            echo "      <li class=\"method-name\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["n/a"]), "html", null, true);
            echo "</li>
    ";
        }
        // line 18
        echo "  </ul>
  ";
        // line 19
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentTransactionId", [], "method")) {
            // line 20
            echo "    <p class='transaction'>
      ";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Transaction ID"]), "html", null, true);
            echo ": <br>
      ";
            // line 22
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentTransactionId", [], "method"), "html", null, true);
            echo "
    </p>
  ";
        }
        // line 25
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "orderForm", []), "getComplexField", [0 => "paymentData"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 26
            echo "    <div class=\"payment-method-data\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", [], "method"), "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\page\\parts\\payment.method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  78 => 26,  73 => 25,  67 => 22,  63 => 21,  60 => 20,  58 => 19,  55 => 18,  49 => 16,  43 => 14,  40 => 13,  31 => 11,  26 => 10,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\page\\parts\\payment.method.twig", "");
    }
}
