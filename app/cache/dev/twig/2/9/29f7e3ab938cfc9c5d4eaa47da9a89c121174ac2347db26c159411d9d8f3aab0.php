<?php

/* AppBundle:Clothes:new.html.twig */
class __TwigTemplate_29f7e3ab938cfc9c5d4eaa47da9a89c121174ac2347db26c159411d9d8f3aab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Clothes:new.html.twig", 1);
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
        $__internal_aa4674e3f58a9f147909bb7e3a4a978b2d8adadf655b40e6e02f77482a667cb5 = $this->env->getExtension("native_profiler");
        $__internal_aa4674e3f58a9f147909bb7e3a4a978b2d8adadf655b40e6e02f77482a667cb5->enter($__internal_aa4674e3f58a9f147909bb7e3a4a978b2d8adadf655b40e6e02f77482a667cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Clothes:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa4674e3f58a9f147909bb7e3a4a978b2d8adadf655b40e6e02f77482a667cb5->leave($__internal_aa4674e3f58a9f147909bb7e3a4a978b2d8adadf655b40e6e02f77482a667cb5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_11a6354e166b59fa3dbad5a71965c39903abeaf6f2f13549a479b35a80917b18 = $this->env->getExtension("native_profiler");
        $__internal_11a6354e166b59fa3dbad5a71965c39903abeaf6f2f13549a479b35a80917b18->enter($__internal_11a6354e166b59fa3dbad5a71965c39903abeaf6f2f13549a479b35a80917b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Clothes creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("clothes");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
        
        $__internal_11a6354e166b59fa3dbad5a71965c39903abeaf6f2f13549a479b35a80917b18->leave($__internal_11a6354e166b59fa3dbad5a71965c39903abeaf6f2f13549a479b35a80917b18_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Clothes:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
