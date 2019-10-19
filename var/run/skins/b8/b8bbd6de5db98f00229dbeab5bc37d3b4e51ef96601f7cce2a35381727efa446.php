<?php

/* form_field/checkbox_list.twig */
class __TwigTemplate_3499b177bf56d973702447642e4877f08df4f8ddcd64d64c12f03ea39c679e1e extends \XLite\Core\Templating\Twig\Template
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
<ul ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo ">
";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "
";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getOptions", [], "method"));
        foreach ($context['_seq'] as $context["optionValue"] => $context["optionLabel"]) {
            // line 8
            echo "<li><label><input ";
            echo $this->getAttribute(($context["this"] ?? null), "getOptionAttributesCode", [0 => $context["optionValue"], 1 => $context["optionLabel"]], "method");
            echo " /><span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["optionLabel"], "html", null, true);
            echo "</span></label></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['optionValue'], $context['optionLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "form_field/checkbox_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 10,  34 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/checkbox_list.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_field\\checkbox_list.twig");
    }
}
