<?php

/* modules/XC/Onboarding/wizard_steps/company_logo_added/body.twig */
class __TwigTemplate_6f89daeb97178c87146dae7d620674f9b7974a09752416969ad7096c9186a0a1 extends \XLite\Core\Templating\Twig\Template
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
  class=\"onboarding-wizard-step step-";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStepIndex", [], "method"), "html", null, true);
        echo "\"
  v-show=\"isCurrentStep('";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStepIndex", [], "method"), "html", null, true);
        echo "')\"
  :transition=\"stepTransition\">
  <xlite-wizard-step-company-logo-added inline-template>
    <div class=\"step-contents\">
      <h2 class=\"heading\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Good job! You company logo is added"]), "html", null, true);
        echo "</h2>
      <p class=\"text\">";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Here is the way it looks like on desktop & mobile devices. Do you like it?"]), "html", null, true);
        echo "</p>
      ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\SimpleLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Upload a new logo"]), "attributes" => ["@click" => "reuploadLogo"], "jsCode" => "null;"]]), "html", null, true);
        echo "
      <div class=\"logo-showcase\">
        <div class=\"logo-image-wrapper\">
          <img src=\"";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/Onboarding/images/logo-showcase.png"]), "html", null, true);
        echo "\">
          <div class=\"logo-desktop-placeholder\" v-if=\"logoUrl\">
            <img :src=\"logoUrl\">
          </div>
          <div class=\"logo-mobile-placeholder\" v-if=\"logoUrl\">
            <img :src=\"logoUrl\">
          </div>
        </div>
      </div>
      <div class=\"buttons\">
        ";
        // line 26
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Save and go to the next step"]), "style" => "regular-main-button", "attributes" => ["@click" => "save"], "jsCode" => "null;"]]), "html", null, true);
        echo "
      </div>
    </div>
  </xlite-wizard-step-company-logo-added>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_steps/company_logo_added/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 26,  48 => 16,  42 => 13,  38 => 12,  34 => 11,  27 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Onboarding/wizard_steps/company_logo_added/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\Onboarding\\wizard_steps\\company_logo_added\\body.twig");
    }
}
