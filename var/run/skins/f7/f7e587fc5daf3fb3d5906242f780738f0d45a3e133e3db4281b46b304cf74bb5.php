<?php

/* layout/header/header.bar.links.logged.twig */
class __TwigTemplate_79b2cd5061669c3cb83665f61c437acc048e31b99658e46ecf1cbf75c2311f9a extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute(($context["this"] ?? null), "isLogged", [], "method") &&  !$this->getAttribute(($context["this"] ?? null), "isCheckoutLayout", [], "method"))) {
            // line 8
            echo "  <div class=\"dropdown header_bar-my_account\">
    <a data-toggle=\"dropdown\" data-target=\"#\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["My account"]), "html", null, true);
            echo "</a>
    <ul class=\"account-links dropdown-menu\">
      ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.header.bar.links.logged"]]), "html", null, true);
            echo "
    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/header/header.bar.links.logged.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/header/header.bar.links.logged.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\header.bar.links.logged.twig");
    }
}
