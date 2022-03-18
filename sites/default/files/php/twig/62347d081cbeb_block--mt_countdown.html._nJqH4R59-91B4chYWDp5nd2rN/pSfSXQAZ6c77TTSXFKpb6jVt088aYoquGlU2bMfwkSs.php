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

/* themes/custom/directoryplus/templates/block--mt_countdown.html.twig */
class __TwigTemplate_54281e828959ed9efefa69fb78410fb17a5803bf9ae20edf3e1a9c0a95ad389c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 37];
        $filters = ["escape" => 12, "t" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "block.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("block.html.twig", "themes/custom/directoryplus/templates/block--mt_countdown.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "  <style>

    .mt-count-down-block {
      background-color: ";
        // line 12
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "background", [])), "html", null, true);
        echo ";
    }
    .mt-count-down__title {
      color: ";
        // line 15
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "title_color", [])), "html", null, true);
        echo ";
    }
    .mt-count-down__notes {
      color: ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "notes_color", [])), "html", null, true);
        echo ";
    }
    .mt-count-down__message {
      color: ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "message_color", [])), "html", null, true);
        echo ";
    }
    .mt-count-down__hint {
      color: ";
        // line 24
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "message_color", [])), "html", null, true);
        echo ";
    }
    .mt-count-down__daysto {
      color: ";
        // line 27
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "notes_color", [])), "html", null, true);
        echo ";
    }
    .mt-count-down__button {
      background-color: ";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "button_background", [])), "html", null, true);
        echo ";
      color: ";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "button_color", [])), "html", null, true);
        echo ";
    }

  </style>
  <div class=\"";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "predefined_palettes", [])), "html", null, true);
        echo " mt-count-down mt-count-down-block\">

    ";
        // line 37
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "title", [])) {
            // line 38
            echo "      <div class=\"mt-count-down__title\">
        ";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "title", []))));
            echo "
      </div>
    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "prompt_message", [])) {
            // line 44
            echo "      <div class=\"mt-count-down__message\">
        ";
            // line 45
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "prompt_message", []))));
            echo "
      </div>
    ";
        }
        // line 48
        echo "
    <div class=\"mt-count-down__daysto\">
      <span class=\"mt-count-down__notes\">
        ";
        // line 51
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "days_to", [])) {
            // line 52
            echo "          ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "days_to", []))));
            echo "
        ";
        }
        // line 54
        echo "      </span>
      <div class=\"mt-count-down-slot\"></div>
    </div>

    ";
        // line 58
        if (($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "target_url", []) && $this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "dismiss_text", []))) {
            // line 59
            echo "      <a class=\"mt-count-down__button\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "target_url", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "dismiss_text", []))));
            echo "</a>
    ";
        }
        // line 61
        echo "
    ";
        // line 62
        if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "hint_text", [])) {
            // line 63
            echo "      <div class=\"mt-count-down__hint\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "#data", [], "array"), "hint_text", [])), "html", null, true);
            echo "</div>
    ";
        }
        // line 65
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/directoryplus/templates/block--mt_countdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 65,  183 => 63,  181 => 62,  178 => 61,  170 => 59,  168 => 58,  162 => 54,  156 => 52,  154 => 51,  149 => 48,  143 => 45,  140 => 44,  138 => 43,  135 => 42,  129 => 39,  126 => 38,  124 => 37,  119 => 35,  112 => 31,  108 => 30,  102 => 27,  96 => 24,  90 => 21,  84 => 18,  78 => 15,  72 => 12,  67 => 9,  64 => 8,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/directoryplus/templates/block--mt_countdown.html.twig", "/home/cloudpanel/htdocs/panecomdistr/themes/custom/directoryplus/templates/block--mt_countdown.html.twig");
    }
}
