<?php

/* jscontainer/body.twig */
class __TwigTemplate_3e78b6b8fcecf79161d361ba07cb6edb56ea78018cd82af9036914295be3b844 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "jscontainer.js"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "jscontainer/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # JS container widget
 #}

{{ widget_list('jscontainer.js') }}
", "jscontainer/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\jscontainer\\body.twig");
    }
}
