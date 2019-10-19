<?php

/* header/parts/meta_content_type.twig */
class __TwigTemplate_d60900a33a7303a97390ad831a8cc7e9063fa33bb16452f9681f98a58696d2de extends \XLite\Core\Templating\Twig\Template
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
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "getCharset", [], "method");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/meta_content_type.twig";
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
        return new Twig_Source("", "header/parts/meta_content_type.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\meta_content_type.twig");
    }
}
