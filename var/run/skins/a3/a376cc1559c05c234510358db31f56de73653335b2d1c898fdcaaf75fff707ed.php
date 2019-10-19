<?php

/* E:\Server\projects\x-cart\skins\admin\import\parts\common.errors.twig */
class __TwigTemplate_e1fbf7e59c237b937b86ec5af6e34007f6bb57f1bf245af5f8c3611639094957 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTitle", [], "method"), "html", null, true);
        echo "</h3>
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getFiles", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 10
            echo "  <div class=\"errors-wrapper faded initial\">
    <ul class=\"errors\">
      <li class=\"title\">
        <i class=\"icon-file-alt\"></i> 
        ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "file", []), "html", null, true);
            echo "
        ";
            // line 15
            if ($this->getAttribute($context["file"], "countW", [])) {
                // line 16
                echo "          <span class=\"count-w\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "countW", []), "html", null, true);
                echo "</span>
        ";
            }
            // line 18
            echo "        ";
            if ($this->getAttribute($context["file"], "countE", [])) {
                // line 19
                echo "          <span class=\"count-e\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "countE", []), "html", null, true);
                echo "</span>
        ";
            }
            // line 21
            echo "      </li>
      ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getErrorsGroups", [0 => $this->getAttribute($context["file"], "file", [])], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["errorGroup"]) {
                // line 23
                echo "        <li class=\"clearfix type-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["errorGroup"], "type", []), "html", null, true);
                echo "\">
          <div class=\"message\">
            <div class=\"message-text\">";
                // line 25
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getGroupErrorMessage", [0 => $context["errorGroup"]], "method"), "html", null, true);
                echo "</div>
            <hr>
            <div class=\"rows\">";
                // line 27
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getGroupErrorRows", [0 => $context["errorGroup"]], "method"), "html", null, true);
                echo "</div>
          </div>
          <div class=\"text\">";
                // line 29
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getErrorText", [0 => $context["errorGroup"]], "method"), "html", null, true);
                echo "</div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['errorGroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    </ul>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\import\\parts\\common.errors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  80 => 29,  75 => 27,  70 => 25,  64 => 23,  60 => 22,  57 => 21,  51 => 19,  48 => 18,  42 => 16,  40 => 15,  36 => 14,  30 => 10,  26 => 9,  22 => 8,  19 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\import\\parts\\common.errors.twig", "");
    }
}
