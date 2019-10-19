<?php

/* /home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.address.twig */
class __TwigTemplate_8a1519394ea9822e5f30cb7d2867ffc3ac17cf0a145b0e6386aff0830c2889ea extends \XLite\Core\Templating\Twig\Template
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
        $context["company"] = $this->getAttribute(($context["this"] ?? null), "company", []);
        // line 8
        echo "
<p>
  ";
        // line 10
        if ($this->getAttribute(($context["company"] ?? null), "location_address", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "location_address", []), "html", null, true);
            echo "<br />";
        }
        // line 11
        echo "  ";
        if ($this->getAttribute(($context["company"] ?? null), "location_city", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "location_city", []), "html", null, true);
            echo ", ";
        }
        if ($this->getAttribute($this->getAttribute(($context["company"] ?? null), "locationState", []), "state", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["company"] ?? null), "locationState", []), "state", []), "html", null, true);
            echo ", ";
        }
        if ($this->getAttribute(($context["company"] ?? null), "location_zipcode", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["company"] ?? null), "location_zipcode", []), "html", null, true);
        }
        echo "<br />
  ";
        // line 12
        if ($this->getAttribute(($context["company"] ?? null), "locationCountry", [])) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["company"] ?? null), "locationCountry", []), "getCountry", [], "method"), "html", null, true);
        }
        // line 13
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  33 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.address.twig", "");
    }
}
