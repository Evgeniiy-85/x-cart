<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/signin/parts/login_form/email.twig */
class __TwigTemplate_74ff03e8aae66b67334920f340acc76bf836015a6a3014dfc451cc8703480b34 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr><td class=\"email-field\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Text\\Email", "value" => $this->getAttribute(($context["this"] ?? null), "login", []), "required" => "true", "fieldName" => "login", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Email"]), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Email"]), "fieldOnly" => "true", "fieldId" => "login-email"]]), "html", null, true);
        echo "
</td></tr>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/signin/parts/login_form/email.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/signin/parts/login_form/email.twig", "");
    }
}
