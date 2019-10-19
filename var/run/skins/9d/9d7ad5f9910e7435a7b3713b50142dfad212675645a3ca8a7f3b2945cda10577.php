<?php

/* top_message/body.twig */
class __TwigTemplate_8fbd000ce4bb9de41adc7b4e643d3df1e20a60d60d50424395a0a63ae4012731 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"status-messages-wrapper\">
  <div class=\"status-messages-wrapper2\">

    <div id=\"status-messages\" ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "isHidden", [], "method")) {
            echo " style=\"display: none;\"";
        }
        echo ">

      <a href=\"#\" class=\"close\" title=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Close"]), "html", null, true);
        echo "\"><img src=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
        echo "\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Close"]), "html", null, true);
        echo "\" /></a>

      ";
        // line 12
        if ($this->getAttribute(($context["this"] ?? null), "hasTopMessages", [], "method")) {
            // line 13
            echo "        <ul>
          ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getTopMessages", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 15
                echo "            <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getType", [0 => $context["data"]], "method"), "html", null, true);
                echo "\">
              ";
                // line 16
                if ($this->getAttribute(($context["this"] ?? null), "getPrefix", [0 => $context["data"]], "method")) {
                    // line 17
                    echo "                <em>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getPrefix", [0 => $context["data"]], "method"), "html", null, true);
                    echo "</em>
              ";
                }
                // line 18
                echo $this->getAttribute(($context["this"] ?? null), "getText", [0 => $context["data"]], "method");
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
      ";
        }
        // line 23
        echo "
    </div>

  </div>
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
        return array (  76 => 23,  72 => 21,  63 => 18,  57 => 17,  55 => 16,  50 => 15,  46 => 14,  43 => 13,  41 => 12,  32 => 10,  25 => 8,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "top_message/body.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\top_message\\body.twig");
    }
}
