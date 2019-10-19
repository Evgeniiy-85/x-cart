<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/404/parts/contact_info.twig */
class __TwigTemplate_5629baee3009b72de805be5d17d9682e52154266921b0b1ea297f4291c5d417c extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "
<div class=\"page-404\">
  ";
        // line 10
        if ($this->getAttribute(($context["this"] ?? null), "getPhone", [], "method")) {
            // line 11
            echo "    <div class=\"phone\">
      <span class=\"name\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Phone"]), "html", null, true);
            echo ":</span>
      <span class=\"value\">";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPhone", [], "method"), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        // line 16
        echo "  ";
        if (($this->getAttribute(($context["this"] ?? null), "isShowEmail", [], "method") && $this->getAttribute(($context["this"] ?? null), "getEmail", [], "method"))) {
            // line 17
            echo "    <div class=\"email\">
      <a href=\"mailto:";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEmail", [], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEmail", [], "method"), "html", null, true);
            echo "</a>
    </div>
  ";
        }
        // line 21
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/404/parts/contact_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 21,  44 => 18,  41 => 17,  38 => 16,  32 => 13,  28 => 12,  25 => 11,  23 => 10,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/404/parts/contact_info.twig", "");
    }
}
