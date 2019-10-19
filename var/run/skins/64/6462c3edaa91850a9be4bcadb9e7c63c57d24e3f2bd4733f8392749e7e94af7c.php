<?php

/* E:\Server\projects\x-cart\skins\crisp_white\customer\modules\XC\Reviews\reviews_page\parts\title.right.twig */
class __TwigTemplate_dbef200c73ed4de01257f2e86e4df1af9333eb06ebfef110a20731be78a6f5e5 extends \XLite\Core\Templating\Twig\Template
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
            echo "    <div class=\"moderation\">
      <span>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["On moderation"]), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        // line 12
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isOwnReview", [0 => $this->getAttribute(($context["this"] ?? null), "review", [])], "method")) {
            // line 13
            echo "    <div class=\"separator\"></div>
  ";
        }
        // line 15
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isOwnReview", [0 => $this->getAttribute(($context["this"] ?? null), "review", [])], "method")) {
            // line 16
            echo "    <div class=\"buttons\">
      ";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\EditReview", "label" => "Edit", "review" => $this->getAttribute(($context["this"] ?? null), "review", [])]]), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\modules\\XC\\Reviews\\reviews_page\\parts\\title.right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  46 => 17,  43 => 16,  40 => 15,  36 => 13,  33 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\modules\\XC\\Reviews\\reviews_page\\parts\\title.right.twig", "");
    }
}
