<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/payment/add_method/parts/add_offline_method.twig */
class __TwigTemplate_82b5be801ed4d2f473f24bf9b8a9e75cc477c5cd67c49d4125b21bf7a8028b76 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("XLite\\View\\Form\\Payment\\Method\\Admin\\AddOfflineMethod", ["className" => "add-offline-method validationEngine"]);        // line 8
        echo "
  <ul class=\"table\">
    <li>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Text", "fieldName" => "name", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Name"]), "required" => "true"]]), "html", null, true);
        echo "</li>
    <li>";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Textarea\\Simple", "fieldName" => "instruction", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Payment instructions"]), "help" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["These instructions will appear below the order invoice on the page which customers see after they confirm their order."])]]), "html", null, true);
        echo "</li>
    <li>";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Textarea\\Simple", "fieldName" => "description", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Description"]), "help" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Here you can define how your payment methods will look in customer area."]), "maxlength" => 255]]), "html", null, true);
        echo "</li>
  </ul>

  ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add"]), "style" => "action"]]), "html", null, true);
        echo "

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/payment/add_method/parts/add_offline_method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  35 => 12,  31 => 11,  27 => 10,  23 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/payment/add_method/parts/add_offline_method.twig", "");
    }
}
