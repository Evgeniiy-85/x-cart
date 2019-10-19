<?php

/* layout/slidebar.twig */
class __TwigTemplate_a673f385968a470673b3c9636dd4dd363e082d4d1e58f6f9ae70851278e06ae0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<nav id=\"slidebar\" data-mobile-navbar>
    ";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "shouldRender", [], "method")) {
            // line 6
            echo "    <ul>
        ";
            // line 7
            if ($this->getAttribute(($context["this"] ?? null), "isDisplayCategories", [], "method")) {
                // line 8
                echo "            <li class=\"slidebar-categories\">
                <span data-toggle=\"dropdown\">";
                // line 9
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Categories"]), "html", null, true);
                echo "</span>
              ";
                // line 10
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "layout.header.categories"]]), "html", null, true);
                echo "
            </li>
        ";
            }
            // line 13
            echo "        ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "header.menu", "isSlidebar" => true]]), "html", null, true);
            echo "
    </ul>
    ";
        }
        // line 16
        echo "</nav>
";
    }

    public function getTemplateName()
    {
        return "layout/slidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  42 => 13,  36 => 10,  32 => 9,  29 => 8,  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout/slidebar.twig", "/home/vagrant/next/output/xcart/src/skins/customer/layout/slidebar.twig");
    }
}
