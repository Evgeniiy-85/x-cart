<?php

/* header/parts/parts.css/css_resource.twig */
class __TwigTemplate_b6ad8b5305128f372f162c41eb5708555d350b2c58e2d254cb7910f938cbf12f extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "async", [])) {
            // line 6
            echo "  <link href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "url", []), "html", null, true);
            echo "\"
        rel=\"preload\"
        as=\"style\" onload='this.onload=null;this.rel=\"stylesheet\"'
        type=\"text/css\"
        media=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "media", []), "html", null, true);
            echo "\" />
  <noscript>
    <link href=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "url", []), "html", null, true);
            echo "\"
          rel=\"stylesheet\"
          type=\"text/css\"
          media=\"";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "media", []), "html", null, true);
            echo "\" />
  </noscript>
";
        } else {
            // line 18
            echo "  <link href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "url", []), "html", null, true);
            echo "\"
        rel=\"stylesheet\"
        type=\"text/css\"
        media=\"";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "media", []), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "header/parts/parts.css/css_resource.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  49 => 18,  43 => 15,  37 => 12,  32 => 10,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header/parts/parts.css/css_resource.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\parts.css\\css_resource.twig");
    }
}
