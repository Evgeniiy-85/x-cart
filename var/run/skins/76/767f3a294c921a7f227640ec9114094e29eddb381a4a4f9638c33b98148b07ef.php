<?php

/* E:\Server\projects\x-cart\skins\common\order\invoice\parts\items\items.head.qty.twig */
class __TwigTemplate_9b87b50c801e537f475b7f5c4d36086f67f789f1d562d2a3e378569e8cab6b68 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"qty\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Qty"]), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\common\\order\\invoice\\parts\\items\\items.head.qty.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\common\\order\\invoice\\parts\\items\\items.head.qty.twig", "");
    }
}