<?php

/* modules/XC/Reviews/product/items_list/rating.twig */
class __TwigTemplate_346c1295b53bdfb42f3b71833e66b0a7e5ba5b52855f491e29fc9f9c37aa4282 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
 ";
        // line 5
        $this->startForm("\\XLite\\Module\\XC\\Reviews\\View\\Form\\AverageRating", ["product_id" => $this->getAttribute(($context["this"] ?? null), "getRatedProductId", [], "method"), "target_widget" => "\\\\XLite\\\\Module\\\\XC\\\\Reviews\\\\View\\\\Customer\\\\ProductInfo\\\\ItemsList\\\\AverageRating"]);        // line 6
        echo "
 ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "reviews.product.rating.average", "product" => $this->getAttribute(($context["this"] ?? null), "getRatedProduct", [], "method"), "widgetMode" => $this->getAttribute(($context["this"] ?? null), "getWidgetMode", [], "method")]]), "html", null, true);
        echo "

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/product/items_list/rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 7,  23 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Reviews/product/items_list/rating.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\modules\\XC\\Reviews\\product\\items_list\\rating.twig");
    }
}
