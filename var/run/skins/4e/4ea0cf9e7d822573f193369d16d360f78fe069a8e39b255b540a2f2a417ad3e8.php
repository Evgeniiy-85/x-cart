<?php

/* menu/marketplace/top_menu_node.twig */
class __TwigTemplate_119759d0bf886bdace87bbf2f36d6eba73b2abd6588b0351931bfa60c513ea22 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"marketplace-menu menu notification\">
  <div class=\"icon\">
    <a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getUrl", [], "method"), "html", null, true);
        echo "\">
      ";
        // line 7
        echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/marketplace.svg"], "method");
        echo "
      <div class=\"unread-mark\"></div>
    </a>
  </div>
  <div class=\"box\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Menu\\Admin\\Marketplace\\LazyLoad"]]), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "menu/marketplace/top_menu_node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  27 => 7,  23 => 6,  19 => 4,);
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
 # Quick menu top menu node
 #}
<div class=\"marketplace-menu menu notification\">
  <div class=\"icon\">
    <a href=\"{{ this.getUrl() }}\">
      {{ this.getSVGImage('images/marketplace.svg')|raw }}
      <div class=\"unread-mark\"></div>
    </a>
  </div>
  <div class=\"box\">{{ widget('XLite\\\\View\\\\Menu\\\\Admin\\\\Marketplace\\\\LazyLoad') }}</div>
</div>
", "menu/marketplace/top_menu_node.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\menu\\marketplace\\top_menu_node.twig");
    }
}
