<?php

/* settings/cache_management.twig */
class __TwigTemplate_7e9d9930b49dcb57a9a6ffde036f4a92c5bab91074130eb5ac46f5f77bcbad3e extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ( !$this->getAttribute(($context["this"] ?? null), "isQuickDataNotFinished", [], "method")) {
            // line 6
            echo "  <div class=\"rebuilded-time\">
      <span>";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Last time re-deployed at"]), "html", null, true);
            echo " </span>
      <span class=\"time\" data-time=\"";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLastRebuildTimeRaw", [], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLastRebuildTime", [], "method"), "html", null, true);
            echo "</span>
  </div>
  ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\ItemsList\\Model\\CacheManagementActions"]]), "html", null, true);
            echo "
";
        }
        // line 12
        if ($this->getAttribute(($context["this"] ?? null), "isQuickDataNotFinished", [], "method")) {
            // line 13
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\QuickData\\Progress"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "settings/cache_management.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  43 => 12,  38 => 10,  31 => 8,  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
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
 # Cache management page
 #}

{% if not this.isQuickDataNotFinished() %}
  <div class=\"rebuilded-time\">
      <span>{{ t('Last time re-deployed at') }} </span>
      <span class=\"time\" data-time=\"{{ this.getLastRebuildTimeRaw() }}\">{{ this.getLastRebuildTime() }}</span>
  </div>
  {{ widget('\\\\XLite\\\\View\\\\ItemsList\\\\Model\\\\CacheManagementActions') }}
{% endif %}
{% if this.isQuickDataNotFinished() %}
  {{ widget('\\\\XLite\\\\View\\\\QuickData\\\\Progress') }}
{% endif %}
", "settings/cache_management.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\settings\\cache_management.twig");
    }
}
