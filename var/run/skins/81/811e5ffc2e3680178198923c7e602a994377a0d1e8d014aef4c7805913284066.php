<?php

/* items_list/model/empty_table_description.twig */
class __TwigTemplate_e74255d8e178c48a5a49b25eef4206560ef6d6e612a99928da212618307de245 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"empty-table-description no-items\">
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayBlankItemsListDescription", [], "method")) {
            // line 7
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(($context["this"] ?? null), "getBlankListTemplate", [], "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getBlankListTemplate", [], "method"), "items_list/model/empty_table_description.twig", 7)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 8
            echo "  ";
        } elseif ($this->getAttribute(($context["this"] ?? null), "isEmptyListTemplateVisible", [], "method")) {
            // line 9
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(($context["this"] ?? null), "getEmptyListTemplate", [], "method"));            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($this->getAttribute(($context["this"] ?? null), "getEmptyListTemplate", [], "method"), "items_list/model/empty_table_description.twig", 9)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 10
            echo "  ";
        }
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/empty_table_description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  50 => 10,  39 => 9,  36 => 8,  25 => 7,  23 => 6,  19 => 4,);
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
 # Description if table is empty
 #}

<div class=\"empty-table-description no-items\">
  {% if this.isDisplayBlankItemsListDescription() %}
    {% include this.getBlankListTemplate() %}
  {% elseif this.isEmptyListTemplateVisible() %}
    {% include this.getEmptyListTemplate() %}
  {% endif %}
</div>
", "items_list/model/empty_table_description.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\empty_table_description.twig");
    }
}
