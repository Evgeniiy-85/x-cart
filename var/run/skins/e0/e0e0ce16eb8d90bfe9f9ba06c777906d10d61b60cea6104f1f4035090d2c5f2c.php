<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/rating.twig */
class __TwigTemplate_953ac91fc841f7223a16e1f547ad11af17bfd338918373ce884d67d8c7740749 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isVisibleAverageRatingOnPage", [], "method")) {
            // line 8
            echo "  <div class=\"rating";
            if ($this->getAttribute(($context["this"] ?? null), "isAllowedRateProduct", [], "method")) {
                echo " edit";
            }
            echo "\">
    ";
            // line 9
            if ($this->getAttribute(($context["this"] ?? null), "isAllowedRateProduct", [], "method")) {
                // line 10
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Input\\Rating", "fieldName" => "rating", "rate" => $this->getAttribute(($context["this"] ?? null), "getAverageRating", [], "method"), "is_editable" => $this->getAttribute(($context["this"] ?? null), "isAllowedRateProduct", [], "method"), "max" => "5"]]), "html", null, true);
                echo "
    ";
            }
            // line 12
            echo "    ";
            if ( !$this->getAttribute(($context["this"] ?? null), "isAllowedRateProduct", [], "method")) {
                // line 13
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\VoteBar", "rate" => $this->getAttribute(($context["this"] ?? null), "getAverageRating", [], "method"), "max" => "5"]]), "html", null, true);
                echo "
    ";
            }
            // line 15
            echo "    <br />
  
    ";
            // line 17
            if (("tab" != $this->getAttribute(($context["this"] ?? null), "place", []))) {
                // line 18
                echo "      <div class=\"rating-tooltip\">
        ";
                // line 19
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "reviews.tooltip.rating"]]), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 22
            echo "  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  57 => 19,  54 => 18,  52 => 17,  48 => 15,  42 => 13,  39 => 12,  33 => 10,  31 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/rating.twig", "");
    }
}
