<?php

/* form_field/select.twig */
class __TwigTemplate_e0f27a366e962846576ad74e506d2f133d59b81f381adc719c6c9481c2ef4eeb extends \XLite\Core\Templating\Twig\Template
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
<span class=\"input-field-wrapper ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getWrapperClass", [], "method"), "html", null, true);
        echo "\">
  <select ";
        // line 6
        echo $this->getAttribute(($context["this"] ?? null), "getAttributesCode", [], "method");
        echo ">
    ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "displayCommentedData", [0 => $this->getAttribute(($context["this"] ?? null), "getCommentedData", [], "method")], "method"), "html", null, true);
        echo "
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["this"] ?? null), "getOptions", [], "method"));
        foreach ($context['_seq'] as $context["optionValue"] => $context["optionLabel"]) {
            // line 9
            echo "      ";
            if ($this->getAttribute(($context["this"] ?? null), "isGroup", [0 => $context["optionLabel"]], "method")) {
                // line 10
                echo "        <optgroup ";
                echo $this->getAttribute(($context["this"] ?? null), "getOptionGroupAttributesCode", [0 => $context["optionValue"], 1 => $context["optionLabel"]], "method");
                echo ">
          ";
                // line 11
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["optionLabel"], "options", []));
                foreach ($context['_seq'] as $context["optionValue2"] => $context["optionLabel2"]) {
                    // line 12
                    echo "            <option ";
                    echo $this->getAttribute(($context["this"] ?? null), "getOptionAttributesCode", [0 => $context["optionValue2"], 1 => $context["optionLabel2"]], "method");
                    echo ">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["optionLabel2"], "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['optionValue2'], $context['optionLabel2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 14
                echo "        </optgroup>
      ";
            } else {
                // line 16
                echo "        <option ";
                echo $this->getAttribute(($context["this"] ?? null), "getOptionAttributesCode", [0 => $context["optionValue"], 1 => $context["optionLabel"]], "method");
                echo ">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["optionLabel"], "html", null, true);
                echo "</option>
      ";
            }
            // line 18
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['optionValue'], $context['optionLabel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </select>
</span>";
    }

    public function getTemplateName()
    {
        return "form_field/select.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  73 => 18,  65 => 16,  61 => 14,  50 => 12,  46 => 11,  41 => 10,  38 => 9,  34 => 8,  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "form_field/select.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\form_field\\select.twig");
    }
}
