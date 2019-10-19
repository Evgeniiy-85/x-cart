<?php

/* E:\Server\projects\x-cart\skins\admin\notifications\parts\warning.twig */
class __TwigTemplate_3cf998edcbe8ff90d95f60add52e463065e696d6fe302c61b89e22148d9e4db8 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isMbstringWarningVisible", [], "method")) {
            // line 8
            echo "<div class=\"alert alert-warning attachment-warning\">
    ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["mbstring.extension.alert"]);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\notifications\\parts\\warning.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\notifications\\parts\\warning.twig", "");
    }
}
