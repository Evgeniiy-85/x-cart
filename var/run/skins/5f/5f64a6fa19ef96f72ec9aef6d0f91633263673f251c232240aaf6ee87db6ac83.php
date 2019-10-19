<?php

/* E:\Server\projects\x-cart\skins\customer\modules\XC\News\page\news_message\parts\link.twig */
class __TwigTemplate_3061d7211e107d90af8c78e732933293aad0c52f5b6fba6b896e0d810beb4bf1 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"archive-link\">
  ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "getPreviousURL", [0 => $this->getAttribute(($context["this"] ?? null), "newsMessage", [])], "method")) {
            // line 9
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPreviousURL", [0 => $this->getAttribute(($context["this"] ?? null), "newsMessage", [])], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Previous news"]), "html", null, true);
            echo "</a>
  ";
        }
        // line 11
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "getNextURL", [0 => $this->getAttribute(($context["this"] ?? null), "newsMessage", [])], "method")) {
            // line 12
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getNextURL", [0 => $this->getAttribute(($context["this"] ?? null), "newsMessage", [])], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Next news"]), "html", null, true);
            echo "</a>
  ";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\News\\page\\news_message\\parts\\link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  36 => 12,  33 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\News\\page\\news_message\\parts\\link.twig", "");
    }
}
