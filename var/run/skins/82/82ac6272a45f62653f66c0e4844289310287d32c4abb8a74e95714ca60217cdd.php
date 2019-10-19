<?php

/* modules/CDev/SimpleCMS/primary_menu_items.twig */
class __TwigTemplate_15a8161586c9b08818dc8d5bcccd88e11398672e837155ee3197ff61c874e2e6 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute(($context["this"] ?? null), "isSlidebar", [], "method")) {
            // line 6
            echo "<ul class=\"nav navbar-nav top-main-menu\">
";
        }
        // line 8
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header.flycategories"]]), "html", null, true);
        echo "
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getItems", [], "method"));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 10
            echo "    ";
            if ($this->getAttribute(($context["this"] ?? null), "isLevelUp", [0 => $this->getAttribute($context["item"], "depth", [])], "method")) {
                // line 11
                echo "  <ul>
    ";
            } else {
                // line 13
                echo "      ";
                if ( !$this->getAttribute(($context["this"] ?? null), "isFirstElement", [], "method")) {
                    // line 14
                    echo "    </li>
      ";
                }
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    ";
            // line 18
            echo $this->getAttribute(($context["this"] ?? null), "closeMenuList", [0 => $this->getAttribute($context["item"], "depth", [])], "method");
            echo "
    <li ";
            // line 19
            echo $this->getAttribute(($context["this"] ?? null), "displayItemClass", [0 => $context["i"], 1 => $context["item"]], "method");
            echo ">
    ";
            // line 20
            if ($this->getAttribute($context["item"], "url", [])) {
                // line 21
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", []), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["item"], "active", [])) {
                    echo "class=\"active\"";
                }
                echo "><span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", []), "html", null, true);
                echo "</span></a>
    ";
            } else {
                // line 23
                echo "      <span class=\"primary-title\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", []), "html", null, true);
                echo "</span>
    ";
            }
            // line 25
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </li>
  ";
        // line 27
        echo $this->getAttribute(($context["this"] ?? null), "closeMenuList", [], "method");
        echo "
";
        // line 28
        if ( !$this->getAttribute(($context["this"] ?? null), "isSlidebar", [], "method")) {
            // line 29
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/SimpleCMS/primary_menu_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  98 => 28,  94 => 27,  91 => 26,  85 => 25,  79 => 23,  67 => 21,  65 => 20,  61 => 19,  57 => 18,  54 => 17,  51 => 16,  47 => 14,  44 => 13,  40 => 11,  37 => 10,  33 => 9,  28 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/CDev/SimpleCMS/primary_menu_items.twig", "/home/vagrant/next/output/xcart/src/skins/customer/modules/CDev/SimpleCMS/primary_menu_items.twig");
    }
}
