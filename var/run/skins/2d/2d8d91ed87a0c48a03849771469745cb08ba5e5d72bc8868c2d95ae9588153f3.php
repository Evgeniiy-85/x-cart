<?php

/* top_links/version_notes/parts/upgrade.twig */
class __TwigTemplate_3e33b005320a9bdd25daa1eb43505ecfa64656c70e14821f920cc840bcc75fce extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getContainerTagAttributes", [], "method")], "method");
        echo ">
  <div class=\"box\">
    <span class=\"warning\">";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/info.svg"], "method");
        echo "</span>
    ";
        // line 8
        $context["url"] = $this->getAttribute(($context["this"] ?? null), "getUpgradeUrl", [], "method");
        // line 9
        echo "    ";
        if ($this->getAttribute(($context["this"] ?? null), "hasUpgrades", [], "method")) {
            // line 10
            echo "      <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Upgrade available"]), "html", null, true);
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDescription", [], "method"), "html", null, true);
            echo ")</a>
    ";
        } else {
            // line 12
            echo "      <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Updates for the X-Cart core and/or installed modules are available"]), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Updates are available"]), "html", null, true);
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDescription", [], "method"), "html", null, true);
            echo ")</a>
    ";
        }
        // line 14
        echo "    <a class=\"close\">";
        echo $this->getAttribute(($context["this"] ?? null), "displaySVGImage", [0 => "images/icon-close-round.svg"], "method");
        echo "</a>
  </div>
  <div class=\"corner-box\">
    <span class=\"corner\"><a class=\"warning\">";
        // line 17
        echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/info.svg"], "method");
        echo "</a></span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "top_links/version_notes/parts/upgrade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 17,  58 => 14,  46 => 12,  36 => 10,  33 => 9,  31 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "top_links/version_notes/parts/upgrade.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\top_links\\version_notes\\parts\\upgrade.twig");
    }
}
