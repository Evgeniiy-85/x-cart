<?php

/* layout/footer/main.footer.contacts.twig */
class __TwigTemplate_4a049072070d2bd2ba41d8c3aa383bd4ea8ebc302166e86da48f44903d8848e6 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"footer_contacts\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\CrispWhiteSkin\\View\\Contacts"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/footer/main.footer.contacts.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/footer/main.footer.contacts.twig", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/footer/main.footer.contacts.twig");
    }
}
