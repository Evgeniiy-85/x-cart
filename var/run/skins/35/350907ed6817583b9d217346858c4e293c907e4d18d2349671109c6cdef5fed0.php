<?php

/* modules/XC/NewsletterSubscriptions/form/parts/error.twig */
class __TwigTemplate_156d537818d0a5130b9dc99dc1fc328f7e51af0d55df716ea23f1d0e179ca889 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getErrorMessage", [], "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NewsletterSubscriptions/form/parts/error.twig";
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
        return new Twig_Source("", "modules/XC/NewsletterSubscriptions/form/parts/error.twig", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/NewsletterSubscriptions/form/parts/error.twig");
    }
}
