<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/page/remove_data/parts/remove.twig */
class __TwigTemplate_4369a2bf5434a7a807d1569bafe01f5b357b37460e8c9d1d2ae0fa5154b4581b extends \XLite\Core\Templating\Twig\Template
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
<p>";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["This tool allows you to get rid of any content that might have been created in your store for testing purposes and which you no longer need."]);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/page/remove_data/parts/remove.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/page/remove_data/parts/remove.twig", "");
    }
}
