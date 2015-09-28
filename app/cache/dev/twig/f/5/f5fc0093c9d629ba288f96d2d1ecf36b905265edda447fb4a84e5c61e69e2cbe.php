<?php

/* base.html.twig */
class __TwigTemplate_f5fc0093c9d629ba288f96d2d1ecf36b905265edda447fb4a84e5c61e69e2cbe extends Twig_Template
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
        $__internal_de30601f260187e889921405a6e191eb4f2443572bb666e33a1bd650cd6b755f = $this->env->getExtension("native_profiler");
        $__internal_de30601f260187e889921405a6e191eb4f2443572bb666e33a1bd650cd6b755f->enter($__internal_de30601f260187e889921405a6e191eb4f2443572bb666e33a1bd650cd6b755f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_de30601f260187e889921405a6e191eb4f2443572bb666e33a1bd650cd6b755f->leave($__internal_de30601f260187e889921405a6e191eb4f2443572bb666e33a1bd650cd6b755f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_760069366a5002237a927f82fa2b0033ab0fe298d75713718e733169f8fe3a99 = $this->env->getExtension("native_profiler");
        $__internal_760069366a5002237a927f82fa2b0033ab0fe298d75713718e733169f8fe3a99->enter($__internal_760069366a5002237a927f82fa2b0033ab0fe298d75713718e733169f8fe3a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Clothing 9000!";
        
        $__internal_760069366a5002237a927f82fa2b0033ab0fe298d75713718e733169f8fe3a99->leave($__internal_760069366a5002237a927f82fa2b0033ab0fe298d75713718e733169f8fe3a99_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_742e1df11e5fe94502c9a3c9ce0a59947ca209d23fd17187a28dd4db76430baa = $this->env->getExtension("native_profiler");
        $__internal_742e1df11e5fe94502c9a3c9ce0a59947ca209d23fd17187a28dd4db76430baa->enter($__internal_742e1df11e5fe94502c9a3c9ce0a59947ca209d23fd17187a28dd4db76430baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_742e1df11e5fe94502c9a3c9ce0a59947ca209d23fd17187a28dd4db76430baa->leave($__internal_742e1df11e5fe94502c9a3c9ce0a59947ca209d23fd17187a28dd4db76430baa_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_a30465bdb4bb1231700f0fc403654b52ee31e6a238a2e0f55ceb5e32178fb353 = $this->env->getExtension("native_profiler");
        $__internal_a30465bdb4bb1231700f0fc403654b52ee31e6a238a2e0f55ceb5e32178fb353->enter($__internal_a30465bdb4bb1231700f0fc403654b52ee31e6a238a2e0f55ceb5e32178fb353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a30465bdb4bb1231700f0fc403654b52ee31e6a238a2e0f55ceb5e32178fb353->leave($__internal_a30465bdb4bb1231700f0fc403654b52ee31e6a238a2e0f55ceb5e32178fb353_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97dbba744a87ffeedb7fce80f37bf4707b62efaea7eef8b51b587d916066a53c = $this->env->getExtension("native_profiler");
        $__internal_97dbba744a87ffeedb7fce80f37bf4707b62efaea7eef8b51b587d916066a53c->enter($__internal_97dbba744a87ffeedb7fce80f37bf4707b62efaea7eef8b51b587d916066a53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_97dbba744a87ffeedb7fce80f37bf4707b62efaea7eef8b51b587d916066a53c->leave($__internal_97dbba744a87ffeedb7fce80f37bf4707b62efaea7eef8b51b587d916066a53c_prof);

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
