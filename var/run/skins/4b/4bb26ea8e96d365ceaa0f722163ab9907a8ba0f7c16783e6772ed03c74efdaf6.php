<?php

/* E:\Server\projects\x-cart\skins\customer\product\details\parts\common.image-next.twig */
class __TwigTemplate_c59c21c5c519c177eea73c9b0e36f80e567c8c7e25f07d94d3d93b5cfe0f4b43 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getImages", [], "method") && ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "countImages", [], "method") != 1))) {
            // line 7
            echo "  <a class=\"arrow right-arrow\" href=\"javascript:void(0);\"><img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
            echo "\" alt=\"Next image\" /></a>
";
        }
        // line 9
        if ( !($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getImages", [], "method") || ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "countImages", [], "method") == 1))) {
            // line 10
            echo "  <span class=\"arrow right-arrow\"></span>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\product\\details\\parts\\common.image-next.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  27 => 9,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\product\\details\\parts\\common.image-next.twig", "");
    }
}
