<?php

/* modules/XC/Reviews/average_rating/text.twig */
class __TwigTemplate_0ce6a5c13aaf96c4e9eed28dec42489251cb1c5f77cfe1879ba73ec70d06b3b4 extends \XLite\Core\Templating\Twig\Template
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
        echo " <div class=\"text\">
  ";
        // line 5
        if (($this->getAttribute(($context["this"] ?? null), "getVotesCount", [], "method") > 0)) {
            // line 6
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Score: X. Votes: Y", ["score" => $this->getAttribute(($context["this"] ?? null), "getAverageRating", [], "method"), "votes" => $this->getAttribute(($context["this"] ?? null), "getVotesCount", [], "method")]]), "html", null, true);
            echo "</div>
    ";
            // line 7
            if (($this->getAttribute(($context["this"] ?? null), "getReviewsCount", [], "method") > 0)) {
                // line 8
                echo "      <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Reviews: X", ["count" => $this->getAttribute(($context["this"] ?? null), "getReviewsCount", [], "method")]]), "html", null, true);
                echo "</div>
    ";
            } else {
                // line 10
                echo "      <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["No reviews."]), "html", null, true);
                echo "</div>
    ";
            }
            // line 12
            echo "  ";
        } else {
            // line 13
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Not rated yet"]), "html", null, true);
            echo "</div>
  ";
        }
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/average_rating/text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  46 => 13,  43 => 12,  37 => 10,  31 => 8,  29 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Reviews/average_rating/text.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\modules\\XC\\Reviews\\average_rating\\text.twig");
    }
}
