<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/product_details.rating.twig */
class __TwigTemplate_c7a98472a385abf8216531737472ead5e0591b9544719fb544bbb8afaf7c0d8d extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isVisibleAverageRatingOnPage", [], "method")) {
            // line 8
            echo "
";
            // line 9
            $this->startForm("\\XLite\\Module\\XC\\Reviews\\View\\Form\\AverageRating", ["product_id" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "product_id", [])]);            // line 10
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\Details\\AverageRating", "product" => $this->getAttribute(($context["this"] ?? null), "product", [])]]), "html", null, true);
            echo "
";
            $this->endForm();            // line 12
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/product_details.rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  28 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/product_details.rating.twig", "");
    }
}
