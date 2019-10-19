<?php

/* items_list/product/parts/common.added-mark.twig */
class __TwigTemplate_496c3d7329cbc0e9c8603001e4cdb4860fc2d1bcfc78921da2cca081cb578a44 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div title=\"Added to cart\" class=\"added-to-cart\"><i class=\"icon-ok-mark\"></i></div>
";
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.added-mark.twig";
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
        return new Twig_Source("", "items_list/product/parts/common.added-mark.twig", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/items_list/product/parts/common.added-mark.twig");
    }
}
