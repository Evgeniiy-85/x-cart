<?php

/* header/parts/meta_viewport.twig */
class __TwigTemplate_c042b654a08e4ab8bdc7ac564444e2a522d138708f17a3826e7df09efaa3c7a2 extends \XLite\Core\Templating\Twig\Template
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
        return new Twig_Source("", "header/parts/meta_viewport.twig", "/home/vagrant/next/output/xcart/src/skins/customer/header/parts/meta_viewport.twig");
    }
}
