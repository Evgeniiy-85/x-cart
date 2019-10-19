<?php

/* menu/account/top_menu_node.twig */
class __TwigTemplate_cd2b45e020efb649cb54885c87edb94153ee81385836390dffb59856652c4765 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"account-menu menu\">
  <div class=\"title\">
    <div class=\"icon\">";
        // line 6
        echo $this->getAttribute(($context["this"] ?? null), "getSVGImage", [0 => "images/fa-male-user.svg"], "method");
        echo "</div>
    <i class=\"fa fa-angle-right\"></i>
  </div>
  <div class=\"box\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Menu\\Admin\\Account\\Menu"]]), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "menu/account/top_menu_node.twig";
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
        return new Twig_Source("{##
 # Account top menu node
 #}
<div class=\"account-menu menu\">
  <div class=\"title\">
    <div class=\"icon\">{{ this.getSVGImage('images/fa-male-user.svg')|raw }}</div>
    <i class=\"fa fa-angle-right\"></i>
  </div>
  <div class=\"box\">{{ widget('XLite\\\\View\\\\Menu\\\\Admin\\\\Account\\\\Menu') }}</div>
</div>
", "menu/account/top_menu_node.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\menu\\account\\top_menu_node.twig");
    }
}
