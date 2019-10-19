<?php

/* items_list\empty.twig */
class __TwigTemplate_4677f29f7102a63c42aaf2ac1798ffbef25c4fdefc92a9f3d4c5144df21d7fa9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"empty-list\">";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "getEmptyListDescription", [], "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list\\empty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
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
 # Empty items list
 #}

<div class=\"empty-list\">{{ this.getEmptyListDescription()|raw }}</div>
", "items_list\\empty.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\empty.twig");
    }
}
