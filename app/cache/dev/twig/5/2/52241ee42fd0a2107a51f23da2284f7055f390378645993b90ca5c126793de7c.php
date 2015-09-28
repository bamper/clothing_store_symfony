<?php

/* shop/list.html.twig */
class __TwigTemplate_52241ee42fd0a2107a51f23da2284f7055f390378645993b90ca5c126793de7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("shop/index.html.twig", "shop/list.html.twig", 1);
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
        $__internal_ebd74c5747bbe346effb1c170a98d6170fde6e66dac07cad38facc2c98b9d3af = $this->env->getExtension("native_profiler");
        $__internal_ebd74c5747bbe346effb1c170a98d6170fde6e66dac07cad38facc2c98b9d3af->enter($__internal_ebd74c5747bbe346effb1c170a98d6170fde6e66dac07cad38facc2c98b9d3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "shop/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd74c5747bbe346effb1c170a98d6170fde6e66dac07cad38facc2c98b9d3af->leave($__internal_ebd74c5747bbe346effb1c170a98d6170fde6e66dac07cad38facc2c98b9d3af_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0beace1c1ded6a240615130c94c562ef6bdff055ff856ba7ec49189a88deffae = $this->env->getExtension("native_profiler");
        $__internal_0beace1c1ded6a240615130c94c562ef6bdff055ff856ba7ec49189a88deffae->enter($__internal_0beace1c1ded6a240615130c94c562ef6bdff055ff856ba7ec49189a88deffae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h2>Item List</h2>
    <ul>
    ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item-detail", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item-edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Edit</a> - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item-delete", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">Delete</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </ul>
    <a href=\"\">Add New</a>
";
        
        $__internal_0beace1c1ded6a240615130c94c562ef6bdff055ff856ba7ec49189a88deffae->leave($__internal_0beace1c1ded6a240615130c94c562ef6bdff055ff856ba7ec49189a88deffae_prof);

    }

    public function getTemplateName()
    {
        return "shop/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
