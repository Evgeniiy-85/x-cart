<?php

/* E:\Server\projects\x-cart\skins\admin\import\parts\option.delete_temporary_files.twig */
class __TwigTemplate_dbf14d53b7aa3d8b42d35faa6d293f47101b9b8c8bd53eb98f9d5cde769b82db extends \XLite\Core\Templating\Twig\Template
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
<li class=\"checkbox-option\" style=\"display: none;\">
  <label for=\"clearImportDir\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Delete temporary files after the import is completed"]), "html", null, true);
        echo "</label>
  <input type=\"checkbox\" name=\"options[clearImportDir]\" value=\"1\" id=\"clearImportDir\" />
</li>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\admin\\import\\parts\\option.delete_temporary_files.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\admin\\import\\parts\\option.delete_temporary_files.twig", "");
    }
}
