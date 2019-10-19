<?php

/* items_list\model/table.twig */
class __TwigTemplate_aecbb2b476922a094e2416b083cce02014550a8872e084be2ebb296bc8bf0a9b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isSearchVisible", [], "method")) {
            // line 6
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getSearchPanelClass", [], "method"), "itemsList" => $this->getAttribute(($context["this"] ?? null), "getItemsListObject", [], "method")]]), "html", null, true);
            echo "
";
        }
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isWrapWithForm", [], "method")) {
            // line 10
            echo "
  ";
            // line 11
            $this->startForm($this->getAttribute($this->getAttribute(($context["this"] ?? null), "formOptions", []), "class", []), ["name" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "formOptions", []), "name", []), "formTarget" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "formOptions", []), "target", []), "formAction" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "formOptions", []), "action", []), "formParams" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "formOptions", []), "params", []), "confirmRemove" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "formOptions", []), "confirmRemove", [])]);            // line 12
            echo "
    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("items_list/model/table_content.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 13
            $this->loadTemplate("items_list/model/table_content.twig", "items_list\\model/table.twig", 13)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 14
            echo "
  ";
            $this->endForm();            // line 16
            echo "
";
        } else {
            // line 18
            echo "
  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("items_list/model/table_content.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 19
            $this->loadTemplate("items_list/model/table_content.twig", "items_list\\model/table.twig", 19)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 20
            echo "
";
        }
        // line 22
        echo "
";
    }

    public function getTemplateName()
    {
        return "items_list\\model/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 22,  72 => 20,  67 => 19,  59 => 18,  55 => 16,  52 => 14,  47 => 13,  39 => 12,  38 => 11,  35 => 10,  33 => 9,  30 => 8,  24 => 6,  22 => 5,  19 => 4,);
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
 # Table model list
 #}

{% if this.isSearchVisible() %}
  {{ widget(this.getSearchPanelClass(), itemsList=this.getItemsListObject()) }}
{% endif %}

{% if this.isWrapWithForm() %}

  {% form this.formOptions.class with {name: this.formOptions.name, formTarget: this.formOptions.target, formAction: this.formOptions.action, formParams: this.formOptions.params, confirmRemove: this.formOptions.confirmRemove} %}

    {% include 'items_list/model/table_content.twig' %}

  {% endform %}

{% else %}

  {% include 'items_list/model/table_content.twig' %}

{% endif %}

", "items_list\\model/table.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table.twig");
    }
}
