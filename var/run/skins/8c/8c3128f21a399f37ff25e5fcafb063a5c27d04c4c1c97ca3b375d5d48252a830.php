<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/body.link.twig */
class __TwigTemplate_1bc7ec7d622dcc2f0f48ffce17af7fe75044580eb1e8aa444d96a3581caffd26 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "next", [])) {
            // line 8
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemURL", [0 => $this->getAttribute(($context["this"] ?? null), "item", [])], "method"), "html", null, true);
            echo "\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Next product"]);
            echo "</a><span class=\"fa fa-arrow-right arrow\"></span>
";
        } else {
            // line 10
            echo "    <span class=\"fa fa-arrow-left arrow\"></span><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemURL", [0 => $this->getAttribute(($context["this"] ?? null), "item", [])], "method"), "html", null, true);
            echo "\" class=\"previous-link\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Previous product"]);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/body.link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/body.link.twig", "");
    }
}
