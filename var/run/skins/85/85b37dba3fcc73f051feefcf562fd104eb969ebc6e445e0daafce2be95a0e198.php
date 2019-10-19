<?php

/* /home/vagrant/next/output/xcart/src/skins/crisp_white/customer/signin/parts/continue/email.twig */
class __TwigTemplate_5978d84bc2b73b5dfb7babc20fe66fd488ba459161558efe75849b6846a3186b extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td class=\"email-field field\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\FormField\\Input\\Text\\Email", "required" => "true", "fieldName" => "email", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Email"]), "fieldOnly" => "false"]]), "html", null, true);
        echo "
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/signin/parts/continue/email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/home/vagrant/next/output/xcart/src/skins/crisp_white/customer/signin/parts/continue/email.twig", "");
    }
}
