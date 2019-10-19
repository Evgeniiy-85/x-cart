<?php

/* button/link.twig */
class __TwigTemplate_2c1cac1bff569ef8330b416a0e40ce078a9a6e6d900bac4f3bd982298f1b4746 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<a ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getAttributes", [], "method")], "method");
        echo ">
";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "icon-style"], "method")) {
            echo "<i class=\"button-icon ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "icon-style"], "method"), "html", null, true);
            echo "\"></i>";
        }
        echo "<span>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method")]), "html", null, true);
        echo "</span>
</a>";
    }

    public function getTemplateName()
    {
        return "button/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Regular link
 #}

<a {{ this.printTagAttributes(this.getAttributes())|raw }}>
{% if this.getParam('icon-style') %}<i class=\"button-icon {{ this.getParam('icon-style') }}\"></i>{% endif %}<span>{{ t(this.getButtonLabel()) }}</span>
</a>", "button/link.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\button\\link.twig");
    }
}
