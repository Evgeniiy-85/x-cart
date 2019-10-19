<?php

/* /home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/totals.modifiers.twig */
class __TwigTemplate_991ae8e8d03a3f35ae25b1e12941bce17a34d5163e7aa952b5fcecfc6910eb88 extends \XLite\Core\Templating\Twig\Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getSurchargeTotals", [], "method"));
        foreach ($context['_seq'] as $context["sType"] => $context["surcharge"]) {
            // line 8
            echo "  <tr class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getSurchargeClassName", [0 => $context["sType"], 1 => $context["surcharge"]], "method"), "html", null, true);
            echo "\">
    ";
            // line 9
            if (($this->getAttribute($context["surcharge"], "count", []) == "1")) {
                // line 10
                echo "      <td class=\"title\">
        ";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["surcharge"], "lastName", []), "html", null, true);
                echo ":
        ";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "invoice.base.totals.modifier.name", "surcharge" => $context["surcharge"], "sType" => $context["sType"], "order" => $this->getAttribute(($context["this"] ?? null), "order", [])]]), "html", null, true);
                echo "
      </td>
    ";
            } else {
                // line 15
                echo "      <td class=\"title list-owner\">
        ";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["surcharge"], "name", []), "html", null, true);
                echo ":
        ";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "invoice.base.totals.modifier.name", "surcharge" => $context["surcharge"], "sType" => $context["sType"], "order" => $this->getAttribute(($context["this"] ?? null), "order", [])]]), "html", null, true);
                echo "
      </td>
    ";
            }
            // line 20
            echo "
    <td class=\"value\">
      ";
            // line 22
            if ($this->getAttribute($context["surcharge"], "available", [])) {
                // line 23
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "formatSurcharge", [0 => $context["surcharge"]], "method"), "html", null, true);
                echo "
      ";
            } else {
                // line 25
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["n/a"]), "html", null, true);
                echo "
      ";
            }
            // line 27
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "invoice.base.totals.modifier.value", "surcharge" => $context["surcharge"], "sType" => $context["sType"], "order" => $this->getAttribute(($context["this"] ?? null), "order", [])]]), "html", null, true);
            echo "
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sType'], $context['surcharge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/totals.modifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  71 => 25,  65 => 23,  63 => 22,  59 => 20,  53 => 17,  49 => 16,  46 => 15,  40 => 12,  36 => 11,  33 => 10,  31 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/totals.modifiers.twig", "");
    }
}
