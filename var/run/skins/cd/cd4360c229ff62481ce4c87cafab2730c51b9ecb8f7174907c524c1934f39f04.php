<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/images_settings/parts/unsharp_mask.twig */
class __TwigTemplate_a05535c55514a3bfe57106db842c594c648b0813cd65b39f37ad2bec313b931b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isShowUnsharpOption", [], "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "fieldName" => "unsharp_mask_filter_on_resize", "value" => $this->getAttribute(($context["this"] ?? null), "getUnsharpMaskFilterOnResizeValue", [], "method"), "label" => "Apply unsharp mask filter on resize"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/images_settings/parts/unsharp_mask.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/images_settings/parts/unsharp_mask.twig", "");
    }
}
