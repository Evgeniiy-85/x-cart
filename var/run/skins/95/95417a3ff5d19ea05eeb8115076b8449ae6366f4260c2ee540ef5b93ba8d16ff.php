<?php

/* E:\Server\projects\x-cart\skins\admin\order\history\parts\event_details_action.twig */
class __TwigTemplate_a751ec4445f56de9fdec34eb71f59d72f95496e91bf4970f39e9c6cbe9d3eb24 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayDetails", [0 => $this->getAttribute(($context["this"] ?? null), "event", [])], "method")) {
            // line 7
            echo "  <li class=\"details\">
    <div class=\"action\">
      <i data-interval=\"0\" data-toggle=\"collapse\" id=\"event-";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "eventId", []), "html", null, true);
            echo "-action\" data-target=\".event-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "event", []), "eventId", []), "html", null, true);
            echo "\" class=\"fa fa-plus-square-o\"></i>
    </div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\history\\parts\\event_details_action.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 9,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\history\\parts\\event_details_action.twig", "");
    }
}
