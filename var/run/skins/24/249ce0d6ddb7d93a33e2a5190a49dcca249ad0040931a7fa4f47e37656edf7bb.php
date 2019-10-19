<?php

/* E:\Server\projects\x-cart\skins\admin\modules\CDev\FeaturedProducts\items_list\product\featured\parts\columns\sku.twig */
class __TwigTemplate_69dcc315a4fe462c21a3e3c508af276d9628c8a88828010c10e508666e0b5d2e extends \XLite\Core\Templating\Twig\Template
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
<td>";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getSku", [], "method");
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\FeaturedProducts\\items_list\\product\\featured\\parts\\columns\\sku.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\FeaturedProducts\\items_list\\product\\featured\\parts\\columns\\sku.twig", "");
    }
}
