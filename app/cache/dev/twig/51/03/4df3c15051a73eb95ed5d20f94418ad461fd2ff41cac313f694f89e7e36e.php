<?php

/* ::layout.html.twig */
class __TwigTemplate_51034df3c15051a73eb95ed5d20f94418ad461fd2ff41cac313f694f89e7e36e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tittle' => array($this, 'block_tittle'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv=\"Content-type\" content=\"text/html; charset=utf-8\" />
\t
\t<title>";
        // line 8
        $this->displayBlock('tittle', $context, $blocks);
        echo "</title>
\t
\t";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  </head>
  
  <body>
    <div class=\"container\">
        <div id=\"header\" class=\"hero-unit\">
          <h1>Mon projet Bug Tracker</h1>
          <p>Seconde partie de la formation Symfony :) .</p>
        </div>\t
            
\t<div class=\"row\">\t
            <div id=\"menu\" class=\"span3\">
                <h3>Menu</h3>
                <ul class=\"nav nav-pills nav-stacked\">
\t\t\t";
        // line 28
        echo "                    <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("serialkenbugtracker_home");
        echo "\">Accueil </a></li>
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
        echo "\">Dashboard </a></li>          
                </ul>
            
             </div>
             <div id=\"content\" class=\"span9\">
\t\t   ";
        // line 35
        echo "                   ";
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "             </div>
        </div>
\t\t
            <hr>
        
            <footer class=\"modal-footer\">
             <p>Symply the best !!!!!!! SerialArt</p>
             </footer>
    </div>
\t
  ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "\t
  </body>
</html>";
    }

    // line 8
    public function block_tittle($context, array $blocks = array())
    {
        echo "BugTracker";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "\t  ";
        // line 12
        echo "\t  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "\t\t   ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "\t";
        // line 49
        echo "\t <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
\t <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 52
        echo "  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  114 => 47,  110 => 36,  58 => 29,  23 => 2,  358 => 139,  351 => 135,  347 => 134,  343 => 132,  338 => 130,  327 => 126,  323 => 125,  319 => 124,  315 => 123,  301 => 117,  299 => 116,  293 => 113,  289 => 112,  281 => 110,  277 => 109,  271 => 108,  265 => 106,  262 => 105,  260 => 104,  257 => 103,  251 => 101,  248 => 100,  239 => 97,  228 => 88,  225 => 87,  213 => 82,  211 => 81,  197 => 74,  174 => 67,  148 => 60,  134 => 56,  127 => 54,  270 => 4,  253 => 1,  233 => 81,  212 => 74,  210 => 73,  206 => 71,  202 => 77,  198 => 66,  192 => 64,  185 => 59,  180 => 56,  175 => 53,  172 => 51,  167 => 48,  165 => 64,  160 => 44,  137 => 37,  113 => 44,  100 => 12,  90 => 20,  81 => 47,  65 => 17,  129 => 59,  97 => 47,  84 => 16,  34 => 4,  53 => 28,  77 => 36,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 141,  362 => 110,  360 => 109,  355 => 106,  341 => 131,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 120,  305 => 119,  298 => 91,  294 => 90,  285 => 111,  283 => 88,  278 => 86,  268 => 107,  264 => 2,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 54,  169 => 66,  140 => 55,  132 => 51,  128 => 49,  107 => 35,  61 => 13,  273 => 96,  269 => 94,  254 => 102,  243 => 98,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 79,  219 => 84,  217 => 75,  208 => 72,  204 => 78,  179 => 69,  159 => 61,  143 => 59,  135 => 53,  119 => 49,  102 => 32,  71 => 19,  67 => 19,  63 => 15,  59 => 14,  38 => 14,  94 => 35,  89 => 8,  85 => 25,  75 => 17,  68 => 18,  56 => 23,  87 => 25,  21 => 2,  26 => 14,  93 => 21,  88 => 6,  78 => 21,  46 => 7,  27 => 8,  44 => 18,  31 => 8,  28 => 3,  201 => 92,  196 => 65,  183 => 82,  171 => 61,  166 => 71,  163 => 45,  158 => 62,  156 => 41,  151 => 63,  142 => 59,  138 => 57,  136 => 56,  121 => 46,  117 => 48,  105 => 39,  91 => 34,  62 => 82,  49 => 9,  24 => 4,  25 => 12,  19 => 1,  79 => 37,  72 => 10,  69 => 37,  47 => 43,  40 => 11,  37 => 19,  22 => 2,  246 => 99,  157 => 56,  145 => 46,  139 => 45,  131 => 55,  123 => 47,  120 => 36,  115 => 33,  111 => 30,  108 => 28,  101 => 49,  98 => 11,  96 => 31,  83 => 53,  74 => 23,  66 => 35,  55 => 79,  52 => 78,  50 => 44,  43 => 8,  41 => 18,  35 => 10,  32 => 8,  29 => 7,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 60,  182 => 69,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 40,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 50,  116 => 45,  112 => 42,  109 => 53,  106 => 36,  103 => 50,  99 => 31,  95 => 10,  92 => 21,  86 => 17,  82 => 28,  80 => 19,  73 => 19,  64 => 28,  60 => 19,  57 => 17,  54 => 15,  51 => 22,  48 => 21,  45 => 12,  42 => 7,  39 => 17,  36 => 10,  33 => 4,  30 => 9,);
    }
}
