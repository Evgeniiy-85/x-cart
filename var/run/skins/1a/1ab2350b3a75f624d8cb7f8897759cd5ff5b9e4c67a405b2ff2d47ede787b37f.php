<?php

/* E:\Server\projects\x-cart\skins\customer\modules\XC\News\page\news_message\parts\body.twig */
class __TwigTemplate_ba3ac0cdf83311caf6e95d9a87773a0a98a0c2030ff1b91a0329d99c8bafd28d extends \XLite\Core\Templating\Twig\Template
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
<div class=\"news-message-body\">";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "newsMessage", []), "body", []);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\News\\page\\news_message\\parts\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\XC\\News\\page\\news_message\\parts\\body.twig", "");
    }
}
