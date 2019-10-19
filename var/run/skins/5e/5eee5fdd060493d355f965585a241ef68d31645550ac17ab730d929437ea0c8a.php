<?php

/* E:\Server\projects\x-cart\skins\customer\modules\CDev\SimpleCMS\page\parts\content.twig */
class __TwigTemplate_5fcce96e1ead0d4a8fa40b5fb3b6fedd26cbef89de387c700478f8e49e592b98 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"page-body-content\" ";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", []), "getFieldMetadata", [0 => "body"], "method")], "method");
        echo ">";
        echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", []), "getBody", [], "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\CDev\\SimpleCMS\\page\\parts\\content.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\CDev\\SimpleCMS\\page\\parts\\content.twig", "");
    }
}
