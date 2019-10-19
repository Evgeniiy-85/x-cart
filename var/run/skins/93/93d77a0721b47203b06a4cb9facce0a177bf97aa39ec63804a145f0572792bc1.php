<?php

/* E:\Server\projects\x-cart\skins\admin\modules\CDev\PINCodes\items_list\model\table\order_item\cell.backordered_codes.twig */
class __TwigTemplate_2b4139902a5d9ab597c70aa8b84011d6f39e99aa1189693227a9b2de693cd50b extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getBackorderedAmount", [], "method") && $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "countMissingPinCodes", [], "method"))) {
            // line 8
            echo "  <div class=\"backordered-pin-codes\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getBackorderedAmount", [], "method")));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 10
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\CDev\\PINCodes\\View\\FormField\\Input\\Text\\ItemPinCode", "fieldName" => (("order_items[" . $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "getId", [], "method")) . "][pin_codes][]"), "fieldOnly" => true]]), "html", null, true);
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\PINCodes\\items_list\\model\\table\\order_item\\cell.backordered_codes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\PINCodes\\items_list\\model\\table\\order_item\\cell.backordered_codes.twig", "");
    }
}
