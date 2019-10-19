<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/product/inventory/low_limit_selector.twig */
class __TwigTemplate_460bb22d07b634f022556d6ce36dd37f37ab1a7bfeb53e06d69bf51b89b99f16 extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Low limit notification for this product is"]), "html", null, true);
        echo "</td>
  <td>
    <select name=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getNamePostedData", [0 => "lowLimitEnabled"], "method"), "html", null, true);
        echo "\">
      <option value=\"1\" ";
        // line 11
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getLowLimitEnabled", [], "method") == "1")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Enabled"]), "html", null, true);
        echo "</option>
      <option value=\"0\" ";
        // line 12
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getLowLimitEnabled", [], "method") == "0")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Disabled"]), "html", null, true);
        echo "</option>
    </select>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/product/inventory/low_limit_selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  32 => 11,  28 => 10,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/product/inventory/low_limit_selector.twig", "");
    }
}
