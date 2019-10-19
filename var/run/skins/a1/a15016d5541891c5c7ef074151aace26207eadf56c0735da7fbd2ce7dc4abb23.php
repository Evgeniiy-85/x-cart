<?php

/* E:\Server\projects\x-cart\skins\admin\order\page\parts\action.payment_status.twig */
class __TwigTemplate_14c30e96e03424340bdbfa194c742ccef1e7fd4824a083613e87af4b8b955ce8 extends \XLite\Core\Templating\Twig\Template
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
        ob_start();
        // line 8
        echo "  <div class=\"status payment-status\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Select\\OrderStatus\\Payment", "label" => "Payment status", "fieldName" => "paymentStatus", "order" => $this->getAttribute(($context["this"] ?? null), "order", []), "attributes" => $this->getAttribute(($context["this"] ?? null), "getOrderStatusAttributes", [0 => "payment"], "method")]]), "html", null, true);
        echo "
  </div>
  <div class=\"transaction-details\">
    ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Order\\Details\\Admin\\TransactionDetails", "order" => $this->getAttribute(($context["this"] ?? null), "order", [])]]), "html", null, true);
        echo "
  </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\page\\parts\\action.payment_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\page\\parts\\action.payment_status.twig", "");
    }
}
