<?php

/* modules/EA/ProductRecommendations/recommendations/buttons/addRecommendtion.twig */
class __TwigTemplate_3833c14e070054771d1a7fe304cab7c0410374ae9d323286c2eb1cf995c9892e extends \XLite\Core\Templating\Twig\Template
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
";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "getProductId", [], "method")) {
            // line 9
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\EA\\ProductRecommendations\\View\\Button\\Admin\\AddRecommendation", "style" => "add-recommendation", "target_product_id" => $this->getAttribute(($context["this"] ?? null), "getProductId", [], "method")]]), "html", null, true);
            echo "
";
        }
        // line 11
        if ( !$this->getAttribute(($context["this"] ?? null), "getProductId", [], "method")) {
            // line 12
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\EA\\ProductRecommendations\\View\\Button\\Admin\\AddRecommendation", "style" => "add-recommendation"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/EA/ProductRecommendations/recommendations/buttons/addRecommendtion.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  30 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/EA/ProductRecommendations/recommendations/buttons/addRecommendtion.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\EA\\ProductRecommendations\\recommendations\\buttons\\addRecommendtion.twig");
    }
}