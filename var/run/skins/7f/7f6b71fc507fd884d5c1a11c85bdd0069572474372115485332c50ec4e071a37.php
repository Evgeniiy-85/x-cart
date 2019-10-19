<?php

/* modules/XC/Onboarding/wizard/wizard.twig */
class __TwigTemplate_f4b644bfbd2bfecc6b24480cb8e111cdeeffa13b1773e05d78cf983f9fefd087 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"onboarding-wizard-loader-point\">
  <xlite-onboarding-wizard
    inline-template
    step=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWizardStep", [], "method"), "html", null, true);
        echo "\"
    :steps=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["this"] ?? null), "getWizardSteps", [], "method")), "html", null, true);
        echo "\"
    state=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWizardState", [], "method"), "html", null, true);
        echo "\"
    last-product=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLastAddedProductId", [], "method"), "html", null, true);
        echo "\">
    <div class=\"onboarding-wizard-wrapper onboarding-wizard--initial\" :class=\"classes\">
      <div id=\"onboarding-wizard\" class=\"onboarding-wizard\">
        <div class=\"onboarding-wizard--inner\" :class=\"bodyClasses\">
          <div class=\"reloading-element\"></div>
          <div class=\"onboarding-wizard--header\">
            ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "onboarding-wizard.header"]]), "html", null, true);
        echo "
          </div>
          <div class=\"onboarding-wizard--body\">
            ";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "onboarding-wizard.body"]]), "html", null, true);
        echo "
          </div>
        </div>
      </div>
      ";
        // line 23
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "onboarding-wizard.after"]]), "html", null, true);
        echo "
    </div>
  </xlite-onboarding-wizard>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard/wizard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  51 => 19,  45 => 16,  36 => 10,  32 => 9,  28 => 8,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Onboarding/wizard/wizard.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\Onboarding\\wizard\\wizard.twig");
    }
}
