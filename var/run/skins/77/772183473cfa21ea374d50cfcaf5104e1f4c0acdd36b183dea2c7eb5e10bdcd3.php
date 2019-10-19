<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/substring.input.twig */
class __TwigTemplate_14dd73ff2d928ca627fe9b575228084fab23ca158aa2c90d3a60b9556385fe63 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"substring-cell\">
  <input type=\"text\" class=\"form-text form-control\" size=\"30\" maxlength=\"200\" name=\"substring\" value=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCondition", [0 => "substring"], "method"), "html", null, true);
        echo "\" />
</td>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/substring.input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/substring.input.twig", "");
    }
}
