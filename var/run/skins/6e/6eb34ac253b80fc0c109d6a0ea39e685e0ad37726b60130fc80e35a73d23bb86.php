<?php

/* E:\Server\projects\x-cart\skins\admin\modules\CDev\FeaturedProducts\items_list\product\featured\parts\columns\category.twig */
class __TwigTemplate_ea5034cbab6e7ffac74f0e9a3100f5ef2f9a87499eafa3280eb86cc04e893bb1 extends \XLite\Core\Templating\Twig\Template
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
<td><a class=\"category\" href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "category", "", ["category_id" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "category", []), "getCategoryId", [], "method")]]), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "category", []), "getName", [], "method"), "html", null, true);
        echo "</a></td>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\FeaturedProducts\\items_list\\product\\featured\\parts\\columns\\category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\FeaturedProducts\\items_list\\product\\featured\\parts\\columns\\category.twig", "");
    }
}
