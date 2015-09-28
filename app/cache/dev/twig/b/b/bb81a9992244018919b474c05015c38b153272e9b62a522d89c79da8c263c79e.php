<?php

/* shop/index.html.twig */
class __TwigTemplate_bb81a9992244018919b474c05015c38b153272e9b62a522d89c79da8c263c79e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "shop/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bc638adeef72dad51d3b36936454b6212dd32b960fb7a7e9dc65488de274e3c = $this->env->getExtension("native_profiler");
        $__internal_4bc638adeef72dad51d3b36936454b6212dd32b960fb7a7e9dc65488de274e3c->enter($__internal_4bc638adeef72dad51d3b36936454b6212dd32b960fb7a7e9dc65488de274e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shop/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bc638adeef72dad51d3b36936454b6212dd32b960fb7a7e9dc65488de274e3c->leave($__internal_4bc638adeef72dad51d3b36936454b6212dd32b960fb7a7e9dc65488de274e3c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b23e8d9c0dbac284d79bb10fd984f5c18cfb9b641d8e9516c52b3409aa12d138 = $this->env->getExtension("native_profiler");
        $__internal_b23e8d9c0dbac284d79bb10fd984f5c18cfb9b641d8e9516c52b3409aa12d138->enter($__internal_b23e8d9c0dbac284d79bb10fd984f5c18cfb9b641d8e9516c52b3409aa12d138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Shop Index</h1>
    <hr>
    ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_b23e8d9c0dbac284d79bb10fd984f5c18cfb9b641d8e9516c52b3409aa12d138->leave($__internal_b23e8d9c0dbac284d79bb10fd984f5c18cfb9b641d8e9516c52b3409aa12d138_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_8896b52981910381babcc56af5ae83b854153cf66eb6ce2bafbcfd00daf7ccfe = $this->env->getExtension("native_profiler");
        $__internal_8896b52981910381babcc56af5ae83b854153cf66eb6ce2bafbcfd00daf7ccfe->enter($__internal_8896b52981910381babcc56af5ae83b854153cf66eb6ce2bafbcfd00daf7ccfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "
    ";
        
        $__internal_8896b52981910381babcc56af5ae83b854153cf66eb6ce2bafbcfd00daf7ccfe->leave($__internal_8896b52981910381babcc56af5ae83b854153cf66eb6ce2bafbcfd00daf7ccfe_prof);

    }

    public function getTemplateName()
    {
        return "shop/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
