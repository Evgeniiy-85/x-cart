<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/top_sellers/parts/availability_selector.twig */
class __TwigTemplate_276885424c85806fe0c58de64c38f40c7440a23d9c482a987d99520f9d01eb6d extends \XLite\Core\Templating\Twig\Template
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
<table class=\"top-sellers-selectors availability-selectors\">
  <tr>
    <td class=\"title\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Products"]), "html", null, true);
        echo ":</td>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAvailabilityColumns", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 11
            echo "      <td>
        <a href=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getAvailabilityLink", [0 => $context["c"]], "method"), "html", null, true);
            echo "\" data-availability=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "\" class=\"";
            if (($context["c"] == $this->getAttribute(($context["this"] ?? null), "getAvailability", [], "method"))) {
                echo " selected";
            }
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getAvailabilityColumnTitle", [0 => $context["c"]], "method")]), "html", null, true);
            echo "</a>
      </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/top_sellers/parts/availability_selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  35 => 12,  32 => 11,  28 => 10,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/top_sellers/parts/availability_selector.twig", "");
    }
}
