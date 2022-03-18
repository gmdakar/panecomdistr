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

/* themes/wwf9/templates/page.html.twig */
class __TwigTemplate_e31d2056f724c59aa7165b556c3c97d424dacba13705d2c47cf27abf7677cb91 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'internal_banner' => [$this, 'block_internal_banner'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 79, "block" => 299];
        $filters = ["escape" => 76];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
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
        // line 74
        echo "<style>
  .path-frontpage .banner:after {
    top: ";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page_banner_separator_position"] ?? null)), "html", null, true);
        echo "px;
  }
</style>
";
        // line 79
        if ($this->getAttribute(($context["page"] ?? null), "slideout", [])) {
            // line 80
            echo "  ";
            // line 81
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 83
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 85
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideout", [])), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 89
            echo "  </div>
  ";
            // line 91
            echo "
  ";
            // line 93
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"><i class=\"fas fa-bars\"></i></button>
  ";
        }
        // line 96
        echo "
";
        // line 98
        echo "<div class=\"page-container\">
    
    ";
        // line 100
        if ($this->getAttribute(($context["page"] ?? null), "top", [])) {
            // line 101
            echo "    ";
            // line 102
            echo "    <div class=\"top clearfix\">
      <div class=\"container\">
       <div class=\"container\">
         <div class=\"row\">
         <div class=\"clearfix top__section\">
                ";
            // line 107
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top", [])), "html", null, true);
            echo "
        </div>
    </div>
</div>
          </div>
        </div>
    ";
            // line 114
            echo "  ";
        }
        // line 115
        echo "
  ";
        // line 116
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", [])) || $this->getAttribute(($context["page"] ?? null), "header_first", [])) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
            // line 117
            echo "    ";
            // line 118
            echo "    <div class=\"header-container\">

      ";
            // line 120
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
                // line 121
                echo "        ";
                // line 122
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 123
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 125
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 126
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 127
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 128
                echo ">
              <div class=\"row\">
                ";
                // line 130
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) {
                    // line 131
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 133
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 134
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 137
                    echo "                  </div>
                ";
                }
                // line 139
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])) {
                    // line 140
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 142
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 143
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 146
                    echo "                  </div>
                ";
                }
                // line 148
                echo "              </div>
            </div>
            ";
                // line 151
                echo "          </div>
        </div>
        ";
                // line 154
                echo "      ";
            }
            // line 155
            echo "

      ";
            // line 157
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", []) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", []))) {
                // line 158
                echo "        ";
                // line 159
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 160
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 162
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 164
                if ($this->getAttribute(($context["page"] ?? null), "header_third", [])) {
                    // line 165
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 167
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 168
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_third", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 171
                    echo "                  </div>
                ";
                }
                // line 173
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
                    // line 174
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 176
                    echo "                    <div class=\"clearfix header__section header-first\">
                      ";
                    // line 177
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 180
                    echo "                  </div>
                ";
                }
                // line 182
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 183
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 185
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 186
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 189
                    echo "                  </div>
                ";
                }
                // line 191
                echo "              </div>
            </div>
            ";
                // line 194
                echo "          </div>
        </header>
        ";
                // line 197
                echo "      ";
            }
            // line 198
            echo "



      ";
            // line 202
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", []))) {
                // line 203
                echo "        ";
                // line 204
                echo "        <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 205
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 207
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 208
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 209
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 210
                echo ">
              <div class=\"row\">
                ";
                // line 212
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", [])) {
                    // line 213
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 215
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 216
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 219
                    echo "                  </div>
                ";
                }
                // line 221
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", [])) {
                    // line 222
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 224
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 225
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 228
                    echo "                  </div>
                ";
                }
                // line 230
                echo "              </div>
            </div>
            ";
                // line 233
                echo "          </div>
        </div>
        ";
                // line 236
                echo "      ";
            }
            // line 237
            echo "


    </div>
    ";
            // line 242
            echo "  ";
        }
        // line 243
        echo "
  ";
        // line 244
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 245
            echo "    ";
            // line 246
            echo "    <div ";
            if (($context["banner_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix banner ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 247
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 249
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"banner__section\">
                ";
            // line 253
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 259
            echo "      </div>
    </div>
    ";
            // line 262
            echo "  ";
        }
        // line 263
        echo "
  ";
        // line 264
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", [])) {
            // line 265
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 269
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "system_messages", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 275
        echo "
  ";
        // line 276
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 277
            echo "    ";
            // line 278
            echo "    <div ";
            if (($context["content_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 279
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 281
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 282
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 283
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 284
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top__section\">
                ";
            // line 288
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 294
            echo "      </div>
    </div>
    ";
            // line 297
            echo "  ";
        }
        // line 298
        echo "
  ";
        // line 299
        $this->displayBlock('internal_banner', $context, $blocks);
        // line 301
        echo "
  ";
        // line 302
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])) {
            // line 303
            echo "    ";
            // line 304
            echo "    <div ";
            if (($context["content_top_highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 305
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 307
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 308
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 309
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 310
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 314
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 320
            echo "      </div>
    </div>
    ";
            // line 323
            echo "  ";
        }
        // line 324
        echo "
  ";
        // line 326
        echo "  <div ";
        if (($context["main_content_id"] ?? null)) {
            echo "id=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null)), "html", null, true);
        echo "\">
    <div class=\"container\">
      <div class=\"clearfix main-content__container\">
        <div class=\"row\">
          <section class=\"";
        // line 330
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 332
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
              ";
        // line 333
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 334
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null)), "html", null, true);
            echo "\"
              ";
        }
        // line 335
        echo ">
              ";
        // line 336
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 337
            echo "                ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
              ";
        }
        // line 339
        echo "            </div>
            ";
        // line 341
        echo "          </section>
          ";
        // line 342
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 343
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 345
            echo "              <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 346
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 347
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 348
            echo ">
                ";
            // line 349
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 352
            echo "            </aside>
          ";
        }
        // line 354
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 355
            echo "            <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null)), "html", null, true);
            echo "\">
              ";
            // line 357
            echo "              <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                ";
            // line 358
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 359
                echo "                  data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                ";
            }
            // line 360
            echo ">
                ";
            // line 361
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
              </section>
              ";
            // line 364
            echo "            </aside>
          ";
        }
        // line 366
        echo "        </div>
      </div>
    </div>
  </div>
  ";
        // line 371
        echo "
  ";
        // line 372
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", []))) {
            // line 373
            echo "    ";
            // line 374
            echo "    <div ";
            if (($context["content_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 375
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 377
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 378
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 379
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 380
            echo ">
          <div class=\"row\">
            ";
            // line 382
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])) {
                // line 383
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 385
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 386
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 389
                echo "              </div>
            ";
            }
            // line 391
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])) {
                // line 392
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 394
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 395
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 398
                echo "              </div>
            ";
            }
            // line 400
            echo "          </div>
        </div>
        ";
            // line 403
            echo "      </div>
    </div>
    ";
            // line 406
            echo "  ";
        }
        // line 407
        echo "
  ";
        // line 408
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 409
            echo "    ";
            // line 410
            echo "    <div ";
            if (($context["featured_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 411
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 413
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 414
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 415
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 416
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 420
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 426
            echo "      </div>
    </div>
    ";
            // line 429
            echo "  ";
        }
        // line 430
        echo "
  ";
        // line 431
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 432
            echo "    ";
            // line 433
            echo "    <div ";
            if (($context["featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 434
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 436
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 437
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 438
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 439
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 443
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 449
            echo "      </div>
    </div>
    ";
            // line 452
            echo "  ";
        }
        // line 453
        echo "
  ";
        // line 454
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])) {
            // line 455
            echo "    ";
            // line 456
            echo "    <div ";
            if (($context["featured_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 457
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 459
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 460
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 461
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 462
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 466
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 472
            echo "      </div>
    </div>
    ";
            // line 475
            echo "  ";
        }
        // line 476
        echo "
  ";
        // line 477
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", [])) {
            // line 478
            echo "    ";
            // line 479
            echo "    <div ";
            if (($context["sub_featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 480
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 482
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 483
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 484
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 485
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 489
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 495
            echo "      </div>
    </div>
    ";
            // line 498
            echo "  ";
        }
        // line 499
        echo "
  ";
        // line 500
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])) {
            // line 501
            echo "    ";
            // line 502
            echo "    <div ";
            if (($context["highlighted_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 503
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 505
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 506
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 507
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 508
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 512
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 518
            echo "      </div>
    </div>
    ";
            // line 521
            echo "  ";
        }
        // line 522
        echo "
  ";
        // line 523
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 524
            echo "    ";
            // line 525
            echo "    <div ";
            if (($context["highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 526
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 528
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 529
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 530
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 531
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 535
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 541
            echo "      </div>
    </div>
    ";
            // line 544
            echo "  ";
        }
        // line 545
        echo "
  ";
        // line 546
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", []))) {
            // line 547
            echo "    ";
            // line 548
            echo "    <div ";
            if (($context["footer_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 549
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 551
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 552
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 553
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 554
            echo ">
          <div class=\"row\">
            ";
            // line 556
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])) {
                // line 557
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 559
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 560
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 563
                echo "              </div>
            ";
            }
            // line 565
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])) {
                // line 566
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 568
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 569
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 572
                echo "              </div>
            ";
            }
            // line 574
            echo "          </div>
        </div>
        ";
            // line 577
            echo "      </div>
    </div>
    ";
            // line 580
            echo "  ";
        }
        // line 581
        echo "
  ";
        // line 582
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", []))) {
            // line 583
            echo "    ";
            // line 584
            echo "    <footer ";
            if (($context["footer_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 585
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 588
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 589
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 591
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 592
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 593
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 594
                echo ">
                  ";
                // line 595
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 598
                echo "              </div>
            ";
            }
            // line 600
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 601
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 603
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 604
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 605
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 606
                echo ">
                  ";
                // line 607
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 610
                echo "              </div>
            ";
            }
            // line 612
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 613
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 614
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 616
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 617
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 618
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 619
                echo ">
                  ";
                // line 620
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 623
                echo "              </div>
            ";
            }
            // line 625
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 626
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 627
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 629
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 630
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 631
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 632
                echo ">
                  ";
                // line 633
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 636
                echo "              </div>
            ";
            }
            // line 638
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
                // line 639
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 641
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 642
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 643
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 644
                echo ">
                  ";
                // line 645
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 648
                echo "              </div>
            ";
            }
            // line 650
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 655
            echo "  ";
        }
        // line 656
        echo "
  ";
        // line 657
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 658
            echo "    ";
            // line 659
            echo "    <div ";
            if (($context["footer_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 660
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 662
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 666
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 672
            echo "      </div>
    </div>
    ";
            // line 675
            echo "  ";
        }
        // line 676
        echo "
  ";
        // line 677
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 678
            echo "    ";
            // line 679
            echo "    <div ";
            if (($context["subfooter_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix subfooter ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 680
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 682
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 684
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])) {
                // line 685
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 687
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 688
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 691
                echo "              </div>
            ";
            }
            // line 693
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 694
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 696
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 697
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 700
                echo "              </div>
            ";
            }
            // line 702
            echo "          </div>
        </div>
        ";
            // line 705
            echo "      </div>
    </div>
    ";
            // line 708
            echo "  ";
        }
        // line 709
        echo "
  ";
        // line 710
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 711
            echo "  ";
            // line 712
            echo "    <div class=\"to-top\"><i class=\"fas ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
            echo "\"></i></div>
  ";
            // line 714
            echo "  ";
        }
        // line 715
        echo "
