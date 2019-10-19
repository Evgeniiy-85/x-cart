<?php

/* E:\Server\projects\x-cart\skins\admin\pager\model\table\parts\items_per_page.twig */
class __TwigTemplate_df9cd6f1c3318e0cc834faa2c4620185ee2ab7bb4e957f5e3393d2449f81f8c7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isItemsPerPageVisible", [], "method")) {
            // line 7
            echo "  <div class=\"items-per-page-wrapper\">
    <div class=\"search-total-items\">
      ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["<span>X</span> items", ["X" => $this->getAttribute(($context["this"] ?? null), "getItemsTotal", [], "method")]]);
            echo "
    </div>
    <select name=\"itemsPerPage\" class=\"form-control page-length not-significant\" title=\"Items per page\">
      ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getItemsPerPageRanges", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["range"]) {
                // line 13
                echo "        <option value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["range"], "html", null, true);
                echo "\" ";
                if ($this->getAttribute(($context["this"] ?? null), "isRangeSelected", [0 => $context["range"]], "method")) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["range"], "html", null, true);
                echo "</option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['range'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </select>
    <span>";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["per page"]), "html", null, true);
            echo "</span>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\pager\\model\\table\\parts\\items_per_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  50 => 15,  35 => 13,  31 => 12,  25 => 9,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\pager\\model\\table\\parts\\items_per_page.twig", "");
    }
}
