<?php

/* button/regular.twig */
class __TwigTemplate_6e9522149dfba2ea1b6fdd69222b2a96437a15156278fa9f46ec6d8dd3d31159 extends \XLite\Core\Templating\Twig\Template
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
        return new Twig_Source("", "button/regular.twig", "/home/vagrant/next/output/xcart/src/skins/admin/button/regular.twig");
    }
}
