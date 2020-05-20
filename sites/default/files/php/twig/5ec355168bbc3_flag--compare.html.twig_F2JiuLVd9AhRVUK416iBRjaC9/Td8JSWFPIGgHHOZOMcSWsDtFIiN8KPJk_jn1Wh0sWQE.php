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

/* themes/martis/templates/flag/flag--compare.html.twig */
class __TwigTemplate_989789ff54bfe90299787b7b3c8393c922441fd4a2221282a1d67e2854b47010 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["spaceless" => 14, "if" => 19, "set" => 20];
        $filters = ["escape" => 16, "join" => 36];
        $functions = ["attach_library" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['spaceless', 'if', 'set'],
                ['escape', 'join'],
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
        // line 14
        ob_start();
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("flag/flag.link"), "html", null, true);
        echo "

";
        // line 19
        if ((($context["action"] ?? null) == "unflag")) {
            // line 20
            echo "    ";
            $context["action_class"] = "action-unflag";
        } else {
            // line 22
            echo "    ";
            $context["action_class"] = "action-flag";
        }
        // line 24
        echo "
";
        // line 26
        $context["classes"] = [0 => "flag", 1 => ("flag-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 28
($context["flag"] ?? null), "id", [], "method"))), 2 => ((("flag-" . $this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 29
($context["flag"] ?? null), "id", [], "method"))) . "-") . $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["flaggable"] ?? null), "id", [], "method"))), 3 =>         // line 30
($context["action_class"] ?? null)];
        // line 32
        echo "
";
        // line 34
        $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "setAttribute", [0 => "rel", 1 => "nofollow"], "method");
        // line 35
        echo "
<div class=\"";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_join_filter($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), " "), "html", null, true);
        echo "\"><a";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "flag-link"], "method")), "html", null, true);
        echo "><i class=\"ti-control-shuffle\"></i><span class=\"flag-title\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</span></a></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/flag/flag--compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 36,  85 => 35,  83 => 34,  80 => 32,  78 => 30,  77 => 29,  76 => 28,  75 => 26,  72 => 24,  68 => 22,  64 => 20,  62 => 19,  57 => 16,  55 => 14,);
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
 * Default theme implementation for flag links.
 *
 * Available variables:
 * - attributes: HTML attributes for the link element.
 * - title: The flag link title.
 * - action: 'flag' or 'unflag'
 * - flag: The flag object.
 * - flaggable: The flaggable entity.
 */
#}
{% spaceless %}
{# Attach the flag CSS library.#}
{{ attach_library('flag/flag.link') }}

{# Depending on the flag action, set the appropriate action class. #}
{% if action == 'unflag' %}
    {% set action_class = 'action-unflag' %}
{% else %}
    {% set action_class = 'action-flag' %}
{% endif %}

{# Set the remaining Flag CSS classes. #}
{% set classes = [
'flag',
'flag-' ~ flag.id(),
'flag-' ~ flag.id() ~ '-' ~ flaggable.id(),
action_class
] %}

{# Set nofollow to prevent search bots from crawling anonymous flag links #}
{% set attributes = attributes.setAttribute('rel', 'nofollow') %}

<div class=\"{{classes|join(' ')}}\"><a{{ attributes.addClass('flag-link') }}><i class=\"ti-control-shuffle\"></i><span class=\"flag-title\">{{ title }}</span></a></div>
{% endspaceless %}
", "themes/martis/templates/flag/flag--compare.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/flag/flag--compare.html.twig");
    }
}
