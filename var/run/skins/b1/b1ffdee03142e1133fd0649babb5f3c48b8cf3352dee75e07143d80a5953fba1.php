<?php

/* E:\Server\projects\x-cart\skins\customer\header\parts\link_favicon.twig */
class __TwigTemplate_188ab301c9c7ea22ed6bf3ecf2a6b3e2a1eb7ad37e397f4a383ff6f67ccd28b5 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "displayFavicon", [], "method")) {
            // line 8
            echo "  <link rel=\"shortcut icon\" href=\"";
            echo $this->getAttribute(($context["this"] ?? null), "getFavicon", [], "method");
            echo "\" type=\"image/x-icon\" />
";
        }
        // line 10
        echo "
<link rel=\"icon\"              sizes=\"192x192\"   href=\"";
        // line 11
        echo $this->getAttribute(($context["this"] ?? null), "getAppleIcon", [], "method");
        echo "\"/>
<link rel=\"apple-touch-icon\"  sizes=\"192x192\"   href=\"";
        // line 12
        echo $this->getAttribute(($context["this"] ?? null), "getAppleIcon", [], "method");
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\link_favicon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  33 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\link_favicon.twig", "");
    }
}