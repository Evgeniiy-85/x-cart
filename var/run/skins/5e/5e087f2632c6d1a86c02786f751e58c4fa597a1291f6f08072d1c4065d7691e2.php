<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/items_list/model/table/category/parts/info.products.twig */
class __TwigTemplate_1dc9e995755f897b681c0e33b12f3508d9099f136f6bfd02b32703562a88a1ba extends \XLite\Core\Templating\Twig\Template
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
<a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "category_products", "", ["id" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getCategoryId", [], "method")]]), "html", null, true);
        echo "\"class=\"count-link\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getProducts", [0 => null, 1 => true], "method"), "html", null, true);
        echo "</a>";
        ob_start();
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "hasSubcategories", [], "method")) {
            // line 9
            echo "(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getProducts", [0 => $this->getAttribute(($context["this"] ?? null), "getProductsCountCondition", [], "method"), 1 => true], "method"), "html", null, true);
            echo ")
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/items_list/model/table/category/parts/info.products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  28 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/items_list/model/table/category/parts/info.products.twig", "");
    }
}