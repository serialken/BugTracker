<?php

/* SonataMediaBundle:Provider:view_dailymotion.html.twig */
class __TwigTemplate_778d6e46aa9181c6f2fe26ce83e9ee126f5cc713c589a38c656414d05a673fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<object width=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "width"), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "height"), "html", null, true);
        echo "\">
    <param name=\"movie\" value=\"//www.dailymotion.com/swf/video/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "html", null, true);
        echo "\"></param>
    <param name=\"allowFullScreen\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowFullScreen"), "html", null, true);
        echo "\"></param>
    <param name=\"allowScriptAccess\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowScriptAccess"), "html", null, true);
        echo "\"></param>

    <embed
        type=\"application/x-shockwave-flash\"
        src=\"//www.dailymotion.com/swf/video/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "html", null, true);
        echo "\"
        width=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "width"), "html", null, true);
        echo "\"
        height=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "height"), "html", null, true);
        echo "\"
        allowfullscreen=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowFullScreen"), "html", null, true);
        echo "\"
        allowscriptaccess=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowScriptAccess"), "html", null, true);
        echo "\">
    </embed>
</object>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_dailymotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 200,  677 => 199,  675 => 198,  671 => 196,  668 => 195,  665 => 194,  661 => 191,  658 => 190,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 163,  553 => 162,  550 => 161,  521 => 154,  518 => 153,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 124,  386 => 119,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  330 => 105,  310 => 80,  300 => 78,  297 => 77,  291 => 75,  256 => 61,  250 => 60,  242 => 59,  181 => 29,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 192,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 166,  522 => 165,  513 => 160,  509 => 150,  507 => 157,  504 => 148,  483 => 129,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 133,  443 => 132,  425 => 175,  422 => 134,  420 => 127,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 117,  385 => 116,  371 => 182,  346 => 102,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 91,  316 => 89,  308 => 88,  288 => 81,  286 => 80,  274 => 68,  266 => 66,  244 => 65,  205 => 84,  200 => 55,  194 => 79,  188 => 49,  184 => 74,  178 => 28,  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 170,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 173,  545 => 169,  541 => 168,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 152,  511 => 159,  506 => 149,  502 => 155,  499 => 154,  495 => 133,  492 => 137,  489 => 131,  485 => 143,  481 => 128,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 126,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  334 => 120,  329 => 96,  320 => 115,  317 => 101,  307 => 82,  304 => 79,  296 => 77,  275 => 73,  255 => 71,  237 => 64,  195 => 54,  155 => 38,  392 => 120,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 123,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  302 => 73,  287 => 68,  284 => 72,  282 => 66,  279 => 70,  276 => 64,  263 => 55,  234 => 48,  231 => 47,  218 => 91,  216 => 42,  186 => 51,  12 => 34,  152 => 38,  70 => 23,  118 => 16,  170 => 22,  150 => 101,  146 => 99,  153 => 63,  124 => 51,  104 => 43,  76 => 82,  126 => 45,  114 => 47,  110 => 46,  58 => 25,  23 => 12,  358 => 106,  351 => 121,  347 => 134,  343 => 115,  338 => 130,  327 => 104,  323 => 92,  319 => 124,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 74,  281 => 75,  277 => 109,  271 => 76,  265 => 106,  262 => 105,  260 => 63,  257 => 103,  251 => 105,  248 => 100,  239 => 97,  228 => 52,  225 => 95,  213 => 82,  211 => 81,  197 => 54,  174 => 23,  148 => 35,  134 => 55,  127 => 54,  270 => 67,  253 => 1,  233 => 98,  212 => 88,  210 => 73,  206 => 58,  202 => 77,  198 => 80,  192 => 53,  185 => 59,  180 => 49,  175 => 43,  172 => 22,  167 => 48,  165 => 281,  160 => 18,  137 => 48,  113 => 42,  100 => 42,  90 => 38,  81 => 29,  65 => 28,  129 => 46,  97 => 41,  84 => 35,  34 => 14,  53 => 22,  77 => 33,  20 => 11,  480 => 128,  474 => 161,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 130,  435 => 146,  430 => 144,  427 => 136,  423 => 166,  413 => 130,  409 => 98,  407 => 127,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 118,  379 => 126,  374 => 114,  368 => 112,  365 => 179,  362 => 178,  360 => 126,  355 => 124,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 83,  285 => 111,  283 => 79,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 101,  229 => 96,  220 => 49,  214 => 69,  177 => 72,  169 => 69,  140 => 58,  132 => 108,  128 => 107,  107 => 44,  61 => 26,  273 => 96,  269 => 75,  254 => 102,  243 => 98,  240 => 64,  238 => 57,  235 => 56,  230 => 61,  227 => 46,  224 => 51,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 57,  179 => 72,  159 => 186,  143 => 98,  135 => 45,  119 => 43,  102 => 43,  71 => 29,  67 => 30,  63 => 23,  59 => 22,  38 => 15,  94 => 39,  89 => 34,  85 => 32,  75 => 27,  68 => 25,  56 => 21,  87 => 31,  21 => 11,  26 => 13,  93 => 35,  88 => 33,  78 => 20,  46 => 19,  27 => 13,  44 => 19,  31 => 15,  28 => 13,  201 => 56,  196 => 65,  183 => 50,  171 => 61,  166 => 71,  163 => 66,  158 => 64,  156 => 41,  151 => 51,  142 => 58,  138 => 47,  136 => 109,  121 => 29,  117 => 43,  105 => 44,  91 => 39,  62 => 24,  49 => 22,  24 => 3,  25 => 12,  19 => 11,  79 => 29,  72 => 34,  69 => 30,  47 => 20,  40 => 8,  37 => 16,  22 => 12,  246 => 66,  157 => 17,  145 => 60,  139 => 31,  131 => 48,  123 => 95,  120 => 50,  115 => 15,  111 => 41,  108 => 99,  101 => 38,  98 => 36,  96 => 42,  83 => 16,  74 => 19,  66 => 16,  55 => 21,  52 => 23,  50 => 21,  43 => 20,  41 => 18,  35 => 16,  32 => 19,  29 => 14,  209 => 82,  203 => 37,  199 => 67,  193 => 33,  189 => 32,  187 => 60,  182 => 69,  176 => 64,  173 => 71,  168 => 69,  164 => 19,  162 => 40,  154 => 52,  149 => 36,  147 => 61,  144 => 48,  141 => 48,  133 => 49,  130 => 54,  125 => 46,  122 => 44,  116 => 92,  112 => 41,  109 => 40,  106 => 45,  103 => 39,  99 => 37,  95 => 36,  92 => 41,  86 => 33,  82 => 35,  80 => 34,  73 => 34,  64 => 25,  60 => 22,  57 => 24,  54 => 22,  51 => 20,  48 => 25,  45 => 19,  42 => 9,  39 => 19,  36 => 17,  33 => 16,  30 => 14,);
    }
}
