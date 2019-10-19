<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/import/parts/completed.messages.twig */
class __TwigTemplate_4440b7ded542a80e610f56dd2fd893d0a2b35bb30c9303ca7636c93cbd629ff1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getMessages", [], "method")) {
            // line 8
            echo "  <ul class=\"messages\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getMessages", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "      <li>
        <i class=\"icon-ok\"></i> ";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "text", []), "html", null, true);
                echo " ";
                if ($this->getAttribute($context["message"], "comment", [])) {
                    echo "<span>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["message"], "comment", []), "html", null, true);
                    echo "</span>";
                }
                // line 12
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  </ul>
";
        }
        // line 16
        if ( !($this->getAttribute(($context["this"] ?? null), "getMessages", [], "method") && $this->getAttribute(($context["this"] ?? null), "getErrorMessages", [], "method"))) {
            // line 17
            echo "  <div class=\"empty\">
    ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getErrorMessages", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 19
                echo "      <div class=\"message\">
        <i class=\"icon-ok\"></i> ";
                // line 20
                echo $this->getAttribute($context["message"], "text", []);
                echo " ";
                if ($this->getAttribute($context["message"], "comment", [])) {
                    echo "<div class=\"comment\">";
                    echo $this->getAttribute($context["message"], "comment", []);
                    echo "</div>";
                }
                // line 21
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/import/parts/completed.messages.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 23,  73 => 21,  65 => 20,  62 => 19,  58 => 18,  55 => 17,  53 => 16,  49 => 14,  42 => 12,  34 => 11,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/import/parts/completed.messages.twig", "");
    }
}
