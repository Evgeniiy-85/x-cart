<?php

/* items_list/model/table/field.twig */
class __TwigTemplate_728ec1dbb776630621a28173d76625c3ac25f1a8b34606365d11ee1c6dfff9ff extends \XLite\Core\Templating\Twig\Template
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
<div class=\"plain-value ";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "isLink", [0 => $this->getAttribute(($context["this"] ?? null), "column", []), 1 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            echo "link-value";
        }
        echo "\">
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isLink", [0 => $this->getAttribute(($context["this"] ?? null), "column", []), 1 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            // line 7
            echo "    <span class=\"value\">
      <a
        href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "buildEntityURL", [0 => $this->getAttribute(($context["this"] ?? null), "entity", []), 1 => $this->getAttribute(($context["this"] ?? null), "column", [])], "method"), "html", null, true);
            echo "\"
        ";
            // line 10
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "column", []), "noWrap", [])) {
                echo " title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getColumnValue", [0 => $this->getAttribute(($context["this"] ?? null), "column", []), 1 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"), "html", null, true);
                echo "\"";
            }
            // line 11
            echo "        class=\"link\">";
            echo $this->getAttribute(($context["this"] ?? null), "getColumnValue", [0 => $this->getAttribute(($context["this"] ?? null), "column", []), 1 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method");
            echo "
      </a>
    </span>
  ";
        }
        // line 15
        echo "  ";
        if ( !$this->getAttribute(($context["this"] ?? null), "isLink", [0 => $this->getAttribute(($context["this"] ?? null), "column", []), 1 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method")) {
            // line 16
            echo "    <span class=\"value\">";
            echo $this->getAttribute(($context["this"] ?? null), "getColumnValue", [0 => $this->getAttribute(($context["this"] ?? null), "column", []), 1 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method");
            echo "</span>
  ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/model/table/field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 18,  55 => 16,  52 => 15,  44 => 11,  38 => 10,  34 => 9,  30 => 7,  28 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/field.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\field.twig");
    }
}
