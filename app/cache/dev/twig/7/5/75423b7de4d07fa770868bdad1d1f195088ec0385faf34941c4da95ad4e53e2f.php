<?php

/* default/index.html.twig */
class __TwigTemplate_75423b7de4d07fa770868bdad1d1f195088ec0385faf34941c4da95ad4e53e2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81b03e915eec7ff00c87cc752cb23ec74c443585668a10a66470a6a7bb826fe1 = $this->env->getExtension("native_profiler");
        $__internal_81b03e915eec7ff00c87cc752cb23ec74c443585668a10a66470a6a7bb826fe1->enter($__internal_81b03e915eec7ff00c87cc752cb23ec74c443585668a10a66470a6a7bb826fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81b03e915eec7ff00c87cc752cb23ec74c443585668a10a66470a6a7bb826fe1->leave($__internal_81b03e915eec7ff00c87cc752cb23ec74c443585668a10a66470a6a7bb826fe1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_287cc4d1c39cb535227082b356b869ffdca13e742f803a3627511d5d5fd41d3f = $this->env->getExtension("native_profiler");
        $__internal_287cc4d1c39cb535227082b356b869ffdca13e742f803a3627511d5d5fd41d3f->enter($__internal_287cc4d1c39cb535227082b356b869ffdca13e742f803a3627511d5d5fd41d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12\">

                <div class=\"row carousel-holder\">

                    <div class=\"col-md-12\">
                        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
                            <ol class=\"carousel-indicators\">
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"0\" class=\"active\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"1\"></li>
                                <li data-target=\"#carousel-example-generic\" data-slide-to=\"2\"></li>
                            </ol>
                            <div class=\"carousel-inner\">
                                <div class=\"item active\">
                                    <img class=\"slide-image\" src=\"http://placehold.it/800x300\" alt=\"\">

                                </div>
                                <div class=\"item\">
                                    <img class=\"slide-image\" src=\"http://placehold.it/800x300\" alt=\"\">
                                </div>
                                <div class=\"item\">
                                    <img class=\"slide-image\" src=\"http://placehold.it/800x300\" alt=\"\">
                                </div>
                            </div>
                            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" data-slide=\"prev\">
                                <span class=\"glyphicon glyphicon-chevron-left\"></span>
                            </a>
                            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" data-slide=\"next\">
                                <span class=\"glyphicon glyphicon-chevron-right\"></span>
                            </a>
                        </div>
                    </div>

                </div>

            ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 43
            echo "                <div class=\"col-sm-4 col-lg-4 col-md-4\">
                    <div class=\"thumbnail\">
                        <img src=\"http://placehold.it/320x150\" alt=\"\">
                        <div class=\"caption\">
                            <h4 class=\"pull-right\">&euro;";
            // line 47
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "price", array()), 2, ".", ","), "html", null, true);
            echo "</h4>
                            <h4><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clothes_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a>
                            </h4>
                            <p>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "details", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ratings\">
                            <p>
                                ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute($context["item"], "rating", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 55
                echo "                                    <span class=\"glyphicon glyphicon-star\"></span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "                            </p>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </div>

            </div>

        </div>

";
        
        $__internal_287cc4d1c39cb535227082b356b869ffdca13e742f803a3627511d5d5fd41d3f->leave($__internal_287cc4d1c39cb535227082b356b869ffdca13e742f803a3627511d5d5fd41d3f_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 62,  119 => 57,  112 => 55,  108 => 54,  101 => 50,  94 => 48,  90 => 47,  84 => 43,  80 => 42,  40 => 4,  34 => 3,  11 => 1,);
    }
}
