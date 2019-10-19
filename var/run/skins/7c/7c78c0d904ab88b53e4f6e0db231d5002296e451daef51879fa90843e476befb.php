<?php

/* items_list/product/parts/common.button-add2cart.twig */
class __TwigTemplate_7d1ff8e155fa68004773b672d3077c9804769cdc60759420fe87b762279d7c5c extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute(($context["this"] ?? null), "isShowAdd2CartBlock", [], "method") && $this->getAttribute(($context["this"] ?? null), "getAdd2CartBlockWidget", [], "method"))) {
            // line 8
            echo "    ";
            echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "getAdd2CartBlockWidget", [], "method"), "display", [], "method");
            echo "
";
        }
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "itemsList.product.table.customer.add2cart"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.button-add2cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/product/parts/common.button-add2cart.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\items_list\\product\\parts\\common.button-add2cart.twig");
    }
}
