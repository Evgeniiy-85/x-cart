<?php

/* E:\Server\projects\x-cart\skins\admin\images_settings\parts\layout_settings.cloud_zoom_mode.twig */
class __TwigTemplate_8158ae5a20e7932b8c4ed20ba25315df8a3df8ebb38e6bf5621d4115e2f0c1f6 extends \XLite\Core\Templating\Twig\Template
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
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Select\\CloudZoomMode", "label" => "Cloud Zoom mode", "fieldName" => "cloud_zoom_mode", "value" => $this->getAttribute(($context["this"] ?? null), "getCloudZoomMode", [], "method")]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\images_settings\\parts\\layout_settings.cloud_zoom_mode.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\images_settings\\parts\\layout_settings.cloud_zoom_mode.twig", "");
    }
}
