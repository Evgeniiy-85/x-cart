<?php

/* E:\Server\projects\x-cart\skins\customer\signin\parts\login_form\password.twig */
class __TwigTemplate_347fe6084bd00012f47521209be0a5ca5791c0c26cc5e7f259ff8c1fd68c7084 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr><td class=\"password-field\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Password", "required" => "true", "fieldName" => "password", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Password"]), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Password"]), "fieldOnly" => "true", "fieldId" => "login-password"]]), "html", null, true);
        echo "
</td></tr>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\signin\\parts\\login_form\\password.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\signin\\parts\\login_form\\password.twig", "");
    }
}
