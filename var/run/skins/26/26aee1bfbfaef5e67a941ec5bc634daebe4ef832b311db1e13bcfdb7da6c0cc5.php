<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/main_center/page_container_parts/header_parts/logo.twig */
class __TwigTemplate_58c07e54feb2991d61ddc8f49f6caa9e0ef78d2b865e5bdd90405d37379921d0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"logo\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context]), "html", null, true);
        echo "\">";
        echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/logo.svg"], "method");
        echo "</a></div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/main_center/page_container_parts/header_parts/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/main_center/page_container_parts/header_parts/logo.twig", "");
    }
}
