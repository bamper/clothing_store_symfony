<?php

/* base.html.twig */
class __TwigTemplate_7eb6e08c6f4e6dd7f1180f013aa93c4abea19555a8c4368d5cdbc7c75cf85550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a605e72fba223442d4b5ad524b76a84576b700b9e7343d755b1615bc4378ba74 = $this->env->getExtension("native_profiler");
        $__internal_a605e72fba223442d4b5ad524b76a84576b700b9e7343d755b1615bc4378ba74->enter($__internal_a605e72fba223442d4b5ad524b76a84576b700b9e7343d755b1615bc4378ba74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\">Clothing Store</a>
            </div>
            <div class=\"pull-right\">
                <form class=\"navbar-form\" role=\"search\">
                    <div class=\"input-group\">
                        <input id=\"search\" type=\"text\" class=\"form-control\" placeholder=\"Search\" name=\"q\" autocomplete=\"off\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-search\"></i></button>
                        </div>
                        <div id=\"update\"></div>
                    </div>
                </form>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("clothes");
        echo "\">Shop</a>
                    </li>
                    <li>
                        <a href=\"#\">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class=\"container\">
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/jquery.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 64
        echo "    </div>
    </body>
</html>
";
        
        $__internal_a605e72fba223442d4b5ad524b76a84576b700b9e7343d755b1615bc4378ba74->leave($__internal_a605e72fba223442d4b5ad524b76a84576b700b9e7343d755b1615bc4378ba74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7d15dd2926815c2696e426ec96fd4522227ddf81a177d2d9a823538371c6c26 = $this->env->getExtension("native_profiler");
        $__internal_d7d15dd2926815c2696e426ec96fd4522227ddf81a177d2d9a823538371c6c26->enter($__internal_d7d15dd2926815c2696e426ec96fd4522227ddf81a177d2d9a823538371c6c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clothing 9000!";
        
        $__internal_d7d15dd2926815c2696e426ec96fd4522227ddf81a177d2d9a823538371c6c26->leave($__internal_d7d15dd2926815c2696e426ec96fd4522227ddf81a177d2d9a823538371c6c26_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5e079057a70ae4b3a834a1b710e4f3b9720cdca53c28629f00dc617fa2688045 = $this->env->getExtension("native_profiler");
        $__internal_5e079057a70ae4b3a834a1b710e4f3b9720cdca53c28629f00dc617fa2688045->enter($__internal_5e079057a70ae4b3a834a1b710e4f3b9720cdca53c28629f00dc617fa2688045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/shop-homepage.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        
        $__internal_5e079057a70ae4b3a834a1b710e4f3b9720cdca53c28629f00dc617fa2688045->leave($__internal_5e079057a70ae4b3a834a1b710e4f3b9720cdca53c28629f00dc617fa2688045_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_4289dd7108160a97f5b0bddcab665bddeb72a1c9c56b2bdb9c16d3d5299d559b = $this->env->getExtension("native_profiler");
        $__internal_4289dd7108160a97f5b0bddcab665bddeb72a1c9c56b2bdb9c16d3d5299d559b->enter($__internal_4289dd7108160a97f5b0bddcab665bddeb72a1c9c56b2bdb9c16d3d5299d559b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4289dd7108160a97f5b0bddcab665bddeb72a1c9c56b2bdb9c16d3d5299d559b->leave($__internal_4289dd7108160a97f5b0bddcab665bddeb72a1c9c56b2bdb9c16d3d5299d559b_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f54812cac1a29cb68bac10aa3bf4a70fb9fce05e1ebbf17604dbe3fdb6ce91ac = $this->env->getExtension("native_profiler");
        $__internal_f54812cac1a29cb68bac10aa3bf4a70fb9fce05e1ebbf17604dbe3fdb6ce91ac->enter($__internal_f54812cac1a29cb68bac10aa3bf4a70fb9fce05e1ebbf17604dbe3fdb6ce91ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f54812cac1a29cb68bac10aa3bf4a70fb9fce05e1ebbf17604dbe3fdb6ce91ac->leave($__internal_f54812cac1a29cb68bac10aa3bf4a70fb9fce05e1ebbf17604dbe3fdb6ce91ac_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 63,  159 => 59,  150 => 10,  145 => 8,  140 => 7,  134 => 6,  122 => 5,  112 => 64,  110 => 63,  106 => 62,  102 => 61,  97 => 60,  95 => 59,  79 => 46,  73 => 43,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
