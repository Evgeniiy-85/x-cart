<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.reviewer_name.twig */
class __TwigTemplate_670e9aac845c8ab8b015472e9302a95a615ea0f731312cd297ee353e96a09752 extends \XLite\Core\Templating\Twig\Template
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
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\Text", "required" => "true", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Full name"]), "fieldName" => "reviewerName", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Your name"]), "value" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "review", []), "reviewerName", [])]]), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.reviewer_name.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/review/parts/field.reviewer_name.twig", "");
    }
}
