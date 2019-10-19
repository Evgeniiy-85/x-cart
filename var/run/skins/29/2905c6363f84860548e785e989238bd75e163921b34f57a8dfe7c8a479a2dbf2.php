<?php

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/shopping_cart/parts/item.remove.twig */
class __TwigTemplate_f096418a9fbca805ae97d23022e2f8383a01cd4916cbc328ea79d9fc7ab019eb extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-remove delete-from-list\">
  ";
        // line 7
        $this->startForm("\\XLite\\View\\Form\\Cart\\Item\\Delete", ["item" => $this->getAttribute(($context["this"] ?? null), "item", [])]);        // line 8
        echo "  \t<a onclick=\"return jQuery(this).closest('form').submit();\" class=\"remove\"></a>
  ";
        $this->endForm();        // line 10
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/shopping_cart/parts/item.remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 10,  23 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/shopping_cart/parts/item.remove.twig", "");
    }
}
