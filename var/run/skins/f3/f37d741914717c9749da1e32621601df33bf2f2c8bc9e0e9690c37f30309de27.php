<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/layout/content/main.center.twig */
class __TwigTemplate_fa78a21fcaa7185af0a467f0afa9ddcb7e0419baf911c4b00a9d1b4659a34ab2 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"main-wrapper\">
  ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isForceChangePassword", [], "method")) {
            // line 9
            echo "  <div id=\"main\" class=\"force-change-password-section clearfix\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Popup\\ForceChangePassword"]]), "html", null, true);
            echo "
  </div>
  ";
        } else {
            // line 13
            echo "  <div id=\"main\" class=\"clearfix\">
    <div class=\"flex-container\">
        ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.main.center"]]), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/layout/content/main.center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 19,  38 => 15,  34 => 13,  28 => 10,  25 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/layout/content/main.center.twig", "");
    }
}
