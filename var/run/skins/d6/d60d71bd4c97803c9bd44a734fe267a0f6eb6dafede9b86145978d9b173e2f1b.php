<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/CDev/MarketPrice/details/you_save.twig */
class __TwigTemplate_c88b391e4055fa35078570f18a0882f1fa26af3ad8fc63d58e2f921b1450750c extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["you save"]), "html", null, true);
        echo " <span class=\"you-save\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatPrice", [0 => $this->getAttribute(($context["this"] ?? null), "getSaveDifference", [], "method"), 1 => $this->getAttribute(($context["this"] ?? null), "null", []), 2 => 1], "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/CDev/MarketPrice/details/you_save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/CDev/MarketPrice/details/you_save.twig", "");
    }
}
