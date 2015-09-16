<?php

/* SonataBlockBundle:Block:block_core_rss.html.twig */
class __TwigTemplate_9d7ca37d1794468a2d6fb3ad477afea6dd52b65a7c2ecf719dc6fa18f338bce6 extends Twig_Template
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

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title"), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "link"), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "title"), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute((isset($context["feed"]) ? $context["feed"] : $this->getContext($context, "feed")), "description");
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  44 => 19,  36 => 17,  32 => 12,  27 => 13,  25 => 12,  20 => 11,  179 => 72,  173 => 71,  169 => 69,  163 => 68,  157 => 64,  151 => 61,  145 => 59,  142 => 58,  139 => 57,  124 => 52,  121 => 51,  117 => 50,  110 => 46,  106 => 44,  102 => 42,  100 => 41,  94 => 39,  89 => 37,  82 => 33,  78 => 31,  75 => 30,  71 => 29,  65 => 26,  62 => 25,  60 => 23,  57 => 23,  50 => 22,  47 => 21,  41 => 18,  38 => 19,  29 => 14,  26 => 13,  170 => 55,  165 => 52,  159 => 51,  153 => 62,  150 => 48,  146 => 47,  138 => 46,  135 => 55,  131 => 43,  125 => 42,  119 => 40,  116 => 39,  112 => 47,  109 => 37,  107 => 36,  103 => 34,  97 => 33,  91 => 38,  88 => 30,  84 => 29,  76 => 28,  73 => 27,  67 => 25,  64 => 25,  61 => 24,  58 => 23,  53 => 22,  51 => 21,  45 => 18,  42 => 17,  39 => 16,  34 => 18,  28 => 14,);
    }
}
