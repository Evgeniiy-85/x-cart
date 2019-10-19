<?php

/* model/form/footer.twig */
class __TwigTemplate_4aded378ab0b3d7aee18548f8326e8fd945c12f548a93b63a6c6061d159bd0b9 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayViewSubList", [0 => "formFooter"], "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "model/form/footer.twig";
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
{{ this.displayViewSubList('formFooter') }}
", "model/form/footer.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\model\\form\\footer.twig");
    }
}
