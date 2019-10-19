<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/title.left.twig */
class __TwigTemplate_b0dcc43b8c1857e0a82638cdbb67176848aebd91fa8a9f6bec6448cbc000c3cf extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"info\">
  <div class=\"reviewer-name\">
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "review", []), "getReviewerName", [], "method")) {
            // line 9
            echo "      <span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "review", []), "getReviewerName", [], "method"), "html", null, true);
            echo "</span>
    ";
        }
        // line 11
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "review", []), "getReviewerName", [], "method")) {
            // line 12
            echo "      <span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Anonymous reviewer"]), "html", null, true);
            echo "</span>
    ";
        }
        // line 14
        echo "  </div>
  <div class=\"date\">
    ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatTime", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "review", []), "getAdditionDate", [], "method")], "method"), "html", null, true);
        echo "
  </div>
</div>
";
        // line 19
        if ($this->getAttribute(($context["this"] ?? null), "isOwnReview", [0 => $this->getAttribute(($context["this"] ?? null), "review", [])], "method")) {
            // line 20
            echo "  <div class=\"separator\"></div>
";
        }
        // line 22
        if ( !$this->getAttribute(($context["this"] ?? null), "isOnModeration", [0 => $this->getAttribute(($context["this"] ?? null), "review", [])], "method")) {
            // line 23
            echo "  <div class=\"approved-separator\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/title.left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  56 => 22,  52 => 20,  50 => 19,  44 => 16,  40 => 14,  34 => 12,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/title.left.twig", "");
    }
}
