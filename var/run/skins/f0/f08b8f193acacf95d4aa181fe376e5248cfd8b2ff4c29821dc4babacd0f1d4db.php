<?php

/* E:\Server\projects\x-cart\skins\customer\checkout\steps\review\parts\place_order.agree_note.twig */
class __TwigTemplate_1c90fbab11bc25072aa8313c3187fc868520c497fbd6dee3356cbf4d1de1e0f5 extends \XLite\Core\Templating\Twig\Template
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
<p class=\"agree-note\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Clicking the Place order button you accept: Terms and Conditions", ["URL" => $this->getAttribute(($context["this"] ?? null), "getTermsURL", [], "method")]]);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\checkout\\steps\\review\\parts\\place_order.agree_note.twig";
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
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\checkout\\steps\\review\\parts\\place_order.agree_note.twig", "");
    }
}
