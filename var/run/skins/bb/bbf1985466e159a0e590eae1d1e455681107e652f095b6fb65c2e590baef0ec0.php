<?php

/* button/regular.twig */
class __TwigTemplate_3851496b0bb2ef59485cf04bf171aa86d46327ffdbd3b5326f250d378e678bd4 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<button ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getAttributes", [], "method")], "method");
        echo ">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "
  ";
        // line 7
        $context["iconStyle"] = $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "icon-style"], "method");
        // line 8
        echo "  ";
        if (($context["iconStyle"] ?? null)) {
            echo "<span><i class=\"button-icon ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["iconStyle"] ?? null), "html", null, true);
            echo "\"></i></span>";
        }
        // line 9
        echo "
  ";
        // line 10
        $context["buttonLabel"] = call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method")]);
        // line 11
        echo "  ";
        if (($context["buttonLabel"] ?? null)) {
            echo "<span>";
            echo ($context["buttonLabel"] ?? null);
            echo "</span>";
        }
        // line 12
        echo "</button>
";
    }

    public function getTemplateName()
    {
        return "button/regular.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 12,  44 => 11,  42 => 10,  39 => 9,  32 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Regular button
 #}

<button {{ this.printTagAttributes(this.getAttributes())|raw }}>
  {{ this.displayCommentedData(this.getCommentedData()) }}
  {% set iconStyle = this.getParam('icon-style') %}
  {% if iconStyle %}<span><i class=\"button-icon {{ iconStyle }}\"></i></span>{% endif %}

  {% set buttonLabel = t(this.getButtonLabel()) %}
  {% if buttonLabel %}<span>{{ buttonLabel|raw }}</span>{% endif %}
</button>
", "button/regular.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\button\\regular.twig");
    }
}
