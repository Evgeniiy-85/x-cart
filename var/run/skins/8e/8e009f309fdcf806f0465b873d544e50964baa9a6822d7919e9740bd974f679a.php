<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/welcome_block/root_admin/title.twig */
class __TwigTemplate_5c10ac47431663b9ac11dc39d2b30654b710c39a4aab08ec95635bc53f3e3326 extends \XLite\Core\Templating\Twig\Template
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
<h1 class=\"block-heading\">";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Steps to complete your store for real sales", ["url" => $this->getAttribute(($context["this"] ?? null), "getShopURL", [], "method")]]);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/welcome_block/root_admin/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/welcome_block/root_admin/title.twig", "");
    }
}
