<?php

/* layout/header/header_settings/links.twig */
class __TwigTemplate_3a8005f6600b33240713160a45729653197f37e05c524e70bbf14d547309a5ba extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "slidebar.additional-menu.links"], "method")) {
            // line 9
            echo "    ";
            ob_start();
            // line 10
            echo "    <ul class='quick-links'>
    \t";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "slidebar.additional-menu.links"]]), "html", null, true);
            echo "
    </ul>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header_settings/links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/header_settings/links.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\header_settings\\links.twig");
    }
}
