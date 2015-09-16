<?php

/* SonataMediaBundle:Block:block_gallery.html.twig */
class __TwigTemplate_e79e37aa6f4a3d7e59a4418e5812315bffa4b80a10781f03d56e2fd286eb9630 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format")) {
            // line 15
            echo "        ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title")) {
                // line 16
                echo "            <h3 class=\"sonata-media-block-media-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title"), "html", null, true);
                echo "</h3>
        ";
            }
            // line 18
            echo "
        ";
            // line 19
            echo "<div class='alert alert-default alert-info'>
    <strong>Ceci est un bloc de gallerie de médias. Vous pouvez le surcharger librement.</strong>
    <div>Ce fichier est localisé à l'emplacement <code>{$this->getTemplateName()}</code>.</div>
</div>";            // line 20
            echo "
        <div class=\"sonata-media-block-gallery-container\">
            <div id=\"sonata-media-block-gallery-";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
            echo "\" class=\"nivoGallery\">
                <ul>
                    ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 25
                echo "                        <li data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "type"), "html", null, true);
                echo "\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "title"), "html", null, true);
                echo "\" data-caption=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "caption"), "html", null, true);
                echo "\">
                            ";
                // line 26
                if (($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "type") == "image")) {
                    // line 27
                    echo "                                ";
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "media"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format"), array());
                    // line 28
                    echo "                            ";
                } elseif (($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "type") == "video")) {
                    // line 29
                    echo "                                ";
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "media"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format"), array());
                    // line 30
                    echo "                            ";
                }
                // line 31
                echo "                        </li>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 33
                echo "                        ";
                // line 34
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                </ul>
            </div>
        </div>

        <script type=\"text/javascript\">
            jQuery(document).ready(function() {
                jQuery('#sonata-media-block-gallery-";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
            echo "').nivoGallery({
                     pauseTime:     ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "pauseTime"), "html", null, true);
            echo ",
                     animSpeed:     ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "animSpeed"), "html", null, true);
            echo ",
                     effect:        'fade',
                     startPaused:   ";
            // line 45
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "startPaused") == 1)) {
                echo "true";
            } else {
                echo "false";
            }
            echo ",
                     directionNav:  ";
            // line 46
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "directionNav") == 1)) {
                echo "true";
            } else {
                echo "false";
            }
            echo ",
                     progressBar:   ";
            // line 47
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "progressBar") == 1)) {
                echo "true";
            } else {
                echo "false";
            }
            // line 48
            echo "                });
            });
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  521 => 154,  518 => 153,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 124,  386 => 119,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 75,  256 => 61,  250 => 60,  242 => 59,  181 => 29,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 192,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 150,  507 => 157,  504 => 148,  483 => 129,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 133,  443 => 132,  425 => 175,  422 => 134,  420 => 127,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 182,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 68,  266 => 66,  244 => 65,  205 => 38,  200 => 55,  194 => 53,  188 => 49,  184 => 30,  178 => 28,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 170,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 152,  511 => 159,  506 => 149,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 143,  481 => 128,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 126,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  334 => 120,  329 => 96,  320 => 115,  317 => 101,  307 => 82,  304 => 79,  296 => 77,  275 => 73,  255 => 71,  237 => 64,  195 => 54,  155 => 38,  392 => 120,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 123,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  302 => 73,  287 => 68,  284 => 72,  282 => 66,  279 => 70,  276 => 64,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  216 => 42,  186 => 51,  12 => 34,  152 => 38,  70 => 23,  118 => 28,  170 => 55,  150 => 101,  146 => 99,  153 => 49,  124 => 49,  104 => 23,  76 => 82,  126 => 55,  114 => 50,  110 => 25,  58 => 19,  23 => 12,  358 => 106,  351 => 121,  347 => 134,  343 => 115,  338 => 130,  327 => 104,  323 => 92,  319 => 124,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 74,  281 => 75,  277 => 109,  271 => 76,  265 => 106,  262 => 105,  260 => 63,  257 => 103,  251 => 67,  248 => 100,  239 => 97,  228 => 52,  225 => 58,  213 => 82,  211 => 81,  197 => 54,  174 => 47,  148 => 35,  134 => 56,  127 => 54,  270 => 67,  253 => 1,  233 => 62,  212 => 74,  210 => 73,  206 => 58,  202 => 77,  198 => 35,  192 => 53,  185 => 59,  180 => 49,  175 => 43,  172 => 22,  167 => 48,  165 => 281,  160 => 59,  137 => 37,  113 => 42,  100 => 43,  90 => 27,  81 => 29,  65 => 29,  129 => 56,  97 => 41,  84 => 30,  34 => 15,  53 => 19,  77 => 25,  20 => 11,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 114,  368 => 112,  365 => 179,  362 => 178,  360 => 126,  355 => 124,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 77,  229 => 61,  220 => 49,  214 => 69,  177 => 48,  169 => 69,  140 => 97,  132 => 57,  128 => 47,  107 => 24,  61 => 26,  273 => 96,  269 => 75,  254 => 102,  243 => 98,  240 => 64,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 57,  179 => 72,  159 => 186,  143 => 98,  135 => 45,  119 => 93,  102 => 43,  71 => 55,  67 => 30,  63 => 28,  59 => 24,  38 => 18,  94 => 40,  89 => 34,  85 => 86,  75 => 27,  68 => 30,  56 => 25,  87 => 31,  21 => 11,  26 => 13,  93 => 33,  88 => 33,  78 => 28,  46 => 19,  27 => 16,  44 => 21,  31 => 14,  28 => 13,  201 => 56,  196 => 65,  183 => 50,  171 => 61,  166 => 71,  163 => 188,  158 => 62,  156 => 41,  151 => 36,  142 => 58,  138 => 47,  136 => 155,  121 => 29,  117 => 43,  105 => 44,  91 => 39,  62 => 165,  49 => 17,  24 => 3,  25 => 12,  19 => 11,  79 => 31,  72 => 198,  69 => 28,  47 => 16,  40 => 19,  37 => 16,  22 => 11,  246 => 66,  157 => 104,  145 => 53,  139 => 31,  131 => 48,  123 => 95,  120 => 46,  115 => 27,  111 => 40,  108 => 45,  101 => 35,  98 => 36,  96 => 90,  83 => 32,  74 => 56,  66 => 23,  55 => 25,  52 => 17,  50 => 20,  43 => 18,  41 => 13,  35 => 22,  32 => 21,  29 => 14,  209 => 82,  203 => 37,  199 => 67,  193 => 33,  189 => 32,  187 => 60,  182 => 69,  176 => 64,  173 => 42,  168 => 44,  164 => 59,  162 => 40,  154 => 103,  149 => 36,  147 => 58,  144 => 48,  141 => 48,  133 => 49,  130 => 46,  125 => 46,  122 => 45,  116 => 92,  112 => 26,  109 => 41,  106 => 45,  103 => 38,  99 => 91,  95 => 34,  92 => 19,  86 => 33,  82 => 35,  80 => 84,  73 => 26,  64 => 25,  60 => 22,  57 => 26,  54 => 22,  51 => 23,  48 => 22,  45 => 15,  42 => 13,  39 => 12,  36 => 15,  33 => 16,  30 => 17,);
    }
}