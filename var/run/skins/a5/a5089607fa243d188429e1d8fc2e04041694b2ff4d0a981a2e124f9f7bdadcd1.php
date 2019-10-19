<?php

/* /home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/title.twig */
class __TwigTemplate_f0ff2f9104208d1644a59687bdbf11451d47db3ffd22e93793960c0b5e8b4f8e extends \XLite\Core\Templating\Twig\Template
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
    <div style=\"display: inline-block; width: 100%\">
        <h2 class=\"invoice\">";
        // line 8
        echo $this->getAttribute(($context["this"] ?? null), "getInvoiceTitle", [], "method");
        echo "</h2>
        <div class=\"subhead\">
            <div class=\"subhead-item order-date\">
                ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatTime", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getDate", [], "method")], "method"), "html", null, true);
        echo "
            </div>
            <div class=\"subhead-item grand-total grand-total-head\">
                ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Grand total"]), "html", null, true);
        echo ": ";
        echo $this->getAttribute(($context["this"] ?? null), "getOrderTotal", [], "method");
        echo "
            </div>
        </div>
    </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  29 => 11,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/title.twig", "");
    }
}
