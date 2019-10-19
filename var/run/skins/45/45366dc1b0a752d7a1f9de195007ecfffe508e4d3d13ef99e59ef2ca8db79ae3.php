<?php

/* back_to_top/body.twig */
class __TwigTemplate_79fac5e2d4f61236f86c5d72f7019b9dd50ede508d9ef13dbeb61c31e736bea4 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<a href=\"#0\" class=\"back-to-top\" title=\"Back to top\">
  <i class=\"custom-icon\" aria-hidden=\"true\"></i>
</a>
";
    }

    public function getTemplateName()
    {
        return "back_to_top/body.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "back_to_top/body.twig", "/home/vagrant/next/output/xcart/src/skins/customer/back_to_top/body.twig");
    }
}
