<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_exit_modal.twig */
class __TwigTemplate_19a70c8ab2ed278b80e2084d422f256ab0a8c0f08b119b623d5dfddaa97a0fd1 extends \XLite\Core\Templating\Twig\Template
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
<xlite-themetweaker-modal :show=\"isExitConfirmVisible\" namespace=\"exitConfirm\">
  <p slot=\"body\" class=\"text-center\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["You have unsaved changes. Are you really sure to exit?"]), "html", null, true);
        echo "</p>
  <div slot=\"footer\">
    <button class=\"themetweaker-modal-button secondary\"
            @click=\"onExitConfirmDiscard\">
      <span>";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Discard changes"]), "html", null, true);
        echo "</span>
    </button>
    <button class=\"themetweaker-modal-button\"
            @click=\"onExitConfirmSave\">
      <span>";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Save"]), "html", null, true);
        echo "</span>
    </button>
  </div>
</xlite-themetweaker-modal>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_exit_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  30 => 12,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_exit_modal.twig", "");
    }
}
