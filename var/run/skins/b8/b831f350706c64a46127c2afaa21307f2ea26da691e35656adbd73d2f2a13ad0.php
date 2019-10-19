<?php

/* layout/header/mobile_header_parts/navbar/second_additional_menu.twig */
class __TwigTemplate_5b2a9a0c68d19ed77af5505b445495b3e0517ff5e2dfc07a69b9b42fbb45f978 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isSlidebar", [])) {
            // line 7
            echo "  <li class=\"additional-menu-wrapper\">
    <ul class=\"Inset additional-menu\">
      ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "slidebar.navbar.account.second-additional-menu"]]), "html", null, true);
            echo "
    </ul>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/mobile_header_parts/navbar/second_additional_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 9,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/mobile_header_parts/navbar/second_additional_menu.twig", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/layout/header/mobile_header_parts/navbar/second_additional_menu.twig");
    }
}
