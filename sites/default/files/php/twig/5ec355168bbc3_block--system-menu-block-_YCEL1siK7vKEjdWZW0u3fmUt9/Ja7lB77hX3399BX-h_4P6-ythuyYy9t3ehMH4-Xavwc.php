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

/* themes/martis/templates/block/block--system-menu-block--account.html.twig */
class __TwigTemplate_6ceaeb3e74d1813c8f6a103a07438abc3388e6f68b498b8daca66a370e4d34fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 35, "if" => 42, "block" => 65];
        $filters = ["clean_class" => 37, "clean_id" => 41, "escape" => 42, "without" => 42, "t" => 66];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'clean_id', 'escape', 'without', 't'],
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
        // line 35
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 37
($context["configuration"] ?? null), "provider", [])))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 38
($context["plugin_id"] ?? null))))];
        // line 41
        $context["heading_id"] = \Drupal\Component\Utility\Html::getId($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", [])));
        // line 42
        echo "<nav aria-labelledby=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "role", "aria-labelledby"), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo "  ";
        if (($context["block_style"] ?? null)) {
            echo "style=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_style"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo ">
<div class=\"container-wrap clearfix menu-wrap\">
  ";
        // line 45
        echo "  ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", [])) {
            // line 46
            echo "    ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method");
            // line 47
            echo "  ";
        }
        // line 48
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
\t";
        // line 49
        if (($context["label"] ?? null)) {
            // line 50
            echo "\t<div class=\"block-title-wrap clearfix\">
\t<div class=\"block-title-content\">
\t";
            // line 52
            if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                // line 53
                echo "\t";
                if (($context["block_subtitle"] ?? null)) {
                    echo "<h5 class=\"block-subtitle\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                    echo "</h5>";
                }
                // line 54
                echo "\t<h2";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "</h2>
\t";
            } else {
                // line 56
                echo "\t<h2";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "</h2>
\t";
                // line 57
                if (($context["block_subtitle"] ?? null)) {
                    echo "<h5 class=\"block-subtitle\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                    echo "</h5>";
                }
                // line 58
                echo "\t";
            }
            // line 59
            echo "\t</div>
\t</div>
\t";
        }
        // line 62
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 65
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 71
        echo "</div>
</nav>";
    }

    // line 65
    public function block_content($context, array $blocks = [])
    {
        // line 66
        echo "\t<button type=\"button\" class=\"dropdown-toggle header-icon account-icon\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Account"));
        echo "</button>
    <div id=\"user-account-block-wrap\" class=\"dropdown-menu user-account-block-wrap\">
\t";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
\t</div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/block/block--system-menu-block--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 68,  151 => 66,  148 => 65,  143 => 71,  140 => 65,  134 => 62,  129 => 59,  126 => 58,  120 => 57,  113 => 56,  105 => 54,  98 => 53,  96 => 52,  92 => 50,  90 => 49,  85 => 48,  82 => 47,  79 => 46,  76 => 45,  62 => 42,  60 => 41,  58 => 38,  57 => 37,  56 => 35,);
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
 * Theme override for a menu block.
 *
 * Available variables:
 * - plugin_id: The ID of the block implementation.
 * - label: The configured label of the block if visible.
 * - configuration: A list of the block's configuration values.
 *   - label: The configured label for the block.
 *   - label_display: The display settings for the label.
 *   - provider: The module or other provider that provided this block plugin.
 *   - Block plugin specific settings will also be stored here.
 * - content: The content of this block.
 * - attributes: HTML attributes for the containing element.
 *   - id: A valid HTML ID and guaranteed unique.
 * - title_attributes: HTML attributes for the title element.
 * - content_attributes: HTML attributes for the content element.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 *
 * Headings should be used on navigation menus that consistently appear on
 * multiple pages. When this menu block's label is configured to not be
 * displayed, it is automatically made invisible using the 'visually-hidden' CSS
 * class, which still keeps it visible for screen-readers and assistive
 * technology. Headings allow screen-reader and keyboard only users to navigate
 * to or skip the links.
 * See http://juicystudio.com/article/screen-readers-display-none.php and
 * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.
 */
#}
{%
set classes = [
'block',
'block-' ~ configuration.provider|clean_class,
'block-' ~ plugin_id|clean_class,
]
%}
{% set heading_id = attributes.id|clean_id %}
<nav aria-labelledby=\"{{ heading_id }}\"{{ attributes|without('role', 'aria-labelledby').addClass(classes) }}  {% if block_style %}style=\"{{ block_style }}\"{% endif %}>
<div class=\"container-wrap clearfix menu-wrap\">
  {# Label. If not displayed, we still provide it for screen readers. #}
  {% if not configuration.label_display %}
    {% set title_attributes = title_attributes.addClass('visually-hidden') %}
  {% endif %}
  {{ title_prefix }}
\t{% if label %}
\t<div class=\"block-title-wrap clearfix\">
\t<div class=\"block-title-content\">
\t{% if block_title_style == 'block-title-2' %}
\t{% if block_subtitle %}<h5 class=\"block-subtitle\">{{ block_subtitle }}</h5>{% endif %}
\t<h2{{ title_attributes.addClass('block-title') }}>{{ label }}</h2>
\t{% else %}
\t<h2{{ title_attributes.addClass('block-title') }}>{{ label }}</h2>
\t{% if block_subtitle %}<h5 class=\"block-subtitle\">{{ block_subtitle }}</h5>{% endif %}
\t{% endif %}
\t</div>
\t</div>
\t{% endif %}
  {{ title_suffix }}

  {# Menu. #}
  {% block content %}
\t<button type=\"button\" class=\"dropdown-toggle header-icon account-icon\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{{ 'Account'|t }}</button>
    <div id=\"user-account-block-wrap\" class=\"dropdown-menu user-account-block-wrap\">
\t{{ content }}
\t</div>
  {% endblock %}
</div>
</nav>", "themes/martis/templates/block/block--system-menu-block--account.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/block/block--system-menu-block--account.html.twig");
    }
}
