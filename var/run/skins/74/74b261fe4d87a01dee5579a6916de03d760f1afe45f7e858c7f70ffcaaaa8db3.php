<?php

/* E:\Server\projects\x-cart\skins\admin\modules\CDev\Paypal\settings\ExpressCheckout\payment_status.twig */
class __TwigTemplate_993f5e1b570dcc4d7e758bc9db32c1027718f99e4767b871d54c6bd305fc3924 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "paymentMethod", []), "isConfigured", [], "method")) {
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Don't have account yet?"]), "html", null, true);
            echo "
  ";
            // line 8
            if ($this->getAttribute(($context["this"] ?? null), "isInContextSignUpAvailable", [], "method")) {
                // line 9
                echo "  <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSignUpUrl", [], "method"), "html", null, true);
                echo "\" target=\"PPFrame\" data-paypal-button=\"true\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sign Up Now"]), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 11
                echo "  <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSignUpUrl", [], "method"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sign Up Now"]), "html", null, true);
                echo "</a>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\Paypal\\settings\\ExpressCheckout\\payment_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  27 => 9,  25 => 8,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\Paypal\\settings\\ExpressCheckout\\payment_status.twig", "");
    }
}
