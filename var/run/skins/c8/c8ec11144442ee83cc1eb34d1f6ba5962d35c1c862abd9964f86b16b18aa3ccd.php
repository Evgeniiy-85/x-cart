<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/items_list/order/parts/actions.reorder.twig */
class __TwigTemplate_d932ae4db7653e00d248108c55df29eff3608221437d5768a5f9cd899b4fdb58 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "showReorder", [0 => $this->getAttribute(($context["this"] ?? null), "order", [])], "method")) {
            // line 8
            echo "  <li class=\"reorder\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "label" => "Re-order", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "cart", "add_order", ["order_number" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "orderNumber", [])]])]]), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/items_list/order/parts/actions.reorder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/items_list/order/parts/actions.reorder.twig", "");
    }
}
