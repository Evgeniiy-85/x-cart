<?php

/* E:\Server\projects\x-cart\skins\common\order\invoice\parts\head.companyAddress.phone.twig */
class __TwigTemplate_d58e58a7705a175dab345b3082643e8e195413ad9fff656e343b8a88439fa14e extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "company", []), "company_phone", [])) {
            echo "<p>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Phone"]), "html", null, true);
            echo ": ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "company", []), "company_phone", []), "html", null, true);
            echo "</p>";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\common\\order\\invoice\\parts\\head.companyAddress.phone.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\common\\order\\invoice\\parts\\head.companyAddress.phone.twig", "");
    }
}