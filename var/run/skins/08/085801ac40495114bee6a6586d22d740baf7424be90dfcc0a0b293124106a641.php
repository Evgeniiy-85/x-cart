<?php

/* top_links/version_notes/parts/notice.twig */
class __TwigTemplate_41e75abdf4e322459e1689604d4bef54dc01188ff4a89b39269228725d9094fb extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"activate-notice\">

  <span class=\"trial-notice\">
    ";
        // line 7
        if (($this->getAttribute(($context["this"] ?? null), "getTrialPeriodLeft", [], "method") > 0)) {
            // line 8
            echo "      ";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Your access to X-Cart Business features expires in X days", ["count" => $this->getAttribute(($context["this"] ?? null), "getTrialPeriodLeft", [], "method"), "url" => $this->getAttribute(($context["this"] ?? null), "getBusinessViewUrl", [], "method")]]);
            echo "
    ";
        } else {
            // line 10
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Trial has expired!"]), "html", null, true);
            echo "
    ";
        }
        // line 12
        echo "  </span>

  ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\ActivateKey", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Activate license key"])]]), "html", null, true);
        echo "

  ";
        // line 16
        if ($this->getAttribute(($context["this"] ?? null), "isTrialNoticeAutoDisplay", [], "method")) {
            // line 17
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\TrialNotice"]]), "html", null, true);
            echo "
  ";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 19,  49 => 17,  47 => 16,  42 => 14,  38 => 12,  32 => 10,  26 => 8,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Header notice
 #}
<div class=\"activate-notice\">

  <span class=\"trial-notice\">
    {% if this.getTrialPeriodLeft() > 0 %}
      {{ t('Your access to X-Cart Business features expires in X days', {count: this.getTrialPeriodLeft(), url: this.getBusinessViewUrl()})|raw }}
    {% else %}
      {{ t('Trial has expired!') }}
    {% endif %}
  </span>

  {{ widget('XLite\\\\View\\\\Button\\\\ActivateKey', label=t('Activate license key')) }}

  {% if this.isTrialNoticeAutoDisplay() %}
    {{ widget('XLite\\\\View\\\\Button\\\\TrialNotice') }}
  {% endif %}
</div>
", "top_links/version_notes/parts/notice.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\top_links\\version_notes\\parts\\notice.twig");
    }
}
