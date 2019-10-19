<?php

/* modules/XC/Onboarding/wizard_steps/shipping/body.twig */
class __TwigTemplate_03070ed0d1ed062d3000483d91d29480bf21bfd2d26e97a9020e42240673e095 extends \XLite\Core\Templating\Twig\Template
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
  <xlite-wizard-step-shipping inline-template>
    <div class=\"step-contents\">
      <h2 class=\"heading\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Do you need to ship your products?"]), "html", null, true);
        echo "</h2>

      <div class=\"step-content\" v-data='{ \"shipping_enabled\": ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getShippingEnabled", [], "method"), "html", null, true);
        echo " }'>
        <div class=\"go-to-shipping\">
          <div class=\"image\">
            <img src=\"";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/Onboarding/images/shipping.png"]), "html", null, true);
        echo "\"
                 srcset=\"";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/Onboarding/images/shipping@2x.png"]), "html", null, true);
        echo " 2x\">
          </div>
          <div class=\"note\">
            ";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Yes, I sell tangible goods that needed to be shipped"]), "html", null, true);
        echo "
          </div>
          <div class=\"button\">
            ";
        // line 22
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => "Set up shipping", "style" => "regular-main-button", "attributes" => ["@click" => "goToShipping"], "jsCode" => "null;"]]), "html", null, true);
        echo "
          </div>
        </div>
        <div class=\"separator\">
          ";
        // line 26
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["or"]), "html", null, true);
        echo "
        </div>
        <div class=\"skip-shipping\">
          <div class=\"image\">
            <img src=\"";
        // line 30
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/Onboarding/images/digital-icons.png"]), "html", null, true);
        echo "\">
          </div>
          <div class=\"note\">
            ";
        // line 33
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["I sell digital goods or services and do not need to set up shipping"]), "html", null, true);
        echo "
          </div>
          <div class=\"button\">
            ";
        // line 36
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => "Skip Shipping Step", "style" => "regular-main-button", "attributes" => ["@click" => "skipShipping"], "jsCode" => "null;"]]), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  </xlite-wizard-step-shipping>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_steps/shipping/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 36,  80 => 33,  74 => 30,  67 => 26,  60 => 22,  54 => 19,  48 => 16,  44 => 15,  38 => 12,  33 => 10,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Onboarding/wizard_steps/shipping/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\Onboarding\\wizard_steps\\shipping\\body.twig");
    }
}
