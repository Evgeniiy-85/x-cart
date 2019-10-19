<?php

/* modules/XC/FroalaEditor//form_field/textarea.twig */
class __TwigTemplate_451fe8a7ea185aaa18a7636fbed6a37b26218b4f9ea2da2ae782fbedda51a433 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"froala-widget\">
    <div class=\"textarea\">
        ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getFroalaConfiguration", [], "method")], "method"), "html", null, true);
        echo "
        <textarea ";
        // line 8
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getProcessedValue", [], "method"), "html", null, true);
        echo "</textarea>
    </div>
    <div class=\"additional-info\">
        ";
        // line 11
        if ($this->getAttribute(($context["this"] ?? null), "hasScripts", [], "method")) {
            // line 12
            echo "            <p class=\"script-warning\">
                <i class=\"fa fa-exclamation-triangle\" aria-hidden=\"true\"></i>
                ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Content has script tags (Froala)"]), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 17
        echo "    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "modules/XC/FroalaEditor//form_field/textarea.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  42 => 14,  38 => 12,  36 => 11,  28 => 8,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/FroalaEditor//form_field/textarea.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\FroalaEditor\\form_field\\textarea.twig");
    }
}
