<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/button/add_review.twig */
class __TwigTemplate_0ee7b013e9a9b9a1280b98fb5a548c1dd919ee06db8841a9e13006fe70626dc9 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"product-reviews-button\">
    ";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isAllowedAddReview", [], "method")) {
            // line 8
            echo "      ";
            if ($this->getAttribute(($context["this"] ?? null), "isReplaceAddReviewWithLogin", [], "method")) {
                // line 9
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\PopupLogin", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add review"]), "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
                echo "
      ";
            } else {
                // line 11
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReview", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add review"]), "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
                echo "
      ";
            }
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      <div class=\"add-review-button-disabled\">
          ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAddReviewMessage", [], "method"), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/button/add_review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  45 => 15,  42 => 14,  39 => 13,  33 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/button/add_review.twig", "");
    }
}
