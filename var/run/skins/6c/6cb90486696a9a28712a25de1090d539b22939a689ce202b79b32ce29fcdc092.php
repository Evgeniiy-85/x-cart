<?php

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.account.twig */
class __TwigTemplate_ef9762e879036d19c6ce8743268336faa3c904a168ad600fde914feb9c88545a extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-profile\">
  <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "profile", ""]), "html", null, true);
        echo "\" class=\"profile icon-my-account-profile\">
  \t<span>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Details"]), "html", null, true);
        echo "</span>
  </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.account.twig", "");
    }
}
