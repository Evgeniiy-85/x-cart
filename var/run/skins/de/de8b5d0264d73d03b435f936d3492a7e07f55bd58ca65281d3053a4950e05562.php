<?php

/* pager/model/table/parts/more.twig */
class __TwigTemplate_fced4dc8b208401e49a7f21d9e0f7f76e4fa72bf32b4d666812e9e21f1f2aa47 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getMoreLink", [], "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Link", "location" => $this->getAttribute(($context["this"] ?? null), "getMoreLink", [], "method"), "label" => $this->getAttribute(($context["this"] ?? null), "getMoreLinkTitle", [], "method"), "style" => "more-link-button"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "pager/model/table/parts/more.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "pager/model/table/parts/more.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\pager\\model\\table\\parts\\more.twig");
    }
}
