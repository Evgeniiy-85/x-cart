<?php

/* /home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/bottom.twig */
class __TwigTemplate_41ede7fab27f6000154c8daaea527632360bf075f19ce8ed4547cb22b2abadc0 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"left-adresses-part\">
  <table cellspacing=\"0\" class=\"addresses";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isShippingSectionVisible", [], "method")) {
            echo " S";
        }
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isPaymentSectionVisible", [], "method")) {
            echo " B";
        }
        echo "\">
    <tr>
      ";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isShippingSectionVisible", [], "method")) {
            // line 11
            echo "        <td class=\"address shipping\">
          <div class=\"wrapper";
            // line 12
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "trackingNumbers", []), "isEmpty", [], "method")) {
                echo " tracking-info-section-included";
            }
            echo "\">
          ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "invoice.bottom.address.shipping", "baddress" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "profile", []), "billing_address", []), "saddress" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "profile", []), "shipping_address", [])]]), "html", null, true);
            echo "
          </div>
        </td>
      ";
        }
        // line 17
        echo "
      ";
        // line 18
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isPaymentSectionVisible", [], "method")) {
            // line 19
            echo "        <td class=\"address payment";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isShippingSectionVisible", [], "method")) {
                echo " payment-wrapping";
            }
            echo "\">
          <div class=\"wrapper\">
          ";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "invoice.bottom.address.billing", "baddress" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "profile", []), "billing_address", []), "saddress" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "profile", []), "shipping_address", [])]]), "html", null, true);
            echo "
          </div>
        </td>
      ";
        }
        // line 25
        echo "    </tr>

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "invoice.bottom.lines", 1 => ["order" => $this->getAttribute(($context["this"] ?? null), "order", [])]], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 28
            echo "      <tr>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", [], "method"), "html", null, true);
            echo "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    ";
        // line 31
        if ($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "invoice.bottom", 1 => ["order" => $this->getAttribute(($context["this"] ?? null), "order", [])]], "method")) {
            // line 32
            echo "      <tr>
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "invoice.bottom", 1 => ["order" => $this->getAttribute(($context["this"] ?? null), "order", [])]], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 34
                echo "          <td>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", [], "method"), "html", null, true);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </tr>
    ";
        }
        // line 38
        echo "    ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("order/invoice/parts/bottom.padding.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate("order/invoice/parts/bottom.padding.twig", "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/bottom.twig", 38)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 39
        echo "  </table>
</td>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/bottom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  113 => 38,  109 => 36,  100 => 34,  96 => 33,  93 => 32,  91 => 31,  88 => 30,  79 => 28,  75 => 27,  71 => 25,  64 => 21,  56 => 19,  54 => 18,  51 => 17,  44 => 13,  38 => 12,  35 => 11,  33 => 10,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/bottom.twig", "");
    }
}
