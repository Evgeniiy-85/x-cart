<?php

/* E:\Server\projects\x-cart\skins\admin\items_list\product\modify\common\parts\header\inventory.twig */
class __TwigTemplate_4994fcb285c8426e796af2e62e9238d2c859f85448ddcfa086b69325ef2ffae2 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"inventory\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => "items_list/sort.twig", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Qty"]), "sortByColumn" => twig_constant("SORT_BY_MODE_AMOUNT", ($context["this"] ?? null))]]), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\product\\modify\\common\\parts\\header\\inventory.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\product\\modify\\common\\parts\\header\\inventory.twig", "");
    }
}