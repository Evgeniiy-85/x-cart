<?php

/* modules/XC/NewsletterSubscriptions/form/subscribe.twig */
class __TwigTemplate_7d7ddb0bf2cb5958890c315389ed916546b05885deed1512f904d5ccd70b08fe extends \XLite\Core\Templating\Twig\Template
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
<div class=\"subscription-block\">
    <div class=\"subscription-form-block\">
        ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "NewsletterSubscriptions.footer.form-block"]]), "html", null, true);
        echo "

        <div class=\"subscription-error-block hidden\">
            ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "NewsletterSubscriptions.footer.error-block"]]), "html", null, true);
        echo "
        </div>
    </div>
    <div class=\"subscription-success-block hidden\">
        ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "NewsletterSubscriptions.footer.success-block"]]), "html", null, true);
        echo "
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NewsletterSubscriptions/form/subscribe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  30 => 10,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/NewsletterSubscriptions/form/subscribe.twig", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/NewsletterSubscriptions/form/subscribe.twig");
    }
}
