<?php

/* modules/XC/YandexCheckout/onboarding/body.twig */
class __TwigTemplate_80e02964dababbf94076639c3adc31bb42ab2f15fa44c3a687f6fe66b62b6328 extends \XLite\Core\Templating\Twig\Template
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
        echo "<xlite-wizard-step-payment-yandex-money inline-template>
  <div class=\"online yandex-money\">
    <div class=\"method-type\">
      ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Online method"]), "html", null, true);
        echo "
    </div>

    <div class=\"image\">
      <img src=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["modules/XC/YandexCheckout/onboarding/logo.png"]), "html", null, true);
        echo "\">
    </div>

    <div class=\"method-name\">
      ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Yandex.Checkout"]), "html", null, true);
        echo "
    </div>

    <div class=\"note\">
      ";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["A simple service providing online payments — for live and business."]), "html", null, true);
        echo "
    </div>

    ";
        // line 22
        if ($this->getAttribute(($context["this"] ?? null), "isMethodConfigured", [], "method")) {
            // line 23
            echo "      <div class=\"switcher";
            if ($this->getAttribute(($context["this"] ?? null), "isMethodEnabled", [], "method")) {
                echo " enabled";
            }
            echo "\">
        <span class=\"inactive\">";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["checkbox.onoff.off"]), "html", null, true);
            echo "</span>
        <a href=\"#\" @click.prevent=\"switchMethod(";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMethodId", [], "method"), "html", null, true);
            echo ", \$event)\">
          <div>
            <span class=\"fa fa-check\"></span>
          </div>
        </a>
        <span class=\"active\">";
            // line 30
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["checkbox.onoff.on"]), "html", null, true);
            echo "</span>
      </div>
    ";
        } else {
            // line 33
            echo "      <div class=\"button\">
        ";
            // line 34
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Configure (Yandex.Checkout)"]), "location" => $this->getAttribute(($context["this"] ?? null), "getMethodSettingsUrl", [], "method"), "blank" => 1]]), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 37
        echo "
    <div class=\"added-mark\">
      <span class=\"fa fa-check\"></span>
    </div>
  </div>
</xlite-wizard-step-payment-yandex-money>";
    }

    public function getTemplateName()
    {
        return "modules/XC/YandexCheckout/onboarding/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 37,  81 => 34,  78 => 33,  72 => 30,  64 => 25,  60 => 24,  53 => 23,  51 => 22,  45 => 19,  38 => 15,  31 => 11,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/YandexCheckout/onboarding/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\YandexCheckout\\onboarding\\body.twig");
    }
}
