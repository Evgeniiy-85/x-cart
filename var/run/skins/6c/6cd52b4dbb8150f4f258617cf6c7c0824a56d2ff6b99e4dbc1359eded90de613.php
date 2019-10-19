<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/order/page/parts/action.shipping_status.twig */
class __TwigTemplate_96846dcf7721b98ea8ac7e11141c7e8004b88fbc507d4d45f0c40df51f1b7929 extends \XLite\Core\Templating\Twig\Template
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
        echo "  <div class=\"status shipping-status\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Select\\OrderStatus\\Shipping", "label" => "Shipping status", "fieldName" => "shippingStatus", "order" => $this->getAttribute(($context["this"] ?? null), "order", []), "attributes" => $this->getAttribute(($context["this"] ?? null), "getOrderStatusAttributes", [0 => "shipping"], "method")]]), "html", null, true);
        echo "
    ";
        // line 10
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayBackorderWarning", [], "method")) {
            // line 11
            echo "      <div class=\"info-status-warning\">
        ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "text" => $this->getAttribute(($context["this"] ?? null), "getBackorderWarningText", [], "method"), "isImageTag" => "true", "className" => "warning-icon", "imageClass" => "fa fa-exclamation-triangle"]]), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 15
        echo "  </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/order/page/parts/action.shipping_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  36 => 12,  33 => 11,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/order/page/parts/action.shipping_status.twig", "");
    }
}
