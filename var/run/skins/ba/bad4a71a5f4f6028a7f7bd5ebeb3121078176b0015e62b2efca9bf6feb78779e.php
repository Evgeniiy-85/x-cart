<?php

/* modules/XC/Onboarding/wizard_steps/payment/body.twig */
class __TwigTemplate_0c29fd185ce7d6bfad7f463850ccc3512283e9f27bfff415465ebea612d188db extends \XLite\Core\Templating\Twig\Template
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
  <xlite-wizard-step-payment inline-template>
    <div class=\"step-contents\">
      <h2 class=\"heading\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Manage your payment options"]), "html", null, true);
        echo "</h2>
      <p class=\"text\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["120+ supported payment gateways, such as PayPal, Authorize.net and etc."]), "html", null, true);
        echo "</p>

      <div class=\"methods\">
        ";
        // line 14
        if ($this->getAttribute(($context["this"] ?? null), "getMethod", [], "method")) {
            // line 15
            echo "          <div class=\"offline\">
            <div class=\"method-type\">
              ";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Offline method"]), "html", null, true);
            echo "
            </div>

            <div class=\"image\">";
            // line 20
            echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/Onboarding/images/icon-phone-order.svg"]);
            echo "</div>

            <div class=\"method-name\">
              ";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getOfflineMethodName", [], "method"), "html", null, true);
            echo "
            </div>

            <div class=\"note\">
              ";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Some people simply prefer to place their orders by phone — let them do that."]), "html", null, true);
            echo "
            </div>

            <div class=\"switcher";
            // line 30
            if ($this->getAttribute(($context["this"] ?? null), "isOfflineMethodEnabled", [], "method")) {
                echo " enabled";
            }
            echo "\">
              <span class=\"inactive\">";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["checkbox.onoff.off"]), "html", null, true);
            echo "</span>
              <a href=\"#\" @click.prevent=\"switchOfflineMethod(";
            // line 32
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getOfflineMethodId", [], "method"), "html", null, true);
            echo ", \$event)\">
                <div>
                  <span class=\"fa fa-check\"></span>
                </div>
              </a>
              <span class=\"active\">";
            // line 37
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["checkbox.onoff.on"]), "html", null, true);
            echo "</span>
            </div>
          </div>
        ";
        }
        // line 41
        echo "
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getOnlineWidgets", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["widgetClass"]) {
            // line 43
            echo "          ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $context["widgetClass"]]]), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widgetClass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "      </div>

      <div class=\"buttons\">
        <div class=\"more-button\">
          ";
        // line 49
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "label" => "Set up offline & online payments", "location" => $this->getAttribute(($context["this"] ?? null), "getMoreSettingsLocation", [], "method"), "blank" => 1]]), "html", null, true);
        echo "
        </div>
        <div class=\"next-step\">
          ";
        // line 52
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Regular", "label" => "Proceed to the next step", "style" => "regular-main-button", "attributes" => ["@click" => "goToNextStep"], "jsCode" => "null;"]]), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </xlite-wizard-step-payment>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_steps/payment/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 52,  121 => 49,  115 => 45,  106 => 43,  102 => 42,  99 => 41,  92 => 37,  84 => 32,  80 => 31,  74 => 30,  68 => 27,  61 => 23,  55 => 20,  49 => 17,  45 => 15,  43 => 14,  37 => 11,  33 => 10,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Onboarding/wizard_steps/payment/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\Onboarding\\wizard_steps\\payment\\body.twig");
    }
}
