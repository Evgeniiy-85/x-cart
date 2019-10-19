<?php

/* items_list\model/table\body.twig */
class __TwigTemplate_838aedeff0af89a29d76402bfc1c8ffafd2aeb1b42f3ceb17bf8823190f3d768 extends \XLite\Core\Templating\Twig\Template
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
        ob_start();
        // line 6
        echo "  <div class=\"table-wrapper ";
        if ( !$this->getAttribute(($context["this"] ?? null), "hasResults", [], "method")) {
            echo "empty";
        }
        echo "\">
    <table class=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTableTagClassString", [], "method"), "html", null, true);
        echo "\" cellspacing=\"0\">

      ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isTableHeaderVisible", [], "method")) {
            // line 10
            echo "        <thead>
        <tr>
          ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getColumns", [], "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 13
                echo "            <th class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getHeadClass", [0 => $context["column"]], "method"), "html", null, true);
                echo "\">
              ";
                $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("items_list/model/table/parts/head.cell.twig");                list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                if ($templateWrapperText) {
echo $templateWrapperStart;
}

                // line 14
                $this->loadTemplate("items_list/model/table/parts/head.cell.twig", "items_list\\model/table\\body.twig", 14)->display($context);
                if ($templateWrapperText) {
                    echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                }
                // line 15
                echo "            </th>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "        </tr>
        </thead>
      ";
        }
        // line 20
        echo "
      ";
        // line 21
        if ($this->getAttribute(($context["this"] ?? null), "isHeadSearchVisible", [], "method")) {
            // line 22
            echo "        <tbody class=\"head-search\">
        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("items_list/model/table/parts/head_search.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 23
            $this->loadTemplate("items_list/model/table/parts/head_search.twig", "items_list\\model/table\\body.twig", 23)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 24
            echo "        </tbody>
      ";
        }
        // line 26
        echo "
      ";
        // line 27
        if ($this->getAttribute(($context["this"] ?? null), "isTopInlineCreation", [], "method")) {
            // line 28
            echo "        <tbody class=\"create top-create\">
        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("items_list/model/table/parts/create_box.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 29
            $this->loadTemplate("items_list/model/table/parts/create_box.twig", "items_list\\model/table\\body.twig", 29)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 30
            echo "        </tbody>
      ";
        }
        // line 32
        echo "
      <tbody class=\"lines\">
      ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getPageData", [], "method"));
        foreach ($context['_seq'] as $context["idx"] => $context["entity"]) {
            // line 35
            echo "        <tr ";
            echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getLineAttributes", [0 => $context["idx"], 1 => $context["entity"]], "method")], "method");
            echo ">
          ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getColumns", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 37
                echo "            <td class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getColumnClass", [0 => $context["column"], 1 => $context["entity"]], "method"), "html", null, true);
                echo "\">
              <div class=\"cell\">
                ";
                // line 39
                if ($this->getAttribute(($context["this"] ?? null), "isTemplateColumnVisible", [0 => $context["column"], 1 => $context["entity"]], "method")) {
                    // line 40
                    echo "                  ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => $this->getAttribute($context["column"], "template", []), "idx" => $context["idx"], "entity" => $context["entity"], "column" => $context["column"], "editOnly" => $this->getAttribute($context["column"], "editOnly", []), "viewOnly" => $this->getAttribute(($context["this"] ?? null), "isStatic", [], "method")]]), "html", null, true);
                    echo "
                ";
                }
                // line 42
                echo "                ";
                if ($this->getAttribute(($context["this"] ?? null), "isClassColumnVisible", [0 => $context["column"], 1 => $context["entity"]], "method")) {
                    // line 43
                    echo "                  ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($context["column"], "class", []), "idx" => $context["idx"], "entity" => $context["entity"], "column" => $context["column"], "itemsList" => $this->getAttribute(($context["this"] ?? null), "getSelf", [], "method"), "fieldName" => $this->getAttribute($context["column"], "code", []), "fieldParams" => $this->getAttribute(($context["this"] ?? null), "preprocessFieldParams", [0 => $context["column"], 1 => $context["entity"]], "method"), "editOnly" => $this->getAttribute($context["column"], "editOnly", []), "viewOnly" => $this->getAttribute(($context["this"] ?? null), "isStatic", [], "method")]]), "html", null, true);
                    echo "
                ";
                }
                // line 45
                echo "                ";
                if ($this->getAttribute(($context["this"] ?? null), "isEditLinkEnabled", [0 => $context["column"], 1 => $context["entity"]], "method")) {
                    // line 46
                    echo "                  <div class=\"entity-edit-link\" ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEditLinkAttributes", [0 => $context["entity"], 1 => $context["column"]], "method"), "html", null, true);
                    echo ">
                    <a href=\"";
                    // line 47
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "buildEntityURL", [0 => $context["entity"], 1 => $context["column"]], "method"), "html", null, true);
                    echo "\">
                      ";
                    // line 48
                    if ($this->getAttribute(($context["this"] ?? null), "getEditLinkLabel", [0 => $context["entity"]], "method")) {
                        // line 49
                        echo "                        ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getEditLinkLabel", [0 => $context["entity"]], "method"), "html", null, true);
                        echo "
                      ";
                    } else {
                        // line 51
                        echo "                        <i class=\"fa fa-edit icon\"></i>
                      ";
                    }
                    // line 53
                    echo "                    </a>
                  </div>
                ";
                }
                // line 56
                echo "                ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => $this->getAttribute(($context["this"] ?? null), "getCellListNamePart", [0 => "cell", 1 => $context["column"]], "method"), "type" => "inherited", "column" => $context["column"], "entity" => $context["entity"]]]), "html", null, true);
                echo "
              </div>
            </td>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </tr>
        ";
            // line 61
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "row", "type" => "inherited", "idx" => $context["idx"], "entity" => $context["entity"]]]), "html", null, true);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "      </tbody>

      ";
        // line 65
        if ($this->getAttribute(($context["this"] ?? null), "isBottomInlineCreation", [], "method")) {
            // line 66
            echo "        <tbody class=\"create bottom-create\">
        ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("items_list/model/table/parts/create_box.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            // line 67
            $this->loadTemplate("items_list/model/table/parts/create_box.twig", "items_list\\model/table\\body.twig", 67)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 68
            echo "        </tbody>
      ";
        }
        // line 70
        echo "
    </table>
  </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "items_list\\model/table\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 70,  248 => 68,  243 => 67,  235 => 66,  233 => 65,  229 => 63,  221 => 61,  218 => 60,  207 => 56,  202 => 53,  198 => 51,  192 => 49,  190 => 48,  186 => 47,  181 => 46,  178 => 45,  172 => 43,  169 => 42,  163 => 40,  161 => 39,  155 => 37,  151 => 36,  146 => 35,  142 => 34,  138 => 32,  134 => 30,  129 => 29,  121 => 28,  119 => 27,  116 => 26,  112 => 24,  107 => 23,  99 => 22,  97 => 21,  94 => 20,  89 => 17,  74 => 15,  69 => 14,  59 => 13,  42 => 12,  38 => 10,  36 => 9,  31 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list\\model/table\\body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\body.twig");
    }
}
