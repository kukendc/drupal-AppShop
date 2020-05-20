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

/* @martis/layout/header.html.twig */
class __TwigTemplate_5d616df3fe4e48ead2070fc2990d374016f5ee9f5f608614803a32c16ac636d6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 5];
        $filters = ["escape" => 6];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 2
        echo "
<!-- Header Start -->
<header class=\"header\">
\t";
        // line 5
        if (($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", []))) {
            // line 6
            echo "\t<div class=\"header-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_theme"] ?? null)), "html", null, true);
            echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">\t
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
            // line 10
            if ($this->getAttribute(($context["page"] ?? null), "header_top_first", [])) {
                // line 11
                echo "\t\t\t\t<div class=\"header-top-first\">
\t\t\t\t";
                // line 12
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_first", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 15
            echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
            // line 17
            if ($this->getAttribute(($context["page"] ?? null), "header_top_second", [])) {
                // line 18
                echo "\t\t\t\t<div class=\"header-top-second\">
\t\t\t\t";
                // line 19
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_second", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 22
            echo "\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 27
        echo "\t\t
\t<div class=\"container-wrap header-wrap\">
\t\t";
        // line 29
        if (((((($this->getAttribute(($context["page"] ?? null), "branding", []) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_search", [])) || $this->getAttribute(($context["page"] ?? null), "header_right", [])) || $this->getAttribute(($context["page"] ?? null), "main_menu", [])) || $this->getAttribute(($context["page"] ?? null), "header_cart", []))) {
            // line 30
            echo "\t\t<div class=\"navbar header-center\">
\t\t\t<div class=\"container\">
\t\t\t\t";
            // line 32
            if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
                // line 33
                echo "\t\t\t\t<div class=\"header-side navbar-brand\">
\t\t\t\t\t";
                // line 34
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t";
            if (($this->getAttribute(($context["page"] ?? null), "header", []) || $this->getAttribute(($context["page"] ?? null), "header_search", []))) {
                // line 38
                echo "\t\t\t\t<div class=\"header-main-wrap\">
\t\t\t\t\t";
                // line 39
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 40
                    echo "\t\t\t\t\t<div class=\"header-item header-main\">
\t\t\t\t\t";
                    // line 41
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 44
                echo "
\t\t\t\t\t";
                // line 45
                if ($this->getAttribute(($context["page"] ?? null), "header_search", [])) {
                    // line 46
                    echo "\t\t\t\t\t<div id=\"header-search\" class=\"collapse header-item header-search\">
\t\t\t\t\t";
                    // line 47
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_search", [])), "html", null, true);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t";
            if ((($this->getAttribute(($context["page"] ?? null), "header_right", []) || $this->getAttribute(($context["page"] ?? null), "main_menu", [])) || $this->getAttribute(($context["page"] ?? null), "header_cart", []))) {
                // line 53
                echo "\t\t\t\t<div class=\"header-side header-right-wrap\">
\t\t\t\t\t";
                // line 54
                if ($this->getAttribute(($context["page"] ?? null), "header_right", [])) {
                    // line 55
                    echo "\t\t\t\t\t<div class=\"header-item header-right\">
\t\t\t\t\t\t";
                    // line 56
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_right", [])), "html", null, true);
                    echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 58
                echo "\t
\t\t\t\t\t
\t\t\t\t\t";
                // line 60
                if (($this->getAttribute(($context["page"] ?? null), "header_cart", []) || $this->getAttribute(($context["page"] ?? null), "main_menu", []))) {
                    // line 61
                    echo "\t\t\t\t\t<div class=\"header-item header-element\">
\t\t\t\t\t
\t\t\t\t\t";
                    // line 63
                    if ($this->getAttribute(($context["page"] ?? null), "header_search", [])) {
                        // line 64
                        echo "\t\t\t\t\t<button class=\"header-element-item search-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#header-search\" aria-expanded=\"false\" aria-controls=\"header-search\">
\t\t\t\t\t\t<i class=\"ti-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t";
                    }
                    // line 67
                    echo "\t
\t\t\t\t\t
\t\t\t\t\t";
                    // line 69
                    if ($this->getAttribute(($context["page"] ?? null), "header_cart", [])) {
                        // line 70
                        echo "\t\t\t\t\t<div class=\"header-element-item header-cart ";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_icon_theme"] ?? null)), "html", null, true);
                        echo "\">
\t\t\t\t\t\t";
                        // line 71
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_cart", [])), "html", null, true);
                        echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 74
                    echo "
\t\t\t\t\t";
                    // line 75
                    if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
                        // line 76
                        echo "\t\t\t\t\t<button class=\"navbar-toggler nav-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<i class=\"ti-menu\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 84
            echo "\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 87
        echo "\t\t
\t\t";
        // line 88
        if ((($this->getAttribute(($context["page"] ?? null), "main_menu", []) || $this->getAttribute(($context["page"] ?? null), "header_category_menu", [])) || $this->getAttribute(($context["page"] ?? null), "main_menu_right", []))) {
            // line 89
            echo "\t\t<div class=\"header-menu\">
\t\t<div class=\"navbar navbar-expand-md nav-menu\">
\t\t\t<div class=\"container p-0\">
\t\t\t\t";
            // line 92
            if ($this->getAttribute(($context["page"] ?? null), "header_category_menu", [])) {
                // line 93
                echo "\t\t\t\t<div id=\"main-menu-left\" class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenuleftcol"] ?? null)), "html", null, true);
                echo " main-menu-left\">
\t\t\t\t\t";
                // line 94
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_category_menu", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t";
            if ($this->getAttribute(($context["page"] ?? null), "main_menu", [])) {
                // line 98
                echo "\t\t\t\t<div id=\"main-menu\" class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenucol"] ?? null)), "html", null, true);
                echo " collapse navbar-collapse primary-menu ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_align"] ?? null)), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 99
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 102
            echo "
\t\t\t\t";
            // line 103
            if ($this->getAttribute(($context["page"] ?? null), "main_menu_right", [])) {
                // line 104
                echo "\t\t\t\t<div id=\"main-menu-right\" class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenurightcol"] ?? null)), "html", null, true);
                echo " main-menu-right\">
\t\t\t\t\t";
                // line 105
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "main_menu_right", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 107
            echo "\t
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t";
        }
        // line 112
        echo "\t</div>
</header>
<!-- Header End -->";
    }

    public function getTemplateName()
    {
        return "@martis/layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 112,  290 => 107,  284 => 105,  279 => 104,  277 => 103,  274 => 102,  268 => 99,  261 => 98,  258 => 97,  252 => 94,  247 => 93,  245 => 92,  240 => 89,  238 => 88,  235 => 87,  230 => 84,  226 => 82,  222 => 80,  216 => 76,  214 => 75,  211 => 74,  205 => 71,  200 => 70,  198 => 69,  194 => 67,  188 => 64,  186 => 63,  182 => 61,  180 => 60,  176 => 58,  170 => 56,  167 => 55,  165 => 54,  162 => 53,  159 => 52,  155 => 50,  149 => 47,  146 => 46,  144 => 45,  141 => 44,  135 => 41,  132 => 40,  130 => 39,  127 => 38,  124 => 37,  118 => 34,  115 => 33,  113 => 32,  109 => 30,  107 => 29,  103 => 27,  96 => 22,  90 => 19,  87 => 18,  85 => 17,  81 => 15,  75 => 12,  72 => 11,  70 => 10,  62 => 6,  60 => 5,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @martis theme header #}

<!-- Header Start -->
<header class=\"header\">
\t{% if page.header_top_first or page.header_top_second %}
\t<div class=\"header-top {{ header_top_theme }}\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">\t
\t\t\t<div class=\"col-md-6\">
\t\t\t\t{% if page.header_top_first %}
\t\t\t\t<div class=\"header-top-first\">
\t\t\t\t{{ page.header_top_first }}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t{% if page.header_top_second %}
\t\t\t\t<div class=\"header-top-second\">
\t\t\t\t{{ page.header_top_second }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% endif %}
\t\t
\t<div class=\"container-wrap header-wrap\">
\t\t{% if page.branding or page.header or page.header_search or page.header_right or page.main_menu or page.header_cart %}
\t\t<div class=\"navbar header-center\">
\t\t\t<div class=\"container\">
\t\t\t\t{% if page.branding %}
\t\t\t\t<div class=\"header-side navbar-brand\">
\t\t\t\t\t{{ page.branding }}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if page.header or page.header_search %}
\t\t\t\t<div class=\"header-main-wrap\">
\t\t\t\t\t{% if page.header %}
\t\t\t\t\t<div class=\"header-item header-main\">
\t\t\t\t\t{{ page.header }}
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if page.header_search %}
\t\t\t\t\t<div id=\"header-search\" class=\"collapse header-item header-search\">
\t\t\t\t\t{{ page.header_search }}
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if page.header_right or page.main_menu or page.header_cart %}
\t\t\t\t<div class=\"header-side header-right-wrap\">
\t\t\t\t\t{% if page.header_right %}
\t\t\t\t\t<div class=\"header-item header-right\">
\t\t\t\t\t\t{{ page.header_right }}\t
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}\t
\t\t\t\t\t
\t\t\t\t\t{% if page.header_cart or page.main_menu %}
\t\t\t\t\t<div class=\"header-item header-element\">
\t\t\t\t\t
\t\t\t\t\t{% if page.header_search %}
\t\t\t\t\t<button class=\"header-element-item search-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#header-search\" aria-expanded=\"false\" aria-controls=\"header-search\">
\t\t\t\t\t\t<i class=\"ti-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t{% endif %}\t
\t\t\t\t\t
\t\t\t\t\t{% if page.header_cart %}
\t\t\t\t\t<div class=\"header-element-item header-cart {{ cart_icon_theme }}\">
\t\t\t\t\t\t{{ page.header_cart }}
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if page.main_menu %}
\t\t\t\t\t<button class=\"navbar-toggler nav-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<i class=\"ti-menu\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t\t{% endif %}
\t\t
\t\t{% if page.main_menu or page.header_category_menu or page.main_menu_right %}
\t\t<div class=\"header-menu\">
\t\t<div class=\"navbar navbar-expand-md nav-menu\">
\t\t\t<div class=\"container p-0\">
\t\t\t\t{% if page.header_category_menu %}
\t\t\t\t<div id=\"main-menu-left\" class=\"{{mainmenuleftcol}} main-menu-left\">
\t\t\t\t\t{{ page.header_category_menu }}
\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t{% if page.main_menu %}
\t\t\t\t<div id=\"main-menu\" class=\"{{mainmenucol}} collapse navbar-collapse primary-menu {{ nav_align }}\">
\t\t\t\t\t{{ page.main_menu }}
\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t{% if page.main_menu_right %}
\t\t\t\t<div id=\"main-menu-right\" class=\"{{mainmenurightcol}} main-menu-right\">
\t\t\t\t\t{{ page.main_menu_right }}
\t\t\t\t</div>
\t\t\t\t{% endif %}\t
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t{% endif %}
\t</div>
</header>
<!-- Header End -->", "@martis/layout/header.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/layout/header.html.twig");
    }
}
