<?php

/* E:\Server\projects\x-cart\skins\admin\modules\CDev\FeaturedProducts\items_list\product\featured\parts\columns\name.twig */
class __TwigTemplate_790ee11243463e78b8ba5fc4241a0429c3ffb5c17d746311b5920ac58afb4fa4 extends \XLite\Core\Templating\Twig\Template
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
<td><a class=\"name\" href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "product", "", ["product_id" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getProductId", [], "method")]]), "html", null, true);
        echo "\">";
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getName", [], "method")) {
            echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getName", [], "method");
        } else {
            echo "N/A";
        }
        echo "</a></td>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\FeaturedProducts\\items_list\\product\\featured\\parts\\columns\\name.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\FeaturedProducts\\items_list\\product\\featured\\parts\\columns\\name.twig", "");
    }
}
