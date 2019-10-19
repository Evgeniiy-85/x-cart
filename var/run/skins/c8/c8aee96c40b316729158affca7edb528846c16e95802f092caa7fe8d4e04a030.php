<?php

/* form_field/file_uploader/multiple.twig */
class __TwigTemplate_735ffa642339c6dfccf302be4e8f26db4d616070f5db0e3e24e58324a6e6da9a extends \XLite\Core\Templating\Twig\Template
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
<xlite-multiple-file-uploader inline-template>
  <div ";
        // line 6
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo " class=\"file-uploader-wrapper multiple-files\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getFiles", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["object"]) {
            // line 8
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getFileUploaderWidget", [], "method"), "object" => $context["object"], "maxWidth" => $this->getAttribute(($context["this"] ?? null), "getMaxWidth", [], "method"), "maxHeight" => $this->getAttribute(($context["this"] ?? null), "getMaxHeight", [], "method"), "isImage" => $this->getAttribute(($context["this"] ?? null), "isImage", [], "method"), "fieldName" => $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "multiple" => "true", "isViaUrlAllowed" => $this->getAttribute(($context["this"] ?? null), "isViaUrlAllowed", [], "method")]]), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['object'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getFileUploaderWidget", [], "method"), "maxWidth" => $this->getAttribute(($context["this"] ?? null), "getMaxWidth", [], "method"), "maxHeight" => $this->getAttribute(($context["this"] ?? null), "getMaxHeight", [], "method"), "isImage" => $this->getAttribute(($context["this"] ?? null), "isImage", [], "method"), "fieldName" => $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "multiple" => "true", "isViaUrlAllowed" => $this->getAttribute(($context["this"] ?? null), "isViaUrlAllowed", [], "method"), "helpMessage" => $this->getAttribute(($context["this"] ?? null), "helpMessage", [])]]), "html", null, true);
        echo "
  </div>
</xlite-multiple-file-uploader>
";
    }

    public function getTemplateName()
    {
        return "form_field/file_uploader/multiple.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 10,  31 => 8,  27 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/file_uploader/multiple.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_field\\file_uploader\\multiple.twig");
    }
}
