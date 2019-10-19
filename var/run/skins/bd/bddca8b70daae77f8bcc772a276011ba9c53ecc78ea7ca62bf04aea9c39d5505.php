<?php

/* items_list/model/table/parts/head.cell.twig */
class __TwigTemplate_62c19ed6444a8b2f695ce624b1b198bbc5a1284055a6db7813c69afa26bd420f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["column"] ?? null), "columnSelector", [])) {
            // line 6
            echo "  <div>
";
        }
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute(($context["column"] ?? null), "headTemplate", [])) {
            // line 10
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => $this->getAttribute(($context["column"] ?? null), "headTemplate", []), "column" => ($context["column"] ?? null)]]), "html", null, true);
            echo "
";
        } else {
            // line 12
            if ($this->getAttribute(($context["column"] ?? null), "sort", [])) {
                // line 13
                echo "  <a
    href=\"";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, $this->getAttribute(($context["this"] ?? null), "getTarget", [], "method"), "", ["sortBy" => $this->getAttribute(($context["column"] ?? null), "sort", []), "sortOrder" => $this->getAttribute(($context["this"] ?? null), "getSortDirectionNext", [0 => ($context["column"] ?? null)], "method")]]), "html", null, true);
                echo "\"
    data-sort=\"";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? null), "sort", []), "html", null, true);
                echo "\"
    data-direction=\"";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSortOrder", [], "method"), "html", null, true);
                echo "\"
    class=\"";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSortLinkClass", [0 => ($context["column"] ?? null)], "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? null), "name", []), "html", null, true);
                echo "</a>
  ";
                // line 18
                if ($this->getAttribute(($context["this"] ?? null), "isColumnSorted", [0 => ($context["column"] ?? null)], "method")) {
                    // line 19
                    echo "  ";
                    if (("desc" == $this->getAttribute(($context["this"] ?? null), "getSortOrder", [], "method"))) {
                        // line 20
                        echo "    <i class=\"dir desc-order\"></i>
  ";
                    }
                    // line 22
                    echo "  ";
                    if (("asc" == $this->getAttribute(($context["this"] ?? null), "getSortOrder", [], "method"))) {
                        // line 23
                        echo "    <i class=\"dir asc-order\"></i>
  ";
                    }
                    // line 25
                    echo "  ";
                }
            } else {
                // line 27
                echo "  <div class=\"table-header\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? null), "name", []), "html", null, true);
                echo "</div>
";
            }
            // line 29
            echo "  ";
            if ($this->getAttribute(($context["column"] ?? null), "headHelp", [])) {
                // line 30
                echo "    <div class=\"help-wrapper\">
      ";
                // line 31
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Tooltip", "id" => "menu-links-help-text", "text" => $this->getAttribute(($context["column"] ?? null), "headHelp", []), "isImageTag" => "true", "className" => "help-small-icon"]]), "html", null, true);
                echo "
    </div>
  ";
            }
        }
        // line 35
        if ($this->getAttribute(($context["column"] ?? null), "subheader", [])) {
            // line 36
            echo "  <div class=\"subheader\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? null), "subheader", []), "html", null, true);
            echo "</div>
";
        }
        // line 38
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getCellListNamePart", [0 => "head", 1 => ($context["column"] ?? null)], "method"), "type" => "inherited", "column" => ($context["column"] ?? null)]]), "html", null, true);
        echo "
";
        // line 39
        if ($this->getAttribute(($context["column"] ?? null), "columnSelector", [])) {
            // line 40
            echo "  <input type=\"checkbox\"
         class=\"selectAll not-significant\"
         autocomplete=\"off\" />
";
        }
        // line 44
        echo "
";
        // line 45
        if ($this->getAttribute(($context["column"] ?? null), "columnSelector", [])) {
            // line 46
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "items_list/model/table/parts/head.cell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 46,  124 => 45,  121 => 44,  115 => 40,  113 => 39,  109 => 38,  103 => 36,  101 => 35,  94 => 31,  91 => 30,  88 => 29,  82 => 27,  78 => 25,  74 => 23,  71 => 22,  67 => 20,  64 => 19,  62 => 18,  56 => 17,  52 => 16,  48 => 15,  44 => 14,  41 => 13,  39 => 12,  33 => 10,  31 => 9,  28 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/parts/head.cell.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\parts\\head.cell.twig");
    }
}
