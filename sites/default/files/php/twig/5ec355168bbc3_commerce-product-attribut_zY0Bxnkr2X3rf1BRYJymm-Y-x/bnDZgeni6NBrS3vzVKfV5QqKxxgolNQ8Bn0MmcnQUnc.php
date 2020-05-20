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

/* themes/martis/templates/commerce/commerce-product-attribute-value.html.twig */
class __TwigTemplate_b95c5ec98a15ab63b043bde31824ca2192d96b0190cd20ad2a459ada295e3421 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 22];
        $filters = ["clean_class" => 24, "escape" => 27];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
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
        // line 22
        $context["classes"] = [0 => "product-attribute", 1 => ("product-attribute--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 24
($context["product_attribute_value_entity"] ?? null), "bundle", []))))];
        // line 27
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_attribute_value"] ?? null)), "html", null, true);
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/commerce/commerce-product-attribute-value.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 29,  62 => 28,  58 => 27,  56 => 24,  55 => 22,);
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
 * Default template for product attribute values.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - product_attribute_value: The rendered product attribute value fields.
 *   Use 'product_attribute_value' to print them all, or print a subset such as
 *   'product_attribute_value.name'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ product_attribute_value|without('name') }}
 *   @endcode
 * - product_attribute_value_entity: The product attribute value entity.
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
  'product-attribute',
  'product-attribute--' ~ product_attribute_value_entity.bundle|clean_class,
]
%}
<div{{ attributes.addClass(classes) }}>
  {{- product_attribute_value -}}
</div>
", "themes/martis/templates/commerce/commerce-product-attribute-value.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/commerce/commerce-product-attribute-value.html.twig");
    }
}
