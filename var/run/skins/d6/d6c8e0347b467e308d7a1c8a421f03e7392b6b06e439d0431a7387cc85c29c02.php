<?php

/* modules/CDev/Paypal/banner/categoryPages/aboveProducts.twig */
class __TwigTemplate_827c5602b63ea5a2d1eb7f38dfe69056f0079bf871d9c855462c89fa002deccb extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Banner", "page" => "categoryPages", "position" => "A"]]), "html", null, true);
    }

    public function getTemplateName()
    {
        return "modules/CDev/Paypal/banner/categoryPages/aboveProducts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/CDev/Paypal/banner/categoryPages/aboveProducts.twig", "/home/vagrant/next/output/xcart/src/skins/customer/modules/CDev/Paypal/banner/categoryPages/aboveProducts.twig");
    }
}
