<?php

/* menu/node_notification.twig */
class __TwigTemplate_454c94531369aee89434235daf9932247636bf72ca33b97ccbecb3427ac74339 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li ";
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getNodeTagAttributes", [], "method")], "method");
        echo ">
  ";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "getHeaderURL", [], "method")) {
            // line 6
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getHeaderURL", [], "method"), "html", null, true);
            echo "\"";
            if ($this->getAttribute(($context["this"] ?? null), "targetIsBlank", [], "method")) {
                echo " target=\"_blank\"";
            }
            echo ">
      <div class=\"notification-header\">
      ";
            // line 8
            echo $this->getAttribute(($context["this"] ?? null), "getIcon", [], "method");
            echo "
      <span>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getHeader", [], "method"), "html", null, true);
            echo "</span>
      ";
            // line 10
            if ($this->getAttribute(($context["this"] ?? null), "getCounter", [], "method")) {
                // line 11
                echo "        <div class=\"counter\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCounter", [], "method"), "html", null, true);
                echo "</div>
      ";
            }
            // line 13
            echo "      </div>
    </a>
    ";
        } else {
            // line 16
            echo "    <div class=\"notification-header\">
    ";
            // line 17
            echo $this->getAttribute(($context["this"] ?? null), "getIcon", [], "method");
            echo "
    <span>";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getHeader", [], "method"), "html", null, true);
            echo "</span>
    ";
            // line 19
            if ($this->getAttribute(($context["this"] ?? null), "getCounter", [], "method")) {
                // line 20
                echo "      <div class=\"counter\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getCounter", [], "method"), "html", null, true);
                echo "</div>
    ";
            }
            // line 22
            echo "    </div>
  ";
        }
        // line 24
        echo "</li>

";
    }

    public function getTemplateName()
    {
        return "menu/node_notification.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 24,  76 => 22,  70 => 20,  68 => 19,  64 => 18,  60 => 17,  57 => 16,  52 => 13,  46 => 11,  44 => 10,  40 => 9,  36 => 8,  26 => 6,  24 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "menu/node_notification.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\menu\\node_notification.twig");
    }
}
