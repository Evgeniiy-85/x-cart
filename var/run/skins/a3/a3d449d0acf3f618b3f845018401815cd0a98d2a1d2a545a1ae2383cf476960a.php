<?php

/* modules/EA/ProductRecommendations/recommendations/buttons/addRecommendtion.twig */
class __TwigTemplate_33a8767f88f793c3e810cd099ca6a8b4769de4f92c40d6c0a64880d6dfd6a980 extends \XLite\Core\Templating\Twig\Template
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
        return new Twig_Source("{##
 # Add recommendation button template
 #
 # @listChild (list=\"itemsList.ea.productrecommendations.recommendation.header\")
 # @listChild (list=\"itemsList.ea.productrecommendations.productrecommendation.header\")
 #}

{% if this.getProductId() %}
  {{ widget('XLite\\\\Module\\\\EA\\\\ProductRecommendations\\\\View\\\\Button\\\\Admin\\\\AddRecommendation', style='add-recommendation', target_product_id=this.getProductId()) }}
{% endif %}
{% if not this.getProductId() %}
  {{ widget('XLite\\\\Module\\\\EA\\\\ProductRecommendations\\\\View\\\\Button\\\\Admin\\\\AddRecommendation', style='add-recommendation') }}
{% endif %}
", "modules/EA/ProductRecommendations/recommendations/buttons/addRecommendtion.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\EA\\ProductRecommendations\\recommendations\\buttons\\addRecommendtion.twig");
    }
}
