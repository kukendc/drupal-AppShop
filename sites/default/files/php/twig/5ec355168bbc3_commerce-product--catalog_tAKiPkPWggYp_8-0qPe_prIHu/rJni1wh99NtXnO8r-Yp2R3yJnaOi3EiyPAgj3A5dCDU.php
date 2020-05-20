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

/* themes/martis/templates/commerce/commerce-product--catalog.html.twig */
class __TwigTemplate_4b96f4d28160258238faa9202a0f7ecba8b5ea511fdb3a36d09c24bf5aff1e43 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 23, "if" => 32];
        $filters = ["escape" => 27, "render" => 32, "first" => 35, "trim" => 57, "striptags" => 57, "t" => 68];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape', 'render', 'first', 'trim', 'striptags', 't'],
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
        // line 23
        $context["classes"] = [0 => "product-teaser"];
        // line 27
        echo "<div class=\"product-teaser-wrap ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_teaser_attribute"] ?? null)), "html", null, true);
        echo "\">
\t<div";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
\t<div class=\"product-teaser-bg\"></div>
\t<div class=\"product-teaser-container\">
\t\t<div class=\"post-image product-image\">
\t\t";
        // line 32
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "variation_field_image", []))) {
            // line 33
            echo "\t\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "field_badge", []))) {
                // line 34
                echo "\t\t\t\t<div class=\"product-badge\">
\t\t\t\t";
                // line 35
                if (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["product"] ?? null), "field_badge", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "new")) {
                    echo " 
\t\t\t\t<span class=\"badge-label badge-new\">New</span>
\t\t\t\t";
                } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(                // line 37
($context["product"] ?? null), "field_badge", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "sale")) {
                    echo " 
\t\t\t\t<span class=\"badge-label badge-sale\">Sale</span>
\t\t\t\t";
                } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(                // line 39
($context["product"] ?? null), "field_badge", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "hot")) {
                    echo " 
\t\t\t\t<span class=\"badge-label badge-hot\">Hot</span>
\t\t\t\t";
                }
                // line 42
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 44
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_field_image", [])), "html", null, true);
        }
        // line 46
        echo "\t\t<div class=\"product-icon-wrap\">
\t\t\t<div class=\"product-icon product-view\"><a href=\"";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\" class=\"flag-link use-ajax\" data-dialog-options=\"{&quot;width&quot;:680}\" data-dialog-type=\"modal\" title=\"Quick View\"><i class=\"ti-search\"></i><span class=\"flag-title\">Quick View</span></a></div>
\t\t\t<div class=\"product-icon product-add-wishlist\">";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "flag_wishlist", [])), "html", null, true);
        echo "</div>
\t\t\t<div class=\"product-icon product-add-compare\">";
        // line 49
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "flag_compare", [])), "html", null, true);
        echo "</div>
\t\t</div>
\t\t</div>
\t\t<div class=\"product-meta-wrap\">
\t\t\t<div class=\"product-meta\">
\t\t\t\t<div class=\"product-ratings\">";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_ratings", [])), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"product-title\"><a class=\"product-title-link\" href=\"";
        // line 55
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "title", [])), "html", null, true);
        echo "</a></div>
\t\t\t\t<div class=\"product-price-wrap\">
\t\t\t\t\t";
        // line 57
        if (twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "variation_list_price", []))))) {
            // line 58
            echo "\t\t\t\t\t\t<div class=\"product-old-price\"><del>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_list_price", [])), "html", null, true);
            echo "</del></div>
\t\t\t\t\t";
        }
        // line 60
        echo "\t\t\t\t\t<div class=\"product-price\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"product-variation-wrap\">
\t\t\t\t<div class=\"product-add-cart\">
\t\t\t\t<div class=\"has-no-option-variation\">";
        // line 66
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variations", [])), "html", null, true);
        echo "</div>
