<?php

/* E:\Server\projects\x-cart\skins\admin\modules\CDev\SimpleCMS\menus\default_option.twig */
class __TwigTemplate_41e1a06d4b0b56638e6bc737b9815736c65e9aeaa9c9d729860205c547f2b05b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isVisibleShowDefaultOption", [], "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Checkbox", "isChecked" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "config", []), "XC", []), "SimpleCMS", []), "show_default_menu", []), "value" => "Y", "fieldName" => "show_default_menu", "label" => "Show default menu along with the custom one"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\SimpleCMS\\menus\\default_option.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\SimpleCMS\\menus\\default_option.twig", "");
    }
}
