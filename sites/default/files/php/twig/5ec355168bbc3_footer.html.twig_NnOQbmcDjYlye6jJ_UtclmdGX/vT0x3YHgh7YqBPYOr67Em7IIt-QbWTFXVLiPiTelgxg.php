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

/* @martis/layout/footer.html.twig */
class __TwigTemplate_96175582417f1f8025514ad06003865e596b124ca8b7698474a317df719d2bff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 4];
        $filters = ["escape" => 2];
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
        echo "<footer id=\"footer\" class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_theme"] ?? null)), "html", null, true);
        echo "\">
\t<!-- start Footer -->
\t";
        // line 4
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_forth", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", []))) {
            // line 5
            echo "\t  <div class=\"footer-widget\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t";
            // line 8
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 9
                echo "\t\t\t<!-- Start Footer First Region -->
\t\t\t<div class=\"";
                // line 10
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null)), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 11
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer First Region -->
\t\t\t";
            }
            // line 15
            echo "
\t\t\t";
            // line 16
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 17
                echo "\t\t\t<!-- Start Footer Second Region -->
\t\t\t<div class=\"";
                // line 18
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null)), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 19
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Second Region -->
\t\t\t";
            }
            // line 23
            echo "
\t\t\t";
            // line 24
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 25
                echo "\t\t\t<!-- Start Footer Third Region -->
\t\t\t<div class=\"";
                // line 26
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null)), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 27
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Third Region -->
\t\t\t";
            }
            // line 31
            echo "\t\t\t
\t\t\t";
            // line 32
            if ($this->getAttribute(($context["page"] ?? null), "footer_forth", [])) {
                // line 33
                echo "\t\t\t<!-- Start Footer Forth Region -->
\t\t\t<div class=\"";
                // line 34
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_forth_size"] ?? null)), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 35
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_forth", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Forth Region -->
\t\t\t";
            }
            // line 39
            echo "\t\t\t
\t\t\t";
            // line 40
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
                // line 41
                echo "\t\t\t<!-- Start Footer Fifth Region -->
\t\t\t<div class=\"";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_size"] ?? null)), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Fifth Region -->
\t\t\t";
            }
            // line 47
            echo "\t\t\t
\t\t\t";
            // line 48
            if ($this->getAttribute(($context["page"] ?? null), "footer_sixth", [])) {
                // line 49
                echo "\t\t\t<!-- Start Footer Sixth Region -->
\t\t\t<div class=\"";
                // line 50
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_sixth_size"] ?? null)), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 51
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_sixth", [])), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer SIXth Region -->
\t\t\t";
            }
            // line 54
            echo "\t\t\t
\t\t\t</div>
\t\t</div>
\t  </div>
\t";
        }
        // line 59
        echo "\t<!--End Footer -->

";
        // line 61
        if (($this->getAttribute(($context["page"] ?? null), "footer_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_bottom_second", []))) {
            // line 62
            echo "\t<div class=\"footer-bottom\">
\t  <div class=\"container\">
\t\t<div class=\"row\">
\t\t  ";
            // line 65
            if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_first", [])) {
                // line 66
                echo "\t\t  <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footerbottomcol"] ?? null)), "html", null, true);
                echo " footer-bottom-first\">
\t\t\t";
                // line 67
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom_first", [])), "html", null, true);
                echo "
\t\t  </div>
\t\t  ";
            }
            // line 70
            echo "\t\t  ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_bottom_second", [])) {
                // line 71
                echo "\t\t  <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footerbottomcol"] ?? null)), "html", null, true);
                echo " footer-bottom-second\">
\t\t\t";
                // line 72
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom_second", [])), "html", null, true);
                echo "
\t\t  </div>
\t\t  ";
            }
            // line 75
            echo "\t\t</div>
\t  </div>
\t</div>
";
        }
        // line 79
        echo "</footer>
