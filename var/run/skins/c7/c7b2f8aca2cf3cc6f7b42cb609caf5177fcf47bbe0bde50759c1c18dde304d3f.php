<?php

/* E:\Server\projects\x-cart\skins\customer\layout\header\mobile_header_parts\search_menu.twig */
class __TwigTemplate_397801d0e4fa0b0113b67d2373f171d79068822c69c89a187f1239e337ef0027 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"dropdown mobile_header-search_menu\">
  <a id=\"search_menu\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
      <svg version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\" width=\"20px\" height=\"20px\" viewBox=\"0 0 20 20\" enable-background=\"new 0 0 20 20\" xml:space=\"preserve\">
        <path d=\"M13.5,12.2h-0.7l-0.3-0.3c0.9-1.1,1.5-2.5,1.5-4c0-3.4-2.7-6.1-6.1-6.1C4.5,1.9,1.8,4.6,1.8,8c0,3.4,2.7,6.1,6.1,6.1
c1.5,0,2.9-0.6,4-1.5l0.3,0.3v0.7l4.7,4.7l1.4-1.4L13.5,12.2z M7.9,12.2c-2.3,0-4.2-1.9-4.2-4.2c0-2.3,1.9-4.2,4.2-4.2
c2.3,0,4.2,1.9,4.2,4.2C12.1,10.3,10.2,12.2,7.9,12.2z\"/>
      </svg>
  </a>
  <ul id=\"search_box\" class=\"dropdown-menu\" >
    <li role=\"presentation\">
      ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.responsive.search"]]), "html", null, true);
        echo "
    </li>
  </ul>
</li>";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\layout\\header\\mobile_header_parts\\search_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 17,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\layout\\header\\mobile_header_parts\\search_menu.twig", "");
    }
}
