<?php

/* file_uploader/parts/widget.alt.twig */
class __TwigTemplate_82ac397b136cfd7c221f031609ab89929d10d4a06103578afdd619809a462edc extends \XLite\Core\Templating\Twig\Template
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
<div class=\"alt\">
  <div class=\"dropdown-toggle\" data-toggle=\"dropdown\">
    <span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["alt"]), "html", null, true);
        echo "</span>
  </div>
  <div class=\"dropdown-menu\" role=\"menu\">
    <input name=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
        echo "[alt]\"
           v-model=\"alt\"
           value=\"";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "object", []), "alt", []), "html", null, true);
        echo "\"
           class=\"form-control input-alt\"
           @change=\"doChangeAlt\"
           @keydown=\"doChangeAlt\"
           @blur=\"doChangeAlt\"/>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "file_uploader/parts/widget.alt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  30 => 10,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "file_uploader/parts/widget.alt.twig", "E:\\Server\\projects\\x-cart\\skins\\common\\file_uploader\\parts\\widget.alt.twig");
    }
}
