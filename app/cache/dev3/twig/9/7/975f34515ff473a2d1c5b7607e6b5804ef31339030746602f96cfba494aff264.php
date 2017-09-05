<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_975f34515ff473a2d1c5b7607e6b5804ef31339030746602f96cfba494aff264 extends Twig_Template
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
        $__internal_d8aafa8178eb312973a65b16f82a5c8b2bdc2aad0d3cce085a5a0fd37f76a95b = $this->env->getExtension("native_profiler");
        $__internal_d8aafa8178eb312973a65b16f82a5c8b2bdc2aad0d3cce085a5a0fd37f76a95b->enter($__internal_d8aafa8178eb312973a65b16f82a5c8b2bdc2aad0d3cce085a5a0fd37f76a95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

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
        
        $__internal_d8aafa8178eb312973a65b16f82a5c8b2bdc2aad0d3cce085a5a0fd37f76a95b->leave($__internal_d8aafa8178eb312973a65b16f82a5c8b2bdc2aad0d3cce085a5a0fd37f76a95b_prof);

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
