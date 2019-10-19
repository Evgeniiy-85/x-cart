<?php

/* E:\Server\projects\x-cart\skins\customer\modules\XC\NextPreviousProduct\product\parts\body.link.twig */
class __TwigTemplate_36d6860009a37dfa3549c2d8a4b2ff5eb24464d4350ad6d27cd804e2d794580f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "next", [])) {
            // line 8
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemURL", [0 => $this->getAttribute(($context["this"] ?? null), "item", [])], "method"), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Next product"]);
            echo "</a><span class=\"fa fa-arrow-right arrow\"></span>
";
        } else {
            // line 10
            echo "    <span class=\"fa fa-arrow-left arrow\"></span><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemURL", [0 => $this->getAttribute(($context["this"] ?? null), "item", [])], "method"), "html", null, true);
            echo "\" class=\"previous-link\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Previous product"]);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\NextPreviousProduct\\product\\parts\\body.link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\NextPreviousProduct\\product\\parts\\body.link.twig", "");
    }
}
