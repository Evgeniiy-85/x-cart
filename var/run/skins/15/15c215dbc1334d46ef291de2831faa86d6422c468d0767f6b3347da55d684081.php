<?php

/* settings/body.twig */
class __TwigTemplate_7b7358978defd1f6fa0878b1439a82fe0d1a25de129db069ab68293094f9a60b extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"settings general-settings settings-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "page", []), "html", null, true);
        echo " settings-\">
  ";
        // line 5
        if (($this->getAttribute(($context["this"] ?? null), "target", []) == "module")) {
            // line 6
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Model\\ModuleSettings", "useBodyTemplate" => "1"]]), "html", null, true);
            echo "
  ";
        }
        // line 8
        echo "  ";
        if (($this->getAttribute(($context["this"] ?? null), "target", []) != "module")) {
            // line 9
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Model\\Settings", "useBodyTemplate" => "1"]]), "html", null, true);
            echo "
  ";
        }
        // line 11
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "settings/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 11,  35 => 9,  32 => 8,  26 => 6,  24 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "settings/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\settings\\body.twig");
    }
}
