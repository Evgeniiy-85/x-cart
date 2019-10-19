<?php

/* E:\Server\projects\x-cart\skins\admin\modules\CDev\PINCodes\popup\backstock_status_change_notification\pin_codes_notice.twig */
class __TwigTemplate_7ca90c4221927a57963ade7fd822eadf47239b73cbcdd712861a42ddf2042f7b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute(($context["this"] ?? null), "hasMissingPinCodeItems", [], "method")) {
            // line 8
            echo "  <div class=\"pin-codes-notice\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["The order also contains items with missing PIN codes; you will be prompted to enter the PIN codes under item names."]), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\PINCodes\\popup\\backstock_status_change_notification\\pin_codes_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\CDev\\PINCodes\\popup\\backstock_status_change_notification\\pin_codes_notice.twig", "");
    }
}
