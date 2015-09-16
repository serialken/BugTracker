<?php

/* SonataAdminBundle:Block:block_search_result.html.twig */
class __TwigTemplate_c38822e3cdea47276bd0a0d22c61a51aa1e8ba7097481700bb9027fb872e1613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    <div class=\"span3\">
        <div>
            <h4>
                ";
        // line 18
        if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "list"), "method")) {
            // line 19
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "</a>
                ";
        } else {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "
                ";
        // line 24
        if (((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")) && ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method") > 0))) {
            // line 25
            echo "                    <span class=\"label label-info\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getNbResults", array(), "method"), "html", null, true);
            echo "</span>
                ";
        }
        // line 27
        echo "            </h4>
        </div>

        <ul>
            ";
        // line 31
        if ((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager"))) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 33
                echo "                    <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "toString", array(0 => (isset($context["result"]) ? $context["result"] : $this->getContext($context, "result"))), "method"), "html", null, true);
                echo "</a></li>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 35
                echo "                    ";
                if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                    // line 36
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ~ <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</a></i></li>
                    ";
                } else {
                    // line 38
                    echo "                        <li><i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                    echo "</i></li>
                    ";
                }
                // line 40
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            ";
        } else {
            // line 42
            echo "                ";
            if ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method")) {
                // line 43
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo " ~ <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("add_new_entry", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a></i></li>
                ";
            } else {
                // line 45
                echo "                    <li><i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_results_found", array(), "SonataAdminBundle"), "html", null, true);
                echo "</i></li>
                ";
            }
            // line 47
            echo "            ";
        }
        // line 48
        echo "        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_search_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 62,  124 => 52,  104 => 40,  76 => 27,  126 => 45,  114 => 47,  110 => 41,  58 => 22,  23 => 4,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 74,  174 => 67,  148 => 60,  134 => 56,  127 => 54,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 77,  198 => 66,  192 => 64,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  167 => 48,  165 => 64,  160 => 44,  137 => 37,  113 => 42,  100 => 41,  90 => 20,  81 => 47,  65 => 26,  129 => 59,  97 => 47,  84 => 16,  34 => 18,  53 => 24,  77 => 36,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 69,  140 => 55,  132 => 47,  128 => 49,  107 => 35,  61 => 27,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 72,  159 => 61,  143 => 59,  135 => 48,  119 => 49,  102 => 42,  71 => 29,  67 => 31,  63 => 15,  59 => 14,  38 => 19,  94 => 39,  89 => 37,  85 => 35,  75 => 33,  68 => 18,  56 => 21,  87 => 25,  21 => 2,  26 => 14,  93 => 21,  88 => 36,  78 => 31,  46 => 11,  27 => 12,  44 => 21,  31 => 6,  28 => 5,  201 => 92,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 68,  158 => 62,  156 => 41,  151 => 61,  142 => 58,  138 => 57,  136 => 56,  121 => 51,  117 => 50,  105 => 39,  91 => 38,  62 => 25,  49 => 9,  24 => 11,  25 => 12,  19 => 2,  79 => 28,  72 => 22,  69 => 32,  47 => 21,  40 => 11,  37 => 19,  22 => 3,  246 => 99,  157 => 64,  145 => 59,  139 => 57,  131 => 55,  123 => 47,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 38,  96 => 31,  83 => 53,  74 => 26,  66 => 35,  55 => 25,  52 => 78,  50 => 23,  43 => 12,  41 => 20,  35 => 8,  32 => 8,  29 => 15,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 71,  168 => 72,  164 => 59,  162 => 57,  154 => 40,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 50,  116 => 43,  112 => 47,  109 => 19,  106 => 44,  103 => 50,  99 => 17,  95 => 10,  92 => 21,  86 => 17,  82 => 33,  80 => 19,  73 => 19,  64 => 28,  60 => 24,  57 => 23,  54 => 15,  51 => 13,  48 => 12,  45 => 12,  42 => 16,  39 => 15,  36 => 19,  33 => 13,  30 => 2,);
    }
}
