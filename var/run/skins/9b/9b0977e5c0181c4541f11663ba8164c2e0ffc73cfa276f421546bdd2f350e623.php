<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.form.twig */
class __TwigTemplate_9b3ef37e526543e8ed511c921d8785a647ff01471a01fe86294d1358d3d65b7d extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Product\\AddToCart", ["product" => $this->getAttribute(($context["this"] ?? null), "product", []), "className" => "product-details", "validationEngine" => "1"]);        // line 8
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "product.details.page.info.form"]]), "html", null, true);
        echo "
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.form.twig", "");
    }
}
