<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/import/parts/failed.errors.twig */
class __TwigTemplate_9ef7c4476ffc854f73f76d4c1f43cfd4f2c88fc067bea322401ceb90e1d9e6bf extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "import.failed.content.errors"]]), "html", null, true);
        echo "

";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "hasErrors", [], "method")) {
            // line 10
            echo "  <div class=\"alert alert-danger\">
  ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Critical errors have been detected in the files you are trying to import. Check the manual to correct the errors and try again."]), "html", null, true);
            echo "
  ";
            // line 12
            $context["manualLinks"] = $this->getAttribute(($context["this"] ?? null), "getManualLinks", [], "method");
            // line 13
            echo "  ";
            if ( !twig_test_empty(($context["manualLinks"] ?? null))) {
                // line 14
                echo "    <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["CSV format tables"]), "html", null, true);
                echo ":</div>
    <ul>
      ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["manualLinks"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                    // line 17
                    echo "        <li><a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "manualURL", []), "html", null, true);
                    echo "\" target=\"_blank\" class=\"external\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "file", []), "html", null, true);
                    echo "</a></li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "    </ul>
  ";
            }
            // line 21
            echo "  </div>
";
        }
        // line 23
        if ($this->getAttribute(($context["this"] ?? null), "isBroken", [], "method")) {
            // line 24
            echo "  <div class=\"alert alert-danger\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Import has been cancelled."]), "html", null, true);
            echo "</div>
";
        }
        // line 26
        if ($this->getAttribute(($context["this"] ?? null), "hasErrorsOrWarnings", [], "method")) {
            // line 27
            echo "  <div class=\"download-errors\">
      <a href=\"";
            // line 28
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "import", "getErrorsFile"]), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Download error file"]), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/import/parts/failed.errors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 28,  80 => 27,  78 => 26,  72 => 24,  70 => 23,  66 => 21,  62 => 19,  51 => 17,  47 => 16,  41 => 14,  38 => 13,  36 => 12,  32 => 11,  29 => 10,  27 => 9,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/import/parts/failed.errors.twig", "");
    }
}
