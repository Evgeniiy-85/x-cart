<?php

/* E:\Server\projects\x-cart\skins\customer\modules\XC\NewsletterSubscriptions\form\parts\form.twig */
class __TwigTemplate_b0349eb95aeafae43ab9417a3450aa308ef187a6e50842c12695aed605717086 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("XLite\\Module\\XC\\NewsletterSubscriptions\\View\\Form\\Subscription", ["formTarget" => "newsletter_subscriptions", "formAction" => "subscribe"]);        // line 8
        echo "    <div class=\"subscription-form-label\">
        ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFormLabel", [], "method"), "html", null, true);
        echo "
    </div>
    <div class=\"subscription-form-fields\">
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Text\\Email", "fieldName" => "newlettersubscription_email", "required" => "true", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Enter email address"]), "maxlength" => "255", "fieldOnly" => $this->getAttribute(($context["this"] ?? null), "isFieldOnly", [], "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Email"])]]), "html", null, true);
        echo "
      ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Subscribe"])]]), "html", null, true);
        echo "
    </div>
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\NewsletterSubscriptions\\form\\parts\\form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  32 => 12,  26 => 9,  23 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\NewsletterSubscriptions\\form\\parts\\form.twig", "");
    }
}
