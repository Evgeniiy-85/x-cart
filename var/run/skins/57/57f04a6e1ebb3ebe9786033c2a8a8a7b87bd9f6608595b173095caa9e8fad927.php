<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/recover_password/parts/form.twig */
class __TwigTemplate_1fcacb5ea95691a46f34e82d033a54df1537d61d2305dbf6ef361b459d46d181 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("XLite\\View\\Form", ["formTarget" => "recover_password", "formAction" => "recover_password", "className" => "recovery-form use-inline-error"]);        // line 8
        echo "
  <table class=\"recover-password-form\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "recover.password.fields"]]), "html", null, true);
        echo "
  </table>

";
        $this->endForm();        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/recover_password/parts/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  27 => 10,  23 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/recover_password/parts/form.twig", "");
    }
}
