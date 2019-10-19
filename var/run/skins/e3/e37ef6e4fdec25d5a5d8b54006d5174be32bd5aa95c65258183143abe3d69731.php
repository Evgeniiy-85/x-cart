<?php

/* location/node.twig */
class __TwigTemplate_5060a49af84978a4535f43068424e6c65f6ea0097d03e4212bdd2755ff71200d extends \XLite\Core\Templating\Twig\Template
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
<li ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getListContainerAttributes", [], "method")], "method");
        echo ">

  ";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "getLink", [], "method")) {
            // line 8
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getLink", [], "method"), "html", null, true);
            echo "\" class=\"location-title\"><span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
            echo "</span></a>
  ";
        } else {
            // line 10
            echo "    <span class=\"location-text\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 12
        echo "
  ";
        // line 13
        if ($this->getAttribute(($context["this"] ?? null), "getSubnodes", [], "method")) {
            // line 14
            echo "    <ul class=\"location-subnodes\">
      ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getSubnodes", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["node"]) {
                // line 16
                echo "        <li>
          ";
                // line 17
                if (($this->getAttribute($context["node"], "getName", [], "method") != $this->getAttribute(($context["this"] ?? null), "getName", [], "method"))) {
                    // line 18
                    echo "            <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["node"], "getLink", [], "method"), "html", null, true);
                    echo "\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["node"], "getName", [], "method"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 20
                echo "          ";
                if (($this->getAttribute($context["node"], "getName", [], "method") == $this->getAttribute(($context["this"] ?? null), "getName", [], "method"))) {
                    // line 21
                    echo "            <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["node"], "getLink", [], "method"), "html", null, true);
                    echo "\" class=\"current\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["node"], "getName", [], "method"), "html", null, true);
                    echo "</a>
          ";
                }
                // line 23
                echo "        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['node'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "      ";
            if (($this->getAttribute(($context["this"] ?? null), "moreLinkNeeded", [], "method") && $this->getAttribute(($context["this"] ?? null), "getLink", [], "method"))) {
                // line 26
                echo "        <li class='more-link'>
            <a href=\"";
                // line 27
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getMoreLink", [], "method"), "html", null, true);
                echo "\" class=\"location-title\"><span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["More"]), "html", null, true);
                echo "...</span></a>
        </li>
      ";
            }
            // line 30
            echo "    </ul>
  ";
        }
        // line 32
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "location/node.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 32,  100 => 30,  92 => 27,  89 => 26,  86 => 25,  79 => 23,  71 => 21,  68 => 20,  60 => 18,  58 => 17,  55 => 16,  51 => 15,  48 => 14,  46 => 13,  43 => 12,  37 => 10,  29 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "location/node.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\location\\node.twig");
    }
}
