<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/dashboard/parts/center/panel.twig */
class __TwigTemplate_1af9058b29819faf1c8a6421041c1b3fcf60abb228325160b2b9b64c6b09addc extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 7
        if ($this->getAttribute(($context["this"] ?? null), "getTabs", [], "method")) {
            // line 8
            echo "  <div class=\"js-tabs dashboard-tabs\">
  
    <div class=\"tabs page-tabs\">
      <ul>
        ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getTabs", [], "method"));
            foreach ($context['_seq'] as $context["index"] => $context["tab"]) {
                // line 13
                echo "          <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTabClass", [0 => $context["tab"]], "method"), "html", null, true);
                echo "\">
            <a href=\"#link-";
                // line 14
                echo $this->getAttribute($context["tab"], "id", []);
                echo "\" data-id=\"";
                echo $this->getAttribute($context["tab"], "id", []);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["tab"], "name", [])]), "html", null, true);
                echo "</a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['index'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </ul>
    </div>
  
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getTabs", [], "method"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 21
                echo "      <div id=\"";
                echo $this->getAttribute($context["tab"], "id", []);
                echo "\" class=\"tab-content\" style=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTabStyle", [0 => $context["tab"]], "method"), "html", null, true);
                echo "\">
        <a name=\"link-";
                // line 22
                echo $this->getAttribute($context["tab"], "id", []);
                echo "\"></a>
        ";
                // line 23
                if ($this->getAttribute($context["tab"], "template", [])) {
                    // line 24
                    echo "          ";
                    $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute($context["tab"], "template", []));                    list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                    if ($templateWrapperText) {
echo $templateWrapperStart;
}

                    $this->loadTemplate($this->getAttribute($context["tab"], "template", []), "/home/vagrant/next/output/xcart/src/skins/admin/dashboard/parts/center/panel.twig", 24)->display($context);
                    if ($templateWrapperText) {
                        echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                    }
                    // line 25
                    echo "    
        ";
                } elseif ($this->getAttribute(                // line 26
$context["tab"], "widget", [])) {
                    // line 27
                    echo "          ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($context["tab"], "widget", [])]]), "html", null, true);
                    echo "
    
        ";
                } elseif ($this->getAttribute(                // line 29
$context["tab"], "list", [])) {
                    // line 30
                    echo "          ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($context["tab"], "list", [])]]), "html", null, true);
                    echo "
    
        ";
                } else {
                    // line 33
                    echo "          No content
        ";
                }
                // line 35
                echo "      </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "  
  </div>
";
        }
        // line 40
        echo "
<div class=\"clear\"></div>

";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/dashboard/parts/center/panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 40,  137 => 37,  122 => 35,  118 => 33,  111 => 30,  109 => 29,  103 => 27,  101 => 26,  98 => 25,  87 => 24,  85 => 23,  81 => 22,  74 => 21,  57 => 20,  52 => 17,  39 => 14,  34 => 13,  30 => 12,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/dashboard/parts/center/panel.twig", "");
    }
}
