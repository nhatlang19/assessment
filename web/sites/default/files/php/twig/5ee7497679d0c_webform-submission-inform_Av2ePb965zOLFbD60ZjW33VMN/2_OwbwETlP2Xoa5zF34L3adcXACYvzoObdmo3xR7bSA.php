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

/* modules/contrib/webform/templates/webform-submission-information.html.twig */
class __TwigTemplate_cddd826a0febb9300fa965064176b87a954ac8b0da2580c7142aebb85283a02d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 33];
        $filters = ["t" => 34, "escape" => 34];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
        // line 33
        if (($context["submissions_view"] ?? null)) {
            // line 34
            echo "  <div><b>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Number"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["serial"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission ID"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sid"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission UUID"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uuid"] ?? null)), "html", null, true);
            echo "</div>
  ";
            // line 37
            if (($context["uri"] ?? null)) {
                // line 38
                echo "    <div><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission URI"));
                echo ":</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uri"] ?? null)), "html", null, true);
                echo "</div>
  ";
            }
            // line 40
            echo "  ";
            if (($context["token_view"] ?? null)) {
                // line 41
                echo "    <div><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission View"));
                echo ":</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token_view"] ?? null)), "html", null, true);
                echo "</div>
  ";
            }
            // line 43
            echo "  ";
            if (($context["token_update"] ?? null)) {
                // line 44
                echo "    <div><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Update"));
                echo ":</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["token_update"] ?? null)), "html", null, true);
                echo "</div>
  ";
            }
            // line 46
            echo "  <br />
  <div><b>";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Created"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Completed"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["completed"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Changed"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["changed"] ?? null)), "html", null, true);
            echo "</div>
  <br />
  <div><b>";
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Remote IP address"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["remote_addr"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 52
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submitted by"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_by"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Language"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language"] ?? null)), "html", null, true);
            echo "</div>
  <br />
  <div><b>";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Is draft"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["is_draft"] ?? null)), "html", null, true);
            echo "</div>
  ";
            // line 56
            if (($context["current_page"] ?? null)) {
                // line 57
                echo "    <div><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Current page"));
                echo ":</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["current_page"] ?? null)), "html", null, true);
                echo "</div>
  ";
            }
            // line 59
            echo "  <div><b>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Webform"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["webform"] ?? null)), "html", null, true);
            echo "</div>
  ";
            // line 60
            if (($context["submitted_to"] ?? null)) {
                // line 61
                echo "    <div><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submitted to"));
                echo ":</b> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted_to"] ?? null)), "html", null, true);
                echo "</div>
  ";
            }
            // line 63
            echo "  ";
            if (((($context["sticky"] ?? null) || ($context["locked"] ?? null)) || ($context["notes"] ?? null))) {
                // line 64
                echo "    <br />
    ";
                // line 65
                if (($context["sticky"] ?? null)) {
                    // line 66
                    echo "      <div><b>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Flagged"));
                    echo ":</b> ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky"] ?? null)), "html", null, true);
                    echo "</div>
    ";
                }
                // line 68
                echo "    ";
                if (($context["locked"] ?? null)) {
                    // line 69
                    echo "      <div><b>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Locked"));
                    echo ":</b> ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["locked"] ?? null)), "html", null, true);
                    echo "</div>
    ";
                }
                // line 71
                echo "    ";
                if (($context["notes"] ?? null)) {
                    // line 72
                    echo "      <div><b>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Notes"));
                    echo ":</b><br/>
      <pre>";
                    // line 73
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["notes"] ?? null)), "html", null, true);
                    echo "</pre>
      </div>
    ";
                }
                // line 76
                echo "  ";
            }
        } else {
            // line 78
            echo "  <div><b>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Number"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["serial"] ?? null)), "html", null, true);
            echo "</div>
  <div><b>";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Created"));
            echo ":</b> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["created"] ?? null)), "html", null, true);
            echo "</div>
";
        }
        // line 81
        echo "
";
        // line 82
        if (($context["delete"] ?? null)) {
            // line 83
            echo "  <br/>
  <div>";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["delete"] ?? null)), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/contrib/webform/templates/webform-submission-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 84,  246 => 83,  244 => 82,  241 => 81,  234 => 79,  227 => 78,  223 => 76,  217 => 73,  212 => 72,  209 => 71,  201 => 69,  198 => 68,  190 => 66,  188 => 65,  185 => 64,  182 => 63,  174 => 61,  172 => 60,  165 => 59,  157 => 57,  155 => 56,  149 => 55,  142 => 53,  136 => 52,  130 => 51,  123 => 49,  117 => 48,  111 => 47,  108 => 46,  100 => 44,  97 => 43,  89 => 41,  86 => 40,  78 => 38,  76 => 37,  70 => 36,  64 => 35,  57 => 34,  55 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/webform/templates/webform-submission-information.html.twig", "E:\\Wind\\Resources\\Projects\\Test\\GoBear\\assessment\\web\\modules\\contrib\\webform\\templates\\webform-submission-information.html.twig");
    }
}
