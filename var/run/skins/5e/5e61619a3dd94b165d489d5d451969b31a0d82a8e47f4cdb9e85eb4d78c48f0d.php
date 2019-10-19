<?php

/* layout/header/header.bar.checkout.logos.twig */
class __TwigTemplate_c45e7149013b235c38922c21138b9a9dc42832d81ad00c683c5fcfbcaf617068 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isCheckoutLayout", [], "method")) {
            // line 8
            echo "  ";
            // line 9
            echo "    ";
            // line 10
            echo "  ";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header.bar.checkout.logos.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  26 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/header.bar.checkout.logos.twig", "/home/vagrant/next/output/xcart/src/skins/customer/layout/header/header.bar.checkout.logos.twig");
    }
}
