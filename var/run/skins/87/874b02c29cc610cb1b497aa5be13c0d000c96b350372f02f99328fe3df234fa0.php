<?php

/* E:\Server\projects\x-cart\skins\customer\modules\CDev\ProductAdvisor\product\details\parts\common.coming_soon.twig */
class __TwigTemplate_2d64566e8065c43d741e5279205685145778ec63bba277fe0055cff25efe064d extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "isUpcomingProduct", [], "method")) {
            // line 9
            echo "  <span class=\"coming-soon-label\">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Labels", "labels" => $this->getAttribute(($context["this"] ?? null), "getComingSoonLabel", [], "method")]]), "html", null, true);
            echo "

    ";
            // line 15
            echo "  </span>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\CDev\\ProductAdvisor\\product\\details\\parts\\common.coming_soon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 15,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\modules\\CDev\\ProductAdvisor\\product\\details\\parts\\common.coming_soon.twig", "");
    }
}