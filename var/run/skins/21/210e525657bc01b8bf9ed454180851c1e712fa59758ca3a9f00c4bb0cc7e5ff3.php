<?php

/* modules/XC/Onboarding/wizard_steps/done/body.twig */
class __TwigTemplate_ecf5a51cd113d7c444916ee72088e3fad4e3cca5ecf2a0107f77992665511970 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Excellent! Now you can get paid"]), "html", null, true);
        echo "</h2>
    <p class=\"text\">
      ";
        // line 11
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Go on, make your first sale.", ["url" => $this->getAttribute(($context["this"] ?? null), "getStorefrontUrl", [], "method")]]);
        echo "<br>
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Need help setting up your store?"]), "html", null, true);
        echo "
    </p>

    <div class=\"links\">
      <div class=\"expert\">
        <div class=\"image\">";
        // line 17
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/Onboarding/images/icon-contact-our-expert.svg"]);
        echo "</div>
        <div class=\"link\">
          <a href=\"";
        // line 19
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSupportUrl", [], "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Contact our expert"]), "html", null, true);
        echo "</a>
        </div>
        <div class=\"note\">
          ";
        // line 22
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["X-Cart professionals will easily materialize just about any idea you’ve got."]), "html", null, true);
        echo "
        </div>
      </div>

      <div class=\"knowledge-base\">
        <div class=\"image\">";
        // line 27
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/Onboarding/images/icon-knowledge-base.svg"]);
        echo "</div>
        <div class=\"link\">
          <a href=\"";
        // line 29
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getKBUrl", [], "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Knowledge base"]), "html", null, true);
        echo "</a>
        </div>
        <div class=\"note\">
          ";
        // line 32
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["User manuals, release notes, modules, videos and more."]), "html", null, true);
        echo "
        </div>
      </div>

      <div class=\"developer-docs\">
        <div class=\"image\">";
        // line 37
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/Onboarding/images/icon-developer-docs.svg"]);
        echo "</div>
        <div class=\"link\">
          <a href=\"";
        // line 39
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDevDocsUrl", [], "method"), "html", null, true);
        echo "\" target=\"_blank\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Developer docs"]), "html", null, true);
        echo "</a>
        </div>
        <div class=\"note\">
          ";
        // line 42
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["See the tutorials and documentation about X-Cart store customization."]), "html", null, true);
        echo "
        </div>
      </div>
    </div>

    <div class=\"contacts\">
      <div class=\"phone-email text\">
        <div class=\"phone\">
          ";
        // line 50
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Sales & Customer Service: [phone]", ["phone" => $this->getAttribute(($context["this"] ?? null), "getPhoneNumber", [], "method")]]), "html", null, true);
        echo "
        </div>
        <div class=\"separator\">/</div>
        <div class=\"email\">
          <a href=\"mailto:";
        // line 54
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSalesEmail", [], "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSalesEmail", [], "method"), "html", null, true);
        echo "</a>
        </div>
      </div>
    </div>

    <div class=\"buttons\">
      <div class=\"next-step\">
        ";
        // line 61
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Link", "label" => "Close wizard", "attributes" => ["@click" => "closeWizard"], "style" => "regular-main-button", "jsCode" => "null;"]]), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_steps/done/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 61,  122 => 54,  115 => 50,  104 => 42,  96 => 39,  91 => 37,  83 => 32,  75 => 29,  70 => 27,  62 => 22,  54 => 19,  49 => 17,  41 => 12,  37 => 11,  32 => 9,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Onboarding/wizard_steps/done/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\Onboarding\\wizard_steps\\done\\body.twig");
    }
}
