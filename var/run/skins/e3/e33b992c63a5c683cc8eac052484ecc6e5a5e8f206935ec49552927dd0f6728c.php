<?php

/* header/parts/meta_mobile_capable.twig */
class __TwigTemplate_4c584c92faa2736975d596c062c8014ad9caf413d4a3ffbe8e931d0ae8f0c8db extends \XLite\Core\Templating\Twig\Template
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
        return "header/parts/meta_mobile_capable.twig";
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
        return new Twig_Source("", "header/parts/meta_mobile_capable.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\meta_mobile_capable.twig");
    }
}
