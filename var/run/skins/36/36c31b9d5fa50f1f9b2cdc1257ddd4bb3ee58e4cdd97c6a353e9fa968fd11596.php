<?php

/* header/parts/meta_viewport.twig */
class __TwigTemplate_8026c50e38950c6c5fba6048a35a486c75f7a31b2e4d754e360fc968205be2e1 extends \XLite\Core\Templating\Twig\Template
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
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/meta_viewport.twig";
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
        return new Twig_Source("", "header/parts/meta_viewport.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\meta_viewport.twig");
    }
}
