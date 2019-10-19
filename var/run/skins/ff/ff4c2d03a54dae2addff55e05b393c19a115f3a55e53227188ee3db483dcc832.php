<?php

/* E:\Server\projects\x-cart\skins\admin\payment\add_method\parts\payment_gateways.note.twig */
class __TwigTemplate_4a1da5755480b96e2e070a32c4bc46b308427ecbcfee01bc622760022c941cb0 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"small-head\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Requires registered merchant account"]);
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\payment\\add_method\\parts\\payment_gateways.note.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\payment\\add_method\\parts\\payment_gateways.note.twig", "");
    }
}
