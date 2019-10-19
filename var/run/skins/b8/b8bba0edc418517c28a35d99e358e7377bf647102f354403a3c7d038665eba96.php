<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.billing.same.twig */
class __TwigTemplate_0326fb2d6d10303e06c6a410ed68e6071f64e20042e0781789ed7055d5fc57f9 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isSameAddressVisible", [], "method")) {
            // line 8
            echo "  <li class=\"same-address\">
    <input type=\"hidden\" name=\"same_address\" value=\"0\" />
    <div class=\"checkbox\">
    <label>
    \t<input id=\"same_address\" type=\"checkbox\" name=\"same_address\" value=\"1\" ";
            // line 12
            if ($this->getAttribute(($context["this"] ?? null), "isSameAddress", [], "method")) {
                echo " checked=\"checked\" ";
            }
            echo " />
    \t";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["The same as shipping"]), "html", null, true);
            echo "
    </label>
    </div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.billing.same.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  30 => 12,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.billing.same.twig", "");
    }
}
