<?php

/* E:\Server\projects\x-cart\skins\customer\shopping_cart\parts\items.twig */
class __TwigTemplate_2d2aff86174476bd3e8bf705ba601e0b0d8dd35219ddb4ca4cf05d4e9163b9c3 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "<table class=\"selected-products\">

  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getCartItemsGroups", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "
  ";
            // line 11
            if ($this->getAttribute($context["group"], "data", [])) {
                // line 12
                echo "    <tbody class=\"group\">
      <tr>
         ";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "cart.group", "group" => $this->getAttribute($context["group"], "data", [])]]), "html", null, true);
                echo "
      </tr>
    </tbody>
  ";
            }
            // line 18
            echo "
  <tbody class=\"items\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "      <tr class=\"selected-product\">
        ";
                // line 22
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "cart.item", "item" => $context["item"]]]), "html", null, true);
                echo "
      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  </tbody>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
  <tbody class=\"additional-items\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "cart.items"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 31
            echo "      <tr class=\"selected-product additional-item\">
        ";
            // line 32
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", [], "method"), "html", null, true);
            echo "
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </tbody>

</table>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\shopping_cart\\parts\\items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  82 => 32,  79 => 31,  75 => 30,  71 => 28,  63 => 25,  54 => 22,  51 => 21,  47 => 20,  43 => 18,  36 => 14,  32 => 12,  30 => 11,  27 => 10,  23 => 9,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\shopping_cart\\parts\\items.twig", "");
    }
}
