<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.state.twig */
class __TwigTemplate_fe31a3ea97f4962733ec8d7151e135cb86ce4ef7a4bfd059136ae3cb80856182 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isStateFieldVisible", [], "method")) {
            // line 8
            echo "  <li class=\"state\">
    ";
            // line 9
            if ($this->getAttribute(($context["this"] ?? null), "hasField", [0 => "country_code"], "method")) {
                // line 10
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Select\\State", "fieldName" => "destination_state", "value" => $this->getAttribute(($context["this"] ?? null), "getState", [], "method"), "style" => "field-required", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["State"]), "required" => "true"]]), "html", null, true);
                echo "
    ";
            }
            // line 12
            echo "    ";
            if ( !$this->getAttribute(($context["this"] ?? null), "hasField", [0 => "country_code"], "method")) {
                // line 13
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Select\\State", "fieldName" => "destination_state", "value" => $this->getAttribute(($context["this"] ?? null), "getState", [], "method"), "style" => "field-required", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["State"]), "required" => "true", "country" => $this->getAttribute(($context["this"] ?? null), "getCountryCode", [], "method")]]), "html", null, true);
                echo "
    ";
            }
            // line 15
            echo "  </li>
";
        }
        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute(($context["this"] ?? null), "isCustomStateFieldVisible", [], "method")) {
            // line 19
            echo "  <li class=\"state\">
    ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "destination_custom_state", "value" => $this->getAttribute(($context["this"] ?? null), "getOtherState", [], "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["State"])]]), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.state.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  53 => 19,  51 => 18,  48 => 17,  44 => 15,  38 => 13,  35 => 12,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.state.twig", "");
    }
}
