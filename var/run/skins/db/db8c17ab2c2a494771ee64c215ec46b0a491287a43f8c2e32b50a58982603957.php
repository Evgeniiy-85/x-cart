<?php

/* layout/header/header_settings/login.twig */
class __TwigTemplate_ad4985d30e630c86027276c28b541972f2ddd93af7347ba3bfb9309ce8201638 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isAccountLinksVisible", [], "method")) {
            // line 9
            echo "<ul class=\"sign-in_block\">
\t<li class=\"account-link-sign_in\">
\t    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\PopupLogin", "label" => "Sign in / sign up"]]), "html", null, true);
            echo "
\t</li>
</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header_settings/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/header_settings/login.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\header_settings\\login.twig");
    }
}
