<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.switcher.twig */
class __TwigTemplate_a9e6f47ba3ae7de664a1bd6ff45c7c93391461a3165665adce4a06b0bda04cb3 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"switcher\">
  ";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "canSwitch", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method")) {
            // line 8
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getWarningNote", [], "method")) {
                // line 9
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Checkbox\\PaymentMethod", "fieldOnly" => true, "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "isEnabled", [], "method"), "fieldName" => ("payment_id_" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getMethodId", [], "method")), "methodId" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getMethodId", [], "method"), "disabled" =>  !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "isEnabled", [], "method"), "disabled_title" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getWarningNote", [], "method")]]), "html", null, true);
                echo "

    ";
            } else {
                // line 12
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Checkbox\\PaymentMethod", "fieldOnly" => true, "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "isEnabled", [], "method"), "fieldName" => ("payment_id_" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getMethodId", [], "method")), "methodId" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getMethodId", [], "method")]]), "html", null, true);
                echo "

      ";
                // line 15
                echo "        ";
                // line 16
                echo "      ";
                // line 17
                echo "        ";
                // line 18
                echo "      ";
                // line 19
                echo "
    ";
            }
            // line 21
            echo "  ";
        } else {
            // line 22
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Checkbox\\PaymentMethod", "fieldOnly" => true, "value" => $this->getAttribute(($context["this"] ?? null), "canEnable", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method"), "fieldName" => ("payment_id_" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getMethodId", [], "method")), "methodId" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getMethodId", [], "method"), "disabled" => true, "disabled_title" => (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "isEnabled", [], "method")) ? ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getForcedEnabledNote", [], "method")) : (call_user_func_array($this->env->getFunction('t')->getCallable(), ["This payment method cannot be enabled until you configure it"])))]]), "html", null, true);
            echo "

  ";
        }
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  55 => 22,  52 => 21,  48 => 19,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  34 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.switcher.twig", "");
    }
}
