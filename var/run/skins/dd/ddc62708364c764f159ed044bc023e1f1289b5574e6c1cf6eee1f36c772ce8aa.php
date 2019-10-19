<?php

/* vote_bar/vote_bar.twig */
class __TwigTemplate_a0bf74d14ba6e2d3e4ec4f697cf2a6bbb38d3671dacabd263b8718784c76eb25 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"vote-bar";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "isEditable", [], "method")) {
            echo " editable";
        }
        echo "\">

  <div class=\"rating-stars\">
    <div class=\"stars-row\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getStarsCount", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
            // line 10
            echo "        <div class=\"star-single\"><span class=\"fa fa-star\"></span></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>

    <div class=\"stars-row full\" style=\"width: ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPercent", [], "method"), "html", null, true);
        echo "%;\">
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getStarsCount", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
            // line 16
            echo "        <div class=\"star-single\"><span class=\"fa fa-star\"></span></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>

    ";
        // line 20
        if ($this->getAttribute(($context["this"] ?? null), "isEditable", [], "method")) {
            // line 21
            echo "    <div class=\"stars-row hovered\" style=\"display: none;\">
      ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getStarsCount", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
                // line 23
                echo "        <div class=\"star-single star-num-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["num"], "html", null, true);
                echo "\" data-rating=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["num"], "html", null, true);
                echo "\" data-rating-label=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getRatingLabelFor", [0 => $context["num"]], "method"), "html", null, true);
                echo "\"><span class=\"fa fa-star\"></span></div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>

    <input type=\"hidden\" name=\"";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFieldName", [], "method"), "html", null, true);
            echo "\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getRating", [], "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 29
        echo "  </div>

  ";
        // line 31
        if ($this->getAttribute(($context["this"] ?? null), "getRatingLabel", [], "method")) {
            // line 32
            echo "    <span class=\"rating-label\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getRatingLabel", [], "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "vote_bar/vote_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  104 => 32,  102 => 31,  98 => 29,  91 => 27,  87 => 25,  74 => 23,  70 => 22,  67 => 21,  65 => 20,  61 => 18,  54 => 16,  50 => 15,  46 => 14,  42 => 12,  35 => 10,  31 => 9,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "vote_bar/vote_bar.twig", "E:\\Server\\projects\\x-cart\\skins\\common\\vote_bar\\vote_bar.twig");
    }
}
