<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/page.reviews_list_header.twig */
class __TwigTemplate_9a26065ea678c9aabd855f003876649429b1402e0c3ad2ef1c3f6a1028b2dcb7 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"header\">
  <div class=\"left\">
    <div class=\"head-h2\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Customer reviews"]), "html", null, true);
        echo "</div>
  </div>

  <div class=\"right\">
    <div class=\"buttons\">
      ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "reviews.general"]]), "html", null, true);
        echo "
    </div>
  </div>

  <div class=\"line\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/page.reviews_list_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 14,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/page.reviews_list_header.twig", "");
    }
}
