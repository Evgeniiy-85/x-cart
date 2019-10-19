<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/pager/model/table/parts/page.twig */
class __TwigTemplate_9a035710baf155ac356e70dd633dc8abe4ff2808706f1e042794fcacc49e6f3a extends \XLite\Core\Templating\Twig\Template
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
        ob_start();
        // line 8
        echo "  ";
        if ($this->getAttribute(($context["this"] ?? null), "isPagesListVisible", [], "method")) {
            // line 9
            echo "    <div class=\"pagination-wrapper\">
      <ul class=\"pagination\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getPages", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 12
                echo "          <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "classes", []), "html", null, true);
                echo "\">
            ";
                // line 13
                if ($this->getAttribute($context["page"], "href", [])) {
                    // line 14
                    echo "              <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "href", []), "html", null, true);
                    echo "\" data-pageId=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["page"], "num", []), "html", null, true);
                    echo "\">";
                    echo call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["page"], "text", [])]);
                    echo "</a>
            ";
                }
                // line 16
                echo "            ";
                if ( !$this->getAttribute($context["page"], "href", [])) {
                    // line 17
                    echo "              <span>";
                    echo call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["page"], "text", [])]);
                    echo "</span>
            ";
                }
                // line 19
                echo "          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "      </ul>
    </div>
  ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/pager/model/table/parts/page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 21,  61 => 19,  55 => 17,  52 => 16,  42 => 14,  40 => 13,  35 => 12,  31 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/pager/model/table/parts/page.twig", "");
    }
}
