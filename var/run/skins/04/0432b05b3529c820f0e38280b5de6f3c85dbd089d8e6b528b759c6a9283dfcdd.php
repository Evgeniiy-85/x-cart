<?php

/* E:\Server\projects\x-cart\skins\mail\common\order\invoice\parts\title.twig */
class __TwigTemplate_9f42b51afa19ace8d867d47f3b0d3ac99e46a9c28016fa5b6ea158e0cb7dc655 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td>
    <h2 class=\"invoice\">
        <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getOrderCustomerUrl", [], "method"), "html", null, true);
        echo "\">
            ";
        // line 9
        echo $this->getAttribute(($context["this"] ?? null), "getInvoiceTitle", [], "method");
        echo "
        </a>
    </h2>
    <div class=\"subhead\">
        <div class=\"subhead-item order-date\">
            ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatTime", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getDate", [], "method")], "method"), "html", null, true);
        echo "
        </div>
        <div class=\"subhead-item grand-total grand-total-head\">
            ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Grand total"]), "html", null, true);
        echo ": ";
        echo $this->getAttribute(($context["this"] ?? null), "getOrderTotal", [], "method");
        echo "
        </div>
    </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\mail\\common\\order\\invoice\\parts\\title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 17,  35 => 14,  27 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\mail\\common\\order\\invoice\\parts\\title.twig", "");
    }
}