\t\t\t\t<div class=\"form-actions product-select has-option-variation\">
\t\t\t\t<a class=\"button\" href=\"";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Select Option"));
        echo "</a>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t";
        // line 72
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["product"] ?? null), "field_short_description", []))) {
            // line 73
            echo "\t\t\t\t<div class=\"product-desc\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "field_short_description", [])), "html", null, true);
            echo "</div>
\t\t\t\t";
        }
        // line 75
        echo "\t\t\t</div>
\t\t
\t\t</div>
\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/commerce/commerce-product--catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 75,  164 => 73,  162 => 72,  153 => 68,  148 => 66,  138 => 60,  132 => 58,  130 => 57,  123 => 55,  119 => 54,  111 => 49,  107 => 48,  103 => 47,  100 => 46,  97 => 44,  93 => 42,  87 => 39,  82 => 37,  77 => 35,  74 => 34,  71 => 33,  69 => 32,  62 => 28,  57 => 27,  55 => 23,);
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
\t'product-teaser',
  ]
%}
<div class=\"product-teaser-wrap {{ product_teaser_attribute }}\">
\t<div{{ attributes.addClass(classes) }}>
\t<div class=\"product-teaser-bg\"></div>
\t<div class=\"product-teaser-container\">
\t\t<div class=\"post-image product-image\">
\t\t{% if product.variation_field_image|render %}
\t\t\t{% if product.field_badge|render %}
\t\t\t\t<div class=\"product-badge\">
\t\t\t\t{% if product.field_badge['#items'].getValue()|first.value == \"new\" %} 
\t\t\t\t<span class=\"badge-label badge-new\">New</span>
\t\t\t\t{% elseif product.field_badge['#items'].getValue()|first.value == \"sale\" %} 
\t\t\t\t<span class=\"badge-label badge-sale\">Sale</span>
\t\t\t\t{% elseif product.field_badge['#items'].getValue()|first.value == \"hot\" %} 
\t\t\t\t<span class=\"badge-label badge-hot\">Hot</span>
\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t{% endif %}\t
\t\t{{- product.variation_field_image -}}
\t\t{% endif %}
\t\t<div class=\"product-icon-wrap\">
\t\t\t<div class=\"product-icon product-view\"><a href=\"{{ product_url }}\" class=\"flag-link use-ajax\" data-dialog-options=\"{&quot;width&quot;:680}\" data-dialog-type=\"modal\" title=\"Quick View\"><i class=\"ti-search\"></i><span class=\"flag-title\">Quick View</span></a></div>
\t\t\t<div class=\"product-icon product-add-wishlist\">{{- product.flag_wishlist -}}</div>
\t\t\t<div class=\"product-icon product-add-compare\">{{- product.flag_compare -}}</div>
\t\t</div>
\t\t</div>
\t\t<div class=\"product-meta-wrap\">
\t\t\t<div class=\"product-meta\">
\t\t\t\t<div class=\"product-ratings\">{{- product.field_ratings -}}</div>
\t\t\t\t<div class=\"product-title\"><a class=\"product-title-link\" href=\"{{- product_url -}}\">{{- product.title -}}</a></div>
\t\t\t\t<div class=\"product-price-wrap\">
\t\t\t\t\t{% if product.variation_list_price|render|striptags|trim %}
\t\t\t\t\t\t<div class=\"product-old-price\"><del>{{- product.variation_list_price -}}</del></div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"product-price\">{{- product.variation_price -}}</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"product-variation-wrap\">
\t\t\t\t<div class=\"product-add-cart\">
\t\t\t\t<div class=\"has-no-option-variation\">{{- product.variations -}}</div>
\t\t\t\t<div class=\"form-actions product-select has-option-variation\">
\t\t\t\t<a class=\"button\" href=\"{{- product_url -}}\">{{ 'Select Option'|t }}</a>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t{% if product.field_short_description|render %}
\t\t\t\t<div class=\"product-desc\">{{- product.field_short_description -}}</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t
\t\t</div>
\t</div>
\t</div>
</div>", "themes/martis/templates/commerce/commerce-product--catalog.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/commerce/commerce-product--catalog.html.twig");
    }
}
