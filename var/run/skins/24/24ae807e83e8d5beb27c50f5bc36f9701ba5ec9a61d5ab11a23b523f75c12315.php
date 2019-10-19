<?php

/* main_center/page_container_parts/header_parts/menu_control.twig */
class __TwigTemplate_a96e69e71c75c29c41627b0f0465593a4137fb11a9bd31bbf85c4975c9ec27bf extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "auth", []), "isAdmin", [], "method")) {
            // line 7
            echo "  <div class=\"left-menu-ctrl\">";
            echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/menu.svg"], "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "main_center/page_container_parts/header_parts/menu_control.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "main_center/page_container_parts/header_parts/menu_control.twig", "/home/vagrant/next/output/xcart/src/skins/admin/main_center/page_container_parts/header_parts/menu_control.twig");
    }
}
