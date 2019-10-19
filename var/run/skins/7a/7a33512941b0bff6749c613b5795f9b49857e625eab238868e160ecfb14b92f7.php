<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/phrase.phrase.twig */
class __TwigTemplate_c53094560ae67f21849fe9ba61181fb02b7daf1a3e6a10d9f1d43a4a4b14237e extends \XLite\Core\Templating\Twig\Template
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
<li>
  <input type=\"radio\" name=\"including\" id=\"including-phrase\" value=\"phrase\" ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "getChecked", [0 => "including", 1 => "phrase"], "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"including-phrase\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Exact phrase"]), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/phrase.phrase.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/phrase.phrase.twig", "");
    }
}
