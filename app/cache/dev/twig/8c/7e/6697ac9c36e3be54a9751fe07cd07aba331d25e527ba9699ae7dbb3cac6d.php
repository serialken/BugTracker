<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig */
class __TwigTemplate_8c7e6697ac9c36e3be54a9751fe07cd07aba331d25e527ba9699ae7dbb3cac6d extends Twig_Template
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

";
        // line 18
        echo "
";
        // line 20
        echo "
<!-- edit one association -->

<script type=\"text/javascript\">

    // handle the add link
    var field_add_";
        // line 26
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = function(event) {

        event.preventDefault();
        event.stopPropagation();

        var form = jQuery(this).closest('form');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: '";
        // line 35
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_append_form_element", (array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "code"), "elementId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "root"), "uniqid")) + $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")));
        // line 40
        echo "',
            type: \"POST\",
            dataType: 'html',
            data: { _xml_http_request: true },
            success: function(html) {
                if (!html.length) {
                    return;
                }

                jQuery('#field_container_";
        // line 49
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').replaceWith(html); // replace the html
                Admin.setup_select2(jQuery('#field_container_";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "'));

                if(jQuery('input[type=\"file\"]', form).length > 0) {
                    jQuery(form).attr('enctype', 'multipart/form-data');
                    jQuery(form).attr('encoding', 'multipart/form-data');
                }
                jQuery('#sonata-ba-field-container-";
        // line 56
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
                jQuery('#field_container_";
        // line 57
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "').trigger('sonata.add_element');
            }
        });

        return false;
    };

    var field_widget_";
        // line 64
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = false;

    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_retrieve_";
        // line 68
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "(link) {

        link.onclick = null;

        // initialize component
        field_widget_";
        // line 73
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo " = jQuery(\"#field_widget_";
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo "\");

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_add_";
        // line 77
        echo (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"));
        echo ")
            .trigger('click')
        ;

        return false;
    }
</script>

<!-- / edit one association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_one_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 50,  48 => 40,  23 => 18,  553 => 186,  550 => 185,  541 => 180,  537 => 178,  531 => 175,  520 => 170,  516 => 169,  511 => 167,  506 => 166,  496 => 161,  479 => 153,  475 => 152,  437 => 134,  430 => 130,  424 => 128,  421 => 126,  414 => 122,  408 => 119,  403 => 117,  399 => 116,  393 => 114,  388 => 112,  386 => 111,  375 => 106,  372 => 105,  348 => 100,  325 => 93,  319 => 92,  313 => 90,  310 => 89,  296 => 82,  277 => 78,  255 => 74,  237 => 70,  228 => 68,  221 => 67,  204 => 66,  201 => 65,  177 => 61,  174 => 60,  169 => 57,  162 => 55,  155 => 53,  137 => 46,  134 => 45,  124 => 41,  102 => 38,  60 => 25,  26 => 20,  21 => 12,  19 => 11,  710 => 213,  704 => 210,  701 => 209,  699 => 208,  693 => 205,  683 => 204,  678 => 202,  666 => 200,  663 => 199,  660 => 198,  652 => 193,  649 => 192,  632 => 190,  615 => 189,  610 => 187,  605 => 186,  602 => 185,  599 => 184,  593 => 180,  589 => 178,  587 => 177,  582 => 176,  565 => 174,  548 => 184,  544 => 172,  539 => 171,  536 => 170,  533 => 169,  530 => 168,  527 => 167,  525 => 172,  522 => 165,  513 => 168,  509 => 158,  507 => 157,  504 => 156,  502 => 164,  499 => 163,  495 => 133,  489 => 157,  483 => 154,  480 => 128,  477 => 127,  470 => 149,  464 => 147,  462 => 146,  459 => 145,  453 => 142,  450 => 141,  448 => 139,  443 => 137,  427 => 129,  425 => 135,  422 => 134,  420 => 127,  411 => 126,  406 => 123,  400 => 120,  397 => 119,  395 => 118,  391 => 113,  385 => 116,  381 => 108,  371 => 113,  358 => 106,  355 => 105,  346 => 99,  344 => 101,  339 => 100,  336 => 99,  333 => 98,  329 => 96,  323 => 92,  321 => 91,  316 => 89,  308 => 88,  304 => 86,  294 => 83,  288 => 81,  283 => 79,  269 => 75,  266 => 74,  251 => 67,  247 => 66,  244 => 65,  235 => 63,  233 => 62,  225 => 58,  220 => 57,  205 => 56,  200 => 55,  194 => 53,  188 => 49,  184 => 64,  178 => 45,  173 => 42,  152 => 38,  149 => 50,  146 => 49,  139 => 31,  121 => 29,  118 => 28,  115 => 27,  107 => 24,  79 => 14,  76 => 57,  64 => 26,  57 => 154,  49 => 20,  44 => 73,  42 => 61,  39 => 17,  37 => 53,  34 => 26,  32 => 13,  29 => 11,  312 => 143,  306 => 141,  303 => 140,  300 => 139,  292 => 81,  286 => 80,  280 => 131,  274 => 77,  265 => 126,  260 => 77,  256 => 121,  248 => 116,  242 => 113,  236 => 109,  230 => 61,  219 => 101,  214 => 99,  209 => 96,  197 => 54,  192 => 88,  187 => 87,  185 => 86,  182 => 85,  176 => 82,  170 => 79,  165 => 77,  160 => 76,  158 => 75,  153 => 72,  147 => 69,  144 => 33,  141 => 67,  138 => 61,  136 => 60,  132 => 44,  128 => 58,  123 => 30,  120 => 56,  110 => 77,  104 => 23,  86 => 64,  72 => 56,  54 => 153,  51 => 24,  35 => 16,  392 => 104,  389 => 103,  383 => 101,  377 => 99,  374 => 114,  368 => 103,  365 => 95,  362 => 94,  354 => 102,  352 => 104,  349 => 90,  342 => 97,  337 => 87,  335 => 86,  332 => 85,  326 => 94,  324 => 82,  318 => 90,  315 => 79,  309 => 76,  305 => 87,  302 => 84,  299 => 83,  293 => 70,  287 => 68,  284 => 67,  282 => 66,  279 => 78,  276 => 64,  271 => 76,  268 => 127,  263 => 125,  246 => 51,  240 => 64,  234 => 48,  231 => 47,  227 => 46,  224 => 103,  218 => 43,  216 => 100,  203 => 93,  186 => 38,  183 => 37,  180 => 62,  175 => 43,  157 => 41,  150 => 27,  143 => 48,  126 => 42,  122 => 23,  119 => 22,  112 => 26,  109 => 40,  105 => 39,  103 => 64,  95 => 20,  93 => 68,  90 => 18,  88 => 36,  85 => 35,  83 => 22,  80 => 41,  74 => 18,  71 => 17,  69 => 197,  66 => 15,  62 => 165,  55 => 22,  52 => 21,  46 => 35,  43 => 18,  41 => 6,  38 => 17,  36 => 16,  30 => 2,  24 => 1,  101 => 73,  98 => 37,  92 => 19,  87 => 33,  84 => 16,  81 => 30,  78 => 40,  75 => 39,  73 => 29,  70 => 33,  67 => 27,  59 => 49,  53 => 16,  50 => 15,  47 => 19,  12 => 34,);
    }
}
