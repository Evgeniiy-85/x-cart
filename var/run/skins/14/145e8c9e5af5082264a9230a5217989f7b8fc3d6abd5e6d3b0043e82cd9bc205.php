<?php

/* header/parts/noindex.twig */
class __TwigTemplate_05ab3d4a5b81b115607b3407e40882422111b62f01b4d352ac69d611533f07f5 extends \XLite\Core\Templating\Twig\Template
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
<meta name=\"robots\" content=\"noindex, nofollow\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/noindex.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Header part
 #
 # @ListChild (list=\"head\", weight=\"40\")
 #}

<meta name=\"robots\" content=\"noindex, nofollow\" />
", "header/parts/noindex.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\header\\parts\\noindex.twig");
    }
}
