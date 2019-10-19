<?php

/* E:\Server\projects\x-cart\skins\admin\layout_settings\settings\parts\settings.current_template.twig */
class __TwigTemplate_e4f50eec878059d4677f8d92e4edf4175bb9e83aec21dc447d74ca1b275102db extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"current-template\">
  <span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Current template"]), "html", null, true);
        echo ":</span> <span class=\"template-name\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCurrentSkinName", [], "method"), "html", null, true);
        echo "</span>
  ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "showSettingsForm", [], "method")) {
            // line 9
            echo "    <div class=\"settings-form\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\SimpleLink", "location" => $this->getAttribute(($context["this"] ?? null), "getSettingsForm", [], "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Edit custom options"])]]), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 13
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\layout_settings\\settings\\parts\\settings.current_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  33 => 10,  30 => 9,  28 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\layout_settings\\settings\\parts\\settings.current_template.twig", "");
    }
}
