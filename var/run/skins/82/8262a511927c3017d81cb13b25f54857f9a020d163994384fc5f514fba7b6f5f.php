<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/items_list/product/parts/common.display-modes.twig */
class __TwigTemplate_d370b19f2cc6f460bd6fc7ddbc0345edb9bf7a45683e656f02b4f89e48cc12f2 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isDisplayModeSelectorVisible", [], "method")) {
            // line 10
            echo "  <ul class=\"display-modes grid-list ";
            echo ((($this->getAttribute(($context["this"] ?? null), "getParam", [0 => "displayMode"], "method") != "table")) ? ("mobile-hidden") : (""));
            echo "\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "displayModes", []));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 12
                echo "      <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDisplayModeLinkClassName", [0 => $context["key"]], "method"), "html", null, true);
                echo "\">
        <a href=\"";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getActionURL", [0 => ["displayMode" => $context["key"]]], "method"), "html", null, true);
                echo "\" class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$context["name"]]), "html", null, true);
                echo "\">
          <i class=\"fa ";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getDisplayModeCSS", [0 => $context["key"]], "method"), "html", null, true);
                echo "\"></i>
          <span class=\"text\">";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), [$context["name"]]), "html", null, true);
                echo "</span>
        </a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/items_list/product/parts/common.display-modes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  50 => 15,  46 => 14,  38 => 13,  33 => 12,  29 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/items_list/product/parts/common.display-modes.twig", "");
    }
}
