<?php

/* model/header.twig */
class __TwigTemplate_b091dcbfc20f77a83a139a7776a443336c202a4b323597cb0632d22a2938b433 extends \XLite\Core\Templating\Twig\Template
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
        // line 1
        echo "
";
        // line 2
        if ($this->getAttribute(($context["this"] ?? null), "getHeaderText", [], "method")) {
            // line 3
            echo "  <p class=\"header-text\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getHeaderText", [], "method"), "html", null, true);
            echo "</p>
";
        }
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayViewSubList", [0 => "header"], "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "model/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "model/header.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\model\\header.twig");
    }
}
