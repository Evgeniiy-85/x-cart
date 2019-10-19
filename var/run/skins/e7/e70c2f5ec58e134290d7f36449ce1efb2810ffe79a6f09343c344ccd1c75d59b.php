<?php

/* cache_management_actions/cell/name.twig */
class __TwigTemplate_4de93b44b0555edaea5baa36de044357efee3111fd7a1667f04b17aef1351aa0 extends \XLite\Core\Templating\Twig\Template
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
<h4 class=\"action-name\">
    ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "name", []), "html", null, true);
        echo "
</h4>

<p class=\"action-description\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "description", []), "html", null, true);
        echo "
</p>

";
        // line 13
        if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "options", []))) {
            // line 14
            echo "    <div class=\"action-options\">
        <table class=\"action-options-table\">
            ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "entity", []), "options", []));
            foreach ($context['_seq'] as $context["idx"] => $context["option"]) {
                // line 17
                echo "                <tr>
                    <td class=\"column-option\">
                        ";
                // line 19
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", []), "html", null, true);
                echo "
                    </td>
                    <td class=\"column-option-action\">
                        ";
                // line 22
                if ( !twig_test_empty($this->getAttribute($context["option"], "view", []))) {
                    // line 23
                    echo "                            ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => $this->getAttribute($context["option"], "view", []), 1 => $this->getAttribute($context["option"], "viewParams", [])]]), "html", null, true);
                    echo "
                        ";
                } elseif ( !twig_test_empty($this->getAttribute(                // line 24
($context["column"] ?? null), "template", []))) {
                    // line 25
                    echo "                            ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, ["template" => $this->getAttribute($context["option"], "template", []), "params" => $this->getAttribute($context["option"], "viewParams", [])]]), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 27
                    echo "                            ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["column"] ?? null), "value", []), "html", null, true);
                    echo "
                        ";
                }
                // line 29
                echo "                    </td>
                    <td class=\"column-option-help\">
                        <div class=\"help-wrapper\">
                            ";
                // line 32
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Tooltip", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), [$this->getAttribute($context["option"], "description", [])]), "className" => "help-icon"]]), "html", null, true);
                echo "
                        </div>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['idx'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "        </table>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "cache_management_actions/cell/name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 37,  82 => 32,  77 => 29,  71 => 27,  65 => 25,  63 => 24,  58 => 23,  56 => 22,  50 => 19,  46 => 17,  42 => 16,  38 => 14,  36 => 13,  30 => 10,  23 => 6,  19 => 4,);
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
 # Name column template
 #}

<h4 class=\"action-name\">
    {{ this.entity.name }}
</h4>

<p class=\"action-description\">
    {{ this.entity.description }}
</p>

{% if this.entity.options is not empty %}
    <div class=\"action-options\">
        <table class=\"action-options-table\">
            {% for idx, option in this.entity.options %}
                <tr>
                    <td class=\"column-option\">
                        {{ option.name }}
                    </td>
                    <td class=\"column-option-action\">
                        {% if option.view is not empty %}
                            {{ widget(option.view, option.viewParams) }}
                        {% elseif column.template is not empty %}
                            {{ widget(template=option.template, params=option.viewParams) }}
                        {% else %}
                            {{ column.value }}
                        {% endif %}
                    </td>
                    <td class=\"column-option-help\">
                        <div class=\"help-wrapper\">
                            {{ widget('XLite\\\\View\\\\Tooltip', text=t(option.description), className='help-icon') }}
                        </div>
                    </td>
                </tr>
            {% endfor %}
        </table>
    </div>
{% endif %}", "cache_management_actions/cell/name.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\cache_management_actions\\cell\\name.twig");
    }
}
