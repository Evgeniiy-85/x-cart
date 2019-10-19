<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/parts/item.info.weight.twig */
class __TwigTemplate_12c23c2263141b28f40fe09858ae9aab5d5df628892ada49c43fa16185753f63 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getWeight", [], "method")) {
            // line 7
            echo "  <p class=\"item-weight\">
    <span>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Weight"]), "html", null, true);
            echo ":</span>
    ";
            // line 9
            echo $this->getAttribute(($context["this"] ?? null), "formatWeight", [0 => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getWeight", [], "method")], "method");
            echo "
  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/parts/item.info.weight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/shopping_cart/parts/item.info.weight.twig", "");
    }
}
