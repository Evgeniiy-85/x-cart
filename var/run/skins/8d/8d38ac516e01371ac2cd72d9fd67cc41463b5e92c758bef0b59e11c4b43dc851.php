<?php

/* model/form/header.twig */
class __TwigTemplate_cd43c8df748c882ae5a2d69e21210dcb7f8974e246c8a97d1abd50b5379e1184 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayViewSubList", [0 => "formHeader"], "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "model/form/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
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
 # ____file_title____
 #}
{{ this.displayViewSubList('formHeader') }}

", "model/form/header.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\model\\form\\header.twig");
    }
}