</div>
";
    }

    // line 299
    public function block_internal_banner($context, array $blocks = [])
    {
        // line 300
        echo "  ";
    }

    public function getTemplateName()
    {
        return "themes/wwf9/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1643 => 300,  1640 => 299,  1634 => 715,  1631 => 714,  1626 => 712,  1624 => 711,  1622 => 710,  1619 => 709,  1616 => 708,  1612 => 705,  1608 => 702,  1604 => 700,  1599 => 697,  1596 => 696,  1591 => 694,  1588 => 693,  1584 => 691,  1579 => 688,  1576 => 687,  1571 => 685,  1569 => 684,  1565 => 682,  1561 => 680,  1545 => 679,  1543 => 678,  1541 => 677,  1538 => 676,  1535 => 675,  1531 => 672,  1523 => 666,  1517 => 662,  1513 => 660,  1497 => 659,  1495 => 658,  1493 => 657,  1490 => 656,  1487 => 655,  1481 => 650,  1477 => 648,  1472 => 645,  1469 => 644,  1463 => 643,  1461 => 642,  1456 => 641,  1451 => 639,  1448 => 638,  1444 => 636,  1439 => 633,  1436 => 632,  1430 => 631,  1428 => 630,  1423 => 629,  1418 => 627,  1416 => 626,  1409 => 625,  1405 => 623,  1400 => 620,  1397 => 619,  1391 => 618,  1389 => 617,  1384 => 616,  1379 => 614,  1377 => 613,  1372 => 612,  1368 => 610,  1363 => 607,  1360 => 606,  1354 => 605,  1352 => 604,  1347 => 603,  1342 => 601,  1339 => 600,  1335 => 598,  1330 => 595,  1327 => 594,  1321 => 593,  1319 => 592,  1314 => 591,  1309 => 589,  1307 => 588,  1301 => 585,  1285 => 584,  1283 => 583,  1281 => 582,  1278 => 581,  1275 => 580,  1271 => 577,  1267 => 574,  1263 => 572,  1258 => 569,  1255 => 568,  1250 => 566,  1247 => 565,  1243 => 563,  1238 => 560,  1235 => 559,  1230 => 557,  1228 => 556,  1224 => 554,  1218 => 553,  1216 => 552,  1211 => 551,  1207 => 549,  1190 => 548,  1188 => 547,  1186 => 546,  1183 => 545,  1180 => 544,  1176 => 541,  1168 => 535,  1162 => 531,  1156 => 530,  1154 => 529,  1149 => 528,  1145 => 526,  1130 => 525,  1128 => 524,  1126 => 523,  1123 => 522,  1120 => 521,  1116 => 518,  1108 => 512,  1102 => 508,  1096 => 507,  1094 => 506,  1089 => 505,  1085 => 503,  1070 => 502,  1068 => 501,  1066 => 500,  1063 => 499,  1060 => 498,  1056 => 495,  1048 => 489,  1042 => 485,  1036 => 484,  1034 => 483,  1029 => 482,  1025 => 480,  1010 => 479,  1008 => 478,  1006 => 477,  1003 => 476,  1000 => 475,  996 => 472,  988 => 466,  982 => 462,  976 => 461,  974 => 460,  969 => 459,  965 => 457,  950 => 456,  948 => 455,  946 => 454,  943 => 453,  940 => 452,  936 => 449,  928 => 443,  922 => 439,  916 => 438,  914 => 437,  909 => 436,  905 => 434,  890 => 433,  888 => 432,  886 => 431,  883 => 430,  880 => 429,  876 => 426,  868 => 420,  862 => 416,  856 => 415,  854 => 414,  849 => 413,  845 => 411,  830 => 410,  828 => 409,  826 => 408,  823 => 407,  820 => 406,  816 => 403,  812 => 400,  808 => 398,  803 => 395,  800 => 394,  795 => 392,  792 => 391,  788 => 389,  783 => 386,  780 => 385,  775 => 383,  773 => 382,  769 => 380,  763 => 379,  761 => 378,  756 => 377,  752 => 375,  737 => 374,  735 => 373,  733 => 372,  730 => 371,  724 => 366,  720 => 364,  715 => 361,  712 => 360,  706 => 359,  704 => 358,  697 => 357,  692 => 355,  689 => 354,  685 => 352,  680 => 349,  677 => 348,  671 => 347,  669 => 346,  662 => 345,  657 => 343,  655 => 342,  652 => 341,  649 => 339,  643 => 337,  641 => 336,  638 => 335,  632 => 334,  630 => 333,  623 => 332,  619 => 330,  605 => 326,  602 => 324,  599 => 323,  595 => 320,  587 => 314,  581 => 310,  575 => 309,  573 => 308,  568 => 307,  564 => 305,  549 => 304,  547 => 303,  545 => 302,  542 => 301,  540 => 299,  537 => 298,  534 => 297,  530 => 294,  522 => 288,  516 => 284,  510 => 283,  508 => 282,  503 => 281,  499 => 279,  486 => 278,  484 => 277,  482 => 276,  479 => 275,  470 => 269,  464 => 265,  462 => 264,  459 => 263,  456 => 262,  452 => 259,  444 => 253,  438 => 249,  434 => 247,  421 => 246,  419 => 245,  417 => 244,  414 => 243,  411 => 242,  405 => 237,  402 => 236,  398 => 233,  394 => 230,  390 => 228,  385 => 225,  382 => 224,  377 => 222,  374 => 221,  370 => 219,  365 => 216,  362 => 215,  357 => 213,  355 => 212,  351 => 210,  345 => 209,  343 => 208,  338 => 207,  334 => 205,  327 => 204,  325 => 203,  323 => 202,  317 => 198,  314 => 197,  310 => 194,  306 => 191,  302 => 189,  297 => 186,  294 => 185,  289 => 183,  286 => 182,  282 => 180,  277 => 177,  274 => 176,  269 => 174,  266 => 173,  262 => 171,  257 => 168,  254 => 167,  249 => 165,  247 => 164,  243 => 162,  239 => 160,  228 => 159,  226 => 158,  224 => 157,  220 => 155,  217 => 154,  213 => 151,  209 => 148,  205 => 146,  200 => 143,  197 => 142,  192 => 140,  189 => 139,  185 => 137,  180 => 134,  177 => 133,  172 => 131,  170 => 130,  166 => 128,  160 => 127,  158 => 126,  153 => 125,  149 => 123,  142 => 122,  140 => 121,  138 => 120,  134 => 118,  132 => 117,  130 => 116,  127 => 115,  124 => 114,  115 => 107,  108 => 102,  106 => 101,  104 => 100,  100 => 98,  97 => 96,  93 => 93,  90 => 91,  87 => 89,  81 => 85,  77 => 83,  70 => 81,  68 => 80,  66 => 79,  60 => 76,  56 => 74,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/wwf9/templates/page.html.twig", "/home/cloudpanel/htdocs/panecomdistr/themes/wwf9/templates/page.html.twig");
    }
}
