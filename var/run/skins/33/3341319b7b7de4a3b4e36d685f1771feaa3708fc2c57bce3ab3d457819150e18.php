<?php

/* E:\Server\projects\x-cart\skins\admin\order\packing_slip\parts\body\items\item.name.twig */
class __TwigTemplate_13abd9bd7ba1c208919191834d8e21e0a2526005a8c8ca799cf8ff228170c0ad extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item\">
  ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getURL", [], "method")) {
            // line 8
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getURL", [], "method"), "html", null, true);
            echo "\" class=\"item-name\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getName", [], "method"), "html", null, true);
            echo "</a>
  ";
        }
        // line 10
        echo "  ";
        if ( !$this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getURL", [], "method")) {
            // line 11
            echo "    <span class=\"item-name\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getName", [], "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 13
        echo "  ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "product", []), "isPersistent", [], "method")) {
            // line 14
            echo "    <span class=\"deleted-product-note\">(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["deleted"]), "html", null, true);
            echo ")</span>
  ";
        }
        // line 16
        echo "
  <div class=\"item-options\">
    ";
        // line 18
        if ($this->getAttribute(($context["this"] ?? null), "isViewListVisible", [0 => "packing_slip.item.name", 1 => ["item" => $this->getAttribute(($context["this"] ?? null), "item", [])]], "method")) {
            // line 19
            echo "      <ul class=\"subitem additional simple-list\">
        ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "packing_slip.item.name", "item" => $this->getAttribute(($context["this"] ?? null), "item", [])]]), "html", null, true);
            echo "
      </ul>
    ";
        }
        // line 23
        echo "    ";
        if ($this->getAttribute(($context["this"] ?? null), "isAttributesVisible", [0 => $this->getAttribute(($context["this"] ?? null), "item", [])], "method")) {
            // line 24
            echo "      <ul class=\"subitem attributes simple-list\">
        <li>";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Options:"]), "html", null, true);
            echo "&nbsp;</li>
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getAttributeValues", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["av"]) {
                // line 27
                echo "          <li class=\"attribute\">
            ";
                // line 28
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["av"], "value", []), "html", null, true);
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['av'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </ul>
    ";
        }
        // line 33
        echo "  </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\packing_slip\\parts\\body\\items\\item.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  91 => 31,  82 => 28,  79 => 27,  75 => 26,  71 => 25,  68 => 24,  65 => 23,  59 => 20,  56 => 19,  54 => 18,  50 => 16,  44 => 14,  41 => 13,  35 => 11,  32 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\order\\packing_slip\\parts\\body\\items\\item.name.twig", "");
    }
}
