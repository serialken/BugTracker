<?php

/* SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig */
class __TwigTemplate_b887417aab41e158cc33e3adf95e0a2b3808096b1b07aca498091cc972b246d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'relation_link' => array($this, 'block_relation_link'),
            'relation_value' => array($this, 'block_relation_value'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        if (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "hasassociationadmin") && $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "hasRoute", array(0 => "edit"), "method"))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 17
                if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "isGranted", array(0 => "edit", 1 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method")) {
                    // line 18
                    $this->displayBlock("relation_link", $context, $blocks);
                } else {
                    // line 20
                    $this->displayBlock("relation_value", $context, $blocks);
                }
                // line 22
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 23
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        } else {
            // line 25
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 26
                echo "            ";
                $this->displayBlock("relation_value", $context, $blocks);
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 27
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    ";
        }
    }

    // line 31
    public function block_relation_link($context, array $blocks = array())
    {
        // line 32
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "associationadmin"), "generateObjectUrl", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), 1 => (isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), 2 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "parameters")), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
        echo "</a>";
    }

    // line 35
    public function block_relation_value($context, array $blocks = array())
    {
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), (isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:list_orm_many_to_many.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 178,  520 => 170,  516 => 169,  496 => 161,  479 => 153,  475 => 152,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  375 => 106,  372 => 105,  348 => 100,  325 => 93,  313 => 90,  292 => 81,  161 => 71,  222 => 81,  215 => 78,  191 => 69,  694 => 412,  685 => 406,  654 => 389,  647 => 382,  643 => 381,  637 => 378,  633 => 377,  627 => 374,  617 => 367,  592 => 351,  585 => 347,  579 => 342,  577 => 341,  571 => 338,  542 => 321,  538 => 319,  531 => 175,  526 => 310,  486 => 292,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  429 => 255,  366 => 210,  361 => 208,  331 => 187,  272 => 158,  267 => 156,  232 => 84,  857 => 274,  854 => 273,  849 => 268,  845 => 266,  839 => 263,  836 => 262,  834 => 261,  829 => 259,  821 => 258,  818 => 257,  816 => 256,  813 => 255,  807 => 253,  805 => 252,  802 => 251,  796 => 249,  794 => 248,  791 => 247,  785 => 245,  783 => 244,  780 => 243,  774 => 241,  772 => 240,  769 => 239,  766 => 238,  762 => 221,  757 => 218,  751 => 216,  748 => 215,  745 => 214,  731 => 213,  725 => 211,  720 => 208,  714 => 206,  706 => 204,  698 => 201,  680 => 403,  677 => 199,  675 => 198,  671 => 196,  668 => 395,  665 => 194,  661 => 191,  658 => 391,  655 => 189,  651 => 280,  644 => 270,  642 => 238,  638 => 237,  635 => 236,  629 => 233,  626 => 232,  624 => 231,  619 => 228,  613 => 225,  608 => 223,  603 => 194,  596 => 189,  588 => 179,  584 => 174,  569 => 168,  566 => 167,  563 => 166,  557 => 330,  553 => 186,  550 => 185,  521 => 154,  518 => 307,  501 => 147,  498 => 146,  491 => 145,  488 => 144,  482 => 142,  476 => 141,  467 => 137,  460 => 136,  431 => 129,  419 => 164,  416 => 163,  399 => 116,  386 => 111,  378 => 117,  367 => 180,  357 => 125,  350 => 117,  330 => 105,  310 => 89,  300 => 78,  297 => 77,  291 => 169,  256 => 96,  250 => 93,  242 => 140,  181 => 80,  710 => 213,  704 => 203,  701 => 202,  699 => 208,  693 => 205,  683 => 204,  678 => 398,  666 => 200,  663 => 393,  660 => 198,  652 => 193,  649 => 273,  632 => 190,  615 => 189,  610 => 224,  605 => 222,  602 => 185,  599 => 355,  593 => 188,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  544 => 160,  539 => 157,  533 => 156,  530 => 168,  527 => 167,  525 => 172,  522 => 165,  513 => 168,  509 => 304,  507 => 157,  504 => 302,  483 => 154,  477 => 127,  470 => 139,  464 => 147,  459 => 145,  450 => 141,  448 => 139,  443 => 137,  425 => 175,  422 => 250,  420 => 249,  411 => 129,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 113,  385 => 116,  371 => 182,  346 => 99,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  321 => 123,  316 => 121,  308 => 88,  288 => 107,  286 => 80,  274 => 68,  266 => 66,  244 => 65,  205 => 84,  200 => 55,  194 => 87,  188 => 49,  184 => 64,  178 => 28,  609 => 362,  598 => 188,  594 => 187,  586 => 184,  581 => 345,  575 => 170,  573 => 179,  567 => 337,  558 => 172,  554 => 171,  548 => 184,  545 => 169,  541 => 180,  536 => 170,  529 => 164,  524 => 162,  517 => 161,  514 => 306,  511 => 167,  506 => 166,  502 => 164,  499 => 163,  495 => 133,  492 => 295,  489 => 157,  485 => 143,  481 => 290,  478 => 127,  473 => 140,  462 => 146,  458 => 107,  451 => 134,  447 => 102,  442 => 101,  439 => 260,  424 => 128,  418 => 113,  415 => 247,  404 => 126,  401 => 86,  396 => 234,  394 => 136,  388 => 112,  382 => 127,  334 => 120,  329 => 96,  320 => 115,  317 => 101,  307 => 82,  304 => 174,  296 => 82,  275 => 103,  255 => 74,  237 => 70,  195 => 54,  155 => 53,  392 => 120,  389 => 103,  383 => 224,  377 => 99,  354 => 102,  352 => 123,  349 => 90,  342 => 97,  335 => 188,  332 => 85,  326 => 185,  324 => 82,  318 => 122,  302 => 84,  287 => 68,  284 => 106,  282 => 66,  279 => 104,  276 => 64,  263 => 55,  234 => 48,  231 => 47,  218 => 91,  216 => 42,  186 => 82,  12 => 34,  152 => 92,  70 => 22,  118 => 16,  170 => 74,  150 => 65,  146 => 49,  153 => 56,  124 => 31,  104 => 67,  76 => 57,  126 => 42,  114 => 71,  110 => 77,  58 => 25,  23 => 18,  358 => 106,  351 => 121,  347 => 134,  343 => 115,  338 => 130,  327 => 104,  323 => 92,  319 => 92,  315 => 79,  301 => 80,  299 => 83,  293 => 109,  289 => 74,  281 => 105,  277 => 78,  271 => 76,  265 => 99,  262 => 105,  260 => 77,  257 => 149,  251 => 105,  248 => 100,  239 => 97,  228 => 68,  225 => 95,  213 => 126,  211 => 81,  197 => 70,  174 => 60,  148 => 64,  134 => 59,  127 => 32,  270 => 67,  253 => 95,  233 => 98,  212 => 88,  210 => 75,  206 => 58,  202 => 77,  198 => 80,  192 => 53,  185 => 68,  180 => 62,  175 => 77,  172 => 22,  167 => 48,  165 => 72,  160 => 70,  137 => 46,  113 => 41,  100 => 36,  90 => 38,  81 => 25,  65 => 30,  129 => 57,  97 => 63,  84 => 39,  34 => 16,  53 => 22,  77 => 27,  20 => 11,  480 => 128,  474 => 285,  469 => 158,  461 => 155,  457 => 135,  453 => 142,  444 => 149,  440 => 131,  437 => 134,  435 => 258,  430 => 130,  427 => 129,  423 => 166,  413 => 130,  409 => 98,  407 => 242,  402 => 130,  398 => 129,  393 => 114,  387 => 122,  384 => 130,  381 => 108,  379 => 126,  374 => 114,  368 => 103,  365 => 179,  362 => 178,  360 => 126,  355 => 124,  341 => 114,  337 => 87,  322 => 101,  314 => 85,  312 => 177,  309 => 117,  305 => 87,  298 => 173,  294 => 83,  285 => 111,  283 => 166,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 66,  241 => 101,  229 => 96,  220 => 80,  214 => 69,  177 => 61,  169 => 57,  140 => 58,  132 => 58,  128 => 107,  107 => 33,  61 => 25,  273 => 96,  269 => 100,  254 => 102,  243 => 89,  240 => 64,  238 => 139,  235 => 56,  230 => 61,  227 => 134,  224 => 51,  221 => 67,  219 => 129,  217 => 79,  208 => 124,  204 => 66,  179 => 66,  159 => 70,  143 => 48,  135 => 35,  119 => 28,  102 => 38,  71 => 29,  67 => 27,  63 => 50,  59 => 23,  38 => 17,  94 => 39,  89 => 40,  85 => 34,  75 => 27,  68 => 31,  56 => 24,  87 => 33,  21 => 12,  26 => 13,  93 => 34,  88 => 60,  78 => 24,  46 => 35,  27 => 13,  44 => 19,  31 => 15,  28 => 14,  201 => 65,  196 => 65,  183 => 50,  171 => 63,  166 => 100,  163 => 66,  158 => 64,  156 => 68,  151 => 51,  142 => 61,  138 => 36,  136 => 109,  121 => 53,  117 => 51,  105 => 27,  91 => 29,  62 => 29,  49 => 20,  24 => 13,  25 => 12,  19 => 11,  79 => 29,  72 => 56,  69 => 50,  47 => 19,  40 => 8,  37 => 16,  22 => 12,  246 => 66,  157 => 17,  145 => 52,  139 => 60,  131 => 48,  123 => 54,  120 => 50,  115 => 50,  111 => 41,  108 => 48,  101 => 73,  98 => 44,  96 => 42,  83 => 16,  74 => 34,  66 => 16,  55 => 22,  52 => 17,  50 => 20,  43 => 18,  41 => 18,  35 => 16,  32 => 15,  29 => 21,  209 => 82,  203 => 122,  199 => 67,  193 => 33,  189 => 32,  187 => 60,  182 => 80,  176 => 77,  173 => 71,  168 => 60,  164 => 72,  162 => 71,  154 => 67,  149 => 50,  147 => 90,  144 => 62,  141 => 48,  133 => 49,  130 => 57,  125 => 45,  122 => 44,  116 => 92,  112 => 49,  109 => 40,  106 => 45,  103 => 46,  99 => 26,  95 => 43,  92 => 61,  86 => 64,  82 => 33,  80 => 34,  73 => 29,  64 => 23,  60 => 22,  57 => 20,  54 => 18,  51 => 38,  48 => 40,  45 => 19,  42 => 18,  39 => 17,  36 => 16,  33 => 16,  30 => 15,);
    }
}
