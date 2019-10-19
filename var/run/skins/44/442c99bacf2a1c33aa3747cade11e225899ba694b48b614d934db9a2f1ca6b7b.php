<?php

/* E:\Server\projects\x-cart\skins\admin\items_list\product\modify\common\parts\header\checkbox.twig */
class __TwigTemplate_b8ff1991a1ca6997a54a2dc3590d8b30072adc7e435fe7b91e60b975fed9c441 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"checkboxes\"><input type=\"checkbox\" class=\"column-selector\" /></th>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\product\\modify\\common\\parts\\header\\checkbox.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\product\\modify\\common\\parts\\header\\checkbox.twig", "");
    }
}
