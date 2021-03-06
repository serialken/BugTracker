<?php

/* SonataAdminBundle:CRUD:batch_confirmation.html.twig */
class __TwigTemplate_a92ed8bc0c185e65f4b13bf00492b0264f9ba8ab3a8e8c043526501b5d53ebb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"sonata-actions btn-group\">
        ";
        // line 16
        $this->env->loadTemplate("SonataAdminBundle:Button:list_button.html.twig")->display($context);
        // line 17
        echo "        ";
        $this->env->loadTemplate("SonataAdminBundle:Button:create_button.html.twig")->display($context);
        // line 18
        echo "    </div>
";
    }

    // line 21
    public function block_side_menu($context, array $blocks = array())
    {
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    <div class=\"sonata-ba-delete\">
        <h1>";
        // line 25
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_batch_confirmation", array("%action%" => (isset($context["action_label"]) ? $context["action_label"] : $this->getContext($context, "action_label"))), "SonataAdminBundle");
        echo "</h1>

        ";
        // line 27
        if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "all_elements")) {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("message_batch_all_confirmation", array(), "SonataAdminBundle"), "html", null, true);
            echo "
        ";
        } else {
            // line 30
            echo "            ";
            echo $this->env->getExtension('translator')->getTranslator()->transChoice("message_batch_confirmation", twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx")), array("%count%" => twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "idx"))), "SonataAdminBundle");
            // line 31
            echo "        ";
        }
        // line 32
        echo "
        <div class=\"well well-small form-actions\">
            <form action=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "filterParameters"))), "method"), "html", null, true);
        echo "\" method=\"POST\" >
                <input type=\"hidden\" name=\"confirmation\" value=\"ok\">
                <input type=\"hidden\" name=\"data\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))), "html", null, true);
        echo "\">
                <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\">

                <div style=\"display: none\">
                    ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                </div>

                <button type=\"submit\" class=\"btn btn-danger\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_execute_batch_action", array(), "SonataAdminBundle"), "html", null, true);
        echo "</button>

                ";
        // line 45
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 46
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_or", array(), "SonataAdminBundle"), "html", null, true);
            echo "

                    <a class=\"btn btn-success\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
                        <i class=\"icon-th-list icon-white\"></i> ";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                    </a>
                ";
        }
        // line 52
        echo "            </form>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:batch_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  609 => 190,  598 => 188,  594 => 187,  586 => 184,  581 => 182,  575 => 180,  573 => 179,  567 => 175,  558 => 172,  554 => 171,  548 => 170,  545 => 169,  541 => 168,  536 => 166,  529 => 164,  524 => 162,  517 => 161,  514 => 160,  511 => 159,  506 => 153,  502 => 140,  499 => 139,  495 => 138,  492 => 137,  489 => 136,  485 => 129,  481 => 128,  478 => 127,  473 => 110,  462 => 108,  458 => 107,  451 => 103,  447 => 102,  442 => 101,  439 => 100,  424 => 88,  418 => 113,  415 => 112,  404 => 87,  401 => 86,  396 => 141,  394 => 136,  388 => 132,  382 => 127,  334 => 120,  329 => 119,  320 => 115,  317 => 86,  307 => 82,  304 => 81,  296 => 77,  275 => 73,  255 => 71,  237 => 64,  195 => 54,  155 => 38,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  354 => 92,  352 => 91,  349 => 90,  342 => 88,  335 => 86,  332 => 85,  326 => 83,  324 => 82,  318 => 80,  302 => 73,  287 => 68,  284 => 67,  282 => 66,  279 => 65,  276 => 64,  263 => 55,  234 => 48,  231 => 47,  218 => 59,  216 => 42,  186 => 51,  12 => 34,  152 => 63,  70 => 23,  118 => 46,  170 => 55,  150 => 27,  146 => 47,  153 => 49,  124 => 49,  104 => 42,  76 => 35,  126 => 25,  114 => 47,  110 => 144,  58 => 22,  23 => 11,  358 => 139,  351 => 121,  347 => 134,  343 => 132,  338 => 130,  327 => 118,  323 => 116,  319 => 124,  315 => 79,  301 => 80,  299 => 72,  293 => 70,  289 => 112,  281 => 75,  277 => 109,  271 => 59,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 74,  174 => 47,  148 => 35,  134 => 56,  127 => 54,  270 => 4,  253 => 1,  233 => 62,  212 => 74,  210 => 73,  206 => 58,  202 => 77,  198 => 55,  192 => 53,  185 => 59,  180 => 49,  175 => 33,  172 => 46,  167 => 48,  165 => 52,  160 => 59,  137 => 37,  113 => 48,  100 => 43,  90 => 57,  81 => 35,  65 => 26,  129 => 59,  97 => 69,  84 => 36,  34 => 16,  53 => 24,  77 => 13,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 89,  423 => 142,  413 => 100,  409 => 98,  407 => 88,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 130,  381 => 120,  379 => 126,  374 => 123,  368 => 96,  365 => 95,  362 => 94,  360 => 122,  355 => 106,  341 => 131,  337 => 87,  322 => 101,  314 => 85,  312 => 84,  309 => 76,  305 => 74,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 74,  268 => 58,  264 => 2,  258 => 72,  252 => 70,  247 => 78,  241 => 77,  229 => 61,  220 => 70,  214 => 69,  177 => 48,  169 => 69,  140 => 53,  132 => 44,  128 => 152,  107 => 46,  61 => 27,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 65,  238 => 85,  235 => 74,  230 => 82,  227 => 46,  224 => 60,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 57,  179 => 72,  159 => 39,  143 => 26,  135 => 45,  119 => 148,  102 => 79,  71 => 27,  67 => 30,  63 => 28,  59 => 26,  38 => 21,  94 => 40,  89 => 17,  85 => 35,  75 => 32,  68 => 30,  56 => 25,  87 => 28,  21 => 11,  26 => 12,  93 => 58,  88 => 37,  78 => 21,  46 => 8,  27 => 14,  44 => 21,  31 => 15,  28 => 14,  201 => 56,  196 => 65,  183 => 50,  171 => 61,  166 => 71,  163 => 60,  158 => 62,  156 => 41,  151 => 36,  142 => 58,  138 => 46,  136 => 155,  121 => 51,  117 => 49,  105 => 45,  91 => 40,  62 => 14,  49 => 23,  24 => 12,  25 => 13,  19 => 11,  79 => 34,  72 => 31,  69 => 30,  47 => 22,  40 => 13,  37 => 18,  22 => 12,  246 => 66,  157 => 29,  145 => 56,  139 => 59,  131 => 153,  123 => 52,  120 => 49,  115 => 45,  111 => 30,  108 => 42,  101 => 37,  98 => 42,  96 => 31,  83 => 15,  74 => 28,  66 => 17,  55 => 25,  52 => 24,  50 => 23,  43 => 20,  41 => 19,  35 => 20,  32 => 19,  29 => 14,  209 => 82,  203 => 39,  199 => 67,  193 => 73,  189 => 52,  187 => 60,  182 => 69,  176 => 64,  173 => 71,  168 => 44,  164 => 59,  162 => 40,  154 => 40,  149 => 62,  147 => 58,  144 => 49,  141 => 48,  133 => 154,  130 => 57,  125 => 42,  122 => 149,  116 => 147,  112 => 145,  109 => 108,  106 => 45,  103 => 64,  99 => 23,  95 => 19,  92 => 34,  86 => 25,  82 => 31,  80 => 14,  73 => 34,  64 => 24,  60 => 19,  57 => 26,  54 => 26,  51 => 26,  48 => 25,  45 => 20,  42 => 19,  39 => 18,  36 => 17,  33 => 16,  30 => 13,);
    }
}
