<?php

/* E:\Server\projects\x-cart\skins\customer\signin\signin_anonymous_box.twig */
class __TwigTemplate_69fa36af471b93758f15a33f9fd6f5e94bf2854ca1f77dfa545b8e6a9a6810bb extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "checkout", "update_profile", ["email" => "", "same_address" => "1"]]), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Continue"])]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\signin\\signin_anonymous_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\signin\\signin_anonymous_box.twig", "");
    }
}