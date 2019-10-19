<?php

/* header/parts/meta_compat_ie.twig */
class __TwigTemplate_9d397ac24e49967f51ca72832f8873c90d65cc4ca97d44cf140a3a30076a8e6e extends \XLite\Core\Templating\Twig\Template
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
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\" />
";
    }

    public function getTemplateName()
    {
        return "header/parts/meta_compat_ie.twig";
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
        return new Twig_Source("", "header/parts/meta_compat_ie.twig", "/home/vagrant/next/output/xcart/src/skins/customer/header/parts/meta_compat_ie.twig");
    }
}
