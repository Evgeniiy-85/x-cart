<?php

/* product/search/simple-search-parts/submit.twig */
class __TwigTemplate_ed8101f3b605868533f49e32b04e637d2b8af796e4d5c49299e59d75c4a7e18a extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "style" => "submit-button", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Search"])]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "product/search/simple-search-parts/submit.twig";
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
        return new Twig_Source("", "product/search/simple-search-parts/submit.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\product\\search\\simple-search-parts\\submit.twig");
    }
}
