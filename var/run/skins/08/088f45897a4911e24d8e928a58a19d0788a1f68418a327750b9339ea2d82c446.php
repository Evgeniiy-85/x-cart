<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/main.address.twig */
class __TwigTemplate_1e28aab47c3c172950851995a8a9b976f759d3f09d5e55850d1d67bfc33d1537 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("XLite\\Module\\XC\\Geolocation\\View\\Form\\LocationSelect", ["className" => "location"]);        // line 7
        echo "
  <ul class=\"form\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "location-select.address"]]), "html", null, true);
        echo "
  </ul>

  <div class=\"buttons main\">
    ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Submit", "label" => "Save location"]]), "html", null, true);
        echo "
  </div>

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/main.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 13,  24 => 9,  20 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/main.address.twig", "");
    }
}
