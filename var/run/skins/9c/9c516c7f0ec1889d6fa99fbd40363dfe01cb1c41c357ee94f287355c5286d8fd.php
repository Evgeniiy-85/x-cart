<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/layout_options.twig */
class __TwigTemplate_05078401f538a7fabd661b878ed173741a48821149b02603a5a54ec1fde27891 extends \XLite\Core\Templating\Twig\Template
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
<xlite-layout-options inline-template :preset=\"preset\" :initial-reset-available=\"";
        // line 7
        echo (($this->getAttribute(($context["this"] ?? null), "isResetAvailable", [], "method")) ? ("true") : ("false"));
        echo "\">
\t<div class='layout-editor-layout-options'>
\t\t<div class=\"options-layout-header\">
\t\t\t<span>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Storefront layout"]), "html", null, true);
        echo "</span>
\t\t\t<a class=\"reset-button\" :class=\"resetBtnClasses\" @click=\"resetLayout\">
\t\t\t\t<i class=\"icon\">";
        // line 12
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/ThemeTweaker/themetweaker/layout_editor/icons/return.svg"]);
        echo "</i>
\t\t\t\t<span>";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Reset layout"]), "html", null, true);
        echo "</span>
\t\t\t</a>
\t\t</div>

\t\t<div class=\"options-layout-content\">
\t\t\t";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\FormField\\Select\\LayoutType", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Home page"]), "group" => twig_constant("XLite\\Core\\Layout::LAYOUT_GROUP_HOME")]]), "html", null, true);
        // line 20
        echo "
\t\t\t";
        // line 21
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\FormField\\Select\\LayoutType", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Other pages"]), "group" => twig_constant("XLite\\Core\\Layout::LAYOUT_GROUP_DEFAULT")]]), "html", null, true);
        // line 23
        echo "
\t\t</div>
\t\t";
        // line 25
        if ($this->getAttribute(($context["this"] ?? null), "isLogoConfigurable", [], "method")) {
            // line 26
            echo "\t\t<div class=\"logo-options-header\">
\t\t\t<span>";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Logo & Favicon"]), "html", null, true);
            echo "</span>
\t\t</div>
\t\t<div class=\"logo-options-content\">
\t\t\t<div class=\"company-logo-uploader\">
\t\t\t\t";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FileUploader", "object" => $this->getAttribute(            // line 32
($context["this"] ?? null), "getImageObject", [0 => "logo"], "method"), "maxWidth" => $this->getAttribute(            // line 33
($context["this"] ?? null), "getImageMaxWidth", [], "method"), "maxHeight" => $this->getAttribute(            // line 34
($context["this"] ?? null), "getImageMaxHeight", [], "method"), "isImage" => true, "fieldName" => "logo", "isViaUrlAllowed" => true]]), "html", null, true);
            // line 38
            echo "
\t\t\t\t<span class=\"option-label\">";
            // line 39
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["logo uploader"]), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t\t<div class=\"favicon-uploader\">
\t\t\t\t";
            // line 42
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FileUploader", "object" => $this->getAttribute(            // line 43
($context["this"] ?? null), "getImageObject", [0 => "favicon"], "method"), "maxWidth" => $this->getAttribute(            // line 44
($context["this"] ?? null), "getImageMaxWidth", [], "method"), "maxHeight" => $this->getAttribute(            // line 45
($context["this"] ?? null), "getImageMaxHeight", [], "method"), "isImage" => true, "fieldName" => "favicon", "isViaUrlAllowed" => true]]), "html", null, true);
            // line 49
            echo "
\t\t\t\t<span class=\"option-label\">";
            // line 50
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["favicon uploader"]), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t\t<div class=\"appleIcon-uploader\">
\t\t\t\t";
            // line 53
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FileUploader", "object" => $this->getAttribute(            // line 54
($context["this"] ?? null), "getImageObject", [0 => "appleIcon"], "method"), "maxWidth" => $this->getAttribute(            // line 55
($context["this"] ?? null), "getImageMaxWidth", [], "method"), "maxHeight" => $this->getAttribute(            // line 56
($context["this"] ?? null), "getImageMaxHeight", [], "method"), "isImage" => true, "fieldName" => "appleIcon", "isViaUrlAllowed" => true]]), "html", null, true);
            // line 60
            echo "
\t\t\t\t<span class=\"option-label\">";
            // line 61
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["app icon uploader"]), "html", null, true);
            echo "</span>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 65
        echo "\t</div>
</xlite-layout-options>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/layout_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 65,  104 => 61,  101 => 60,  99 => 56,  98 => 55,  97 => 54,  96 => 53,  90 => 50,  87 => 49,  85 => 45,  84 => 44,  83 => 43,  82 => 42,  76 => 39,  73 => 38,  71 => 34,  70 => 33,  69 => 32,  68 => 31,  61 => 27,  58 => 26,  56 => 25,  52 => 23,  50 => 21,  47 => 20,  45 => 18,  37 => 13,  33 => 12,  28 => 10,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/layout_options.twig", "");
    }
}
