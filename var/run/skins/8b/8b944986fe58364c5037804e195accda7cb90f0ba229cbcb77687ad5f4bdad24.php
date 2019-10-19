<?php

/* modules/XC/VendorMessages/mobile_header_parts/navbar/account/messages.twig */
class __TwigTemplate_42618a54b09d2a01e8d2bc303c5490d8fc8cf2b97d60e5416b5d95a79b883fc7 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isLogged", [], "method")) {
            // line 8
            echo "<li>
\t<a class=\"icon-altmail\" href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "messages", ""]), "html", null, true);
            echo "\">
\t\t<span>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Messages"]), "html", null, true);
            echo "</span>
\t</a>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/VendorMessages/mobile_header_parts/navbar/account/messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/VendorMessages/mobile_header_parts/navbar/account/messages.twig", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/modules/XC/VendorMessages/mobile_header_parts/navbar/account/messages.twig");
    }
}
