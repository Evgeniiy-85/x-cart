<?php

/* header/parts/parts.css/css_aggregation.twig */
class __TwigTemplate_752da387f654b0c930383902ee5b0fc8f7954515235042aa2e0bf7104a0b6062 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "doCSSAggregation", [], "method")) {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getAggregateCSSResources", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 8
                echo "  ";
                if (($this->getAttribute(($context["this"] ?? null), "doCSSOptimization", [], "method") && $this->getAttribute(($context["this"] ?? null), "isResourceSuitableForOptimization", [0 => $context["file"]], "method"))) {
                    // line 9
                    echo "    ";
                    echo $this->getAttribute(($context["this"] ?? null), "getInternalCssByResource", [0 => $context["file"]], "method");
                    echo "
  ";
                } else {
                    // line 11
                    echo "    ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => "header/parts/parts.css/css_resource.twig", "async" => $this->getAttribute(                    // line 12
$context["file"], "async", []), "media" => $this->getAttribute(                    // line 13
$context["file"], "media", []), "url" => $this->getAttribute(                    // line 14
($context["this"] ?? null), "getResourceURL", [0 => $this->getAttribute($context["file"], "url", []), 1 => $context["file"]], "method")]]), "html", null, true);
                    // line 15
                    echo "
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "header/parts/parts.css/css_aggregation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 15,  38 => 14,  37 => 13,  36 => 12,  34 => 11,  28 => 9,  25 => 8,  21 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "header/parts/parts.css/css_aggregation.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\header\\parts\\parts.css\\css_aggregation.twig");
    }
}
