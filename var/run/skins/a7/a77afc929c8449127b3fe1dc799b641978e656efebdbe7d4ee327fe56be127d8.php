<?php

/* E:\Server\projects\x-cart\skins\admin\modules\CDev\Paypal\items_list\payment\methods\parts\action.right.after.expressCheckout.twig */
class __TwigTemplate_c22765ccf0d53101ab90c5dc8aa889195d1b876d509c46700b2cdb944a18499e extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getReferralPageURL", [], "method") || $this->getAttribute(($context["this"] ?? null), "getKnowledgeBasePageURL", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method"))) {
            // line 7
            echo "  <div class=\"learn-more\">
    ";
            // line 8
            if ($this->getAttribute(($context["this"] ?? null), "getKnowledgeBasePageURL", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method")) {
                // line 9
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getKnowledgeBasePageURL", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Learn More"]), "html", null, true);
                echo "</a>
    ";
            }
            // line 11
            echo "    ";
            if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getReferralPageURL", [], "method") && $this->getAttribute(($context["this"] ?? null), "getKnowledgeBasePageURL", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method"))) {
                // line 12
                echo "      <span>&amp;</span>
    ";
            }
            // line 14
            echo "  
    ";
            // line 15
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getReferralPageURL", [], "method")) {
                // line 16
                echo "  
    ";
                // line 17
                if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "isInContextSignUpAvailable", [], "method")) {
                    // line 18
                    echo "    <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getReferralPageURL", [], "method"), "html", null, true);
                    echo "\" target=\"PPFrame\" data-paypal-button=\"true\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sign Up"]), "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 20
                    echo "    <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getReferralPageURL", [], "method"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sign Up"]), "html", null, true);
                    echo "</a>
    ";
                }
                // line 22
                echo "  
    ";
            }
            // line 24
            echo "  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\Paypal\\items_list\\payment\\methods\\parts\\action.right.after.expressCheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  67 => 22,  59 => 20,  51 => 18,  49 => 17,  46 => 16,  44 => 15,  41 => 14,  37 => 12,  34 => 11,  26 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\Paypal\\items_list\\payment\\methods\\parts\\action.right.after.expressCheckout.twig", "");
    }
}
