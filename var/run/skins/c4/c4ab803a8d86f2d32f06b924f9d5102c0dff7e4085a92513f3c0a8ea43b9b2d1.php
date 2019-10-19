<?php

/* E:\Server\projects\x-cart\skins\crisp_white\customer\layout\header\header_settings\settings.twig */
class __TwigTemplate_88a9521418a8d6c8c78c5ecc73c977f6d739a16c276ecaaf4f7f74ecd9c2e13c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "slidebar.settings"], "method")) {
            // line 8
            echo "  <div class=\"settings\">
    <div>
      <a href=\"#settings-panel\" class=\"item-title\">
        <span>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Settings"]), "html", null, true);
            echo "</span>
        <span class=\"mm-next\"></span>
      </a>
      <div class=\"Panel\" id=\"settings-panel\">
        <ul class=\"Inset\">
          ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "slidebar.settings"]]), "html", null, true);
            echo "
        </ul>
      </div>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\header_settings\\settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  29 => 11,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\layout\\header\\header_settings\\settings.twig", "");
    }
}
