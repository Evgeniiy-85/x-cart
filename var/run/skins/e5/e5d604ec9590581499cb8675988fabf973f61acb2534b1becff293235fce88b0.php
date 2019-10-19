<?php

/* categories/tree/body.twig */
class __TwigTemplate_97be40816517b5d0b63b2780407711ca33f9e9b84d9e7cb080c0dbd7d78c2957 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"menu menu-tree";
        if ( !$this->getAttribute(($context["this"] ?? null), "isSubtree", [], "method")) {
            echo " catalog-categories catalog-categories-tree";
        }
        echo "\">
  ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getCategories", [0 => $this->getAttribute(($context["this"] ?? null), "rootId", [])], "method"));
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
        foreach ($context['_seq'] as $context["idx"] => $context["_category"]) {
            // line 6
            echo "    <li ";
            echo $this->getAttribute(($context["this"] ?? null), "displayItemClass", [0 => $context["idx"], 1 => $this->getAttribute($context["loop"], "length", []), 2 => $context["_category"]], "method");
            echo ">
      <a href=\"";
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["_category"], "link", []), "html", null, true);
            echo "\" ";
            echo $this->getAttribute(($context["this"] ?? null), "displayLinkClass", [0 => $context["idx"], 1 => $this->getAttribute($context["loop"], "length", []), 2 => $context["_category"]], "method");
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["_category"], "name", []), "html", null, true);
            echo "</a>
      ";
            // line 8
            if ($this->getAttribute($context["_category"], "subcategoriesCount", [])) {
                // line 9
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => $this->getAttribute(($context["this"] ?? null), "getBody", [], "method"), "rootId" => $this->getAttribute($context["_category"], "id", []), "is_subtree" => "1"]]), "html", null, true);
                echo "
      ";
            }
            // line 11
            echo "    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['_category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getViewList", [0 => "topCategories.children", 1 => ["rootId" => $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "rootId"], "method"), "is_subtree" => $this->getAttribute(($context["this"] ?? null), "getParam", [0 => "is_subtree"], "method")]], "method"));
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
        foreach ($context['_seq'] as $context["idx"] => $context["w"]) {
            // line 14
            echo "    <li ";
            echo $this->getAttribute(($context["this"] ?? null), "displayListItemClass", [0 => $context["idx"], 1 => $this->getAttribute($context["loop"], "length", []), 2 => $context["w"]], "method");
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", [], "method"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "categories/tree/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 16,  97 => 14,  79 => 13,  64 => 11,  58 => 9,  56 => 8,  48 => 7,  43 => 6,  26 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "categories/tree/body.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\categories\\tree\\body.twig");
    }
}
