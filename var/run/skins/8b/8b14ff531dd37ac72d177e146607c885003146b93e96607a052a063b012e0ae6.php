<?php

/* search_panel/body.twig */
class __TwigTemplate_e3b4b79754abd77745183cd1cef6079ceda7498922e3873e4c5b74b3480e32a0 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "isUseFilter", [], "method")) {
            // line 6
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("search_panel/filters.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("search_panel/filters.twig", "search_panel/body.twig", 6)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
        // line 8
        echo "
<div class=\"title-margin\"></div>
";
        // line 10
        $this->startForm($this->getAttribute($this->getAttribute(($context["this"] ?? null), "formOptions", []), "class", []), ["formTarget" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "formOptions", []), "target", []), "formAction" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "formOptions", []), "action", []), "formParams" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "formOptions", []), "params", []), "className" => $this->getAttribute(($context["this"] ?? null), "getContainerClass", [], "method"), "itemsList" => $this->getAttribute(($context["this"] ?? null), "getItemsList", [], "method")]);        // line 11
        echo "
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "before", "type" => "nested"]]), "html", null, true);
        echo "

  <div class=\"search-conditions-box\">

    ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getSearchPanelParams", [], "method")], "method"), "html", null, true);
        echo "

    <div class=\"search-conditions\">
      <ul class=\"inline-table\">
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getConditions", [], "method"));
        foreach ($context['_seq'] as $context["name"] => $context["conditionWidget"]) {
            // line 21
            echo "          <li class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "-condition\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["conditionWidget"], "display", [], "method"), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['conditionWidget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        <li class=\"actions\">
          ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getActions", [], "method"));
        foreach ($context['_seq'] as $context["name"] => $context["action"]) {
            // line 25
            echo "            ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["action"], "display", [], "method"), "html", null, true);
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </li>
        ";
        // line 28
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "conditions", "type" => "nested"]]), "html", null, true);
        echo "
      </ul>
    </div>

    ";
        // line 32
        if ($this->getAttribute(($context["this"] ?? null), "getHiddenConditions", [], "method")) {
            // line 33
            echo "      <div class=\"search-conditions-hr\">
      </div>
    ";
        }
        // line 36
        echo "
    ";
        // line 37
        if ($this->getAttribute(($context["this"] ?? null), "getHiddenConditions", [], "method")) {
            // line 38
            echo "      <div class=\"search-conditions-hidden\">
        ";
            // line 39
            $context["count"] = twig_length_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getHiddenConditions", [], "method"));
            // line 40
            echo "
        ";
            // line 41
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "widgetParams", []), "changeHiddenConditionsCount", [])) {
                // line 42
                echo "          ";
                $context["count"] = (($context["count"] ?? null) + 1);
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        ";
            // line 45
            if (((($context["count"] ?? null) % 2) > 0)) {
                // line 46
                echo "          ";
                $context["firstColumnLength"] = ((($context["count"] ?? null) / 2) + 1);
                // line 47
                echo "        ";
            } else {
                // line 48
                echo "          ";
                $context["firstColumnLength"] = (($context["count"] ?? null) / 2);
                // line 49
                echo "        ";
            }
            // line 50
            echo "
        <div class=\"left-column\">
          <ul class=\"table\">
            ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute(($context["this"] ?? null), "getHiddenConditions", [], "method"), 0, ($context["firstColumnLength"] ?? null)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["conditionWidget"]) {
                // line 54
                echo "              <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "-condition ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getRowClass", [0 => $this->getAttribute($context["loop"], "index", []), 1 => "odd", 2 => "even"], "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["conditionWidget"], "display", [], "method"), "html", null, true);
                echo "</li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['conditionWidget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "          </ul>
        </div>

        <div class=\"right-column\">
          <ul class=\"table\">
            ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, $this->getAttribute(($context["this"] ?? null), "getHiddenConditions", [], "method"), ($context["firstColumnLength"] ?? null), ($context["count"] ?? null)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["conditionWidget"]) {
                // line 62
                echo "              <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "-condition ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getRowClass", [0 => $this->getAttribute($context["loop"], "index", []), 1 => "odd", 2 => "even"], "method"), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["conditionWidget"], "display", [], "method"), "html", null, true);
                echo "</li>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['conditionWidget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
            ";
            // line 65
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "hiddenConditions", "type" => "nested"]]), "html", null, true);
            echo "
          </ul>
        </div>
      </div>
    ";
        }
        // line 70
        echo "
    ";
        // line 71
        if ($this->getAttribute(($context["this"] ?? null), "getHiddenConditions", [], "method")) {
            // line 72
            echo "      <div class=\"arrow\"><span class=\"fa fa-angle-down\"></span></div>
    ";
        }
        // line 74
        echo "
    <div class=\"actions-bottom\">
      ";
        // line 76
        if (($this->getAttribute(($context["this"] ?? null), "isUseFilter", [], "method") && $this->getAttribute(($context["this"] ?? null), "canSaveFilter", [], "method"))) {
            // line 77
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\SaveSearchFilter"]]), "html", null, true);
            echo "
      ";
        }
        // line 79
        echo "      ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "actions", "type" => "nested"]]), "html", null, true);
        echo "
    </div>

  </div>

  ";
        // line 84
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "after", "type" => "nested"]]), "html", null, true);
        echo "

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "search_panel/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 84,  264 => 79,  258 => 77,  256 => 76,  252 => 74,  248 => 72,  246 => 71,  243 => 70,  235 => 65,  232 => 64,  211 => 62,  194 => 61,  187 => 56,  166 => 54,  149 => 53,  144 => 50,  141 => 49,  138 => 48,  135 => 47,  132 => 46,  130 => 45,  127 => 44,  124 => 43,  121 => 42,  119 => 41,  116 => 40,  114 => 39,  111 => 38,  109 => 37,  106 => 36,  101 => 33,  99 => 32,  92 => 28,  89 => 27,  80 => 25,  76 => 24,  73 => 23,  62 => 21,  58 => 20,  51 => 16,  44 => 12,  41 => 11,  40 => 10,  36 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "search_panel/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\search_panel\\body.twig");
    }
}
