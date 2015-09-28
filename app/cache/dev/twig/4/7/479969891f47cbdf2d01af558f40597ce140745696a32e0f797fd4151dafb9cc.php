<?php

/* AppBundle:Clothes:show.html.twig */
class __TwigTemplate_479969891f47cbdf2d01af558f40597ce140745696a32e0f797fd4151dafb9cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Clothes:show.html.twig", 1);
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
        $__internal_9afad2d02760cda44a56607e0cc93254f2887a9d1a516fea1cbf81eb3f8a3ad5 = $this->env->getExtension("native_profiler");
        $__internal_9afad2d02760cda44a56607e0cc93254f2887a9d1a516fea1cbf81eb3f8a3ad5->enter($__internal_9afad2d02760cda44a56607e0cc93254f2887a9d1a516fea1cbf81eb3f8a3ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Clothes:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9afad2d02760cda44a56607e0cc93254f2887a9d1a516fea1cbf81eb3f8a3ad5->leave($__internal_9afad2d02760cda44a56607e0cc93254f2887a9d1a516fea1cbf81eb3f8a3ad5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7c1c2cc369864722671b6673bbcbeaf1e1f5f5fc4e7bb34c7a4c126ca00bae7 = $this->env->getExtension("native_profiler");
        $__internal_b7c1c2cc369864722671b6673bbcbeaf1e1f5f5fc4e7bb34c7a4c126ca00bae7->enter($__internal_b7c1c2cc369864722671b6673bbcbeaf1e1f5f5fc4e7bb34c7a4c126ca00bae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<h1>Clothes</h1>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6\">
                <img class=\"item-image\" />
            </div>
            <div class=\"col-md-6\">
                <h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "name", array()), "html", null, true);
        echo " </h2>
                <h2>&euro;";
        // line 16
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "price", array()), 2, ".", ","), "html", null, true);
        echo "</h2>
                <h3>Rating:
                    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "rating", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                          <span class=\"glyphicon glyphicon-star\"></span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
                    </h3>
                <hr>
                <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "details", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>

    <ul class=\"record_actions\">
        <li>
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("clothes");
        echo "\">
                Back to the list
            </a>
        </li>
        <li>
            <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clothes_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\">
                Edit
            </a>
        </li>
        <li>";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
    </ul>
";
        
        $__internal_b7c1c2cc369864722671b6673bbcbeaf1e1f5f5fc4e7bb34c7a4c126ca00bae7->leave($__internal_b7c1c2cc369864722671b6673bbcbeaf1e1f5f5fc4e7bb34c7a4c126ca00bae7_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Clothes:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 40,  93 => 36,  85 => 31,  75 => 24,  70 => 21,  63 => 19,  59 => 18,  54 => 16,  50 => 15,  40 => 7,  34 => 3,  11 => 1,);
    }
}
