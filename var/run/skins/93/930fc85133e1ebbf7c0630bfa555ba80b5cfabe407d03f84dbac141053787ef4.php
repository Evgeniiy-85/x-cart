<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/product_box/parts/add2cart.twig */
class __TwigTemplate_660205a66c3b57619fd061dd5b85cab0fc7c676de68a8444ab002351f038a12c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "isAvailable", [], "method")) {
            // line 7
            echo "  ";
            $this->startForm("\\XLite\\View\\Form\\Product\\AddToCart", ["product" => $this->getAttribute(($context["this"] ?? null), "product", []), "className" => "add-to-cart"]);            // line 8
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "style" => "product-add2cart", "label" => "Add to cart"]]), "html", null, true);
            echo "
  ";
            $this->endForm();        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/product_box/parts/add2cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/product_box/parts/add2cart.twig", "");
    }
}
