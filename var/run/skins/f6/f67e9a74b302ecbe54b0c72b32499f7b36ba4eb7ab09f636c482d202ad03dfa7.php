<?php

/* E:\Server\projects\x-cart\skins\common\file_uploader\parts\menu.upload.twig */
class __TwigTemplate_7c1d5359063c5bcdaa8271a49b84d5f618389f51b47878dc0bdba6edec9fab56 extends \XLite\Core\Templating\Twig\Template
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
<li role=\"presentation\" class=\"dropdown-header\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Upload"]), "html", null, true);
        echo "</li>
<li role=\"presentation\">
  <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"from-computer\" @click.prevent=\"uploadFromComputer\">
    <i class=\"button-icon svg\">";
        // line 10
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "images/icons/upload.svg", "common"]);
        echo "</i>
    <span>";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["From computer"]), "html", null, true);
        echo "</span>
  </a>
  <input type=\"file\" name=\"uploaded-file\"";
        // line 13
        if ($this->getAttribute(($context["this"] ?? null), "hasMultipleSelector", [], "method")) {
            echo " multiple=\"multiple\"";
        }
        echo " @change=\"doUploadFromFile\" />
</li>
";
        // line 15
        if ($this->getAttribute(($context["this"] ?? null), "isViaUrlAllowed", [], "method")) {
            // line 16
            echo "  <li role=\"presentation\">
    <a role=\"menuitem\" tabindex=\"-1\" href=\"#\" class=\"via-url\" @click.prevent=\"uploadViaUrl\">
      <i class=\"button-icon svg\">";
            // line 18
            echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "images/icons/url.svg", "common"]);
            echo "</i>
      <span>";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Via URL"]), "html", null, true);
            echo "</span>
    </a>
  </li>
";
        }
        // line 23
        echo "<div class=\"via-url-popup\" data-title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Upload via URL"]), "html", null, true);
        echo "\" data-multiple=\"";
        if ($this->getAttribute(($context["this"] ?? null), "hasMultipleSelector", [], "method")) {
            echo "1";
        }
        echo "\">
";
        // line 24
        if ($this->getAttribute(($context["this"] ?? null), "hasMultipleSelector", [], "method")) {
            echo "  
  <textarea name=\"url\" class=\"form-control urls\" placeholder=\"http://example.com/file1.jpg                                                                     http://example.com/file2.jpg\" /></textarea>
";
        } else {
            // line 27
            echo "  <input type=\"text\" name=\"url\" class=\"form-control url\" value=\"\" placeholder=\"http://example.com/file.jpg\" />
";
        }
        // line 29
        echo "  <div class=\"checkbox\">
    <label><input type=\"checkbox\" name=\"copy-to-file\" value=\"1\" class=\"copy-to-file\" checked=\"checked\"/>";
        // line 30
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Copy to file system"]), "html", null, true);
        echo "</label>
    <div class=\"not-copy-to-file-warning alert alert-warning hidden\">";
        // line 31
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Warning! The image cannot be resized to reduce capacity for better site performance."]), "html", null, true);
        echo "</div>
  </div>
  <button type=\"button\" class=\"btn btn-default\" @click.prevent=\"doUploadViaUrl\">";
        // line 33
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Upload"]), "html", null, true);
        echo "</button>
</div>
";
    }

    public function getTemplateName()
    {
        return "E:\\Server\\projects\\x-cart\\skins\\common\\file_uploader\\parts\\menu.upload.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 33,  87 => 31,  83 => 30,  80 => 29,  76 => 27,  70 => 24,  61 => 23,  54 => 19,  50 => 18,  46 => 16,  44 => 15,  37 => 13,  32 => 11,  28 => 10,  22 => 7,  19 => 6,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "E:\\Server\\projects\\x-cart\\skins\\common\\file_uploader\\parts\\menu.upload.twig", "");
    }
}
