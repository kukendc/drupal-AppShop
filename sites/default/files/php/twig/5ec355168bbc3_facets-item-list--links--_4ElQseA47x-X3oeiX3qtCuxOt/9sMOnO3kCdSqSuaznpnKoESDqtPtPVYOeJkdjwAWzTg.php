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

/* themes/martis/templates/facets/facets-item-list--links--category-menu.html.twig */
class __TwigTemplate_824319fe03cd5fe7a13787768a67dcdae29dee8426fb1f2d779b6237b927ec26 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 24, "set" => 25, "for" => 34];
        $filters = ["escape" => 29];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'for'],
                ['escape'],
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
        // line 24
        if ($this->getAttribute(($context["context"] ?? null), "list_style", [])) {
            // line 25
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ("item-list__" . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["context"] ?? null), "list_style", [])))], "method");
        }
        // line 27
        if ((($context["items"] ?? null) || ($context["empty"] ?? null))) {
            // line 28
            if ( !twig_test_empty(($context["title"] ?? null))) {
                // line 29
                echo "<h3>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
                echo "</h3>";
            }
            // line 32
            if (($context["items"] ?? null)) {
                // line 33
                echo "<";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "nav menu menu-parent facet-list"], "method")), "html", null, true);
                echo ">";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "<li";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "attributes", [])), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "value", [])), "html", null, true);
                    echo "</li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "</";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["list_type"] ?? null)), "html", null, true);
                echo ">";
            } else {
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null)), "html", null, true);
            }
        }
        // line 42
        echo "

";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/facets/facets-item-list--links--category-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  95 => 39,  90 => 37,  80 => 35,  76 => 34,  71 => 33,  69 => 32,  64 => 29,  62 => 28,  60 => 27,  57 => 25,  55 => 24,);
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
 * Default theme implementation for a facets item list.
 *
 * Available variables:
 * - items: A list of items. Each item contains:
 *   - attributes: HTML attributes to be applied to each list item.
 *   - value: The content of the list element.
 * - title: The title of the list.
 * - list_type: The tag for list element (\"ul\" or \"ol\").
 * - wrapper_attributes: HTML attributes to be applied to the list wrapper.
 * - attributes: HTML attributes to be applied to the list.
 * - empty: A message to display when there are no items. Allowed value is a
 *   string or render array.
 * - context: A list of contextual data associated with the list. May contain:
 *   - list_style: The ID of the widget plugin this facet uses.
 *
 * @see facets_preprocess_facets_item_list()
 *
 * @ingroup themeable
 */
#}
{% if context.list_style %}
  {%- set attributes = attributes.addClass('item-list__' ~ context.list_style) %}
{% endif %}
{% if items or empty %}
  {%- if title is not empty -%}
    <h3>{{ title }}</h3>
  {%- endif -%}

  {%- if items -%}
    <{{ list_type }}{{ attributes.addClass('nav menu menu-parent facet-list') }}>
      {%- for item in items -%}
        <li{{ item.attributes }}>{{ item.value }}</li>
      {%- endfor -%}
    </{{ list_type }}>
  {%- else -%}
    {{- empty -}}
  {%- endif -%}
{%- endif %}


", "themes/martis/templates/facets/facets-item-list--links--category-menu.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/facets/facets-item-list--links--category-menu.html.twig");
    }
}
