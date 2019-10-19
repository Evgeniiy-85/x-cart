<?php

/* items_list/model/table/right_actions.twig */
class __TwigTemplate_a41e0c7c4411c4c009854c4e58ade6bb3a184bb6711a95ff6cfc431bf180a548 extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getRightActions", [], "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tpl"]) {
            // line 5
            echo "  ";
            ob_start();
            // line 6
            echo "    ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($context["tpl"]);            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate($context["tpl"], "items_list/model/table/right_actions.twig", 6)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
            // line 7
            echo "  ";
            $context["content"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 8
            echo "
  ";
            // line 9
            if ( !twig_test_empty(twig_trim_filter(($context["content"] ?? null)))) {
                // line 10
                echo "    <div class=\"separator\"></div>
  ";
            }
            // line 12
            echo "
  ";
            // line 13
            ob_start();
            // line 14
            echo "    <div class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getActionCellClass", [0 => $this->getAttribute(($context["this"] ?? null), "i", []), 1 => $context["tpl"]], "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["content"] ?? null), "html", null, true);
            echo "</div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tpl'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "items_list/model/table/right_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 14,  65 => 13,  62 => 12,  58 => 10,  56 => 9,  53 => 8,  50 => 7,  39 => 6,  36 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "items_list/model/table/right_actions.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\items_list\\model\\table\\right_actions.twig");
    }
}
