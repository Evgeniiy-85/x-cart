<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/ProductAdvisor/product/parts/coming_soon.twig */
class __TwigTemplate_8c681f12da3fa000ef76a3fb383d26b4e8ea370b3a73fb51fedbc21b6b31c7e7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "isUpcomingProduct", [], "method")) {
            // line 8
            echo "  <tr>
    <td colspan=\"3\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["This product will be shown in coming soon section"]), "html", null, true);
            echo "</td>
  </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/ProductAdvisor/product/parts/coming_soon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/ProductAdvisor/product/parts/coming_soon.twig", "");
    }
}
