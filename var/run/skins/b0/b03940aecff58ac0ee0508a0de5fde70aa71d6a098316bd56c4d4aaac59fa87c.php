<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.switcher.twig */
class __TwigTemplate_e8469a108e107988ba9401f630345c6c9979e32c14b18a804fe4082952912bec extends \XLite\Core\Templating\Twig\Template
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
<div class=\"themetweaker-action themetweaker-action_switcher\"
     v-show=\"mode\" data-toggle=\"tooltip\" data-placement=\"top\"
     data-html=\"true\" title=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["themetweaker.shortcut.switcher"]), "html", null, true);
        echo "\"
     :class=\"switcherClasses\">
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "label" => "{{{ switcherLabel }}}", "style" => "", "attributes" => [":checked" => "switcher", "@change" => "onSwitchChange", "data-panel-switcher" => "data-panel-switcher"]]]), "html", null, true);
        // line 17
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 17,  29 => 11,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.switcher.twig", "");
    }
}
