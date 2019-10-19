<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/order/page/parts/placed.twig */
class __TwigTemplate_f73627837a635bdf8ef10152b8f0d077094a0675a40f3ca0b9240b00096a43fc extends \XLite\Core\Templating\Twig\Template
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
<div class=\"title\">
  <div class=\"placed-date head-h4\">";
        // line 8
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Placed on DATE", ["date" => $this->getAttribute(($context["this"] ?? null), "getOrderDate", [], "method")]]);
        echo "</div>
  <div class=\"placed-customer\">
  ";
        // line 10
        if ($this->getAttribute(($context["this"] ?? null), "hasProfilePage", [], "method")) {
            // line 11
            echo "    ";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Placed by _NAME_", ["name" => $this->getAttribute(($context["this"] ?? null), "getProfileName", [], "method"), "url" => $this->getAttribute(($context["this"] ?? null), "getProfileURL", [], "method")]]);
            echo "
  ";
        } else {
            // line 13
            echo "    ";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Placed by NAME", ["name" => $this->getAttribute(($context["this"] ?? null), "getProfileName", [], "method")]]);
            echo "
  ";
        }
        // line 15
        echo "
  <div class=\"profile-login\">";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "orderForm", []), "displayComplexField", [0 => "login"], "method"), "html", null, true);
        echo "</div>

  ";
        // line 18
        if ($this->getAttribute(($context["this"] ?? null), "getMembership", [], "method")) {
            // line 19
            echo "    <span class=\"membership\">(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "membership", []), "getName", [], "method"), "html", null, true);
            echo ")</span>
  ";
        }
        // line 21
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/order/page/parts/placed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 21,  52 => 19,  50 => 18,  45 => 16,  42 => 15,  36 => 13,  30 => 11,  28 => 10,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/order/page/parts/placed.twig", "");
    }
}
