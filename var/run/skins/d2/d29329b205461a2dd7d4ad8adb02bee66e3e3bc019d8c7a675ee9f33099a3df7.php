<?php

/* E:\Server\projects\x-cart\skins\admin\address\text\parts\field.twig */
class __TwigTemplate_496aa2f9c4acb623158e1c50364e4997ee598cb47260a38a81422a99a46b8a3b extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"address-text\">

  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "before", "type" => "nested", "fieldName" => $this->getAttribute(($context["this"] ?? null), "fieldName", []), "fieldData" => $this->getAttribute(($context["this"] ?? null), "fieldData", [])]]), "html", null, true);
        echo "

  <li class=\"address-text-label-";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "fieldName", []), "html", null, true);
        echo "\">
    ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "fieldData", []), "label", []), "html", null, true);
        echo ":
  </li>

  ";
        // line 15
        $context["fieldValue"] = $this->getAttribute(($context["this"] ?? null), "getFieldValue", [0 => $this->getAttribute(($context["this"] ?? null), "fieldName", []), 1 => 1], "method");
        // line 16
        echo "
  <li class=\"address-text-value\">
    ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ($context["fieldValue"] ?? null), "html", null, true);
        echo "
  </li>

  ";
        // line 21
        if (($context["fieldValue"] ?? null)) {
            // line 22
            echo "    <li class=\"address-text-comma-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "fieldName", []), "html", null, true);
            echo "\">,</li>
  ";
        }
        // line 24
        echo "
  ";
        // line 25
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "after", "type" => "nested", "fieldName" => $this->getAttribute(($context["this"] ?? null), "fieldName", []), "fieldData" => $this->getAttribute(($context["this"] ?? null), "fieldData", [])]]), "html", null, true);
        echo "

</ul>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\address\\text\\parts\\field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  59 => 24,  53 => 22,  51 => 21,  45 => 18,  41 => 16,  39 => 15,  33 => 12,  29 => 11,  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\address\\text\\parts\\field.twig", "");
    }
}
