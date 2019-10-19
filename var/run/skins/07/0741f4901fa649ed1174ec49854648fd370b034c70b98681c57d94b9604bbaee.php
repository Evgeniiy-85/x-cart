<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/layout/header/mobile_header_parts/slidebar_menu.twig */
class __TwigTemplate_87dd5174abf956a1f21df195eb751c7104dc572590a0055f0bb2945a9d65516e extends \XLite\Core\Templating\Twig\Template
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
<li class=\"dropdown mobile_header-slidebar\">
  <a id=\"main_menu\" href=\"#slidebar\">
    <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"20px\" height=\"20px\" viewBox=\"0 0 20 20\" enable-background=\"new 0 0 20 20\" xml:space=\"preserve\">
      <path d=\"M1.9,15.5h16.2v-1.8H1.9V15.5z M1.9,11h16.2V9.2H1.9V11z M1.9,4.7v1.8h16.2V4.7H1.9z\"/>
    </svg>
  </a>
</li>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/layout/header/mobile_header_parts/slidebar_menu.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/layout/header/mobile_header_parts/slidebar_menu.twig", "");
    }
}
