<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/martis/templates/commerce/cart/commerce-cart-block.html.twig */
class __TwigTemplate_7da3351ec35eac0ecd7ac75965c9c05d7d7a5a088ff224f5cb60ca98f91ed1ca extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 8];
        $filters = ["escape" => 1, "t" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  <div class=\"cart-block--summary\">
    <a class=\"cart-block--link__expand\" href=\"";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
        echo "\">
        <i class=\"ti-shopping-cart\"></i>
      <span class=\"cart-block--summary__count\"> ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["count"] ?? null)), "html", null, true);
        echo "</span>
\t</a>
  </div>
  ";
        // line 8
        if (($context["content"] ?? null)) {
            // line 9
            echo "  <div class=\"cart-block--contents\">
    <div class=\"cart-block--contents__inner\">
      <div class=\"cart-block--contents__items\">
        ";
            // line 12
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
            echo "
      </div>
      <div class=\"cart-block--contents__links cart-block-link\">
        ";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["links"] ?? null)), "html", null, true);
            echo "
      </div>
    </div>
  </div>
  ";
        } else {
            // line 20
            echo "      <div class=\"cart-block--contents text-center cart-block-empty\">
        ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Cart is empty."));
            echo "
      </div>
  ";
        }
        // line 24
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/commerce/cart/commerce-cart-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 24,  96 => 21,  93 => 20,  85 => 15,  79 => 12,  74 => 9,  72 => 8,  66 => 5,  61 => 3,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div{{ attributes }}>
  <div class=\"cart-block--summary\">
    <a class=\"cart-block--link__expand\" href=\"{{ url }}\">
        <i class=\"ti-shopping-cart\"></i>
      <span class=\"cart-block--summary__count\"> {{ count }}</span>
\t</a>
  </div>
  {% if content %}
  <div class=\"cart-block--contents\">
    <div class=\"cart-block--contents__inner\">
      <div class=\"cart-block--contents__items\">
        {{ content }}
      </div>
      <div class=\"cart-block--contents__links cart-block-link\">
        {{ links }}
      </div>
    </div>
  </div>
  {% else %}
      <div class=\"cart-block--contents text-center cart-block-empty\">
        {{ 'Cart is empty.'|t }}
      </div>
  {% endif %}
</div>", "themes/martis/templates/commerce/cart/commerce-cart-block.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/commerce/cart/commerce-cart-block.html.twig");
    }
}
