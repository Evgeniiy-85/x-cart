<?php

/* E:\Server\projects\x-cart\skins\admin\order\page\parts\totals.total.twig */
class __TwigTemplate_a8855c07696fbc591d32a7c9c13cfdc314230dc98be3c2c81fbd7eec36ca481d extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"total\">
  <div class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Grand total"]), "html", null, true);
        echo ":</div>
  <div class=\"value\">";
        // line 8
        echo $this->getAttribute(($context["this"] ?? null), "getOrderTotal", [], "method");
        echo "</div>
</li>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\page\\parts\\totals.total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\page\\parts\\totals.total.twig", "");
    }
}
