<?php

/* E:\Server\projects\x-cart\skins\admin\images_settings\parts\layout_settings.cloud_zoom.twig */
class __TwigTemplate_2cab1d3d1580f0377f812f2f9cb68fc3ad84b9ab49bf734b34527fbe1f09cf38 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isCloudZoomAllowed", [], "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "label" => "Cloud Zoom", "fieldName" => "cloud_zoom", "value" => $this->getAttribute(($context["this"] ?? null), "getCloudZoomEnabled", [], "method")]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\images_settings\\parts\\layout_settings.cloud_zoom.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\images_settings\\parts\\layout_settings.cloud_zoom.twig", "");
    }
}
