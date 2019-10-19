<?php

/* modules/XC/Onboarding/wizard_steps/product_added/body.twig */
class __TwigTemplate_612117f58ed2002a8c54d0d3c1c1f61a7ba3fe1971b1da7757241b068977a5f6 extends \XLite\Core\Templating\Twig\Template
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
<div
  class=\"onboarding-wizard-step step-";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStepIndex", [], "method"), "html", null, true);
        echo "\"
  v-show=\"isCurrentStep('";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStepIndex", [], "method"), "html", null, true);
        echo "')\"
  :transition=\"stepTransition\">
  <xlite-wizard-step-product-added inline-template :demo-catalog=\"";
        // line 9
        echo (($this->getAttribute(($context["this"] ?? null), "isDemoCatalogAvailable", [], "method")) ? ("true") : ("false"));
        echo "\" product-url-base=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute(($context["this"] ?? null), "getStorefrontUrlBase", [], "method"), "html", null, true);
        echo "\">

    <div class=\"step-contents demo-catalog-no-product\" v-if=\"!productId && demoCatalog && !isDeleted\">
      <h2 class=\"heading\">";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Ready to delete demo products?"]), "html", null, true);
        echo "</h2>
      <div class=\"demo-products-showcase\">
        ";
        // line 14
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/Onboarding/images/3_products.svg"]);
        echo "
      </div>
      <div class=\"buttons\">
        ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Proceed to the next step"]), "style" => "regular-main-button", "attributes" => ["@click" => "skipStep"], "jsCode" => "null;"]]), "html", null, true);
        echo "
        ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Delete Demo products"]), "attributes" => ["@click" => "deleteDemoCatalog"], "jsCode" => "null;"]]), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"step-contents demo-catalog\" v-if=\"productId && demoCatalog && !isDeleted\">
      <h2 class=\"heading\">";
        // line 23
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["You have added 1 product"]), "html", null, true);
        echo "</h2>
      <p class=\"text\">";
        // line 24
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["The newly created product is already in your [storefront]. Have a look! Ready to delete demo products?", ["storefront" => $this->getAttribute(($context["this"] ?? null), "getStorefrontUrl", [], "method")]]);
        echo "</p>
      <div class=\"demo-products-showcase\">
        ";
        // line 26
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/Onboarding/images/3_products.svg"]);
        echo "
      </div>
      <div class=\"buttons\">
        ";
        // line 29
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Proceed to the next step"]), "style" => "regular-main-button", "attributes" => ["@click" => "skipStep"], "jsCode" => "null;"]]), "html", null, true);
        echo "
        ";
        // line 30
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Delete Demo products"]), "attributes" => ["@click" => "deleteDemoCatalog"], "jsCode" => "null;"]]), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"step-contents no-demo-catalog\" v-if=\"productId && !demoCatalog\">
      <h2 class=\"heading\">";
        // line 35
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["You have added 1 product"]), "html", null, true);
        echo "</h2>
      <p class=\"text\">";
        // line 36
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["You can view the newly created product in your [storefront] or add a few [more products] to your catalog.", ["storefront" => $this->getAttribute(($context["this"] ?? null), "getStorefrontUrl", [], "method"), "more" => $this->getAttribute(($context["this"] ?? null), "getProductListUrl", [], "method")]]);
        echo "</p>
      <div class=\"product-added-image\">
        ";
        // line 38
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/Onboarding/images/add-product.svg"]);
        echo "
      </div>
      <div class=\"buttons\">
      ";
        // line 41
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Proceed to the next step"]), "style" => "regular-main-button", "attributes" => ["@click" => "goToNextStep"], "jsCode" => "null;"]]), "html", null, true);
        echo "
      </div>
    </div>

    <div class=\"step-contents catalog-deleted\" v-if=\"demoCatalog && isDeleted\">
      <div class=\"catalog-deleted-image\">
        ";
        // line 47
        echo call_user_func_array($this->env->getFunction('svg')->getCallable(), [$this->env, $context, "modules/XC/Onboarding/images/catalog-deleted.svg"]);
        echo "
      </div>
      <h2 class=\"heading\">";
        // line 49
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), ["Done! We ve just deleted all your demo products"]), "html", null, true);
        echo "</h2>
      <p class=\"text\">";
        // line 50
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), ["Add a few [more products] to your catalog or proceed to the next step - whatever makes you happy.", ["more" => $this->getAttribute(($context["this"] ?? null), "getProductListUrl", [], "method")]]);
        echo "</p>

      <div class=\"buttons\">
      ";
        // line 53
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), [$this->env, $context, [0 => "XLite\\View\\Button\\Regular", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), ["Proceed to the next step"]), "style" => "regular-main-button", "attributes" => ["@click" => "goToNextStep"], "jsCode" => "null;"]]), "html", null, true);
        echo "
      </div>
    </div>

  </xlite-wizard-step-product-added>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/XC/Onboarding/wizard_steps/product_added/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 53,  123 => 50,  119 => 49,  114 => 47,  105 => 41,  99 => 38,  94 => 36,  90 => 35,  82 => 30,  78 => 29,  72 => 26,  67 => 24,  63 => 23,  55 => 18,  51 => 17,  45 => 14,  40 => 12,  32 => 9,  27 => 7,  23 => 6,  19 => 4,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/XC/Onboarding/wizard_steps/product_added/body.twig", "E:\\Server\\projects\\x-cart\\skins\\admin\\modules\\XC\\Onboarding\\wizard_steps\\product_added\\body.twig");
    }
}
