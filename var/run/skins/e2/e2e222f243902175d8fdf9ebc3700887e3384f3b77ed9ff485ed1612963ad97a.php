<?php

/* modules/XC/Onboarding/wizard_progress/progress.twig */
class __TwigTemplate_51cf56ab75948a8eda79c688ee9340db68924adb864dec63318784cbfe63c3c3 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "<xlite-wizard-progress inline-template :step=\"step\" :steps=\"steps\" :landmarks=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["this"] ?? null), "getLandmarks", [], "method")), "html", null, true);
        echo "\" :current-step=\"currentStep\" :last-product=\"lastProduct\">
  <div class=\"onboarding-wizard-progress\" v-data='{\"progress\": ";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPercentage", [], "method"), "html", null, true);
        echo " }'>
    <div class=\"percentage\" v-text=\"this.progress + '%'\" v-if=\"!isCurrentStep('intro')\" transition=\"fade-in-out\">";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($this->getAttribute(($context["this"] ?? null), "getPercentage", [], "method") . "%"), "html", null, true);
        echo "</div>
    <div class=\"bar\">
      <div class=\"landmarks\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getLandmarks", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["step"]) {
            // line 7
            echo "          <div class=\"landmark landmark-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["step"], "index", []), "html", null, true);
            echo "\" :class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ("landmarkClass." . $this->getAttribute($context["step"], "index", [])), "html", null, true);
            echo "\" @click=\"goToStep('";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["step"], "index", []), "html", null, true);
            echo "')\" tabindex=\"-1\">
            ";
            // line 8
            echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, $this->getAttribute($context["step"], "image", [])]);
            echo "
            <span class=\"landmark-text\" v-if=\"isCurrentStep('intro')\" transition=\"fade-in-out\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["step"], "name", [])]), "html", null, true);
            echo "</span>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['step'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </div>
      <div class=\"progress-line\">
        <div class=\"progress-line-filled\" style=\"width: ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($this->getAttribute(($context["this"] ?? null), "getPercentage", [], "method") . "%"), "html", null, true);
        echo "\" :style=\"barStyle\"></div>
      </div>
    </div>
    <div class=\"finish-mark\" :class=\"finishClass\" v-if=\"!isCurrentStep('intro')\" transition=\"fade-in-out\">
      ";
        // line 18
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/Onboarding/images/ok-mark.svg"]);
        echo "
    </div>
  </div>
</xlite-wizard-progress>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_progress/progress.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  64 => 14,  60 => 12,  51 => 9,  47 => 8,  38 => 7,  34 => 6,  28 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Onboarding/wizard_progress/progress.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\Onboarding\\wizard_progress\\progress.twig");
    }
}
