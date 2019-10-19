<?php

/* menu/info/top_menu_node.twig */
class __TwigTemplate_1755f76a34ac635647b27be4345a5d670f99bfed7623f105a0f657bf70bfe047 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"info-menu menu notification\">
  <div class=\"icon\">
    ";
        // line 6
        echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/bell.svg"], "method");
        echo "
    <div class=\"unread-mark\"></div>
  </div>
  <div class=\"box\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Menu\\Admin\\Info\\LazyLoad"]]), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "menu/info/top_menu_node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu/info/top_menu_node.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\menu\\info\\top_menu_node.twig");
    }
}
