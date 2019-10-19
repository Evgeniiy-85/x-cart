<?php

/* query_marketplace/body.twig */
class __TwigTemplate_c8a81db7a5b1f8783e8d2dd166a29f5500a501d4af6ad722c4fdd2b1e2eb01a8 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"queryMarketplace\" title=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Updating data from the marketplace..."]), "html", null, true);
        echo "\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "query_marketplace/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
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
 # Query marketplace widget
 #}

<div id=\"queryMarketplace\" title=\"{{ t('Updating data from the marketplace...') }}\">
  {{ this.displayCommentedData(this.getCommentedData()) }}
</div>
", "query_marketplace/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\query_marketplace\\body.twig");
    }
}
