<?php

/* layout/header/navbar.desktop.twig */
class __TwigTemplate_2b933e2688d4b4cf2feaab62adf2fc3c7973a99702d30c861a4cc50f50490cf1 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"navbar navbar-inverse mobile-hidden\" role=\"navigation\" data-desktop-navbar>
    ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "shouldRender", [], "method")) {
            // line 7
            echo "    <div class=\"collapse navbar-collapse\">
      ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header.menu"]]), "html", null, true);
            echo "
      ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header.menu.after"]]), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "layout/header/navbar.desktop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  32 => 9,  28 => 8,  25 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/navbar.desktop.twig", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/navbar.desktop.twig");
    }
}
