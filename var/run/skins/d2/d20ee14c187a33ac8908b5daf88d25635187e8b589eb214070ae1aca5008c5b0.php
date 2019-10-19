<?php

/* modules/CDev/SimpleCMS/footer_menu.twig */
class __TwigTemplate_640f1d0b224fd87add760e86999ae5e08bb4235183882a50906c6ba8c72ae817 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"secondary-menu\" class=\"clearfix\">
 <ul class=\"footer-menu\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getItems", [], "method"));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 8
            echo "      ";
            if ($this->getAttribute(($context["this"] ?? null), "isLevelUp", [0 => $this->getAttribute($context["item"], "depth", [])], "method")) {
                // line 9
                echo "        <ul>
      ";
            } else {
                // line 11
                echo "        ";
                if ( !$this->getAttribute(($context["this"] ?? null), "isFirstElement", [], "method")) {
                    // line 12
                    echo "        </li>
        ";
                }
                // line 14
                echo "      ";
            }
            // line 15
            echo "
      ";
            // line 16
            echo $this->getAttribute(($context["this"] ?? null), "closeMenuList", [0 => $this->getAttribute($context["item"], "depth", [])], "method");
            echo "
      <li ";
            // line 17
            echo $this->getAttribute(($context["this"] ?? null), "displayItemClass", [0 => $context["i"], 1 => $context["item"]], "method");
            echo ">
        ";
            // line 18
            if ($this->getAttribute($context["item"], "url", [])) {
                // line 19
                echo "        <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["item"], "active", [])) {
                    echo "class=\"active\"";
                }
                echo ">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", []), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 21
                echo "        <span class=\"footer-title\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", []), "html", null, true);
                echo "</span>
        ";
            }
            // line 23
            echo "          
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      </li>
    ";
        // line 26
        echo $this->getAttribute(($context["this"] ?? null), "closeMenuList", [], "method");
        echo "
 </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/CDev/SimpleCMS/footer_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  83 => 25,  76 => 23,  70 => 21,  58 => 19,  56 => 18,  52 => 17,  48 => 16,  45 => 15,  42 => 14,  38 => 12,  35 => 11,  31 => 9,  28 => 8,  24 => 7,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/CDev/SimpleCMS/footer_menu.twig", "/home/vagrant/next/output/xcart/src/skins/customer/modules/CDev/SimpleCMS/footer_menu.twig");
    }
}
