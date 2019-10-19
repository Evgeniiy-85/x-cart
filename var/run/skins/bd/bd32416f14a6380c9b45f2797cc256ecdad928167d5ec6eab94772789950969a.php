<?php

/* top_message/body.twig */
class __TwigTemplate_2f8ca754e351d647ff656c96f6180ada528107ef339220bf66e03c11e05b1731 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"status-messages\" class=\"top-message-container\" ";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "isHidden", [], "method")) {
            echo " style=\"display: none;\"";
        }
        echo ">

  <a href=\"#\" class=\"close-message\" title=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Close"]), "html", null, true);
        echo "\"><img src=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPath", [], "method"), "html", null, true);
        echo "/spacer3.gif\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Close"]), "html", null, true);
        echo "\" /></a>

  ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "hasTopMessages", [], "method")) {
            // line 10
            echo "    <ul class=\"top-messages\">
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getTopMessages", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 12
                echo "        <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getType", [0 => $context["data"]], "method"), "html", null, true);
                echo "\">
          ";
                // line 13
                if ($this->getAttribute(($context["this"] ?? null), "getPrefix", [0 => $context["data"]], "method")) {
                    // line 14
                    echo "            <em>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPrefix", [0 => $context["data"]], "method"), "html", null, true);
                    echo "</em>
          ";
                }
                // line 15
                echo $this->getAttribute(($context["this"] ?? null), "getText", [0 => $context["data"]], "method");
                echo "
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
  ";
        }
        // line 20
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "top_message/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  69 => 18,  60 => 15,  54 => 14,  52 => 13,  47 => 12,  43 => 11,  40 => 10,  38 => 9,  29 => 7,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "top_message/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\top_message\\body.twig");
    }
}
