<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/items_list/product/parts/list.button-add2cart.twig */
class __TwigTemplate_6fe14efd695afe046c908eb1b8650940d50b91e8961f5248e1cc38f1244b3a37 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayAdd2CartButton", [], "method")) {
            // line 8
            echo "  <div class=\"add-to-cart-button\">
    ";
            // line 9
            if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "isAllStockInCart", [], "method")) {
                // line 10
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "label" => "Add to cart", "style" => ("regular-main-button add2cart add-to-cart productid-" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "product_id", []))]]), "html", null, true);
                echo "
    ";
            }
            // line 12
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/items_list/product/parts/list.button-add2cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/items_list/product/parts/list.button-add2cart.twig", "");
    }
}
