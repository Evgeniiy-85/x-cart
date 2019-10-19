<?php

/* E:\Server\projects\x-cart\skins\admin\items_list\model\table\order\cell.actions.twig */
class __TwigTemplate_b32e5aff6c91cdcf5e9f303f8ac9d19c4a48a00e20938fcf475f81632bfe19eb extends \XLite\Core\Templating\Twig\Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getOrderActions", [0 => $this->getAttribute(($context["this"] ?? null), "entity", [])], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 8
            echo "  <div>
    ";
            // line 9
            echo $this->getAttribute($context["action"], "display", [], "method");
            echo "
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\order\\cell.actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\order\\cell.actions.twig", "");
    }
}
