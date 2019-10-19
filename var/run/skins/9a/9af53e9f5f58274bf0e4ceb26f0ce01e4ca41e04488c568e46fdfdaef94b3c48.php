<?php

/* button/remove.twig */
class __TwigTemplate_69667294100aed307c35c7353b5d0ce7fe18eac84c0005a1d78e093d7ea6709f extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"remove-wrapper ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStyle", [], "method"), "html", null, true);
        echo "\">
  <button type=\"button\" class=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStyle", [], "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method")]), "html", null, true);
        echo "\" tabindex=\"-1\">
    ";
        // line 6
        if ($this->getAttribute(($context["this"] ?? null), "isCrossIcon", [], "method")) {
            // line 7
            echo "      ";
            echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "images/close.svg", "common"]);
            echo "
    ";
        } else {
            // line 9
            echo "      <i class=\"fa fa-trash-o icon\"></i>
    ";
        }
        // line 11
        echo "  </button>
  <input type=\"checkbox\" name=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
        echo "\" value=\"1\" tabindex=\"-1\" />
</div>
";
    }

    public function getTemplateName()
    {
        return "button/remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  42 => 11,  38 => 9,  32 => 7,  30 => 6,  24 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "button/remove.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\button\\remove.twig");
    }
}
