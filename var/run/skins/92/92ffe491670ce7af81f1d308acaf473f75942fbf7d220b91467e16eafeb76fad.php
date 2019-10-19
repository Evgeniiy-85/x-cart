<?php

/* login/body.twig */
class __TwigTemplate_87dc2b9da07ccf31e84e9f00edd2186fb2c3dd436f8b7be39a980b74a2260f8b extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"login-box-wrapper\">
  <div class=\"login-box";
        // line 5
        if ($this->getAttribute(($context["this"] ?? null), "isLocked", [], "method")) {
            echo " locked\" data-time-left=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getTimeLeftToUnlock", [], "method"), "html", null, true);
        }
        echo "\">

    <h1>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Administration Zone"]), "html", null, true);
        echo "</h1>

    ";
        // line 9
        if ($this->getAttribute(($context["this"] ?? null), "isLocked", [], "method")) {
            // line 10
            echo "      <h2 class=\"timer-header\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Login is locked out"]), "html", null, true);
            echo "</h2>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if ($this->getAttribute(($context["this"] ?? null), "additional_note", [])) {
            // line 14
            echo "      <div class=\"additional-note\">";
            echo $this->getAttribute(($context["this"] ?? null), "additional_note", []);
            echo "</div>
    ";
        }
        // line 16
        echo "
    <form id=\"login_form\" action=\"";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "login"]), "html", null, true);
        echo "\" method=\"post\" name=\"login_form\">
      <input type=\"hidden\" name=\"target\" value=\"login\" />
      <input type=\"hidden\" name=\"action\" value=\"login\" />
      ";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\FormField\\Input\\FormId"]]), "html", null, true);
        echo "

      <table>
        <tbody class=\"fields\">
          <tr>
            <td><input type=\"text\" class=\"form-control\" name=\"login\" value=\"";
        // line 25
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "login", []), "html", null, true);
        echo "\" size=\"32\" maxlength=\"128\" autocomplete=\"off\" placeholder=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Email"]), "html", null, true);
        echo "\" /></td>
          </tr>
          <tr>
            <td><input type=\"password\" class=\"form-control\" name=\"password\" value=\"";
        // line 28
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "password", []), "html", null, true);
        echo "\" size=\"32\" maxlength=\"128\" autocomplete=\"off\" placeholder=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Password"]), "html", null, true);
        echo "\" /></td>
          </tr>
        </tbody>

        ";
        // line 32
        if ($this->getAttribute(($context["this"] ?? null), "isLocked", [], "method")) {
            // line 33
            echo "          <tbody class=\"timer\">
            <tr>
              <td>
                ";
            // line 36
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Time left"]), "html", null, true);
            echo ": <span id=\"timer\"></span>
              </td>
            </tr>
          </tbody>
        ";
        }
        // line 41
        echo "
        <tbody class=\"buttons\">
          <tr>
            <td>
              ";
        // line 45
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "\\XLite\\View\\Button\\Submit", "label" => "Log in", "style" => "regular-main-button btn-lg"]]), "html", null, true);
        echo "
              <div class=\"forgot-password\">
                <a href=\"";
        // line 47
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), [$this->env, $context, "recover_password"]), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Forgot password?"]), "html", null, true);
        echo "</a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </form>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "login/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 47,  109 => 45,  103 => 41,  95 => 36,  90 => 33,  88 => 32,  79 => 28,  71 => 25,  63 => 20,  57 => 17,  54 => 16,  48 => 14,  46 => 13,  43 => 12,  37 => 10,  35 => 9,  30 => 7,  22 => 5,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\login\\body.twig");
    }
}
