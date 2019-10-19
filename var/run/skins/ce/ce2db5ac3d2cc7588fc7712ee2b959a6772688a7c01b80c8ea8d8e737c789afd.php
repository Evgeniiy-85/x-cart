<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/action.right.twig */
class __TwigTemplate_3d2a2c70152a6f710ca6d09ae7a64c38a9c1aafd3e10d1570acb22c4281c9db1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "hasRightActions", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method")) {
            // line 7
            echo "  <div class=\"action right-action\">
  
    ";
            // line 9
            if ($this->getAttribute(($context["this"] ?? null), "canRemoveMethod", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method")) {
                // line 10
                echo "      <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
                echo "\" class=\"separator\" alt=\"\" />
      <div class=\"remove\"><a href=\"";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "payment_settings", "remove", ["id" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getMethodId", [], "method")]]), "html", null, true);
                echo "\" class=\"fa fa-trash-o\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Remove"]), "html", null, true);
                echo "\"></a></div>
    ";
            }
            // line 13
            echo "  
    ";
            // line 14
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getWarningNote", [], "method")) {
                // line 15
                echo "      <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
                echo "\" class=\"separator\" alt=\"\" />
      <div class=\"warning\"><a href=\"";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getConfigurationURL", [], "method"), "html", null, true);
                echo "\" class=\"fa fa-exclamation-circle\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getWarningNote", [], "method"), "html", null, true);
                echo "\"></a></div>
    ";
            } elseif ( !$this->getAttribute($this->getAttribute(            // line 17
($context["this"] ?? null), "method", []), "isCurrencyApplicable", [], "method")) {
                // line 18
                echo "      <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
                echo "\" class=\"separator\" alt=\"\" />
      <div class=\"warning\"><a href=\"";
                // line 19
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "currency"]), "html", null, true);
                echo "\" class=\"fa fa-exclamation-circle\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["This method does not support the current store currency and is not available for customers"]), "html", null, true);
                echo "\"></a></div>
    ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 20
($context["this"] ?? null), "method", []), "isTestMode", [], "method")) {
                // line 21
                echo "      <img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
                echo "\" class=\"separator\" alt=\"\" />
      <div class=\"test-mode\"><a href=\"";
                // line 22
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getConfigurationURL", [], "method"), "html", null, true);
                echo "\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["This method is in test mode"]), "html", null, true);
                echo "\"><img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
                echo "\" alt=\"\" /></a></div>
    ";
            } elseif ($this->getAttribute($this->getAttribute(            // line 23
($context["this"] ?? null), "method", []), "isConfigurable", [], "method")) {
                // line 24
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Configure"]), "location" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getConfigurationURL", [], "method"), "style" => "configure"]]), "html", null, true);
                echo "
    ";
            } else {
                // line 26
                echo "    ";
            }
            // line 27
            echo "  
    ";
            // line 28
            if ($this->getAttribute(($context["this"] ?? null), "isSeparateConfigureButtonVisible", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method")) {
                // line 29
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Link", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Configure"]), "location" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "method", []), "getConfigurationURL", [], "method"), "style" => "configure"]]), "html", null, true);
                echo "
    ";
            }
            // line 31
            echo "  
  </div>
";
        }
        // line 34
        echo "
";
        // line 35
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getAfterListName", [0 => $this->getAttribute(($context["this"] ?? null), "method", [])], "method"), "type" => "nested"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/action.right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 35,  110 => 34,  105 => 31,  99 => 29,  97 => 28,  94 => 27,  91 => 26,  85 => 24,  83 => 23,  75 => 22,  70 => 21,  68 => 20,  62 => 19,  57 => 18,  55 => 17,  49 => 16,  44 => 15,  42 => 14,  39 => 13,  32 => 11,  27 => 10,  25 => 9,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/action.right.twig", "");
    }
}
