<?php

/* promotions/simple_blocks/modules_settings.twig */
class __TwigTemplate_2bb81c5c1d6071560f4d6c07add21c4e17674a385894f1480a582e2c89673168 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "getModule", [], "method")) {
            // line 8
            echo "
  ";
            // line 9
            $context["moduleName"] = $this->getAttribute(($context["this"] ?? null), "getModule", [], "method");
            // line 10
            echo "
  ";
            // line 11
            if ((($context["moduleName"] ?? null) == "CDev\\GoogleAnalytics")) {
                // line 12
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\SimplePromoBlock", "promoId" => "seo-promo-1"]]), "html", null, true);
                echo "
  ";
            }
            // line 14
            echo "
  ";
            // line 15
            if ((($context["moduleName"] ?? null) == "CDev\\Egoods")) {
                // line 16
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\SimplePromoBlock", "promoId" => "g2a-egoods-1"]]), "html", null, true);
                echo "
  ";
            }
            // line 18
            echo "
  ";
            // line 19
            if ((($context["moduleName"] ?? null) == "CDev\\ContactUs")) {
                // line 20
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\SimplePromoBlock", "promoId" => "advanced-contact-us-1"]]), "html", null, true);
                echo "
  ";
            }
            // line 22
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "promotions/simple_blocks/modules_settings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 22,  56 => 20,  54 => 19,  51 => 18,  45 => 16,  43 => 15,  40 => 14,  34 => 12,  32 => 11,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "promotions/simple_blocks/modules_settings.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\promotions\\simple_blocks\\modules_settings.twig");
    }
}