";
        // line 80
        if (($context["scrolltop"] ?? null)) {
            // line 81
            echo "\t<div class=\"back-to-top\"><span class=\"ti-angle-up\"></span></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@martis/layout/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 81,  233 => 80,  230 => 79,  224 => 75,  218 => 72,  213 => 71,  210 => 70,  204 => 67,  199 => 66,  197 => 65,  192 => 62,  190 => 61,  186 => 59,  179 => 54,  172 => 51,  168 => 50,  165 => 49,  163 => 48,  160 => 47,  153 => 43,  149 => 42,  146 => 41,  144 => 40,  141 => 39,  134 => 35,  130 => 34,  127 => 33,  125 => 32,  122 => 31,  115 => 27,  111 => 26,  108 => 25,  106 => 24,  103 => 23,  96 => 19,  92 => 18,  89 => 17,  87 => 16,  84 => 15,  77 => 11,  73 => 10,  70 => 9,  68 => 8,  63 => 5,  61 => 4,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{# @file martis footer #}
<footer id=\"footer\" class=\"footer {{ footer_theme }}\">
\t<!-- start Footer -->
\t{% if page.footer_first or page.footer_second or page.footer_third or page.footer_forth or page.footer_fifth %}
\t  <div class=\"footer-widget\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t{% if page.footer_first %}
\t\t\t<!-- Start Footer First Region -->
\t\t\t<div class=\"{{ footer_first_size }} footer-widget-section\">
\t\t\t\t{{ page.footer_first }}
\t\t\t</div>
\t\t\t<!-- End Footer First Region -->
\t\t\t{% endif %}

\t\t\t{% if page.footer_second %}
\t\t\t<!-- Start Footer Second Region -->
\t\t\t<div class=\"{{ footer_second_size }} footer-widget-section\">
\t\t\t\t{{ page.footer_second }}
\t\t\t</div>
\t\t\t<!-- End Footer Second Region -->
\t\t\t{% endif %}

\t\t\t{% if page.footer_third %}
\t\t\t<!-- Start Footer Third Region -->
\t\t\t<div class=\"{{ footer_third_size }} footer-widget-section\">
\t\t\t\t{{ page.footer_third }}
\t\t\t</div>
\t\t\t<!-- End Footer Third Region -->
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if page.footer_forth %}
\t\t\t<!-- Start Footer Forth Region -->
\t\t\t<div class=\"{{ footer_forth_size }} footer-widget-section\">
\t\t\t\t{{ page.footer_forth }}
\t\t\t</div>
\t\t\t<!-- End Footer Forth Region -->
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if page.footer_fifth %}
\t\t\t<!-- Start Footer Fifth Region -->
\t\t\t<div class=\"{{ footer_fifth_size }} footer-widget-section\">
\t\t\t\t{{ page.footer_fifth }}
\t\t\t</div>
\t\t\t<!-- End Footer Fifth Region -->
\t\t\t{% endif %}
\t\t\t
\t\t\t{% if page.footer_sixth %}
\t\t\t<!-- Start Footer Sixth Region -->
\t\t\t<div class=\"{{ footer_sixth_size }} footer-widget-section\">
\t\t\t\t{{ page.footer_sixth }}
\t\t\t</div>
\t\t\t<!-- End Footer SIXth Region -->
\t\t\t{% endif %}\t\t\t
\t\t\t</div>
\t\t</div>
\t  </div>
\t{% endif %}
\t<!--End Footer -->

{% if page.footer_bottom_first or page.footer_bottom_second %}
\t<div class=\"footer-bottom\">
\t  <div class=\"container\">
\t\t<div class=\"row\">
\t\t  {% if page.footer_bottom_first %}
\t\t  <div class=\"{{ footerbottomcol }} footer-bottom-first\">
\t\t\t{{ page.footer_bottom_first }}
\t\t  </div>
\t\t  {% endif %}
\t\t  {% if page.footer_bottom_second %}
\t\t  <div class=\"{{ footerbottomcol }} footer-bottom-second\">
\t\t\t{{ page.footer_bottom_second }}
\t\t  </div>
\t\t  {% endif %}
\t\t</div>
\t  </div>
\t</div>
{% endif %}
</footer>
{% if scrolltop %}
\t<div class=\"back-to-top\"><span class=\"ti-angle-up\"></span></div>
{% endif %}", "@martis/layout/footer.html.twig", "/Users/work/localhost/drupal-AppShop/themes/martis/templates/layout/footer.html.twig");
    }
}
