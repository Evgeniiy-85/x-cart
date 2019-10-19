<?php

/* layout/header/mobile_header_parts/navbar/account/address_book.twig */
class __TwigTemplate_494974c9735043dd769579a4c10fdd23c8abc5b10b3f7b1d528b0fdca39b45a0 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isLogged", [], "method")) {
            // line 8
            echo "\t<li>
\t\t<a class=\"icon-book\" href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "address_book", ""]), "html", null, true);
            echo "\">
\t\t\t<span>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Address book"]), "html", null, true);
            echo "</span>
\t\t</a>
\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/mobile_header_parts/navbar/account/address_book.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/mobile_header_parts/navbar/account/address_book.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\navbar\\account\\address_book.twig");
    }
}
