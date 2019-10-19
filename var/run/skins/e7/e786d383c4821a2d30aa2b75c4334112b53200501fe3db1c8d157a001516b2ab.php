<?php

/* form/end.twig */
class __TwigTemplate_a7ef4772642f24dfbc2cb1e0dce26d428893dc24b159339edd398c69b03ad886 extends \XLite\Core\Templating\Twig\Template
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
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "form/end.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form/end.twig", "/home/vagrant/next/output/xcart/src/skins/customer/form/end.twig");
    }
}
