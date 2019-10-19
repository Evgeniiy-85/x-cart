<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/parts/item.qty.twig */
class __TwigTemplate_1b192c91d87c34896ce18e024f43974edc3310e0d72238ed19d347f49c1467d0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-qty\">
  ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "canChangeAmount", [], "method")) {
            // line 8
            echo "    ";
            $this->startForm("\\XLite\\View\\Form\\Cart\\Item\\Update", ["item" => $this->getAttribute(($context["this"] ?? null), "item", []), "className" => "update-quantity", "validationEngine" => "1"]);            // line 9
            echo "      <div>
        ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Product\\QuantityBox", "product" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getProduct", [], "method"), "fieldValue" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getAmount", [], "method"), "isCartPage" => "1", "orderItem" => $this->getAttribute(($context["this"] ?? null), "item", [])]]), "html", null, true);
            echo "
      </div>
    ";
            $this->endForm();            // line 13
            echo "  ";
        } else {
            // line 14
            echo "    <span class=\"non-valid-qty\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getAmount", [], "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 16
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/parts/item.qty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  37 => 14,  34 => 13,  29 => 10,  26 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/parts/item.qty.twig", "");
    }
}
