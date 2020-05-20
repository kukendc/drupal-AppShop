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

/* themes/martis/templates/layout/page.html.twig */
class __TwigTemplate_0b5498365db6f21cf473acdedadea55480ae6210c3594418d8ce6289b3b7cc17 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 48, "if" => 50];
        $filters = ["escape" => 46, "striptags" => 71, "render" => 71];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape', 'striptags', 'render'],
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
        // line 46
        echo "<div id=\"wrapper\" class=\"wrapper ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_style"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_layout"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_style"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_style"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_scheme"] ?? null)), "html", null, true);
        echo "\">
<div class=\"layout-wrap ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_header"] ?? null)), "html", null, true);
        echo "\">
\t";
        // line 48
        $this->loadTemplate("@martis/layout/header.html.twig", "themes/martis/templates/layout/page.html.twig", 48)->display($context);
        // line 49
        echo "\t
\t";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "content_wide_top", [])) {
            // line 51
            echo "\t<!-- Start content top -->
\t<section id=\"content-wide-top\" class=\"content-wide\">        
\t\t";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_wide_top", [])), "html", null, true);
            echo "
\t</section>
\t<!-- End content top -->
\t";
        }
        // line 57
        echo "\t
\t";
        // line 58
        if ( !($context["is_front"] ?? null)) {
            // line 59
            echo "\t";
            if (($this->getAttribute(($context["page"] ?? null), "page_title", []) || $this->getAttribute(($context["page"] ?? null), "breadcrumb", []))) {
                // line 60
                echo "\t<!-- Page Title -->
\t<section id=\"page-title\" class=\"page-title ";
                // line 61
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_theme"] ?? null)), "html", null, true);
                echo "\">
\t\t<div class=\"container\">
\t\t\t";
                // line 63
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
                echo "
\t\t\t";
                // line 64
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
                echo "
\t\t</div>
\t</section>
\t  <!-- End Page Title -->
\t";
            }
            // line 69
            echo "\t";
        }
        // line 70
        echo "
\t";
        // line 71
        if ((( !twig_test_empty(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "content", [])))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", []))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) {
            // line 72
            echo "\t<!-- layout -->
\t<section id=\"page-wrapper\" class=\"page-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row content-layout\">
\t\t\t  ";
            // line 76
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", []))) {
                // line 77
                echo "\t\t\t  <!--- Start Left SideBar -->
\t\t\t\t<div class =\"";
                // line 78
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sideleftcol"] ?? null)), "html", null, true);
                echo " sidebar\">
\t\t\t\t\t";
                // line 79
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  ";
            }
            // line 83
            echo "
\t\t\t  ";
            // line 84
            if ( !twig_test_empty(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "content", []))))) {
                // line 85
                echo "\t\t\t  <!--- Start content -->
\t\t\t\t<div class=\"";
                // line 86
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentcol"] ?? null)), "html", null, true);
                echo " main-content\">
\t\t\t\t\t";
                // line 87
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End content -->
\t\t\t  ";
            }
            // line 91
            echo "
\t\t\t  ";
            // line 92
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
                // line 93
                echo "\t\t\t  <!--- Start Right SideBar -->
\t\t\t\t<div class=\"";
                // line 94
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["siderightcol"] ?? null)), "html", null, true);
                echo " sidebar\">
\t\t\t\t\t";
                // line 95
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  ";
            }
            // line 99
            echo "\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End layout -->
\t";
        }
        // line 104
        echo "
\t";
        // line 105
        if ($this->getAttribute(($context["page"] ?? null), "content_wide", [])) {
            // line 106
            echo "\t<!-- Start content wide -->
\t<section id=\"content-wide\" class=\"content-wide\">        
\t\t";
            // line 108
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_wide", [])), "html", null, true);
            echo "
\t</section>
\t<!-- End content wide -->
\t";
        }
        // line 112
        echo "\t

\t";
        // line 114
        if ((($this->getAttribute(($context["page"] ?? null), "content_widget_first", []) || $this->getAttribute(($context["page"] ?? null), "content_widget_second", [])) || $this->getAttribute(($context["page"] ?? null), "content_widget_third", []))) {
            // line 115
            echo "\t  <!-- start Content Widget -->
\t  <section class=\"content-widget\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t";
            // line 119
            if ($this->getAttribute(($context["page"] ?? null), "content_widget_first", [])) {
                // line 120
                echo "\t\t\t<!-- Start Content Widget First Region -->
\t\t\t<div class=\"";
                // line 121
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["widgetfirstcol"] ?? null)), "html", null, true);
                echo " content-widget-section\">
\t\t\t\t";
                // line 122
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_widget_first", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Content Widget First Region -->
\t\t\t";
            }
            // line 126
            echo "
\t\t\t";
            // line 127
            if ($this->getAttribute(($context["page"] ?? null), "content_widget_second", [])) {
                // line 128
                echo "\t\t\t<!-- Start Content Widget Second Region -->
\t\t\t<div class=\"";
                // line 129
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["widgetsecondcol"] ?? null)), "html", null, true);
                echo " content-widget-section\">
\t\t\t\t";
                // line 130
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_widget_second", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Content Widget Second Region -->
\t\t\t";
            }
            // line 134
            echo "
\t\t\t";
            // line 135
            if ($this->getAttribute(($context["page"] ?? null), "content_widget_third", [])) {
                // line 136
                echo "\t\t\t<!-- Start Content Widget Third Region -->
\t\t\t<div class=\"";
                // line 137
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["widgetthirdcol"] ?? null)), "html", null, true);
                echo " content-widget-section\">
\t\t\t\t";
                // line 138
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_widget_third", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Content Widget Third Region -->
\t\t\t";
            }
            // line 141
            echo "\t\t
