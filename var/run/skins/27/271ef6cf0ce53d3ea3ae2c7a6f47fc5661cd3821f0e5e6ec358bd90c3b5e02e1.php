<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/zones/details/parts/field.country.twig */
class __TwigTemplate_a7c3cfcc33b1bf999419f9b09ba1e4339001e8fda50887831d9e0a3544007127 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Listbox\\Country", "fieldName" => "zone_countries", "label" => "Countries", "labelFrom" => "All countries", "labelTo" => "Selected countries", "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "zone", []), "getZoneCountries", [], "method"), "wrapperClass" => "zone-countries"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/zones/details/parts/field.country.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/zones/details/parts/field.country.twig", "");
    }
}
