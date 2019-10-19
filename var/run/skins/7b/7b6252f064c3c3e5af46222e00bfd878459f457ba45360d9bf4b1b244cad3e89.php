<?php

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/contact_us/parts/contact_us.address.twig */
class __TwigTemplate_b7a3cde5699651ed76f487b98159c02060a12c0c645a6c2bb9448f59cd819fb3 extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"contact_us-address_links\">
 \t";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "getLocation", [], "method")) {
            // line 9
            echo "\t\t<li class=\"location\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLocation", [], "method"), "html", null, true);
            echo "</li>
\t";
        }
        // line 11
        echo " \t";
        if ($this->getAttribute(($context["this"] ?? null), "getPhone", [], "method")) {
            // line 12
            echo "\t\t<li class=\"phone\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPhone", [], "method"), "html", null, true);
            echo "</li>
\t";
        }
        // line 14
        echo " \t";
        if ($this->getAttribute(($context["this"] ?? null), "getEmail", [], "method")) {
            // line 15
            echo "\t\t<li class=\"email\"><a href=\"mailto:";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEmail", [], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEmail", [], "method"), "html", null, true);
            echo "</a></li>
\t";
        }
        // line 17
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "contact_us.parts.last"]]), "html", null, true);
        echo "
</ul>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/contact_us/parts/contact_us.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 17,  43 => 15,  40 => 14,  34 => 12,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/contact_us/parts/contact_us.address.twig", "");
    }
}
