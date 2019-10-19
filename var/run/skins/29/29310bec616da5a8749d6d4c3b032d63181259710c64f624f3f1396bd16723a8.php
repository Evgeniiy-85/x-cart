<?php

/* modules/QSL/CloudSearch/cloud_filters/slidebar.twig */
class __TwigTemplate_ed8414ac1c7baaf9ab8379026901f70a98dffdad495cd1e5ca6b853a64f805b5 extends \XLite\Core\Templating\Twig\Template
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
<nav id=\"cf-slide-menu\" class=\"hidden\">
    ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "shouldRender", [], "method")) {
            // line 7
            echo "        <div id=\"cloud-filters-mobile\" class=\"cloud-filters\" v-cloak>
            <h4 class=\"title\">";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Filters"]), "html", null, true);
            echo "</h4>

            ";
            // line 10
            echo call_user_func_array($this->env->getFunction('include')->getCallable(), [$this->env, $context, "modules/QSL/CloudSearch/cloud_filters/sidebar_box/body.twig"]);
            echo "
        </div>
    ";
        }
        // line 13
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "modules/QSL/CloudSearch/cloud_filters/slidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  33 => 10,  28 => 8,  25 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/QSL/CloudSearch/cloud_filters/slidebar.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\QSL\\CloudSearch\\cloud_filters\\slidebar.twig");
    }
}
