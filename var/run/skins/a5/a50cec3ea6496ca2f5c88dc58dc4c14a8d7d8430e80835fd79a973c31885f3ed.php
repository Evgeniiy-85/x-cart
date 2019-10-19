<?php

/* layout/header/header.right.settings.twig */
class __TwigTemplate_2c11b27e8fd8a8501b4402087f1f07db0ea5411c361e41848d9e5b70ccd697dd extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        echo "
<div class=\"header_settings dropdown ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getHeaderSettingsClasses", [], "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Menu"]), "html", null, true);
        echo "\">
    <a data-target=\"#\" data-toggle=\"dropdown\"></a>
    <div class=\"dropdown-menu\">
        ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.header.right.settings"]]), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/header/header.right.settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  22 => 6,  19 => 5,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/header.right.settings.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\header.right.settings.twig");
    }
}
