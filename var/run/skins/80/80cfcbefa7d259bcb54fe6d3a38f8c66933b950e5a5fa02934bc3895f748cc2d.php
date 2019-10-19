<?php

/* /home/vagrant/next/output/xcart/src/skins/common/file_uploader/parts/menu.message.twig */
class __TwigTemplate_e32bd603c762d3cd5938f5c19b9bdd0185e0f929f37d12c7e2d2331eaa11418d extends \XLite\Core\Templating\Twig\Template
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
<li role=\"presentation\" class=\"dropdown-header message\" v-if=\"errorMessage\">
  <i class=\"fa fa-exclamation-triangle\"></i> <span v-html=\"realErrorMessage\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMessage", [], "method"), "html", null, true);
        echo "</span>
</li>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/common/file_uploader/parts/menu.message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/common/file_uploader/parts/menu.message.twig", "");
    }
}
