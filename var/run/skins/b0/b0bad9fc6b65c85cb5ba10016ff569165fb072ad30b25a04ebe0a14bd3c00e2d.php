<?php

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/signin/parts/login.twig */
class __TwigTemplate_1877525bef844826ba9e5f0857b6b3e6eb32f1c7d7c7e1bef1a4a5c40c344a52 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"signin-login-wrapper\">
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("signin/parts/login/heading.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 8
        $this->loadTemplate("signin/parts/login/heading.twig", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/signin/parts/login.twig", 8)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 9
        echo "  ";
        if ( !$this->getAttribute(($context["this"] ?? null), "isRegisterMode", [], "method")) {
            // line 10
            echo "    <div class=\"login-box\">
      ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\CrispWhiteSkin\\View\\CheckoutAuthorization"]]), "html", null, true);
            echo "
    </div>
  ";
        } else {
            // line 14
            echo "    <div class=\"register-box\">
      ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Model\\Profile\\Main", "useBodyTemplate" => "1"]]), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/signin/parts/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  48 => 15,  45 => 14,  39 => 11,  36 => 10,  33 => 9,  28 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/signin/parts/login.twig", "");
    }
}
