<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.info.buttons.twig */
class __TwigTemplate_70727be246bdf2df5d5644356486c0fd6164c46edc8192b04648d82f8f48cdb7 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div class=\"product-buttons shade-base\">
  ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isProductAdded", [], "method")) {
            // line 10
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "buttons-added", "type" => "nested"]]), "html", null, true);
            echo "
  ";
        } else {
            // line 12
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "buttons", "type" => "nested"]]), "html", null, true);
            echo "
  ";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.info.buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  31 => 12,  25 => 10,  23 => 9,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/product/details/parts/common.info.buttons.twig", "");
    }
}
