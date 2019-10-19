<?php

/* promotions/simple_block/body.twig */
class __TwigTemplate_1b540d888c445d652e37c8f5fae6264f50eb56b0fca24b4413db7eb4904b3ac9 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => "promo.twig", "promoId" => $this->getAttribute(        // line 6
($context["this"] ?? null), "getPromoId", [], "method"), "promoContent" => $this->getAttribute(        // line 7
($context["this"] ?? null), "getPromoContent", [], "method"), "additionalClasses" => $this->getAttribute(        // line 8
($context["this"] ?? null), "getAdditionalClasses", [], "method")]]), "html", null, true);
        // line 9
        echo "
";
    }

    public function getTemplateName()
    {
        return "promotions/simple_block/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  25 => 8,  24 => 7,  23 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "promotions/simple_block/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\promotions\\simple_block\\body.twig");
    }
}
