<?php

/* /home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.shipping.twig */
class __TwigTemplate_13432765eb4e41a11020022da4fd9a6423a435c9b449d75aaef9ce625565bf41 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"method-box\">
  <strong class=\"method-title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Shipping method"]), "html", null, true);
        echo "</strong>
  ";
        // line 8
        if (($this->getAttribute(($context["this"] ?? null), "getShippingModifier", [], "method") && $this->getAttribute($this->getAttribute(($context["this"] ?? null), "shippingModifier", []), "getMethod", [], "method"))) {
            // line 9
            echo "    ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "shippingModifier", []), "method", []), "getName", [], "method");
            echo "
  ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 10
($context["this"] ?? null), "order", []), "getShippingMethodName", [], "method")) {
            // line 11
            echo "    ";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getShippingMethodName", [], "method")]);
            echo "
  ";
        } else {
            // line 13
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["n/a"]), "html", null, true);
            echo "
  ";
        }
        // line 15
        echo "
  ";
        // line 16
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "trackingNumbers", []), "isEmpty", [], "method")) {
            // line 17
            echo "    <div class=\"tracking-number-box\">
      <strong class=\"method-title\">";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Tracking numbers"]), "html", null, true);
            echo "</strong>
      <ul class=\"tracking-number-list\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "trackingNumbers", []));
            foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
                // line 21
                echo "          <li>
            ";
                // line 22
                if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getTrackingInformationURL", [0 => $this->getAttribute($context["number"], "getValue", [], "method")], "method")) {
                    // line 23
                    echo "              <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getTrackingInformationURL", [0 => $this->getAttribute($context["number"], "getValue", [], "method")], "method"), "html", null, true);
                    echo "\" target=\"_blank\">
                ";
                    // line 24
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "getValue", [], "method"), "html", null, true);
                    echo "
              </a>
            ";
                } else {
                    // line 27
                    echo "              ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "getValue", [], "method"), "html", null, true);
                    echo "
            ";
                }
                // line 29
                echo "          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </ul>
    </div>
  ";
        }
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  93 => 31,  86 => 29,  80 => 27,  74 => 24,  69 => 23,  67 => 22,  64 => 21,  60 => 20,  55 => 18,  52 => 17,  50 => 16,  47 => 15,  41 => 13,  35 => 11,  33 => 10,  28 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.shipping.twig", "");
    }
}
