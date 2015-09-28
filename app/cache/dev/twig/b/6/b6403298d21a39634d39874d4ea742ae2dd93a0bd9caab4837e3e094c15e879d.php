<?php

/* AppBundle:Clothes:edit.html.twig */
class __TwigTemplate_b6403298d21a39634d39874d4ea742ae2dd93a0bd9caab4837e3e094c15e879d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Clothes:edit.html.twig", 1);
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
        $__internal_b3f40a640bea4d62b229f9f0a71b6af7df7bc88375fbfb1d8545f0c4644e3c3a = $this->env->getExtension("native_profiler");
        $__internal_b3f40a640bea4d62b229f9f0a71b6af7df7bc88375fbfb1d8545f0c4644e3c3a->enter($__internal_b3f40a640bea4d62b229f9f0a71b6af7df7bc88375fbfb1d8545f0c4644e3c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Clothes:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3f40a640bea4d62b229f9f0a71b6af7df7bc88375fbfb1d8545f0c4644e3c3a->leave($__internal_b3f40a640bea4d62b229f9f0a71b6af7df7bc88375fbfb1d8545f0c4644e3c3a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_729f4728f085453526679599f748a07099df0166cfc35cfb5a83c2eeff2e2c50 = $this->env->getExtension("native_profiler");
        $__internal_729f4728f085453526679599f748a07099df0166cfc35cfb5a83c2eeff2e2c50->enter($__internal_729f4728f085453526679599f748a07099df0166cfc35cfb5a83c2eeff2e2c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Clothes edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
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
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
        
        $__internal_729f4728f085453526679599f748a07099df0166cfc35cfb5a83c2eeff2e2c50->leave($__internal_729f4728f085453526679599f748a07099df0166cfc35cfb5a83c2eeff2e2c50_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Clothes:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  51 => 10,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
