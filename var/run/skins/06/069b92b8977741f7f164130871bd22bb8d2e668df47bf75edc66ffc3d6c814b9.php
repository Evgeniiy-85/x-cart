<?php

/* modules/XC/Onboarding/wizard_steps/shipping_done/body.twig */
class __TwigTemplate_dbfd04853ca124854293ae333db2011c39b89da67dfb0817dd4baa5145f8cecc extends \XLite\Core\Templating\Twig\Template
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
<div class=\"onboarding-wizard-step step-";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStepIndex", [], "method"), "html", null, true);
        echo "\"
     v-show=\"isCurrentStep('";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStepIndex", [], "method"), "html", null, true);
        echo "')\"
     :transition=\"stepTransition\">
  <div class=\"step-contents\">
    <h2 class=\"heading\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["You've successfully set up shipping areas and rates for your store"]), "html", null, true);
        echo "</h2>
    <p class=\"text\">
      ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Now you can define how shipping rates should be calculated based on  delivery time, weight and other parameters."]), "html", null, true);
        echo "
      <a href=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAdvancedShippingSettingsLink", [], "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Advanced shipping settings"]), "html", null, true);
        echo "</a>
    </p>

    <div class=\"placeholder\">
      <img class=\"bg\" src=\"";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/Onboarding/images/shipping-done-bg.png"]), "html", null, true);
        echo "\"
           srcset=\"";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/Onboarding/images/shipping-done-bg@2x.png"]), "html", null, true);
        echo " 2x\">
      <img class=\"sm-box\" src=\"";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/Onboarding/images/shipping-done-sm-box.png"]), "html", null, true);
        echo "\"
           srcset=\"";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/Onboarding/images/shipping-done-sm-box@2x.png"]), "html", null, true);
        echo " 2x\">
      <img class=\"lg-box\" src=\"";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/Onboarding/images/shipping-done-lg-box.png"]), "html", null, true);
        echo "\"
           srcset=\"";
        // line 21
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/Onboarding/images/shipping-done-lg-box@2x.png"]), "html", null, true);
        echo " 2x\">
    </div>

    <div class=\"buttons\">
      <div class=\"next-step\">
        ";
        // line 26
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => "Save and go to the next step", "style" => "regular-main-button", "attributes" => ["@click" => "goToNextStep"], "jsCode" => "null;"]]), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_steps/shipping_done/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  70 => 21,  66 => 20,  62 => 19,  58 => 18,  54 => 17,  50 => 16,  41 => 12,  37 => 11,  32 => 9,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Onboarding/wizard_steps/shipping_done/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\Onboarding\\wizard_steps\\shipping_done\\body.twig");
    }
}
