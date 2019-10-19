<?php

/* form_field/form_field_label.twig */
class __TwigTemplate_2c9072bc4403285e2f7b8b8ba0e634bf3fff9213fa499bf7ac183fa9bc5057d6 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLabelContainerClass", [], "method"), "html", null, true);
        echo "\">
  <label for=\"";
        // line 2
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFieldId", [], "method"), "html", null, true);
        echo "\" title=\"";
        echo $this->getAttribute(($context["this"] ?? null), "getFormattedLabel", [], "method");
        echo "\">
    ";
        // line 3
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFormattedLabel", [], "method"), "html", null, true);
        if ($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "useColon"], "method")) {
            echo ":";
        }
        // line 4
        echo "    ";
        if ($this->getAttribute(($context["this"] ?? null), "hasLabelHelp", [], "method")) {
            // line 5
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getParam", [0 => "labelHelp"], "method")]), "helpWidget" => $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "labelHelpWidget"], "method"), "isImageTag" => "true", "className" => "help-icon"]]), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "  </label>
</div>";
    }

    public function getTemplateName()
    {
        return "form_field/form_field_label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  38 => 5,  35 => 4,  30 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"{{ this.getLabelContainerClass() }}\">
  <label for=\"{{ this.getFieldId() }}\" title=\"{{ this.getFormattedLabel()|raw }}\">
    {{ this.getFormattedLabel() }}{% if this.getParam('useColon') %}:{% endif %}
    {% if this.hasLabelHelp() %}
      {{ widget('\\\\XLite\\\\View\\\\Tooltip', text=t(this.getParam('labelHelp')), helpWidget=this.getParam('labelHelpWidget'), isImageTag='true', className='help-icon') }}
    {% endif %}
  </label>
</div>", "form_field/form_field_label.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_field\\form_field_label.twig");
    }
}
