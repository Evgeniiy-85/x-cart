<?php

/* E:\Server\projects\x-cart\skins\admin\order\packing_slip\parts\body\totals.twig */
class __TwigTemplate_0024534638526c0fe23194f74fe4e5c93bc18dc0fa15bb4e2859fd5c6c8762a1 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "packing_slip.items.totals.before"]]), "html", null, true);
        echo "
<td class=\"total-title empty\"></td>
<td class=\"total-title\">";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Total"]);
        echo ":</td>
<td class=\"total-item\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTotalQty", [], "method"), "html", null, true);
        echo "</td>
<td class=\"total-item\"></td>
";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "packing_slip.items.totals.after"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\packing_slip\\parts\\body\\totals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  31 => 10,  27 => 9,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\packing_slip\\parts\\body\\totals.twig", "");
    }
}