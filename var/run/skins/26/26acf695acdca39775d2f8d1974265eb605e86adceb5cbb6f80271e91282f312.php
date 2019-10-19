<?php

/* header/parts/nofollow.twig */
class __TwigTemplate_ca4af4cfebc9c9585e7f1058fd6c80c261dc99bc6b4e7807280deef7986eef63 extends \XLite\Core\Templating\Twig\Template
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
<meta name=\"ROBOTS\" content=\"NOFOLLOW\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/nofollow.twig";
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
        return new Twig_Source("", "header/parts/nofollow.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\header\\parts\\nofollow.twig");
    }
}
