<?php

/* E:\Server\projects\x-cart\skins\admin\modules\CDev\FeaturedProducts\items_list\category\parts\info.featured_products.twig */
class __TwigTemplate_fa231cb388d8e1fe9c04dfde907747b0cdd57f2a12bb6eb2bfc66d37b3208430 extends \XLite\Core\Templating\Twig\Template
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
<i class=\"fa fa-star\"></i>
<a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "featured_products", "", ["id" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getCategoryId", [], "method")]]), "html", null, true);
        echo "\" class=\"count-link\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getFeaturedProductsCount", [], "method"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\FeaturedProducts\\items_list\\category\\parts\\info.featured_products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\FeaturedProducts\\items_list\\category\\parts\\info.featured_products.twig", "");
    }
}
