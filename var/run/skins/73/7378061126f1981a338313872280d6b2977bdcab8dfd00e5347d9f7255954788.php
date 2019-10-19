<?php

/* items_list\empty.twig */
class __TwigTemplate_7a212f8bcc892d0220f81727098f48ccc420c2fc415732eca258d8abe33ed460 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"empty-list\">";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "getEmptyListDescription", [], "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "items_list\\empty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list\\empty.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\empty.twig");
    }
}
