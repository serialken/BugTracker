<?php

/* SensioDistributionBundle:Configurator/Step:doctrine.html.twig */
class __TwigTemplate_643d56208338f5d54c423c04b3d9daf64f0a4915d828d37366c518ab5ab08cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Configure database";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "SensioDistributionBundle::Configurator/form.html.twig"));
        // line 7
        echo "
    <div class=\"step\">
        ";
        // line 9
        $this->env->loadTemplate("SensioDistributionBundle::Configurator/steps.html.twig")->display(array_merge($context, array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")), "count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")))));
        // line 10
        echo "
        <h1>Configure your Database</h1>
        <p>If your website needs a database connection, please configure it here.</p>

        <div class=\"symfony-form-errors\">
            ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
        </div>
        <form action=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_configurator_step", array("index" => (isset($context["index"]) ? $context["index"] : $this->getContext($context, "index")))), "html", null, true);
        echo "\" method=\"POST\">
            <div class=\"symfony-form-column\">
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "driver"), 'row');
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "host"), 'row');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
            </div>
            <div class=\"symfony-form-column\">
                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user"), 'row');
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password"), 'row');
        echo "
            </div>

            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

            <div class=\"symfony-form-footer\">
                <p>
                    <button type=\"submit\" class=\"sf-button\">
                        <span class=\"border-l\">
                            <span class=\"border-r\">
                                <span class=\"btn-bg\">NEXT STEP</span>
                            </span>
                        </span>
                    </button>
                </p>
                <p>* mandatory fields</p>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator/Step:doctrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1385 => 413,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1353 => 400,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1309 => 384,  1307 => 383,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1283 => 378,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1249 => 367,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1221 => 355,  1218 => 354,  1211 => 349,  1202 => 347,  1198 => 346,  1195 => 345,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1177 => 337,  1174 => 336,  1168 => 332,  1162 => 330,  1159 => 329,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  793 => 182,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  707 => 148,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  662 => 125,  614 => 111,  576 => 101,  564 => 99,  555 => 95,  547 => 93,  512 => 84,  503 => 81,  493 => 78,  490 => 77,  433 => 60,  426 => 58,  405 => 49,  390 => 43,  311 => 14,  245 => 335,  810 => 492,  792 => 488,  788 => 486,  775 => 485,  749 => 162,  746 => 161,  727 => 476,  702 => 472,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  634 => 456,  625 => 453,  620 => 451,  601 => 446,  549 => 411,  532 => 410,  345 => 147,  340 => 145,  328 => 139,  290 => 5,  259 => 103,  363 => 32,  190 => 76,  672 => 345,  664 => 342,  640 => 119,  631 => 327,  622 => 452,  606 => 449,  591 => 309,  559 => 296,  552 => 293,  519 => 278,  515 => 85,  505 => 270,  497 => 267,  471 => 253,  465 => 249,  463 => 248,  454 => 244,  438 => 236,  436 => 235,  428 => 59,  412 => 222,  410 => 221,  376 => 205,  353 => 328,  295 => 178,  449 => 198,  446 => 197,  441 => 196,  380 => 158,  373 => 156,  226 => 84,  207 => 269,  306 => 286,  303 => 106,  280 => 131,  236 => 109,  537 => 178,  520 => 170,  516 => 169,  496 => 79,  479 => 256,  475 => 152,  421 => 126,  414 => 52,  408 => 50,  403 => 48,  375 => 106,  372 => 105,  348 => 140,  325 => 129,  313 => 15,  292 => 135,  161 => 202,  222 => 297,  215 => 280,  191 => 246,  694 => 138,  685 => 406,  654 => 123,  647 => 336,  643 => 120,  637 => 378,  633 => 377,  627 => 374,  617 => 112,  592 => 351,  585 => 307,  579 => 342,  577 => 303,  571 => 338,  542 => 321,  538 => 319,  531 => 283,  526 => 310,  486 => 292,  466 => 280,  456 => 68,  452 => 272,  445 => 267,  429 => 188,  366 => 33,  361 => 152,  331 => 140,  272 => 158,  267 => 101,  232 => 88,  857 => 210,  854 => 273,  849 => 206,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 491,  805 => 252,  802 => 251,  796 => 183,  794 => 248,  791 => 247,  785 => 178,  783 => 177,  780 => 176,  774 => 241,  772 => 172,  769 => 171,  766 => 238,  762 => 221,  757 => 218,  751 => 163,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 473,  698 => 471,  680 => 134,  677 => 465,  675 => 132,  671 => 196,  668 => 344,  665 => 194,  661 => 191,  658 => 124,  655 => 189,  651 => 337,  644 => 335,  642 => 238,  638 => 118,  635 => 117,  629 => 454,  626 => 325,  624 => 231,  619 => 113,  613 => 320,  608 => 223,  603 => 194,  596 => 106,  588 => 308,  584 => 174,  569 => 300,  566 => 167,  563 => 298,  557 => 96,  553 => 186,  550 => 94,  521 => 154,  518 => 307,  501 => 80,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 72,  460 => 136,  431 => 189,  419 => 164,  416 => 163,  399 => 116,  386 => 159,  378 => 157,  367 => 339,  357 => 123,  350 => 26,  330 => 105,  310 => 89,  300 => 105,  297 => 104,  291 => 102,  256 => 96,  250 => 341,  242 => 113,  181 => 232,  710 => 149,  704 => 203,  701 => 202,  699 => 142,  693 => 205,  683 => 135,  678 => 133,  666 => 126,  663 => 393,  660 => 464,  652 => 193,  649 => 122,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 317,  599 => 355,  593 => 105,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 284,  530 => 168,  527 => 91,  525 => 280,  522 => 406,  513 => 168,  509 => 83,  507 => 157,  504 => 302,  483 => 258,  477 => 127,  470 => 73,  464 => 71,  459 => 69,  450 => 64,  448 => 240,  443 => 137,  425 => 175,  422 => 226,  420 => 249,  411 => 129,  406 => 123,  400 => 47,  397 => 213,  395 => 118,  391 => 113,  385 => 41,  371 => 35,  346 => 99,  344 => 24,  339 => 100,  336 => 99,  333 => 98,  321 => 135,  316 => 16,  308 => 13,  288 => 4,  286 => 112,  274 => 110,  266 => 366,  244 => 65,  205 => 108,  200 => 72,  194 => 248,  188 => 90,  184 => 233,  178 => 59,  609 => 319,  598 => 107,  594 => 187,  586 => 184,  581 => 305,  575 => 170,  573 => 179,  567 => 414,  558 => 172,  554 => 171,  548 => 292,  545 => 291,  541 => 290,  536 => 170,  529 => 92,  524 => 90,  517 => 404,  514 => 306,  511 => 167,  506 => 166,  502 => 164,  499 => 268,  495 => 133,  492 => 295,  489 => 262,  485 => 143,  481 => 290,  478 => 74,  473 => 254,  462 => 202,  458 => 107,  451 => 134,  447 => 102,  442 => 62,  439 => 195,  424 => 128,  418 => 224,  415 => 180,  404 => 126,  401 => 172,  396 => 234,  394 => 168,  388 => 42,  382 => 127,  334 => 141,  329 => 188,  320 => 127,  317 => 185,  307 => 128,  304 => 181,  296 => 121,  275 => 105,  255 => 353,  237 => 70,  195 => 54,  155 => 47,  392 => 120,  389 => 160,  383 => 207,  377 => 37,  354 => 102,  352 => 123,  349 => 90,  342 => 23,  335 => 21,  332 => 20,  326 => 138,  324 => 113,  318 => 111,  302 => 125,  287 => 68,  284 => 106,  282 => 66,  279 => 104,  276 => 395,  263 => 365,  234 => 48,  231 => 83,  218 => 91,  216 => 79,  186 => 239,  12 => 34,  152 => 46,  70 => 19,  118 => 49,  170 => 84,  150 => 55,  146 => 181,  153 => 77,  124 => 132,  104 => 90,  76 => 31,  126 => 147,  114 => 111,  110 => 38,  58 => 15,  23 => 18,  358 => 151,  351 => 120,  347 => 191,  343 => 146,  338 => 135,  327 => 114,  323 => 128,  319 => 92,  315 => 131,  301 => 80,  299 => 8,  293 => 6,  289 => 113,  281 => 411,  277 => 78,  271 => 374,  265 => 105,  262 => 98,  260 => 363,  257 => 149,  251 => 105,  248 => 336,  239 => 97,  228 => 68,  225 => 298,  213 => 78,  211 => 81,  197 => 249,  174 => 217,  148 => 64,  134 => 161,  127 => 35,  270 => 102,  253 => 342,  233 => 304,  212 => 279,  210 => 270,  206 => 58,  202 => 266,  198 => 80,  192 => 88,  185 => 74,  180 => 62,  175 => 58,  172 => 57,  167 => 48,  165 => 83,  160 => 76,  137 => 46,  113 => 40,  100 => 36,  90 => 27,  81 => 40,  65 => 17,  129 => 148,  97 => 63,  84 => 41,  34 => 4,  53 => 11,  77 => 25,  20 => 1,  480 => 75,  474 => 285,  469 => 158,  461 => 70,  457 => 245,  453 => 199,  444 => 238,  440 => 131,  437 => 61,  435 => 258,  430 => 130,  427 => 129,  423 => 57,  413 => 130,  409 => 98,  407 => 242,  402 => 215,  398 => 129,  393 => 211,  387 => 164,  384 => 130,  381 => 108,  379 => 126,  374 => 36,  368 => 34,  365 => 197,  362 => 178,  360 => 126,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 85,  312 => 130,  309 => 129,  305 => 87,  298 => 120,  294 => 83,  285 => 3,  283 => 115,  278 => 410,  268 => 373,  264 => 2,  258 => 354,  252 => 70,  247 => 66,  241 => 93,  229 => 87,  220 => 290,  214 => 99,  177 => 61,  169 => 210,  140 => 58,  132 => 59,  128 => 58,  107 => 37,  61 => 2,  273 => 394,  269 => 107,  254 => 102,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 67,  219 => 101,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 35,  119 => 117,  102 => 30,  71 => 19,  67 => 16,  63 => 21,  59 => 17,  38 => 6,  94 => 57,  89 => 47,  85 => 26,  75 => 22,  68 => 20,  56 => 12,  87 => 26,  21 => 2,  26 => 3,  93 => 28,  88 => 28,  78 => 24,  46 => 14,  27 => 7,  44 => 8,  31 => 3,  28 => 3,  201 => 106,  196 => 92,  183 => 50,  171 => 216,  166 => 209,  163 => 82,  158 => 80,  156 => 195,  151 => 188,  142 => 61,  138 => 61,  136 => 168,  121 => 131,  117 => 39,  105 => 25,  91 => 56,  62 => 14,  49 => 12,  24 => 2,  25 => 12,  19 => 1,  79 => 32,  72 => 21,  69 => 13,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 136,  157 => 89,  145 => 74,  139 => 169,  131 => 160,  123 => 61,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 89,  98 => 29,  96 => 67,  83 => 30,  74 => 20,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 5,  32 => 6,  29 => 3,  209 => 96,  203 => 73,  199 => 265,  193 => 33,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 75,  144 => 176,  141 => 175,  133 => 49,  130 => 46,  125 => 42,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 46,  99 => 68,  95 => 39,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 19,  60 => 20,  57 => 19,  54 => 15,  51 => 37,  48 => 10,  45 => 9,  42 => 7,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}
