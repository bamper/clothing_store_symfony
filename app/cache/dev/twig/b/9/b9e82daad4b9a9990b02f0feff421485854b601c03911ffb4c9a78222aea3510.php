<?php

/* AppBundle:Clothes:index.html.twig */
class __TwigTemplate_b9e82daad4b9a9990b02f0feff421485854b601c03911ffb4c9a78222aea3510 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Clothes:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8d6d51716f77d8ea2a5eb25195d2442a102b5ef97688b9332212469c02988cb = $this->env->getExtension("native_profiler");
        $__internal_b8d6d51716f77d8ea2a5eb25195d2442a102b5ef97688b9332212469c02988cb->enter($__internal_b8d6d51716f77d8ea2a5eb25195d2442a102b5ef97688b9332212469c02988cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Clothes:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8d6d51716f77d8ea2a5eb25195d2442a102b5ef97688b9332212469c02988cb->leave($__internal_b8d6d51716f77d8ea2a5eb25195d2442a102b5ef97688b9332212469c02988cb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_544665ed3fbaaebd4281eb206842aa4578d2ccb8acbb8cbfb7b6f06cc0a279ff = $this->env->getExtension("native_profiler");
        $__internal_544665ed3fbaaebd4281eb206842aa4578d2ccb8acbb8cbfb7b6f06cc0a279ff->enter($__internal_544665ed3fbaaebd4281eb206842aa4578d2ccb8acbb8cbfb7b6f06cc0a279ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"row\">
        <div class=\"col-md-3\">
            <p class=\"lead\">Filters</p>
            <div class=\"list-group\">
                <a href=\"#\" class=\"list-group-item\">Category 1</a>
                <a href=\"#\" class=\"list-group-item\">Category 2</a>
                <a href=\"#\" class=\"list-group-item\">Category 3</a>
            </div>
            <ul>
                <li>
                    <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("clothes_new");
        echo "\">
                        Create a new entry
                    </a>
                </li>
            </ul>
        </div>
        <div class=\"col-md-9\">
            ";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "                <div class=\"col-sm-4 col-lg-4 col-md-4\">
                    <div class=\"thumbnail\">
                        <img src=\"http://placehold.it/320x150\" alt=\"\">
                        <div class=\"caption\">
                            <h4 class=\"pull-right\">&euro;";
            // line 27
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["item"], "price", array()), 2, ".", ","), "html", null, true);
            echo "</h4>
                            <h4><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clothes_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a>
                            </h4>
                            <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "details", array()), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"ratings\">
                            <p>
                                ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute($context["item"], "rating", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 35
                echo "                                    <span class=\"glyphicon glyphicon-star\"></span>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                            </p>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "        </div>
    </div>

";
        
        $__internal_544665ed3fbaaebd4281eb206842aa4578d2ccb8acbb8cbfb7b6f06cc0a279ff->leave($__internal_544665ed3fbaaebd4281eb206842aa4578d2ccb8acbb8cbfb7b6f06cc0a279ff_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Clothes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 42,  101 => 37,  94 => 35,  90 => 34,  83 => 30,  76 => 28,  72 => 27,  66 => 23,  62 => 22,  52 => 15,  40 => 5,  34 => 3,  11 => 1,);
    }
}
