<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/welcome_block/root_admin/block.items.twig */
class __TwigTemplate_37b3907ca73e0f2a960c8f1b1c86bd6f4d5be1391666cf1214b722b7e7a98a19 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"step-items\">
  <ul>
    <li class=\"item-store\">";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Specify your _store information_", ["URL" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "settings", "", ["page" => "Company"]])]]);
        echo "</li>
    <li class=\"item-products\">";
        // line 10
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add your _products_", ["URL" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "product_list"])]]);
        echo "</li>
    <li class=\"item-taxes\">";
        // line 11
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Setup _address zones_ and _taxes_", ["URL1" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "zones"]), "URL2" => $this->getAttribute(($context["this"] ?? null), "getTaxesURL", [], "method")]]);
        echo "</li>
    <li class=\"item-shipping\">";
        // line 12
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Configure _shipping methods_", ["URL" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "shipping_methods"])]]);
        echo "</li>
    <li class=\"item-payment\">";
        // line 13
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Choose _payment methods_", ["URL" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "payment_settings"])]]);
        echo "</li>
    ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "admin-welcome-items"]]), "html", null, true);
        echo "
  </ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/welcome_block/root_admin/block.items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 13,  36 => 12,  32 => 11,  28 => 10,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/welcome_block/root_admin/block.items.twig", "");
    }
}
