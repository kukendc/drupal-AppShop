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

/* themes/martis/templates/commerce/commerce-product.html.twig */
class __TwigTemplate_084fa8538e4072ee1e102525e2645c2b7dc7d69ca283da36dbe32fef31f44558 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 23, "if" => 28];
        $filters = ["escape" => 29, "trim" => 46, "striptags" => 46, "render" => 46, "t" => 50, "without" => 78];
        $functions = ["attach_library" => 29];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'trim', 'striptags', 'render', 't', 'without'],
                ['attach_library']
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
        // line 23
        $context["classes"] = [0 => "product-post"];
        // line 27
        echo "
";
        // line 28
        if ((($context["product_image_effect"] ?? null) == "product-image-colorbox")) {
            // line 29
            echo "\t";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("martis/product-colorbox"), "html", null, true);
            echo "
";
        }
        // line 31
        echo "
<div";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

\t<div class=\"row\">
\t\t<div class=\"col-md-6 product-image-wrap ";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_image_effect"] ?? null)), "html", null, true);
        echo "\">\t\t
\t\t\t<div class=\"product-image-full-wrap\">
\t\t\t\t<div class=\"product-image-full\">";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_field_image", [])), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t<div class=\"piczoomer\"></div>
\t\t\t<div class=\"piclist\"></div>\t
\t\t</div>
\t\t<div class=\"col-md-6 product-content-wrap\">
\t\t\t<div class=\"product-title\">";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_title", [])), "html", null, true);
        echo "</div>
\t\t\t<div class=\"product-ratings\">";
        // line 44
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_ratings", [])), "html", null, true);
        echo "</div>
\t\t\t<div class=\"product-price-wrap\">
\t\t\t\t<div class=\"product-price\">";
        // line 46
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
        echo "</div>";
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "variation_list_price", []))))) {
            echo " <del class=\"product-old-price\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_list_price", [])), "html", null, true);
            echo "</del>";
        }
        // line 47
        echo "\t\t\t</div>

\t\t\t<div class=\"clearfix product-stock\">
\t\t\t<div class=\"field-label stock-availability\">";
        // line 50
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Availability:"));
        echo "</div>
\t\t\t<div class=\"available-stock\">";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("In stock"));
        echo "</div>
\t\t\t<div class=\"out-of-stock\">";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Out of stock"));
        echo "</div>
\t\t\t";
        // line 54
        echo "\t\t\t</div>
\t\t\t
\t\t\t<div class=\"product-short-description\">";
        // line 56
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_short_description", [])), "html", null, true);
        echo "</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"product-meta\">
\t\t\t<div class=\"product-meta-item product-sku\">";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_sku", [])), "html", null, true);
        echo "</div>
\t\t\t<div class=\"product-meta-item product-brand\">";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_product_brand", [])), "html", null, true);
        echo "</div>
\t\t\t<div class=\"product-meta-item product-category\">";
        // line 62
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_product_category", [])), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"product-variation-wrap clearfix\">
\t\t\t\t<div class=\"product-add-cart\">";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variations", [])), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"product-meta\">
\t\t\t<div class=\"product-icon-wrap\">
\t\t\t\t<div class=\"product-icon product-add-wishlist\">";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "flag_wishlist", [])), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"product-icon product-add-compare\">";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "flag_compare", [])), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t\t</div>";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["product"] ?? null)), "variation_attributes", "variation_price", "variation_list_price", "variation_title", "variations", "field_short_description", "variation_field_image", "variation_sku", "variation_field_stock_level", "field_product_review", "body", "field_product_brand", "field_product_category", "flag_wishlist", "flag_compare", "field_badge", "field_special_category", "field_ratings"), "html", null, true);
        // line 79
        echo "</div>
\t</div>
\t
\t<div class=\"margin-top-50 product-info clearfix\">
\t\t<ul class=\"nav nav-tabs\">
\t\t  <li class=\"active\"><a data-toggle=\"tab\" href=\"#product-detail\">";
        // line 84
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description"));
        echo "</a></li>
\t\t  <li><a data-toggle=\"tab\" href=\"#product-review\">";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Reviews"));
        echo "</a></li>
\t\t</ul>

\t\t<div class=\"tab-content\">
\t\t  <div id=\"product-detail\" class=\"tab-pane active\">
\t\t\t<div class=\"product-tab-item\">
\t\t\t<h2 class=\"margin-bottom-20\">";
        // line 91
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Product Description"));
        echo "</h2>
\t\t\t<div>";
        // line 92
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "body", [])), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t  </div>
\t\t  <div id=\"product-review\" class=\"tab-pane fade\">
\t\t\t";
        // line 96
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_product_review", [])), "html", null, true);
        echo "
