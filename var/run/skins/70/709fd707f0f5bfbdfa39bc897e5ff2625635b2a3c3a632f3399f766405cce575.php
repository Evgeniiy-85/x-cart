<?php

/* modules/XC/NextPreviousProduct/head.twig */
class __TwigTemplate_391a2edfd12e16e07aceea0d7583e7505218c30d5006e263b3832eb45d95f370 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<script>
xliteConfig['npCookiePath'] = '";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCookiePath", [], "method"), "html", null, true);
        echo "';
</script>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/NextPreviousProduct/head.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/NextPreviousProduct/head.twig", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/head.twig");
    }
}
