<?php

/* E:\Server\projects\x-cart\skins\crisp_white\customer\modules\XC\ProductComparison\mobile_header_parts\navbar\account\additional\compare.twig */
class __TwigTemplate_26b1b20bde6f52e3cbc04ccf21248d58aa3bd17b84243229587c1ff14e53894b extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\CrispWhiteSkin\\View\\AddToCompare\\ProductCompareLink"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\modules\\XC\\ProductComparison\\mobile_header_parts\\navbar\\account\\additional\\compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\modules\\XC\\ProductComparison\\mobile_header_parts\\navbar\\account\\additional\\compare.twig", "");
    }
}