\t\t\t</div>
\t\t</div>
\t  </section>
\t  <!--End Content Widget -->
\t";
        }
        // line 147
        echo "
\t";
        // line 148
        $this->loadTemplate("@martis/layout/footer.html.twig", "themes/martis/templates/layout/page.html.twig", 148)->display($context);
        // line 149
        echo "</div>
</div>
";
        // line 151
        if (($context["preloader"] ?? null)) {
            // line 152
            echo "<div class=\"preloader\">
\t<div class=\"preloader-spinner\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 152,  292 => 151,  288 => 149,  286 => 148,  283 => 147,  275 => 141,  268 => 138,  264 => 137,  261 => 136,  259 => 135,  256 => 134,  249 => 130,  245 => 129,  242 => 128,  240 => 127,  237 => 126,  230 => 122,  226 => 121,  223 => 120,  221 => 119,  215 => 115,  213 => 114,  209 => 112,  202 => 108,  198 => 106,  196 => 105,  193 => 104,  186 => 99,  179 => 95,  175 => 94,  172 => 93,  170 => 92,  167 => 91,  160 => 87,  156 => 86,  153 => 85,  151 => 84,  148 => 83,  141 => 79,  137 => 78,  134 => 77,  132 => 76,  126 => 72,  124 => 71,  121 => 70,  118 => 69,  110 => 64,  106 => 63,  101 => 61,  98 => 60,  95 => 59,  93 => 58,  90 => 57,  83 => 53,  79 => 51,  77 => 50,  74 => 49,  72 => 48,  68 => 47,  55 => 46,);
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
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - messages: Status and error messages. Should be displayed prominently.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div id=\"wrapper\" class=\"wrapper {{ btn_style }} {{ site_layout }} {{ header_style }} {{ page_title_style }} {{ color_scheme }}\">
<div class=\"layout-wrap {{ sticky_header }}\">
\t{% include '@martis/layout/header.html.twig' %}
\t
\t{% if page.content_wide_top %}
\t<!-- Start content top -->
\t<section id=\"content-wide-top\" class=\"content-wide\">        
\t\t{{ page.content_wide_top }}
\t</section>
\t<!-- End content top -->
\t{% endif %}
\t
\t{%  if not is_front %}
\t{%  if page.page_title or page.breadcrumb %}
\t<!-- Page Title -->
\t<section id=\"page-title\" class=\"page-title {{ page_title_theme }}\">
\t\t<div class=\"container\">
\t\t\t{{ page.page_title }}
\t\t\t{{ page.breadcrumb }}
\t\t</div>
\t</section>
\t  <!-- End Page Title -->
\t{% endif %}
\t{% endif %}

\t{% if page.content|render|striptags is not empty or page.sidebar_first|render or page.sidebar_second|render %}
\t<!-- layout -->
\t<section id=\"page-wrapper\" class=\"page-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row content-layout\">
\t\t\t  {% if page.sidebar_first|render %}
\t\t\t  <!--- Start Left SideBar -->
\t\t\t\t<div class =\"{{sideleftcol}} sidebar\">
\t\t\t\t\t{{ page.sidebar_first }}
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  {% endif %}

\t\t\t  {% if page.content|render|striptags is not empty %}
\t\t\t  <!--- Start content -->
\t\t\t\t<div class=\"{{contentcol}} main-content\">
\t\t\t\t\t{{ page.content }}
\t\t\t\t</div>
\t\t\t  <!---End content -->
\t\t\t  {% endif %}

\t\t\t  {% if page.sidebar_second|render %}
\t\t\t  <!--- Start Right SideBar -->
\t\t\t\t<div class=\"{{siderightcol}} sidebar\">
\t\t\t\t\t{{ page.sidebar_second }}
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  {% endif %}
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End layout -->
\t{% endif %}

\t{% if page.content_wide %}
\t<!-- Start content wide -->
\t<section id=\"content-wide\" class=\"content-wide\">        
\t\t{{ page.content_wide }}
\t</section>
\t<!-- End content wide -->
\t{% endif %}
\t

\t{% if page.content_widget_first or page.content_widget_second or page.content_widget_third %}
\t  <!-- start Content Widget -->
\t  <section class=\"content-widget\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t{% if page.content_widget_first %}
\t\t\t<!-- Start Content Widget First Region -->
\t\t\t<div class=\"{{ widgetfirstcol }} content-widget-section\">
\t\t\t\t{{ page.content_widget_first }}
\t\t\t</div>
\t\t\t<!-- End Content Widget First Region -->
\t\t\t{% endif %}

\t\t\t{% if page.content_widget_second %}
\t\t\t<!-- Start Content Widget Second Region -->
\t\t\t<div class=\"{{ widgetsecondcol }} content-widget-section\">
\t\t\t\t{{ page.content_widget_second }}
\t\t\t</div>
\t\t\t<!-- End Content Widget Second Region -->
\t\t\t{% endif %}

\t\t\t{% if page.content_widget_third %}
\t\t\t<!-- Start Content Widget Third Region -->
\t\t\t<div class=\"{{ widgetthirdcol }} content-widget-section\">
\t\t\t\t{{ page.content_widget_third }}
\t\t\t</div>
\t\t\t<!-- End Content Widget Third Region -->
\t\t\t{% endif %}\t\t
\t\t\t</div>
\t\t</div>
\t  </section>
\t  <!--End Content Widget -->
\t{% endif %}

\t{% include '@martis/layout/footer.html.twig' %}
</div>
</div>
{% if preloader %}
<div class=\"preloader\">
\t<div class=\"preloader-spinner\"></div>
</div>
{% endif %}", "themes/martis/templates/layout/page.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/layout/page.html.twig");
    }
}
