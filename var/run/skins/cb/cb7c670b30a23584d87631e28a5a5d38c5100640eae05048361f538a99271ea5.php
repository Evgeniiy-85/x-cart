<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/modules/XC/BulkEditing/items_list/selected/count.twig */
class __TwigTemplate_532a8fe1110a26e92bc5dc1005764aef9153b867c482750c1401e0342651d9e5 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "<h2 class=\"count-selected\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["X items selected", ["count" => $this->getAttribute(($context["this"] ?? null), "getItemsCount", [], "method")]]), "html", null, true);
        echo "</h2>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/modules/XC/BulkEditing/items_list/selected/count.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/modules/XC/BulkEditing/items_list/selected/count.twig", "");
    }
}
