<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.type.twig */
class __TwigTemplate_f2a128412fabef8683fb4f197f8ed326f67b1f8741e67001567d1ee9b34c3b0b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "hasField", [0 => "type"], "method")) {
            // line 8
            echo "  <li class=\"type\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Select\\AddressType", "fieldName" => "destination_type", "value" => $this->getAttribute(($context["this"] ?? null), "getType", [], "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Type"])]]), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.type.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.type.twig", "");
    }
}
