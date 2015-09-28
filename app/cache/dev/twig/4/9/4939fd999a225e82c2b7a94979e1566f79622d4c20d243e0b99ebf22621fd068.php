<?php

/* shop/detail.html.twig */
class __TwigTemplate_4939fd999a225e82c2b7a94979e1566f79622d4c20d243e0b99ebf22621fd068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("shop/index.html.twig", "shop/detail.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "shop/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dce36bbab24d28e56b547819b170332fbf7ce78f26e88a998934dec62a59b7c = $this->env->getExtension("native_profiler");
        $__internal_8dce36bbab24d28e56b547819b170332fbf7ce78f26e88a998934dec62a59b7c->enter($__internal_8dce36bbab24d28e56b547819b170332fbf7ce78f26e88a998934dec62a59b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shop/detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dce36bbab24d28e56b547819b170332fbf7ce78f26e88a998934dec62a59b7c->leave($__internal_8dce36bbab24d28e56b547819b170332fbf7ce78f26e88a998934dec62a59b7c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_801b68eef7ae64e6e423e55bf4da1fd463bec28d32521ebbbb118006b5245421 = $this->env->getExtension("native_profiler");
        $__internal_801b68eef7ae64e6e423e55bf4da1fd463bec28d32521ebbbb118006b5245421->enter($__internal_801b68eef7ae64e6e423e55bf4da1fd463bec28d32521ebbbb118006b5245421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h2>Item Detail</h2>
    <h3>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "price", array()), "html", null, true);
        echo "</h3>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "details", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_801b68eef7ae64e6e423e55bf4da1fd463bec28d32521ebbbb118006b5245421->leave($__internal_801b68eef7ae64e6e423e55bf4da1fd463bec28d32521ebbbb118006b5245421_prof);

    }

    public function getTemplateName()
    {
        return "shop/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
