<?php

/* default/about.html.twig */
class __TwigTemplate_da581bea43e007e166fed3d73fe56f7b7cd74238c535c98b82b5a15faf8cc1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/about.html.twig", 1);
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
        $__internal_07164ae4c2bbf8020ad1c97a09bd02e9b0815cb206b0c932b099bdae9f56a637 = $this->env->getExtension("native_profiler");
        $__internal_07164ae4c2bbf8020ad1c97a09bd02e9b0815cb206b0c932b099bdae9f56a637->enter($__internal_07164ae4c2bbf8020ad1c97a09bd02e9b0815cb206b0c932b099bdae9f56a637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07164ae4c2bbf8020ad1c97a09bd02e9b0815cb206b0c932b099bdae9f56a637->leave($__internal_07164ae4c2bbf8020ad1c97a09bd02e9b0815cb206b0c932b099bdae9f56a637_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a00c7eb7458cc7e161fb29f3247c5d5b56202779501c82f168322e33b1c993ac = $this->env->getExtension("native_profiler");
        $__internal_a00c7eb7458cc7e161fb29f3247c5d5b56202779501c82f168322e33b1c993ac->enter($__internal_a00c7eb7458cc7e161fb29f3247c5d5b56202779501c82f168322e33b1c993ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>About page</h1>
";
        
        $__internal_a00c7eb7458cc7e161fb29f3247c5d5b56202779501c82f168322e33b1c993ac->leave($__internal_a00c7eb7458cc7e161fb29f3247c5d5b56202779501c82f168322e33b1c993ac_prof);

    }

    public function getTemplateName()
    {
        return "default/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
