<?php

/* SonataAdminBundle:CRUD:show_url.html.twig */
class __TwigTemplate_6857c067184eea2b00b674ab2b114363579c508d7061f737f2a405b3eb63c4c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig");

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        ob_start();
        // line 16
        echo "    ";
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 17
            echo "        &nbsp;
    ";
        } else {
            // line 19
            echo "        ";
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "url", array(), "any", true, true)) {
                // line 20
                echo "            ";
                // line 21
                echo "            ";
                $context["url_address"] = $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "url");
                // line 22
                echo "        ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", true, true) && !twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), array(0 => "edit", 1 => "show")))) {
                // line 23
                echo "            ";
                // line 24
                echo "            ";
                $context["parameters"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "parameters"), array())) : (array()));
                // line 25
                echo "
            ";
                // line 27
                echo "            ";
                if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "identifier_parameter_name", array(), "any", true, true)) {
                    // line 28
                    echo "                ";
                    $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "identifier_parameter_name") => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "normalizedidentifier", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")));
                    // line 29
                    echo "            ";
                }
                // line 30
                echo "
            ";
                // line 31
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "route", array(), "any", false, true), "absolute"), false)) : (false))) {
                    // line 32
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
                    // line 33
                    echo "            ";
                } else {
                    // line 34
                    echo "                ";
                    $context["url_address"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "route"), "name"), (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")));
                    // line 35
                    echo "            ";
                }
                // line 36
                echo "        ";
            } else {
                // line 37
                echo "            ";
                // line 38
                echo "            ";
                $context["url_address"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 39
                echo "        ";
            }
            // line 40
            echo "
        ";
            // line 41
            if ((($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "hide_protocol", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "hide_protocol"), false)) : (false))) {
                // line 42
                echo "            ";
                $context["value"] = strtr((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array("http://" => "", "https://" => ""));
                // line 43
                echo "        ";
            }
            // line 44
            echo "
        <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, (isset($context["url_address"]) ? $context["url_address"] : $this->getContext($context, "url_address")), "html", null, true);
            echo "\">";
            // line 46
            if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "safe")) {
                // line 47
                echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
            } else {
                // line 49
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            }
            // line 51
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:show_url.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  334 => 120,  329 => 119,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  296 => 77,  275 => 73,  255 => 71,  237 => 64,  195 => 54,  155 => 38,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  302 => 73,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  216 => 42,  186 => 51,  12 => 34,  152 => 63,  70 => 23,  118 => 49,  170 => 55,  150 => 27,  146 => 47,  153 => 49,  124 => 49,  104 => 43,  76 => 33,  126 => 55,  114 => 50,  110 => 45,  58 => 25,  23 => 11,  358 => 139,  351 => 121,  347 => 134,  343 => 132,  338 => 130,  327 => 118,  323 => 116,  319 => 124,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 112,  281 => 75,  277 => 109,  271 => 59,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 74,  174 => 47,  148 => 35,  134 => 56,  127 => 54,  270 => 4,  253 => 1,  233 => 62,  212 => 74,  210 => 73,  206 => 58,  202 => 77,  198 => 55,  192 => 53,  185 => 59,  180 => 49,  175 => 33,  172 => 46,  167 => 48,  165 => 52,  160 => 59,  137 => 37,  113 => 46,  100 => 43,  90 => 38,  81 => 33,  65 => 29,  129 => 56,  97 => 41,  84 => 34,  34 => 15,  53 => 24,  77 => 30,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 70,  214 => 69,  177 => 48,  169 => 69,  140 => 53,  132 => 57,  128 => 47,  107 => 44,  61 => 26,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 65,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 60,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  119 => 44,  102 => 43,  71 => 31,  67 => 19,  63 => 25,  59 => 27,  38 => 18,  94 => 40,  89 => 34,  85 => 36,  75 => 31,  68 => 30,  56 => 25,  87 => 35,  21 => 11,  26 => 14,  93 => 39,  88 => 37,  78 => 36,  46 => 19,  27 => 14,  44 => 19,  31 => 15,  28 => 14,  201 => 56,  196 => 65,  183 => 50,  171 => 61,  166 => 71,  163 => 60,  158 => 62,  156 => 41,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  121 => 51,  117 => 45,  105 => 44,  91 => 39,  62 => 28,  49 => 20,  24 => 13,  25 => 13,  19 => 11,  79 => 34,  72 => 30,  69 => 33,  47 => 20,  40 => 19,  37 => 16,  22 => 12,  246 => 66,  157 => 29,  145 => 53,  139 => 51,  131 => 48,  123 => 47,  120 => 46,  115 => 47,  111 => 43,  108 => 45,  101 => 42,  98 => 36,  96 => 40,  83 => 32,  74 => 29,  66 => 26,  55 => 21,  52 => 23,  50 => 21,  43 => 20,  41 => 20,  35 => 20,  32 => 14,  29 => 15,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 60,  182 => 69,  176 => 64,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 40,  149 => 62,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 57,  125 => 46,  122 => 45,  116 => 43,  112 => 145,  109 => 108,  106 => 45,  103 => 38,  99 => 41,  95 => 19,  92 => 35,  86 => 33,  82 => 35,  80 => 31,  73 => 32,  64 => 27,  60 => 24,  57 => 23,  54 => 22,  51 => 23,  48 => 22,  45 => 21,  42 => 18,  39 => 20,  36 => 17,  33 => 16,  30 => 13,);
    }
}
