<?php

/* E:\Server\projects\x-cart\skins\crisp_white\customer\signin\parts\anonymous.twig */
class __TwigTemplate_871219bb2517d66fe255d7089256874410938ff58934329ec4ce4373a5ee8eff extends \XLite\Core\Templating\Twig\Template
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
<div class=\"signin-anonymous-wrapper\">
  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("signin/parts/anonymous/heading.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 8
        $this->loadTemplate("signin/parts/anonymous/heading.twig", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\signin\\parts\\anonymous.twig", 8)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 9
        echo "  <div class=\"signin-anonymous-box\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), [$this->env, $context, [0 => "signin-anonymous-title"]]), "html", null, true);
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\signin\\parts\\anonymous.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 9,  28 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\crisp_white\\customer\\signin\\parts\\anonymous.twig", "");
    }
}
