<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_4481e3d5b06353465f0bf32cfe1336b2c0d9db34f5b8f50118ce5faf436e5fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7501929e9544b09a04092caf5d1e9aa5c7f2c91d35d1d875eeb3b4bb18fc5d54 = $this->env->getExtension("native_profiler");
        $__internal_7501929e9544b09a04092caf5d1e9aa5c7f2c91d35d1d875eeb3b4bb18fc5d54->enter($__internal_7501929e9544b09a04092caf5d1e9aa5c7f2c91d35d1d875eeb3b4bb18fc5d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("TwigBundle:Exception:trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_7501929e9544b09a04092caf5d1e9aa5c7f2c91d35d1d875eeb3b4bb18fc5d54->leave($__internal_7501929e9544b09a04092caf5d1e9aa5c7f2c91d35d1d875eeb3b4bb18fc5d54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
