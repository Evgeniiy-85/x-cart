<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/import/parts/option.update_only.twig */
class __TwigTemplate_4e8728d270cf1fded21b7259cad634600224b3f92183db93b4e136a18935233b extends \XLite\Core\Templating\Twig\Template
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
<li class=\"import-mode-option\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Select\\Regular", "fieldName" => "options[importMode]", "fieldId" => "importMode", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Import mode"]), "value" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "config", []), "Import", []), "importMode", []), "options" => $this->getAttribute(($context["this"] ?? null), "getImportModeOptions", [], "method"), "help" => $this->getAttribute(($context["this"] ?? null), "getImportModeComment", [], "method")]]), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/import/parts/option.update_only.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/import/parts/option.update_only.twig", "");
    }
}
