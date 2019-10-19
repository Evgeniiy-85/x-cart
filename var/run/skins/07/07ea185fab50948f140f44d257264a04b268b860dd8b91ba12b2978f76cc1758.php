<?php

/* footer/right/marketplace_terms.twig */
class __TwigTemplate_61ea85fe91ec55d29b99b1ab943c635e9b7195602720c19fd2b3191b0e170c66 extends \XLite\Core\Templating\Twig\Template
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
        if ((($this->getAttribute(($context["this"] ?? null), "getTarget", [], "method") == "addons_list_marketplace") || ($this->getAttribute(($context["this"] ?? null), "getTarget", [], "method") == "addons_list_installed"))) {
            // line 7
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getXCartURL", [0 => "https://www.x-cart.com/module-marketplace-terms-of-use.html"], "method"), "html", null, true);
            echo "\" target=\"_blank\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Module Marketplace. Terms of use"]), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "footer/right/marketplace_terms.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Link to the Module marketplace terms of use page
 #
 # @ListChild (list=\"admin.main.page.footer.left\", weight=\"100\")
 #}
{% if this.getTarget() == 'addons_list_marketplace' or this.getTarget() == 'addons_list_installed' %}
  <a href=\"{{ this.getXCartURL('https://www.x-cart.com/module-marketplace-terms-of-use.html') }}\" target=\"_blank\">{{ t('Module Marketplace. Terms of use') }}</a>
{% endif %}
", "footer/right/marketplace_terms.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\footer\\right\\marketplace_terms.twig");
    }
}
