<?php

/* mini_cart/horizontal/parts/checkout.twig */
class __TwigTemplate_5553d16201af6d7f00c11ec058a90f6d89e82c06e85a58dc55aff25396a1807f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "checkCart", [], "method")) {
            // line 7
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\SimpleLink", "label" => "Checkout", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "checkout"]), "style" => "regular-main-button checkout"]]), "html", null, true);
            echo "
";
        }
        // line 9
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "cart", []), "checkCart", [], "method")) {
            // line 10
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\SimpleLink", "label" => "Checkout", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "checkout"]), "style" => "regular-main-button checkout", "disabled" => "true"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "mini_cart/horizontal/parts/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  27 => 9,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mini_cart/horizontal/parts/checkout.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\mini_cart\\horizontal\\parts\\checkout.twig");
    }
}
