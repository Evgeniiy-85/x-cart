<?php

/* label/body.twig */
class __TwigTemplate_a41e1dd55eb906f691e12b99344478ab85feb462476124e64128968caad2384a extends \XLite\Core\Templating\Twig\Template
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
<div class=\"label-main-box ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "style", []), "html", null, true);
        echo "\">
  <div class=\"content\">";
        // line 6
        echo $this->getAttribute(($context["this"] ?? null), "labelContent", []);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "label/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "label/body.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\label\\body.twig");
    }
}
