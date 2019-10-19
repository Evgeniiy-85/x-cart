<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/phrase.all.twig */
class __TwigTemplate_a53e4b3968b6bfdd9a629f129a5419d817b0bf8e1240127b0ee38e89164601c0 extends \XLite\Core\Templating\Twig\Template
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
  <input type=\"radio\" name=\"including\" id=\"including-all\" value=\"all\" ";
        // line 8
        if ($this->getAttribute(($context["this"] ?? null), "getChecked", [0 => "including", 1 => "all"], "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"including-all\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["All words"]), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/phrase.all.twig";
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
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/product/search/parts/phrase.all.twig", "");
    }
}
