<?php

/* E:\Server\projects\x-cart\skins\customer\items_list\product\parts\common.field-product-qty.twig */
class __TwigTemplate_4eb14b30e76f89a0641e98e0f196409bc2ec99b7619647f0b3be21c8cc1d84d0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<!--input type=\"text\" name=\"qty[{product.product_id}]\" value=\"\" class=\"product-qty\" /-->
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\items_list\\product\\parts\\common.field-product-qty.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\items_list\\product\\parts\\common.field-product-qty.twig", "");
    }
}
