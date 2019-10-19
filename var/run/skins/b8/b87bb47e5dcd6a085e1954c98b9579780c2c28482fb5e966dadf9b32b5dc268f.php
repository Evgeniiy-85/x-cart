<?php

/* E:\Server\projects\x-cart\skins\admin\layout_settings\parts\layout_settings.change_template.twig */
class __TwigTemplate_9f1195365e85e292f37d762cbca2861680f48f8affd2e8701ce07fd9c2530ce2 extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
<div class=\"change-template\">
  <div class=\"header\">
    <h2>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Choose a new template"]), "html", null, true);
        echo "</h2>

    <div class=\"right\">
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\SimpleLink", "label" => "Visit the template store", "location" => $this->getAttribute(($context["this"] ?? null), "getTemplatesStoreURL", [], "method"), "blank" => "true"]]), "html", null, true);
        echo "

      <span class=\"or\">";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["or"]), "html", null, true);
        echo "</span>

      ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Addon\\ActivateLicenseKey", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Activate purchased skin"])]]), "html", null, true);
        echo "

      ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Addon\\EnterLicenseKey", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Activate purchased skin"])]]), "html", null, true);
        echo "

      ";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "className" => "help-icon", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["If you purchased a template but do not see it here, activate the license key that was provided to you."])]]), "html", null, true);
        echo "
    </div>
    <div class=\"clear\"></div>
  </div>
  ";
        // line 24
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Model\\ChangeTemplate"]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\layout_settings\\parts\\layout_settings.change_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 24,  50 => 20,  45 => 18,  40 => 16,  35 => 14,  30 => 12,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\layout_settings\\parts\\layout_settings.change_template.twig", "");
    }
}
