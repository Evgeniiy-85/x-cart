<?php

/* E:\Server\projects\x-cart\skins\customer\modules\CDev\Paypal\item_list\product\parts\express_checkout.twig */
class __TwigTemplate_85992734afaa6c9011e2004b2536111bb2250e2fe7e34b7510e877d1a6170510 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayAdd2CartButton", [], "method")) {
            // line 7
            echo "  <div class=\"add-to-cart-button pp-button\">
    ";
            // line 8
            if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "isAllStockInCart", [], "method")) {
                // line 9
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Button\\ProductList\\ExpressCheckout", "productId" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "product_id", [])]]), "html", null, true);
                echo "
    ";
            }
            // line 11
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\CDev\\Paypal\\item_list\\product\\parts\\express_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  26 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\CDev\\Paypal\\item_list\\product\\parts\\express_checkout.twig", "");
    }
}