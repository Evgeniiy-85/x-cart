<?php

/* items_list/product/center/grid/body-css-layout.twig */
class __TwigTemplate_271dd4964cd324cd60a71b444708a46dea597011cc5f1bc0e15c0f2eb17cc232 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "itemsList.product.cart"]]), "html", null, true);
        echo "

<div class=\"products\">

  ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "getPageData", [], "method")) {
            // line 10
            echo "    <ul class=\"products-grid grid-list\">
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getPageData", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "        <li class=\"product-cell box-product\">
    
          ";
                // line 14
                echo $this->getAttribute(($context["this"] ?? null), "getProductWidgetContent", [0 => $context["product"]], "method");
                echo "
    
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getNestedViewList", [0 => "items"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "        <li class=\"product-cell box-product\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", [], "method"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
  ";
        }
        // line 23
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/product/center/grid/body-css-layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  66 => 21,  57 => 19,  52 => 18,  42 => 14,  38 => 12,  34 => 11,  31 => 10,  29 => 9,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/product/center/grid/body-css-layout.twig", "/home/vagrant/next/output/xcart/src/skins/customer/items_list/product/center/grid/body-css-layout.twig");
    }
}
