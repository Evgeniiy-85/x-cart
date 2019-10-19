<?php

/* E:\Server\projects\x-cart\skins\admin\zones\details\parts\field.address.twig */
class __TwigTemplate_ddbd2cf2bbffebe6b64ceefc0c77a49f001341571c5d7fc99f17b4283fdfad4a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isAddressMasksEditEnabled", [], "method")) {
            // line 8
            echo "  <div class=\"table-label zone-addresses-label\">
    <label>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Address masks"]), "html", null, true);
            echo "</label>
  </div>

  <div class=\"zone-addresses-help\">
    <label>";
            // line 13
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Zone address masks help"]);
            echo "</label>
  </div>

  ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "zone", []), "getZoneAddresses", [0 => 1], "method"), "fieldOnly" => true, "rows" => "5", "cols" => "70", "fieldName" => "zone_addresses"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\zones\\details\\parts\\field.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  34 => 13,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\zones\\details\\parts\\field.address.twig", "");
    }
}
