<?php

/* E:\Server\projects\x-cart\skins\admin\order\page\parts\totals.modifiers.twig */
class __TwigTemplate_b268d1fbf0187673922326e2d2c9fa7b892b6d68b2cf0837ea114b32f3a29bb2 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getSurchargeTotals", [], "method"));
        foreach ($context['_seq'] as $context["sType"] => $context["surcharge"]) {
            // line 8
            echo "  <li ";
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getSurchargeAttributes", [0 => $context["sType"], 1 => $context["surcharge"]], "method")], "method");
            echo ">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($context["surcharge"], "widget", []), "surcharge" => $context["surcharge"], "sType" => $context["sType"], "order" => $this->getAttribute(($context["this"] ?? null), "order", [])]]), "html", null, true);
            echo "
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sType'], $context['surcharge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\page\\parts\\totals.modifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\page\\parts\\totals.modifiers.twig", "");
    }
}