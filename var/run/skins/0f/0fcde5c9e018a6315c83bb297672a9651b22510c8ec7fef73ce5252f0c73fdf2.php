<?php

/* E:\Server\projects\x-cart\skins\admin\import\parts\begin.files.twig */
class __TwigTemplate_3d441e5b4ed79fbde76695cd4aaad2297ffe89e8676a036646609f1fda93a07e extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "import.begin.content.files"]]), "html", null, true);
        echo "
<div class=\"parts\">
  <h3>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Upload files"]), "html", null, true);
        echo "</h3>
  <input id=\"files\" class=\"inputfile\" type=\"file\" name=\"files[]\" multiple=\"multiple\" data-max-size=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getUploadFileMaxSize", [], "method"), "html", null, true);
        echo "\" data-readable-max-size=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getReadableUploadFileMaxSize", [], "method"), "html", null, true);
        echo "\" />
  <label for=\"files\" class=\"input-button\">Choose files</label>
  <span class=\"input-filename\"></span>
  <div class=\"help-block\">";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getUploadFileMessage", [], "method"), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\import\\parts\\begin.files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  31 => 10,  27 => 9,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\import\\parts\\begin.files.twig", "");
    }
}
