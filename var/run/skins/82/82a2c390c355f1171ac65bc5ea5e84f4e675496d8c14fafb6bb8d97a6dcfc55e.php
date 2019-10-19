<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/inv_track_amount.twig */
class __TwigTemplate_dc47aaf2ce587d4089d9b416f8bed7da8899598e12aa6035f555c0f0e97674c9 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "hasManualPinCodes", [], "method")) {
            // line 8
            echo "  <tr>
    <td>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Quantity in stock"]), "html", null, true);
            echo "</td>
    <td>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getRemainingPinCodesCount", [], "method"), "html", null, true);
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Quantity in stock is determined by the amount of the remaining PIN codes"]), "html", null, true);
            echo ")</td>
  </tr>
";
        }
        // line 13
        echo "
";
        // line 14
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "hasManualPinCodes", [], "method")) {
            // line 15
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("product/inventory/inv_track_amount.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("product/inventory/inv_track_amount.twig", "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/inv_track_amount.twig", 15)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/inv_track_amount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  42 => 14,  39 => 13,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/inv_track_amount.twig", "");
    }
}
