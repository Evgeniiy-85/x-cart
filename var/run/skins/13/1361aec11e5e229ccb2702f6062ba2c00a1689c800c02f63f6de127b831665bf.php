<?php

/* model/footer.twig */
class __TwigTemplate_84704b3ec13c83668e849b8dd6554231041dc8f53ef595c22dfb92cdd9ef21f6 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayViewSubList", [0 => "footer"], "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "model/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{{ this.displayViewSubList('footer') }}
", "model/footer.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\model\\footer.twig");
    }
}
