<?php

/* E:\Server\projects\x-cart\skins\customer\items_list\product\parts\common.field-select-product.twig */
class __TwigTemplate_0e0c192f53e608e3e8b5d26cab95111da5f652dfd07495ba8f4593da652dd544 extends \XLite\Core\Templating\Twig\Template
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
        echo "<!--input type=\"checkbox\" name=\"select_{product.product_id}\" value=\"{product.product_id}\" class=\"selected-productid-{product.product_id}\" /-->
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\items_list\\product\\parts\\common.field-select-product.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\items_list\\product\\parts\\common.field-select-product.twig", "");
    }
}