\t\t  </div>
\t\t</div>
\t</div>

</div>";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/commerce/commerce-product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 96,  195 => 92,  191 => 91,  182 => 85,  178 => 84,  171 => 79,  169 => 78,  164 => 73,  160 => 72,  152 => 67,  144 => 62,  140 => 61,  136 => 60,  129 => 56,  125 => 54,  121 => 52,  117 => 51,  113 => 50,  108 => 47,  100 => 46,  95 => 44,  91 => 43,  82 => 37,  77 => 35,  71 => 32,  68 => 31,  62 => 29,  60 => 28,  57 => 27,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 *
 * Default product template.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - product: The rendered product fields.
 *   Use 'product' to print them all, or print a subset such as
 *   'product.title'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ product|without('title') }}
 *   @endcode
 * - product_entity: The product entity.
 * - product_url: The product URL.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
\t'product-post',
  ]
%}

{% if product_image_effect == \"product-image-colorbox\" %}
\t{{ attach_library('martis/product-colorbox') }}
{% endif %}

<div{{ attributes.addClass(classes) }}>

\t<div class=\"row\">
\t\t<div class=\"col-md-6 product-image-wrap {{ product_image_effect }}\">\t\t
\t\t\t<div class=\"product-image-full-wrap\">
\t\t\t\t<div class=\"product-image-full\">{{ product.variation_field_image }}</div>
\t\t\t</div>
\t\t\t<div class=\"piczoomer\"></div>
\t\t\t<div class=\"piclist\"></div>\t
\t\t</div>
\t\t<div class=\"col-md-6 product-content-wrap\">
\t\t\t<div class=\"product-title\">{{ product.variation_title }}</div>
\t\t\t<div class=\"product-ratings\">{{ product.field_ratings }}</div>
\t\t\t<div class=\"product-price-wrap\">
\t\t\t\t<div class=\"product-price\">{{ product.variation_price }}</div>{% if product.variation_list_price|render|striptags|trim %} <del class=\"product-old-price\">{{ product.variation_list_price }}</del>{% endif %}
\t\t\t</div>

\t\t\t<div class=\"clearfix product-stock\">
\t\t\t<div class=\"field-label stock-availability\">{{'Availability:'|t}}</div>
\t\t\t<div class=\"available-stock\">{{'In stock'|t}}</div>
\t\t\t<div class=\"out-of-stock\">{{'Out of stock'|t}}</div>
\t\t\t{# {{ product.variation_field_stock_level }} #}
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"product-short-description\">{{ product.field_short_description }}</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"product-meta\">
\t\t\t<div class=\"product-meta-item product-sku\">{{ product.variation_sku }}</div>
\t\t\t<div class=\"product-meta-item product-brand\">{{ product.field_product_brand }}</div>
\t\t\t<div class=\"product-meta-item product-category\">{{ product.field_product_category }}</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t<div class=\"product-variation-wrap clearfix\">
\t\t\t\t<div class=\"product-add-cart\">{{ product.variations }}</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"product-meta\">
\t\t\t<div class=\"product-icon-wrap\">
\t\t\t\t<div class=\"product-icon product-add-wishlist\">{{ product.flag_wishlist }}</div>
\t\t\t\t<div class=\"product-icon product-add-compare\">{{ product.flag_compare }}</div>
\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t
\t\t\t{{- product|without('variation_attributes','variation_price','variation_list_price','variation_title','variations','field_short_description','variation_field_image','variation_sku','variation_field_stock_level','field_product_review','body','field_product_brand','field_product_category','flag_wishlist','flag_compare','field_badge','field_special_category','field_ratings') -}}\t
\t\t</div>
\t</div>
\t
\t<div class=\"margin-top-50 product-info clearfix\">
\t\t<ul class=\"nav nav-tabs\">
\t\t  <li class=\"active\"><a data-toggle=\"tab\" href=\"#product-detail\">{{ 'Description'|t }}</a></li>
\t\t  <li><a data-toggle=\"tab\" href=\"#product-review\">{{ 'Reviews'|t }}</a></li>
\t\t</ul>

\t\t<div class=\"tab-content\">
\t\t  <div id=\"product-detail\" class=\"tab-pane active\">
\t\t\t<div class=\"product-tab-item\">
\t\t\t<h2 class=\"margin-bottom-20\">{{ 'Product Description'|t }}</h2>
\t\t\t<div>{{ product.body }}</div>
\t\t\t</div>
\t\t  </div>
\t\t  <div id=\"product-review\" class=\"tab-pane fade\">
\t\t\t{{ product.field_product_review }}
\t\t  </div>
\t\t</div>
\t</div>

</div>", "themes/martis/templates/commerce/commerce-product.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/commerce/commerce-product.html.twig");
    }
}
