<?php

/* /home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/files_table.twig */
class __TwigTemplate_84ab28446417e503cdbff8b8cb31c6d80262bb077edbc36039ae9c506837a296 extends \XLite\Core\Templating\Twig\Template
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
<div>
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "customerAttachments", [])) {
            // line 9
            echo "      <ul class=\"customer-attachments\">
          ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getCustomerAttachments", [], "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 11
                echo "            <li class=\"attachment\">
                ";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\Module\\XC\\CustomerAttachments\\View\\AttachmentItem", "attachment" => $context["attachment"], "itemId" => $this->getAttribute($this->getAttribute(($context["this"] ?? null), "item", []), "getItemId", [], "method")]]), "html", null, true);
                echo "
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "      </ul>
    ";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/files_table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  44 => 15,  35 => 12,  32 => 11,  28 => 10,  25 => 9,  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/customer/modules/XC/CustomerAttachments/parts/files_table.twig", "");
    }
}
