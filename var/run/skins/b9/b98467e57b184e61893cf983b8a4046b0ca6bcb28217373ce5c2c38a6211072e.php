<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/dropdown_parts/image.twig */
class __TwigTemplate_6c98fc6603cabed33605224339ce08cee15f1c3f904e5ecabd8ef3fc416218ae extends \XLite\Core\Templating\Twig\Template
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
<p class=\"next-previous-image\">
    <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getItemURL", [0 => $this->getAttribute(($context["this"] ?? null), "item", [])], "method"), "html", null, true);
        echo "\">
        ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getImage", [], "method"), "maxWidth" => $this->getAttribute(($context["this"] ?? null), "getIconWidth", [], "method"), "maxHeight" => $this->getAttribute(($context["this"] ?? null), "getIconHeight", [], "method"), "alt" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "name", []), "className" => "photo"]]), "html", null, true);
        echo "
    </a>
</p>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/dropdown_parts/image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/dropdown_parts/image.twig", "");
    }
}
