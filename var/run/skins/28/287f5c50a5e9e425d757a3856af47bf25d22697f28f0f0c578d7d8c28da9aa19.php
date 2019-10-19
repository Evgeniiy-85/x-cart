<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.description.twig */
class __TwigTemplate_7dd9c5543004e0bc9dc3a33cac997f6262fd9e312d973dbc741ee731e243a514 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getAltAdminDescription", [], "method")) {
            // line 8
            echo "  <div class=\"description\">";
            echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getAltAdminDescription", [], "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.description.twig", "");
    }
}
