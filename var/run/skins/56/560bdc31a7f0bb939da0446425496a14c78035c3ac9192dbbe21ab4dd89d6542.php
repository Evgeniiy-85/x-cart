<?php

/* main_center/page_container_parts/header_parts/header_search.twig */
class __TwigTemplate_370f0b6c0a084e6829f01e9e8a0554cb459002b6efc2dab44684632115f5eacf extends \XLite\Core\Templating\Twig\Template
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
        echo "
<div ";
        // line 5
        echo $this->getAttribute(($context["this"] ?? null), "printTagAttributes", [0 => $this->getAttribute(($context["this"] ?? null), "getContainerTagAttributes", [], "method")], "method");
        echo ">

  ";
        // line 7
        $this->startForm("XLite\\View\\Form\\HeaderSearch");        // line 8
        echo "
    <div class=\"input-group\">
      <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Search in"]), "html", null, true);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getMenuItems", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <li><a href=\"#\" data-code=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "code", []), "html", null, true);
            echo "\" data-placeholder=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "placeholder", []), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", []), "html", null, true);
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </ul>
      </div>
      <input type=\"text\" class=\"form-control\" name=\"substring\" value=\"\" placeholder=\"";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "currentItem", []), "placeholder", []), "html", null, true);
        echo "\" />
    </div>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "currentItem", []), "code", []), "html", null, true);
        echo "\" />

  ";
        $this->endForm();        // line 23
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "main_center/page_container_parts/header_parts/header_search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  64 => 20,  59 => 18,  55 => 16,  42 => 14,  38 => 13,  33 => 11,  28 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{##
 # Header search
 #}

<div {{ this.printTagAttributes(this.getContainerTagAttributes())|raw }}>

  {% form 'XLite\\\\View\\\\Form\\\\HeaderSearch' %}

    <div class=\"input-group\">
      <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">{{ t('Search in') }} <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          {% for item in this.getMenuItems() %}
            <li><a href=\"#\" data-code=\"{{ item.code }}\" data-placeholder=\"{{ item.placeholder }}\">{{ item.name }}</a></li>
          {% endfor %}
        </ul>
      </div>
      <input type=\"text\" class=\"form-control\" name=\"substring\" value=\"\" placeholder=\"{{ this.currentItem.placeholder }}\" />
    </div>
    <input type=\"hidden\" name=\"code\" value=\"{{ this.currentItem.code }}\" />

  {% endform %}

</div>
", "main_center/page_container_parts/header_parts/header_search.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\main_center\\page_container_parts\\header_parts\\header_search.twig");
    }
}
