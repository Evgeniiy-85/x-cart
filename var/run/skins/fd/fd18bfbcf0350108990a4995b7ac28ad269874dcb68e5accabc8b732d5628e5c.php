<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/title.right.twig */
class __TwigTemplate_6a389c1d4b4cb0b53837bc0b3b5cd45294d2c06148f9f4b384d8cf7f1674e3bc extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"right-actions\">
  ";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "isOnModeration", [0 => $this->getAttribute(($context["this"] ?? null), "review", [])], "method")) {
            // line 8
            echo "    <div class=\"moderation\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["On moderation"]), "html", null, true);
            echo "</div>
  ";
        }
        // line 10
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isOwnReview", [0 => $this->getAttribute(($context["this"] ?? null), "review", [])], "method")) {
            // line 11
            echo "    <div class=\"separator\"></div>
  ";
        }
        // line 13
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isOwnReview", [0 => $this->getAttribute(($context["this"] ?? null), "review", [])], "method")) {
            // line 14
            echo "    <div class=\"buttons\">
      ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\EditReview", "label" => " ", "review" => $this->getAttribute(($context["this"] ?? null), "review", [])]]), "html", null, true);
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
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/title.right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  43 => 15,  40 => 14,  37 => 13,  33 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/title.right.twig", "");
    }
}
