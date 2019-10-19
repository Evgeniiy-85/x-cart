<?php

/* modules/CDev/Sale/form_model/type/sale.twig */
class __TwigTemplate_40a239cb425520202afd7b025f439f0e11d6a2b10b6877be7b79e4fd16284ca0 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'c_dev_sale_sale_widget' => [$this, 'block_c_dev_sale_sale_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('c_dev_sale_sale_widget', $context, $blocks);
    }

    public function block_c_dev_sale_sale_widget($context, array $blocks = [])
    {
        // line 3
        echo "<div class=\"input-group\">
        <div class=\"input-group-btn\">
            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span v-if=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_model"] ?? null), "html", null, true);
        echo ".type=='sale_percent'\">%</span>
                <span v-if=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_model"] ?? null), "html", null, true);
        echo ".type=='sale_price'\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "xlite", []), "currency", []), "getCurrencySymbol", [], "method"), "html", null, true);
        echo "</span>
                <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"\" v-on:click.prevent=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_model"] ?? null), "html", null, true);
        echo ".type='sale_percent'\">%</a></li>
                <li><a href=\"\" v-on:click.prevent=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["v_model"] ?? null), "html", null, true);
        echo ".type='sale_price'\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "xlite", []), "currency", []), "getCurrencySymbol", [], "method"), "html", null, true);
        echo "</a></li>
            </ul>
        </div>
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "type", []), 'widget');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "value", []), 'widget');
        echo "
    </div>";
    }

    public function getTemplateName()
    {
        return "modules/CDev/Sale/form_model/type/sale.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  59 => 15,  51 => 12,  47 => 11,  38 => 7,  34 => 6,  29 => 3,  23 => 2,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/CDev/Sale/form_model/type/sale.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\Sale\\form_model\\type\\sale.twig");
    }
}
