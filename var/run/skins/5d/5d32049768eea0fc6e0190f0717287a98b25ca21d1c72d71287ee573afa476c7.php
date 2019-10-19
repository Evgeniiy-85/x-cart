<?php

/* E:\Server\projects\x-cart\skins\customer\shopping_cart\shipping_estimator\parts\main.address.twig */
class __TwigTemplate_f42c3d3df25f40686142fcae9dc0c7ff5225656d082a2c1fd903ff5902750654 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Cart\\ShippingEstimator\\Destination", ["className" => "estimator"]);        // line 7
        echo "
  <ul class=\"form\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "shippingEstimator.address"]]), "html", null, true);
        echo "
  </ul>

  ";
        // line 12
        if ($this->getAttribute(($context["this"] ?? null), "isEstimate", [], "method")) {
            // line 13
            echo "    <div class=\"buttons\">
      ";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "label" => "Apply destination"]]), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 17
        echo "
  ";
        // line 18
        if ( !$this->getAttribute(($context["this"] ?? null), "isEstimate", [], "method")) {
            // line 19
            echo "    <div class=\"buttons main\">
      ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "label" => "Apply destination"]]), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 23
        echo "
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\customer\\shopping_cart\\shipping_estimator\\parts\\main.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 23,  49 => 20,  46 => 19,  44 => 18,  41 => 17,  35 => 14,  32 => 13,  30 => 12,  24 => 9,  20 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\customer\\shopping_cart\\shipping_estimator\\parts\\main.address.twig", "");
    }
}
