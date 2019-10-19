<?php

/* top_links/version_notes/parts/key_notice.twig */
class __TwigTemplate_8ecede1f9b0eb9d65405d10d3201e4b3f7060901b2f47f7c41efd1f74b152c23 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isKeysNoticeAutoDisplay", [], "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\KeysNotice"]]), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/key_notice.twig";
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
        return new Twig_Source("{##
 # License key notice button
 #
 # @ListChild (list=\"admin.main.page.header\")
 #}

{% if this.isKeysNoticeAutoDisplay() %}
  {{ widget('\\\\XLite\\\\View\\\\Button\\\\KeysNotice') }}
{% endif %}
", "top_links/version_notes/parts/key_notice.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\top_links\\version_notes\\parts\\key_notice.twig");
    }
}
