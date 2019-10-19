<?php

/* /home/vagrant/next/output/xcart/src/skins/admin/browse_server/parts/items.twig */
class __TwigTemplate_fc88e4765d961b27e6e84fb9d5dc18e51a964053b9957e84ab38d6a7db35d270 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"browse-selector\">
  <ul class=\"file-system-entries\">
    <li class=\"file-system-entry up-level\">
      ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCatalogInfo", [], "method")], "method"), "html", null, true);
        echo "
      <a class=\"type-catalog up-level\"><img src=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["images/spacer.gif"]), "html", null, true);
        echo "\" alt=\"\" />[...]</a>
    </li>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getFSEntries", [], "method"));
        foreach ($context['_seq'] as $context["idx"] => $context["entry"]) {
            // line 13
            echo "      <li class=\"fs-entry\">
        ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "browseServer.item", "entry" => $context["entry"]]]), "html", null, true);
            echo "
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    ";
        if ($this->getAttribute(($context["this"] ?? null), "isEmptyCatalog", [], "method")) {
            // line 18
            echo "      <li class=\"empty-catalog\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Directory is empty"]), "html", null, true);
            echo "</li>
    ";
        }
        // line 20
        echo "  </ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/admin/browse_server/parts/items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 20,  52 => 18,  49 => 17,  40 => 14,  37 => 13,  33 => 12,  28 => 10,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/admin/browse_server/parts/items.twig", "");
    }
}
