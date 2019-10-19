<?php

/* modules/EA/ProductRecommendations/product/recommendations.twig */
class __TwigTemplate_77502cb3977866f284d8ce766643eaac4491639a2f7cec2a5ec234358d615387 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\EA\\ProductRecommendations\\View\\ItemsList\\Model\\ProductRecommendation"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/EA/ProductRecommendations/product/recommendations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
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
 # Product Recommendations page template
 #}

{{ widget('XLite\\\\Module\\\\EA\\\\ProductRecommendations\\\\View\\\\ItemsList\\\\Model\\\\ProductRecommendation') }}
", "modules/EA/ProductRecommendations/product/recommendations.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\EA\\ProductRecommendations\\product\\recommendations.twig");
    }
}
