<?php

/* E:\Server\projects\x-cart\skins\mail\common\product\mailbox\parts\left_in_stock.twig */
class __TwigTemplate_77b700700b44c635da31d344247e865f72da6245c9236d3da7bf932b151c80f3 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayLeftInStock", [], "method")) {
            // line 8
            echo "  <div class=\"left-in-stock\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Left in stock: {{quantity}}", ["quantity" => $this->getAttribute(($context["this"] ?? null), "getLeftInStock", [], "method")]]), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\mail\\common\\product\\mailbox\\parts\\left_in_stock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\mail\\common\\product\\mailbox\\parts\\left_in_stock.twig", "");
    }
}
