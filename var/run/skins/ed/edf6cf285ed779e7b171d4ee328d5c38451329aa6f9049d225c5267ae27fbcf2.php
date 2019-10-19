<?php

/* header/parts/meta_generator.twig */
class __TwigTemplate_595852420e35fa0588806af1579c8604c7c6148100cd4df4a656638d26930394 extends \XLite\Core\Templating\Twig\Template
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
<meta name=\"Generator\" content=\"X-Cart\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/meta_generator.twig";
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
        return new Twig_Source("", "header/parts/meta_generator.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\meta_generator.twig");
    }
}
