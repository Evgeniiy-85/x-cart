<?php

/* E:\Server\projects\x-cart\skins\crisp_white\customer\layout\header\mobile_header_parts\navbar_menu.twig */
class __TwigTemplate_ad1587133ab4cf646081d1e71ed47bd5de1fb000416d1d25ff2a8ad8681b963c extends \XLite\Core\Templating\Twig\Template
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
            echo "  <li>
    <div class=\"Panel\" id=\"account-navbar-panel\">
      <ul class=\"Inset\">
        ";
            // line 10
            ob_start();
            // line 11
            echo "          ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "slidebar.navbar.account"]]), "html", null, true);
            echo "
        ";
            $context["account_items"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["account_items"] ?? null), "html", null, true);
            echo "
        ";
            // line 15
            if ( !twig_test_empty(twig_trim_filter(($context["account_items"] ?? null)))) {
                // line 16
                echo "          <li class=\"mm-divider\"></li>
        ";
            }
            // line 18
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "slidebar.navbar.account.additional-menu"]]), "html", null, true);
            echo "
      </ul>
    </div>
    ";
            // line 21
            if ($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "slidebar.navbar.settings"], "method")) {
                // line 22
                echo "      <div class=\"Panel\" id=\"settings-navbar-panel\">
        <ul class=\"Inset\">
          ";
                // line 24
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "slidebar.navbar.settings"]]), "html", null, true);
                echo "
        </ul>
      </div>
    ";
            }
            // line 28
            echo "  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\navbar_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 28,  60 => 24,  56 => 22,  54 => 21,  47 => 18,  43 => 16,  41 => 15,  37 => 14,  34 => 13,  28 => 11,  26 => 10,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\mobile_header_parts\\navbar_menu.twig", "");
    }
}
