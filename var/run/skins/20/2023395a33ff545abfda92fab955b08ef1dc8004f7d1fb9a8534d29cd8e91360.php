<?php

/* mini_cart/horizontal/parts/disabled_reason.twig */
class __TwigTemplate_8e656e673f3f6b00195db6ab82412fa90f067d2d4f594e4e48e74689eeae7b42 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "checkCart", [], "method")) {
            // line 7
            echo "  <div class=\"reason-details\">
    ";
            // line 8
            echo $this->getAttribute(($context["this"] ?? null), "getDisabledReason", [], "method");
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "mini_cart/horizontal/parts/disabled_reason.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mini_cart/horizontal/parts/disabled_reason.twig", "/home/vagrant/next/output/xcart/src/skins/customer/mini_cart/horizontal/parts/disabled_reason.twig");
    }
}
