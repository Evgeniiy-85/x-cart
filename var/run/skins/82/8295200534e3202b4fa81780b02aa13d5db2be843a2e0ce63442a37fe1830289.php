<?php

/* layout/content/main.center.center.twig */
class __TwigTemplate_241767ac8a07a41ae1463a774c0c35c526ec7b834645d6dfef6d00fb8d2009cb extends \XLite\Core\Templating\Twig\Template
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
<div id=\"content\" class=\"column\">
  ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isTrialNoticeAutoDisplay", [], "method")) {
            // line 9
            echo "    <iframe src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "buildUrl", [0 => "trial_notice"], "method"), "html", null, true);
            echo "\" class=\"trial-notice\" frameborder=\"0\" scrolling=\"no\" width=\"752\" height=\"387\" style=\"margin: 0 auto; display: block;\" onload=\"this.style.height = this.contentWindow.document.body.scrollHeight + 'px';\"></iframe>
  ";
        }
        // line 11
        echo "  <div class=\"section\">
    <a id=\"main-content\"></a>
    ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\ListContainer", "inner" => "layout/content/center.twig", "group" => "center"]]), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layout/content/main.center.center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 13,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/content/main.center.center.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\layout\\content\\main.center.center.twig");
    }
}
