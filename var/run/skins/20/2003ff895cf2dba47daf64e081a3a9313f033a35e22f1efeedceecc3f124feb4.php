<?php

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/mobile_header_parts/right_menu.twig */
class __TwigTemplate_b9a7f540f1f63be0f06ef5e3e4dc52b2224111aedb52d6a7eac134fd0e1a52f2 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"dropdown mobile_header-right_menu\">
    <div class=\"header-right-bar\">
      ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.header.right.mobile", "displayMode" => "horizontal"]]), "html", null, true);
        echo "
    </div>
</li>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/mobile_header_parts/right_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/mobile_header_parts/right_menu.twig", "");
    }
}
