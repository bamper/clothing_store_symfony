<?php

/* security/login.html.twig */
class __TwigTemplate_5ac03ac10f61069b619b2014cb8cfa5a3c7219d2bbcd14182e90ca76fbffce8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        $__internal_3fd549b79af4deea1984acb9d0dd11380e6718a3e0fff5a40d2ead2152bffc4c = $this->env->getExtension("native_profiler");
        $__internal_3fd549b79af4deea1984acb9d0dd11380e6718a3e0fff5a40d2ead2152bffc4c->enter($__internal_3fd549b79af4deea1984acb9d0dd11380e6718a3e0fff5a40d2ead2152bffc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fd549b79af4deea1984acb9d0dd11380e6718a3e0fff5a40d2ead2152bffc4c->leave($__internal_3fd549b79af4deea1984acb9d0dd11380e6718a3e0fff5a40d2ead2152bffc4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa197c837046f31223b9157a371fbf30c749b6848888a62337f92d904027669a = $this->env->getExtension("native_profiler");
        $__internal_aa197c837046f31223b9157a371fbf30c749b6848888a62337f92d904027669a->enter($__internal_aa197c837046f31223b9157a371fbf30c749b6848888a62337f92d904027669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 7
        echo "
    <form action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />

        ";
        // line 20
        echo "
        <button type=\"submit\">login</button>
    </form>
";
        
        $__internal_aa197c837046f31223b9157a371fbf30c749b6848888a62337f92d904027669a->leave($__internal_aa197c837046f31223b9157a371fbf30c749b6848888a62337f92d904027669a_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 20,  57 => 10,  52 => 8,  49 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
