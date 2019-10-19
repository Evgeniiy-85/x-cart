<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/import/parts/option.ignore_images_verification.twig */
class __TwigTemplate_8c9ad3a504c0d749d3ad1ce7e3b4b8addcab69318f264497f1c8432ca7a4391b extends \XLite\Core\Templating\Twig\Template
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
<li class=\"checkbox-option\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Checkbox", "fieldId" => "ignoreFileChecking", "fieldName" => "options[ignoreFileChecking]", "isChecked" => true, "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Do not verify images to increase speed of the process"])]]), "html", null, true);
        echo "
  ";
        // line 10
        echo "  ";
        // line 11
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/import/parts/option.ignore_images_verification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  27 => 10,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/import/parts/option.ignore_images_verification.twig", "");
    }
}
