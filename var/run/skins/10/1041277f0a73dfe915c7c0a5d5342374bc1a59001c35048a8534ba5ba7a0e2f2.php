<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/header/parts/favicon.twig */
class __TwigTemplate_69643709c3507172cdc83dd093e3c5e68766c5421d42dcf03cd9047fec58fd53 extends \XLite\Core\Templating\Twig\Template
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
<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getFavicon", [], "method"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
<link rel=\"icon\"              sizes=\"192x192\"   href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAppleIcon", [], "method"), "html", null, true);
        echo "\"/>
<link rel=\"apple-touch-icon\"  sizes=\"192x192\"   href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAppleIcon", [], "method"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/header/parts/favicon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/header/parts/favicon.twig", "");
    }
}
