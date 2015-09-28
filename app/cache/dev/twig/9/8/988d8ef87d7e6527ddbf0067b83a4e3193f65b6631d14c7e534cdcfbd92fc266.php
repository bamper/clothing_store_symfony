<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_988d8ef87d7e6527ddbf0067b83a4e3193f65b6631d14c7e534cdcfbd92fc266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a4cb6652b611ef720977355a1076730ecc2685c6c74dfc997ec8e01f9a0c5e1 = $this->env->getExtension("native_profiler");
        $__internal_1a4cb6652b611ef720977355a1076730ecc2685c6c74dfc997ec8e01f9a0c5e1->enter($__internal_1a4cb6652b611ef720977355a1076730ecc2685c6c74dfc997ec8e01f9a0c5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a4cb6652b611ef720977355a1076730ecc2685c6c74dfc997ec8e01f9a0c5e1->leave($__internal_1a4cb6652b611ef720977355a1076730ecc2685c6c74dfc997ec8e01f9a0c5e1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e03ad21c756b3bd948c09e6c3ca02f312a8d894507763908d8df7b208978fca = $this->env->getExtension("native_profiler");
        $__internal_0e03ad21c756b3bd948c09e6c3ca02f312a8d894507763908d8df7b208978fca->enter($__internal_0e03ad21c756b3bd948c09e6c3ca02f312a8d894507763908d8df7b208978fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0e03ad21c756b3bd948c09e6c3ca02f312a8d894507763908d8df7b208978fca->leave($__internal_0e03ad21c756b3bd948c09e6c3ca02f312a8d894507763908d8df7b208978fca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c1a893775b931c835044633c3d56d075e5e8878c682d40645e8ecc2d97863d8 = $this->env->getExtension("native_profiler");
        $__internal_0c1a893775b931c835044633c3d56d075e5e8878c682d40645e8ecc2d97863d8->enter($__internal_0c1a893775b931c835044633c3d56d075e5e8878c682d40645e8ecc2d97863d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0c1a893775b931c835044633c3d56d075e5e8878c682d40645e8ecc2d97863d8->leave($__internal_0c1a893775b931c835044633c3d56d075e5e8878c682d40645e8ecc2d97863d8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9190e795ca97c81b40b2346317c53488a264eed0dfcf9a1dc6810666c5148831 = $this->env->getExtension("native_profiler");
        $__internal_9190e795ca97c81b40b2346317c53488a264eed0dfcf9a1dc6810666c5148831->enter($__internal_9190e795ca97c81b40b2346317c53488a264eed0dfcf9a1dc6810666c5148831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9190e795ca97c81b40b2346317c53488a264eed0dfcf9a1dc6810666c5148831->leave($__internal_9190e795ca97c81b40b2346317c53488a264eed0dfcf9a1dc6810666c5148831_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
