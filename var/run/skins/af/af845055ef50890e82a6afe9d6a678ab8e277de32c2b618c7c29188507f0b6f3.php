<?php

/* modules/XC/Onboarding/mini_wizard_status/body.twig */
class __TwigTemplate_7065c14b2ba123d887bfe231c4d67c0afc4fd8967aa85f6a4d887187e119849e extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"onboarding-wizard-mini-informer\" id=\"wizard-mini-status\">
  <div class=\"progress-circle\" data-value=\"";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($this->getAttribute(($context["this"] ?? null), "getCurrentProgress", [], "method") / 100.0), "html", null, true);
        echo "\"></div>
  <div class=\"progress-status\">
    <div class=\"status-message\">";
        // line 4
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStatusMessage", [], "method"), "html", null, true);
        echo "</div>
    ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\SimpleLink", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method")]), "location" => $this->getAttribute(($context["this"] ?? null), "getWizardUrl", [], "method"), "attributes" => ["data-progress" => $this->getAttribute(($context["this"] ?? null), "getCurrentProgress", [], "method")]]]), "html", null, true);
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/mini_wizard_status/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Onboarding/mini_wizard_status/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\Onboarding\\mini_wizard_status\\body.twig");
    }
}
