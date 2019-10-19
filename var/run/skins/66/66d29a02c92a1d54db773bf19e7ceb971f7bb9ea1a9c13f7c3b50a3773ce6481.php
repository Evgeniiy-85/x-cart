<?php

/* subcategories/icons\body.twig */
class __TwigTemplate_332e96639a625465525e31bd4c2362e501da769e34bec951efd6d3cb6c52a52d extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getSubcategories", [], "method")) {
            // line 6
            echo "  <ul class=\"subcategory-view-icons subcategory-list grid-list clearfix\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getSubcategories", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
                // line 8
                echo "    ";
                if ($this->getAttribute($context["subcategory"], "hasAvailableMembership", [], "method")) {
                    // line 9
                    echo "      <li>
        <a href=\"";
                    // line 10
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "category", "", ["category_id" => $this->getAttribute($context["subcategory"], "category_id", [])]]), "html", null, true);
                    echo "\">
          <span class=\"subcategory-icon\">
            ";
                    // line 12
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "lazyLoad" => true, "image" => $this->getAttribute($context["subcategory"], "image", []), "maxWidth" => $this->getAttribute(($context["this"] ?? null), "getIconWidth", [], "method"), "maxHeight" => $this->getAttribute(($context["this"] ?? null), "getIconHeight", [], "method"), "centerImage" => "1", "alt" => $this->getAttribute(($context["this"] ?? null), "getAlt", [0 => $this->getAttribute($context["subcategory"], "image", [])], "method")]]), "html", null, true);
                    echo "
          </span>
          <span class=\"subcategory-name\">";
                    // line 14
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "name", []), "html", null, true);
                    echo "</span>
        </a>
      </li>
    ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getNestedViewList", [0 => "children"], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "      <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", [], "method"), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  </ul>
";
        }
        // line 24
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "subcategories.base"]]), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "subcategories/icons\\body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  74 => 22,  65 => 20,  60 => 19,  54 => 18,  47 => 14,  42 => 12,  37 => 10,  34 => 9,  31 => 8,  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "subcategories/icons\\body.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\subcategories\\icons\\body.twig");
    }
}
