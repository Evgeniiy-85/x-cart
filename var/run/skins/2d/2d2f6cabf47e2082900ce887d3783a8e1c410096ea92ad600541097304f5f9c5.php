<?php

/* E:\Server\projects\x-cart\skins\admin\zones\details\parts\field.zipcode.twig */
class __TwigTemplate_be5744e2a2bd96afd201ed2b9e90a72e42121d0eb5f15f808634096a9e1c11b9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"table-label zone-zipcodes-label\">
  <label>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Zip/postal code masks"]), "html", null, true);
        echo "</label>
</div>

";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "zone", []), "getZoneZipCodes", [0 => 1], "method"), "fieldOnly" => true, "rows" => "5", "cols" => "70", "fieldName" => "zone_zipcodes"]]), "html", null, true);
        echo "

<div class=\"zone-zipcodes-help\">
  <label>";
        // line 14
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Zone zipcode masks help"]);
        echo "</label>
</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\zones\\details\\parts\\field.zipcode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  29 => 11,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\zones\\details\\parts\\field.zipcode.twig", "");
    }
}
