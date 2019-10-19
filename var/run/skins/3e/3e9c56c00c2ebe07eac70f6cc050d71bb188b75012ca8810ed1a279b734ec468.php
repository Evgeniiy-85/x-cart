<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/images_settings/parts/lazy_load.twig */
class __TwigTemplate_8410757c94e403df1c153021c1084055b6ea5552a8f4a9a234a4d7a11fd2e90c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayLazyLoad", [], "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "fieldName" => "use_lazy_load", "value" => $this->getAttribute(($context["this"] ?? null), "getLazyLoadValue", [], "method"), "label" => $this->getAttribute(($context["this"] ?? null), "getLazyLoadOptionName", [], "method")]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/images_settings/parts/lazy_load.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/images_settings/parts/lazy_load.twig", "");
    }
}
