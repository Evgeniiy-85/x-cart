<?php

/* /home/vagrant/next/output/xcart/src/skins/mail/common/order_tracking_information/parts/tracking_info.twig */
class __TwigTemplate_5afc2f94d7d19a0e7559eab946551e4cfc421c7bded0c868c60a4de60268502a extends \XLite\Core\Templating\Twig\Template
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
<p style=\"font-weight: bold;\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Tracking numbers"]), "html", null, true);
        echo ":</p>

";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "trackingNumbers", []));
        foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
            // line 10
            echo "  <div>
    ";
            // line 11
            if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getTrackingInformationURL", [0 => $this->getAttribute($context["number"], "value", [])], "method")) {
                // line 12
                echo "      ";
                if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "isTrackingInformationForm", [0 => $this->getAttribute($context["number"], "value", [])], "method")) {
                    // line 13
                    echo "        <form method=\"";
                    echo $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getTrackingInformationMethod", [0 => $this->getAttribute($context["number"], "value", [])], "method");
                    echo "\"
              action=\"";
                    // line 14
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getTrackingInformationURL", [0 => $this->getAttribute($context["number"], "value", [])], "method"), "html", null, true);
                    echo "\" target=\"_blank\">
          ";
                    // line 15
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getTrackingInformationParams", [0 => $this->getAttribute($context["number"], "value", [])], "method"));
                    foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                        // line 16
                        echo "            <input type=\"hidden\" name=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" value=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["value"], "html", null, true);
                        echo "\"/>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "          <span>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "value", []), "html", null, true);
                    echo " - </span>
          <button type=\"submit\">";
                    // line 19
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Track package"]), "html", null, true);
                    echo "</button>
        </form>
      ";
                } else {
                    // line 22
                    echo "        <span>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "value", []), "html", null, true);
                    echo " - </span>
        <a href=\"";
                    // line 23
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "order", []), "getTrackingInformationURL", [0 => $this->getAttribute($context["number"], "value", [])], "method"), "html", null, true);
                    echo "\"
           target=\"_blank\">";
                    // line 24
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Track package"]), "html", null, true);
                    echo "</a>
      ";
                }
                // line 26
                echo "    ";
            } else {
                // line 27
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "value", []), "html", null, true);
                echo "
    ";
            }
            // line 29
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/mail/common/order_tracking_information/parts/tracking_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  91 => 27,  88 => 26,  83 => 24,  79 => 23,  74 => 22,  68 => 19,  63 => 18,  52 => 16,  48 => 15,  44 => 14,  39 => 13,  36 => 12,  34 => 11,  31 => 10,  27 => 9,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/mail/common/order_tracking_information/parts/tracking_info.twig", "");
    }
}
