<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/script_init.twig */
class __TwigTemplate_8939280266a50891e08487bc8168c92baab3369f7e6d31fb5bebefd541555594 extends \XLite\Core\Templating\Twig\Template
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
<script type=\"text/javascript\">
//<![CDATA[
  var lbl_cannot_remove_sold_pincode = '";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Cannot remove a sold PIN code"]), "html", null, true);
        echo "';
  var pins_enabled = \"";
        // line 10
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "product", []), "getPinCodesEnabled", [], "method")) {
            echo "1";
        }
        echo "\";
//]]>
</script>

";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/script_init.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/script_init.twig", "");
    }
}
