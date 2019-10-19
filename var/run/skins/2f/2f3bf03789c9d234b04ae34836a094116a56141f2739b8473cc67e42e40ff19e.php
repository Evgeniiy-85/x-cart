<?php

/* button/dropdown.twig */
class __TwigTemplate_a7c885a26a5921e0dc0fde09d13f6a47255e007229e1b5dca0a8334c1f5ad21d extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"btn-group btn-dropdown ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDropDirection", [], "method"), "html", null, true);
        echo "\" role=\"group\">

  ";
        // line 6
        $context["showCaret"] = $this->getAttribute(($context["this"] ?? null), "getShowCaret", [], "method");
        // line 7
        echo "  ";
        $context["useCaretButton"] = $this->getAttribute(($context["this"] ?? null), "getUseCaretButton", [], "method");
        // line 8
        echo "  ";
        $context["dropDirection"] = $this->getAttribute(($context["this"] ?? null), "getdropDirection", [], "method");
        // line 9
        echo "
  ";
        // line 10
        ob_start();
        // line 11
        echo "    <button type=\"button\"
            ";
        // line 12
        if ($this->getAttribute(($context["this"] ?? null), "hasName", [], "method")) {
            echo " name=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getName", [], "method"), "html", null, true);
            echo "\"";
        }
        // line 13
        echo "            ";
        if ($this->getAttribute(($context["this"] ?? null), "hasValue", [], "method")) {
            echo " value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getValue", [], "method"), "html", null, true);
            echo "\"";
        }
        // line 14
        echo "            class=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getClass", [], "method"), "html", null, true);
        echo "\"
            role=\"group\"
            ";
        // line 16
        if ( !($context["useCaretButton"] ?? null)) {
            // line 17
            echo "      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
            ";
        }
        // line 21
        echo "            ";
        if ($this->getAttribute(($context["this"] ?? null), "getButtonTitle", [], "method")) {
            // line 22
            echo "              title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getButtonTitle", [], "method"), "html", null, true);
            echo "\"
            ";
        }
        // line 23
        echo ">

      ";
        // line 25
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "

      ";
        // line 27
        $context["iconStyle"] = $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "icon-style"], "method");
        // line 28
        echo "      ";
        if (($context["iconStyle"] ?? null)) {
            echo "<span><i class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["iconStyle"] ?? null), "html", null, true);
            echo "\"></i></span>";
        }
        // line 29
        echo "
      ";
        // line 30
        $context["buttonLabel"] = call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute(($context["this"] ?? null), "getButtonLabel", [], "method")]);
        // line 31
        echo "      ";
        if ((twig_length_filter($this->env, ($context["buttonLabel"] ?? null)) > 0)) {
            echo "<span>";
            echo ($context["buttonLabel"] ?? null);
            echo "</span>";
        }
        // line 32
        echo "
      ";
        // line 33
        if ((($context["showCaret"] ?? null) &&  !($context["useCaretButton"] ?? null))) {
            // line 34
            echo "        <span>
          ";
            // line 35
            if ((($context["dropDirection"] ?? null) == "dropup")) {
                // line 36
                echo "            <i class=\"fa fa-angle-up\"></i>
          ";
            } else {
                // line 38
                echo "            <i class=\"fa fa-angle-down\"></i>
          ";
            }
            // line 40
            echo "        </span>
      ";
        }
        // line 42
        echo "    </button>
    ";
        // line 43
        if (($context["useCaretButton"] ?? null)) {
            // line 44
            echo "      <button
              type=\"button\"
              class=\"btn btn-default dropdown-toggle\"
              data-toggle=\"dropdown\"
              aria-haspopup=\"true\"
              aria-expanded=\"false\">
        ";
            // line 50
            if (($context["showCaret"] ?? null)) {
                // line 51
                echo "          <span class=\"caret\"></span>
        ";
            } else {
                // line 53
                echo "          <span>
            ";
                // line 54
                if ((($context["dropDirection"] ?? null) == "dropup")) {
                    // line 55
                    echo "              <i class=\"fa fa-angle-up\"></i>
            ";
                } else {
                    // line 57
                    echo "              <i class=\"fa fa-angle-down\"></i>
            ";
                }
                // line 59
                echo "          </span>
        ";
            }
            // line 61
            echo "      </button>
    ";
        }
        // line 63
        echo "  ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 64
        echo "
  ";
        // line 65
        if ($this->getAttribute(($context["this"] ?? null), "getAdditionalButtons", [], "method")) {
            // line 66
            echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAdditionalButtons", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 68
                echo "        <li>";
                echo $this->getAttribute($context["button"], "display", [], "method");
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "    </ul>
  ";
        }
        // line 72
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "button/dropdown.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 72,  193 => 70,  184 => 68,  180 => 67,  177 => 66,  175 => 65,  172 => 64,  169 => 63,  165 => 61,  161 => 59,  157 => 57,  153 => 55,  151 => 54,  148 => 53,  144 => 51,  142 => 50,  134 => 44,  132 => 43,  129 => 42,  125 => 40,  121 => 38,  117 => 36,  115 => 35,  112 => 34,  110 => 33,  107 => 32,  100 => 31,  98 => 30,  95 => 29,  88 => 28,  86 => 27,  81 => 25,  77 => 23,  71 => 22,  68 => 21,  62 => 17,  60 => 16,  54 => 14,  47 => 13,  41 => 12,  38 => 11,  36 => 10,  33 => 9,  30 => 8,  27 => 7,  25 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "button/dropdown.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\button\\dropdown.twig");
    }
}
