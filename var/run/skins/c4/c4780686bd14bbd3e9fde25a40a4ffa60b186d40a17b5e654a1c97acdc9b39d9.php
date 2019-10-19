<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/zones/details/parts/field.city.twig */
class __TwigTemplate_b93b3fa8d2dee6b5084852e2d8014d5f99df27c8f4c12eb23b6bf2579bfbfa77 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isCityMasksEditEnabled", [], "method")) {
            // line 8
            echo "  <div class=\"table-label zone-cities-label\">
    <label>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["City masks"]), "html", null, true);
            echo "</label>
  </div>

  ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "zone", []), "getZoneCities", [0 => 1], "method"), "fieldOnly" => true, "rows" => "5", "cols" => "70", "fieldName" => "zone_cities"]]), "html", null, true);
            echo "

  <div class=\"zone-cities-help\">
    <label>";
            // line 15
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Zone city masks help"]);
            echo "</label>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/zones/details/parts/field.city.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/zones/details/parts/field.city.twig", "");
    }
}
