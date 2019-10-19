<?php

/* form_field/textarea.twig */
class __TwigTemplate_0d447d98978cf5ca5aa7452051c6f1c682f1666230e64f74b70cafef2e25018f extends \XLite\Core\Templating\Twig\Template
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
<span class=\"input-field-wrapper ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWrapperClass", [], "method"), "html", null, true);
        echo "\">
<textarea ";
        // line 6
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getValue", [], "method"), "html", null, true);
        echo "</textarea>
</span>";
    }

    public function getTemplateName()
    {
        return "form_field/textarea.twig";
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
 # ____file_title____
 #}

<span class=\"input-field-wrapper {{ this.getWrapperClass() }}\">
<textarea {{ this.getAttributesCode()|raw }}>{{ this.getValue() }}</textarea>
</span>", "form_field/textarea.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_field\\textarea.twig");
    }
}
