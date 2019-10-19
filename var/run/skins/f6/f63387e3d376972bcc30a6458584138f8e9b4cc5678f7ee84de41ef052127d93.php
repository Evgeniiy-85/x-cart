<?php

/* modules/EA/ProductRecommendations/recommendation/body.twig */
class __TwigTemplate_3899678c081e14a976c3be6dcd2dfd74a9765ffd89af9155ec04b2dc04520c72 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"recommendation\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\EA\\ProductRecommendations\\View\\Model\\Recommendation"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/EA/ProductRecommendations/recommendation/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 4,);
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
 # Recommendation page template
 #}

<div class=\"recommendation\">
  {{ widget('\\\\XLite\\\\Module\\\\EA\\\\ProductRecommendations\\\\View\\\\Model\\\\Recommendation') }}
</div>
", "modules/EA/ProductRecommendations/recommendation/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\EA\\ProductRecommendations\\recommendation\\body.twig");
    }
}
