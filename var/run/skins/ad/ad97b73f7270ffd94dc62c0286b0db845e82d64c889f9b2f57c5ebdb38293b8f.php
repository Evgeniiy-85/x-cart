<?php

/* E:\Server\projects\x-cart\skins\customer\pager\parts\items_total.twig */
class __TwigTemplate_b3a3d3ba773ca052db2423ca2b8db3a84b61f522ccff77e8e324c42ce0fd64ec extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isItemsPerPageVisible", [], "method")) {
            // line 8
            echo "  <div class=\"pager-items-total\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Items"]), "html", null, true);
            echo ":
    ";
            // line 10
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["BEGIN - END of TOTAL", ["begin" => $this->getAttribute(($context["this"] ?? null), "getBeginRecordNumber", [], "method"), "end" => $this->getAttribute(($context["this"] ?? null), "getEndRecordNumber", [], "method"), "total" => $this->getAttribute(($context["this"] ?? null), "getItemsTotal", [], "method")]]);
            if ($this->getAttribute(($context["this"] ?? null), "isItemsPerPageSelectorVisible", [], "method")) {
                echo "<span>,
      <input type=\"text\" value=\"";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemsPerPage", [], "method"), "html", null, true);
                echo "\" class=\"page-length validate[custom[integer],min[";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemsPerPageMin", [], "method"), "html", null, true);
                echo "],max[";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemsPerPageMax", [], "method"), "html", null, true);
                echo "]]\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Items per page"]), "html", null, true);
                echo "\" />
      ";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["per page"]), "html", null, true);
                echo "</span>";
            }
            // line 13
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\pager\\parts\\items_total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 13,  46 => 12,  36 => 11,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\pager\\parts\\items_total.twig", "");
    }
}
