<?php

/* header/parts/title.twig */
class __TwigTemplate_3339b159dae197368214223dce4580c177757d8d752a26768aa6838f44e2c82f extends \XLite\Core\Templating\Twig\Template
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
        echo "<title>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["X-Cart online store builder"]), "html", null, true);
        if ($this->getAttribute(($context["this"] ?? null), "getTitle", [], "method")) {
            echo " - ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTitle", [], "method"), "html", null, true);
        }
        echo "</title>
";
    }

    public function getTemplateName()
    {
        return "header/parts/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
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
 # Title. Header
 #
 # @ListChild (list=\"head\", weight=\"10\")
 #}
<title>{{ t('X-Cart online store builder') }}{% if this.getTitle() %} - {{ this.getTitle() }}{% endif %}</title>
", "header/parts/title.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\header\\parts\\title.twig");
    }
}
