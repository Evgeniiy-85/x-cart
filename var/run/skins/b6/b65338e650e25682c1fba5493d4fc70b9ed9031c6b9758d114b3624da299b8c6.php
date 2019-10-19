<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/CDev/Coupons/coupons_minilist.twig */
class __TwigTemplate_24b370db2e3c591f2cd460a166a2aafd00cacc9e9c3fadbd0e0395c4efd39ef2 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isDiscountCouponSubpanelVisible", [0 => $this->getAttribute(($context["this"] ?? null), "surcharge", [])], "method")) {
            // line 10
            echo "  <ul class=\"discount-coupons-panel\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getDiscountCoupons", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["usedCoupon"]) {
                // line 12
                echo "      <li>
        <span>";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["usedCoupon"], "getPublicName", [], "method"), "html", null, true);
                echo "</span>
        ";
                // line 14
                if ($this->getAttribute(($context["this"] ?? null), "isDiscountCouponRemoveVisible", [], "method")) {
                    // line 15
                    echo "          <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "buildUrl", [0 => "coupon", 1 => "remove", 2 => ["id" => $this->getAttribute($context["usedCoupon"], "getId", [], "method")]], "method"), "html", null, true);
                    echo "\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Remove"]), "html", null, true);
                    echo "</a>
        ";
                }
                // line 17
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usedCoupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/CDev/Coupons/coupons_minilist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 19,  48 => 17,  40 => 15,  38 => 14,  34 => 13,  31 => 12,  27 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/CDev/Coupons/coupons_minilist.twig", "");
    }
}
