<?php

/* modules/XC/Onboarding/wizard_steps/location/body.twig */
class __TwigTemplate_e165fa0797f4d949f19e4fa242f300d3f6a9ed2f6d18a43d0463e2940368da97 extends \XLite\Core\Templating\Twig\Template
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
  <xlite-wizard-step-location inline-template>
    <div class=\"step-contents\">
      <h2 class=\"heading\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Configure your geographic settings to connect with local customers"]), "html", null, true);
        echo "</h2>
      <p class=\"text\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["We've tried to guess your country, currency and weight. Verify, please."]), "html", null, true);
        echo "</p>

      <div id=\"location_map\">
        <div id=\"location_map_zones\"></div>
        <div id=\"location_map_markers\"></div>
        <div class=\"point\">
          ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displaySVGImage", [0 => "modules/XC/Onboarding/images/map-pointer.svg"], "method"), "html", null, true);
        echo "
        </div>
        <div class=\"pulse\"></div>
      </div>

      <div class=\"fields\">
        <div class=\"country\">
          ";
        // line 24
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Onboarding\\View\\FormField\\Select\\Country", "attributes" => ["v-model" => "country"], "label" => "Country", "value" => $this->getAttribute(($context["this"] ?? null), "getCountry", [], "method"), "fieldId" => "location-country", "stateSelectorId" => "address-state-select", "stateInputId" => "address-custom-state"]]), "html", null, true);
        echo "
          <div class=\"example\"></div>
        </div>
        <div class=\"currency\">
          ";
        // line 28
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Onboarding\\View\\FormField\\Select\\Currency", "attributes" => ["v-model" => "currency"], "label" => "Currency", "value" => $this->getAttribute(($context["this"] ?? null), "getCurrency", [], "method"), "fieldId" => "location-currency"]]), "html", null, true);
        echo "
          <div class=\"example\">
            ";
        // line 30
        ob_start();
        // line 31
        echo "              ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Ex."]), "html", null, true);
        echo "
              <span class=\"prefix\"></span>
              <span class=\"value\">29.99</span>
              <span class=\"suffix\"></span>
            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 36
        echo "          </div>
        </div>
        <div class=\"weight-unit\">
          ";
        // line 39
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Onboarding\\View\\FormField\\Select\\WeightUnit", "attributes" => ["v-model" => "weight_unit"], "label" => "Weight", "value" => $this->getAttribute(($context["this"] ?? null), "getWeightUnit", [], "method"), "fieldId" => "location-weight_unit"]]), "html", null, true);
        echo "
          <div class=\"example\">
            ";
        // line 41
        ob_start();
        // line 42
        echo "              ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Ex."]), "html", null, true);
        echo "
              <span class=\"value\">2.8</span>
              <span class=\"unit\"></span>
            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 46
        echo "          </div>
        </div>
      </div>

      <div class=\"buttons\">
        <div class=\"more-button\">
          ";
        // line 52
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "label" => "More localisation settings", "location" => $this->getAttribute(($context["this"] ?? null), "getMoreSettingsLocation", [], "method"), "blank" => 1]]), "html", null, true);
        echo "
        </div>
        <div class=\"next-step\">
          ";
        // line 55
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => "Proceed to the next step", "style" => "regular-main-button", "attributes" => ["@click" => "updateAddress"], "jsCode" => "null;"]]), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </xlite-wizard-step-location>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_steps/location/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 55,  107 => 52,  99 => 46,  91 => 42,  89 => 41,  84 => 39,  79 => 36,  70 => 31,  68 => 30,  63 => 28,  56 => 24,  46 => 17,  37 => 11,  33 => 10,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Onboarding/wizard_steps/location/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\Onboarding\\wizard_steps\\location\\body.twig");
    }
}
