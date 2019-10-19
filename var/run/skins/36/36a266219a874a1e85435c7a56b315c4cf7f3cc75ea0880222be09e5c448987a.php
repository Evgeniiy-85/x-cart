<?php

/* E:\Server\projects\x-cart\skins\common\order\invoice\parts\bottom.methods.payment.twig */
class __TwigTemplate_9a7fa7274162ace1330371fbb29cf277a64d7754cdaae982190ee62cb8b23f7b extends \XLite\Core\Templating\Twig\Template
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
<div class=\"method-box\">
  <strong class=\"method-title\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Payment method"]), "html", null, true);
        echo "</strong>
  ";
        // line 9
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getVisiblePaymentMethods", [], "method")) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getVisiblePaymentMethods", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 11
                echo "      ";
                echo $this->getAttribute($context["m"], "getTitle", [], "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  ";
        } elseif ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentMethodName", [], "method")) {
            // line 14
            echo "    ";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentMethodName", [], "method")]);
            echo "
  ";
        } else {
            // line 16
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["n/a"]), "html", null, true);
            echo "
  ";
        }
        // line 18
        echo "  <p><br /></p>
  ";
        // line 19
        if (( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isOfflineProcessorUsed", [], "method") && $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentTransactionId", [], "method"))) {
            // line 20
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Transaction ID"]), "html", null, true);
            echo ": ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentTransactionId", [], "method"), "html", null, true);
            echo "
  ";
        }
        // line 22
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getPaymentTransactionData", [0 => 1], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "    <div class=\"sub-data\">
      <strong class=\"title\">";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["item"], "title", [])]), "html", null, true);
            echo "</strong>
      <span class=\"value\">";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", []), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  <div class=\"sub-data\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\common\\order\\invoice\\parts\\bottom.methods.payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  83 => 25,  79 => 24,  76 => 23,  71 => 22,  63 => 20,  61 => 19,  58 => 18,  52 => 16,  46 => 14,  43 => 13,  34 => 11,  29 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\common\\order\\invoice\\parts\\bottom.methods.payment.twig", "");
    }
}
