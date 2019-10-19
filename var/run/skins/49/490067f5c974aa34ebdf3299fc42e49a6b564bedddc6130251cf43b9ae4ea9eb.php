<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/payment/add_method/parts/payment_gateways.note.twig */
class __TwigTemplate_2d7365101c96ad1a76c28651b25a78d50bf9332c0c31f135b071b7d19699da4a extends \XLite\Core\Templating\Twig\Template
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
<div class=\"small-head\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Requires registered merchant account"]);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/payment/add_method/parts/payment_gateways.note.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/payment/add_method/parts/payment_gateways.note.twig", "");
    }
}
