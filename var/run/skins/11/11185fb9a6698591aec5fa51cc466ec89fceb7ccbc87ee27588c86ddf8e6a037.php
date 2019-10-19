<?php

/* header/parts/meta_mobile-capable.twig */
class __TwigTemplate_b474675b7c2cb135b181c58a76fcc768c1cdac51c848da6aeea6328a076e5e19 extends \XLite\Core\Templating\Twig\Template
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
<meta name=\"apple-mobile-web-app-capable\"   content=\"yes\" />
<meta name=\"mobile-web-app-capable\"         content=\"yes\" />";
    }

    public function getTemplateName()
    {
        return "header/parts/meta_mobile-capable.twig";
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
 # Head list children
 #
 # @ListChild (list=\"head\", weight=\"700\")
 #}

<meta name=\"apple-mobile-web-app-capable\"   content=\"yes\" />
<meta name=\"mobile-web-app-capable\"         content=\"yes\" />", "header/parts/meta_mobile-capable.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\header\\parts\\meta_mobile-capable.twig");
    }
}
