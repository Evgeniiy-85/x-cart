<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.review.twig */
class __TwigTemplate_7497d5133bb09601f9dcd2e43063458d3d0e2f0da038923f7944e6763cd727a8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"form-item clearfix\">
  <label for=\"review\" class=\"review\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Write your review"]), "html", null, true);
        echo "
  </label>
  <br />
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Your review"]), "fieldOnly" => "true", "fieldName" => "review", "rows" => "6", "cols" => "78", "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "review", []), "review", [])]]), "html", null, true);
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.review.twig", "");
    }
}
