<?php

/* modules/CDev/Sale/product/sale_label.twig */
class __TwigTemplate_0e21bdf138018af117c068d092ce73e2b2a5409736b033092462ef921c607312 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<span
  id=\"product-sale-label-";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getProductId", [], "method"), "html", null, true);
        echo "\"
  class=\"product-name-sale-label";
        // line 10
        if ( !$this->getAttribute(($context["this"] ?? null), "participateSaleAdmin", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            echo " product-name-sale-label-disabled";
        }
        echo "\">
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["sale"]), "html", null, true);
        echo "
</span>
";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Sale/product/sale_label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 11,  27 => 10,  23 => 9,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/CDev/Sale/product/sale_label.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\Sale\\product\\sale_label.twig");
    }
}
