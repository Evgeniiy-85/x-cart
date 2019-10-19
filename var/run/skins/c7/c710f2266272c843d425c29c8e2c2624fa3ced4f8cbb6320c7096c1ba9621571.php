<?php

/* button/items_export.twig */
class __TwigTemplate_aecf354f62b1a340befcfb063ce4dbe3ca00191df27d4e8c0a1790adece178fe extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "
<div class=\"btn-group dropup items-export\">
  ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isMultipleOptions", [], "method")) {
            // line 7
            echo "    <button type=\"button\" class=\"btn regular-button toggle-list-action dropdown-toggle always-enabled\" data-toggle=\"dropdown\">
      <span>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method")]), "html", null, true);
            echo "</span>
      <span class=\"caret\"></span>
      <span class=\"sr-only\"></span>
    </button>

    ";
            // line 13
            if ($this->getAttribute(($context["this"] ?? null), "getAdditionalButtons", [], "method")) {
                // line 14
                echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
                // line 15
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAdditionalButtons", [], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 16
                    echo "        <li>";
                    echo $this->getAttribute($context["button"], "display", [], "method");
                    echo "</li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "    </ul>
    ";
            }
            // line 20
            echo "
  ";
        } else {
            // line 22
            echo "    <button type=\"button\" class=\"btn regular-button always-enabled\">
      <span>";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method")]), "html", null, true);
            echo "</span>: <span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFirstProviderLabel", [], "method"), "html", null, true);
            echo "</span>
    </button>
  ";
        }
        // line 26
        echo "</div>

";
        // line 28
        if ( !$this->getAttribute(($context["this"] ?? null), "isMultipleOptions", [], "method")) {
            // line 29
            echo "<div class='hidden'>
  ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAdditionalButtons", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 31
                echo "  ";
                echo $this->getAttribute($context["button"], "display", [], "method");
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "button/items_export.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 33,  87 => 31,  83 => 30,  80 => 29,  78 => 28,  74 => 26,  66 => 23,  63 => 22,  59 => 20,  55 => 18,  46 => 16,  42 => 15,  39 => 14,  37 => 13,  29 => 8,  26 => 7,  24 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "button/items_export.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\button\\items_export.twig");
    }
}
