<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/modules/XC/Onboarding/wizard/header.twig */
class __TwigTemplate_246e9c94469ef379055804da647f999f2987fb90342be5f69b1fa1be6e17e199 extends \XLite\Core\Templating\Twig\Template
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
<div
  class=\"onboarding-wizard-header\">
  <div class=\"intro-text\" v-if=\"isCurrentStep('intro')\" transition=\"fade-in-out\">
    <h2 class=\"heading\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["onboarding.intro.heading"]), "html", null, true);
        echo "</h2>
    <p class=\"text\">";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["onboarding.intro.text"]);
        echo "</p>
  </div>
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\Onboarding\\View\\WizardProgress"]]), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/modules/XC/Onboarding/wizard/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  29 => 9,  25 => 8,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/modules/XC/Onboarding/wizard/header.twig", "");
    }
}
