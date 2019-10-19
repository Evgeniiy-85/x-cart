<?php

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/shopping_cart/parts/button.clear.twig */
class __TwigTemplate_d07fb15fc041148844cf0de542ed32a9b3d5c3bd999571565872956659a28a2b extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Cart\\Clear");        // line 7
        echo "  <a
    href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "cart", "clear"]), "html", null, true);
        echo "\"
    onclick=\"javascript: return confirm('";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["You are sure to clear your cart?"]), "html", null, true);
        echo "') && !jQuery(this).parents('form').eq(0).submit();\"
    class=\"clear-bag\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Clear bag"]), "html", null, true);
        echo "</a>
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/shopping_cart/parts/button.clear.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  27 => 9,  23 => 8,  20 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/shopping_cart/parts/button.clear.twig", "");
    }
}
