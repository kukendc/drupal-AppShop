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

/* themes/martis/templates/field/field--node--field-heading-text--slide.html.twig */
class __TwigTemplate_836e7b6099e4809ae4bd5c2ef36dc1cec4e85b4228d36bde470efc870d30545c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 21, "for" => 23];
        $filters = ["clean_class" => 10, "escape" => 24];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
        // line 8
        $context["classes"] = [0 => "field", 1 => ("field-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 10
($context["field_name"] ?? null)))), 2 => ("field-label-" . $this->sandbox->ensureToStringAllowed(        // line 11
($context["label_display"] ?? null)))];
        // line 15
        $context["title_classes"] = [0 => "field-label", 1 => (((        // line 17
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 20
        echo "
";
        // line 21
        if (($context["label_hidden"] ?? null)) {
            // line 22
            echo "  ";
            if (($context["multiple"] ?? null)) {
                // line 23
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 24
                    echo "        <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["classes"] ?? null), 1 => "field-item"], "method")), "html", null, true);
                    echo " data-animation-in=\"slideInRight\" data-animation-out=\"animate-out slideOutUp\"><div class=\"heading-text-content\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    echo "</div></div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "  ";
            } else {
                // line 27
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 28
                    echo "      <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "field-item"], "method")), "html", null, true);
                    echo " data-animation-in=\"slideInRight\" data-animation-out=\"animate-out slideOutUp\"><div class=\"heading-text-content\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    echo "</div></div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "  ";
            }
        } else {
            // line 32
            echo "  <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
    <div";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
    ";
            // line 34
            if (($context["multiple"] ?? null)) {
                // line 35
                echo "      <div class=\"field-items\">
    ";
            }
            // line 37
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 38
                echo "      <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => "field-item"], "method")), "html", null, true);
                echo " data-animation-in=\"slideInRight\" data-animation-out=\"animate-out slideOutUp\"><div class=\"heading-text-content\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                echo "</div></div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 41
                echo "      </div>
    ";
            }
            // line 43
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/field/field--node--field-heading-text--slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  145 => 41,  142 => 40,  131 => 38,  126 => 37,  122 => 35,  120 => 34,  114 => 33,  109 => 32,  105 => 30,  94 => 28,  89 => 27,  86 => 26,  75 => 24,  70 => 23,  67 => 22,  65 => 21,  62 => 20,  60 => 17,  59 => 15,  57 => 11,  56 => 10,  55 => 8,);
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
 * Theme override for a field.
 */
#}
{%
  set classes = [
    'field',
    'field-' ~ field_name|clean_class,
    'field-label-' ~ label_display,
  ]
%}
{%
  set title_classes = [
    'field-label',
    label_display == 'visually_hidden' ? 'visually-hidden',
  ]
%}

{% if label_hidden %}
  {% if multiple %}
      {% for item in items %}
        <div{{ item.attributes.addClass(classes, 'field-item') }} data-animation-in=\"slideInRight\" data-animation-out=\"animate-out slideOutUp\"><div class=\"heading-text-content\">{{ item.content }}</div></div>
      {% endfor %}
  {% else %}
    {% for item in items %}
      <div{{ attributes.addClass(classes, 'field-item') }} data-animation-in=\"slideInRight\" data-animation-out=\"animate-out slideOutUp\"><div class=\"heading-text-content\">{{ item.content }}</div></div>
    {% endfor %}
  {% endif %}
{% else %}
  <div{{ attributes.addClass(classes) }}>
    <div{{ title_attributes.addClass(title_classes) }}>{{ label }}</div>
    {% if multiple %}
      <div class=\"field-items\">
    {% endif %}
    {% for item in items %}
      <div{{ item.attributes.addClass('field-item') }} data-animation-in=\"slideInRight\" data-animation-out=\"animate-out slideOutUp\"><div class=\"heading-text-content\">{{ item.content }}</div></div>
    {% endfor %}
    {% if multiple %}
      </div>
    {% endif %}
  </div>
{% endif %}
", "themes/martis/templates/field/field--node--field-heading-text--slide.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/field/field--node--field-heading-text--slide.html.twig");
    }
}
