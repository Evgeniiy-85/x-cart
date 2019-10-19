<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/details.twig */
class __TwigTemplate_27a7187d1f83bd369b49124e0ae44e837a30078209094a7c083a0872c85760cc extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isVisibleAverageRating", [], "method")) {
            // line 9
            echo "  <div class=\"ratings-details\">
    <div class=\"title\">
      ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Rating of votes"]), "html", null, true);
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getVotesCount", [], "method"), "html", null, true);
            echo ")
    </div>
    <table>
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getRatings", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 15
                echo "        <tr class=\"rating-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "rating", []), "html", null, true);
                echo "\">
          <td class=\"indent\"></td>
          <td class=\"rating-digit\">";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "rating", []), "html", null, true);
                echo "</td>
          <td class=\"rating\">";
                // line 18
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\VoteBar", "rate" => "1", "max" => "1", "length" => "1"]]), "html", null, true);
                echo "</td>
          <td class=\"percent\">
            <div class=\"rating-line rating-";
                // line 20
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "rating", []), "html", null, true);
                echo "\" style=\"width:";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "percent", []), "html", null, true);
                echo "%\">&nbsp;</div>
            ";
                // line 21
                if ($this->getAttribute($context["rating"], "showPercentLastDiv", [])) {
                    echo "<div class=\"rating-end\">&nbsp;</div>";
                }
                // line 22
                echo "          </td>
          <td class=\"count count-";
                // line 23
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "count", []), "html", null, true);
                echo "\"><span class=\"count-number\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "count", []), "html", null, true);
                echo "</span><span class=\"count-text\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["customers"]), "html", null, true);
                echo "</span></td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      <tr><td colspan=\"5\">&nbsp;</td></tr>
    </table>
  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  68 => 23,  65 => 22,  61 => 21,  55 => 20,  50 => 18,  46 => 17,  40 => 15,  36 => 14,  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/details.twig", "");
    }
}
