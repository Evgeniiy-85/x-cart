<?php

/* product/search/simple_form.twig */
class __TwigTemplate_218bf9f25a67f672096156e8945ec83d7e478d6e6a47e4faa13d1f5aeba31ab9 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"simple-search-product-form\">

  ";
        // line 7
        $this->startForm("\\XLite\\View\\Form\\Product\\Search\\Customer\\SimpleForm");        // line 8
        echo "    ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.simple-search-form.simple-box"]]), "html", null, true);
        echo "
  ";
        $this->endForm();        // line 10
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "product/search/simple_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  25 => 8,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "product/search/simple_form.twig", "/home/vagrant/next/output/xcart/src/skins/customer/product/search/simple_form.twig");
    }
}
