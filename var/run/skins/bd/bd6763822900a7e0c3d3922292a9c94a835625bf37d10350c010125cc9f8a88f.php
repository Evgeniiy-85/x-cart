<?php

/* banner_rotation/body.twig */
class __TwigTemplate_53092f198726a57df3c3cec930bf54735f834fbfd3e9ac1ae10858d1e901b264 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"banner-rotation-widget\" class=\"carousel slide banner-carousel\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "

  <!-- Indicators -->
  ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isRotationEnabled", [], "method")) {
            // line 10
            echo "    <ol class=\"carousel-indicators\">
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getImages", [], "method"));
            foreach ($context['_seq'] as $context["i"] => $context["image"]) {
                // line 12
                echo "        <li data-target=\"#banner-rotation-widget\" data-slide-to=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\"></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    </ol>
  ";
        }
        // line 16
        echo "
  <div class=\"carousel-inner not-initialized\" role=\"listbox\">
    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getImages", [], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 19
            echo "      <a ";
            if ($this->getAttribute($this->getAttribute($context["image"], "bannerRotationSlide", []), "getFrontLink", [], "method")) {
                echo " href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["image"], "bannerRotationSlide", []), "getFrontLink", [], "method"), "html", null, true);
                echo "\"";
            }
            echo " class=\"item\">
        ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Image", "lazyLoad" => true, "image" => $context["image"], "alt" => $this->getAttribute($context["image"], "getAlt", [], "method"), "resizeImage" => false, "useCache" => false]]), "html", null, true);
            echo "
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "banner_rotation/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  68 => 20,  59 => 19,  55 => 18,  51 => 16,  47 => 14,  38 => 12,  34 => 11,  31 => 10,  29 => 9,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "banner_rotation/body.twig", "E:\\Server\\projects\\x-cart\\skins\\customer\\banner_rotation\\body.twig");
    }
}
