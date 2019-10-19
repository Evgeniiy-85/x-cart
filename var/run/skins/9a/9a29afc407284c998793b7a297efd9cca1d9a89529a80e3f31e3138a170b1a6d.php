<?php

/* header/parts/meta_upgrade_insecure.twig */
class __TwigTemplate_be3dc5a11285077688e0a865b274b9e56811701f40c23682283bb8e127ecf51c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "useUpgradeInsecure", [], "method")) {
            // line 8
            echo "  <meta http-equiv=\"Content-Security-Policy\" content=\"upgrade-insecure-requests\">
";
        }
    }

    public function getTemplateName()
    {
        return "header/parts/meta_upgrade_insecure.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header/parts/meta_upgrade_insecure.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\meta_upgrade_insecure.twig");
    }
}
