<?php

/* E:\Server\projects\x-cart\skins\mail\common\modules\CDev\PINCodes\invoice_item_pin_codes.twig */
class __TwigTemplate_9f259806ef1000f8f5eb9aa93d84cb9bb472b45b42d1b36b25a06a91e94ceacc extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "isCustomerInterface", [], "method")) {
            // line 8
            echo "  ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getSoldPinCodes", [], "method")) {
                // line 9
                echo "  <li class=\"pin-codes separated\">
    ";
                // line 10
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["PIN"]), "html", null, true);
                echo ":<br />
    ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getSoldPinCodes", [], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["pin"]) {
                    // line 12
                    echo "      <div class=\"code\">
        ";
                    // line 13
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["pin"], "code", []), "html", null, true);
                    echo "
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 16
                echo "  </li>
  ";
            }
        } else {
            // line 19
            echo "  ";
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "countPinCodes", [], "method")) {
                // line 20
                echo "  <li class=\"pin-codes separated\">
    ";
                // line 21
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["PIN"]), "html", null, true);
                echo ":<br />
    ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getPinCodes", [], "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["pin"]) {
                    // line 23
                    echo "      <div class=\"code\">
        ";
                    // line 24
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["pin"], "code", []), "html", null, true);
                    echo "
      </div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "  </li>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\mail\\common\\modules\\CDev\\PINCodes\\invoice_item_pin_codes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 27,  72 => 24,  69 => 23,  65 => 22,  61 => 21,  58 => 20,  55 => 19,  50 => 16,  41 => 13,  38 => 12,  34 => 11,  30 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\mail\\common\\modules\\CDev\\PINCodes\\invoice_item_pin_codes.twig", "");
    }
}
