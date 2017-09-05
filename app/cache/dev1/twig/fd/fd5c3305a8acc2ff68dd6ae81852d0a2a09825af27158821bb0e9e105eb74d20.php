<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f40ac75fc37415832534a2b47d7bbe63924aa2bd6b6f489f1aeb3bb91f63d25c extends Twig_Template
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
        $__internal_aa21c3a0d737755f4f87f2a4a78f8aef355e715cd926dc1f58f02e509b82493b = $this->env->getExtension("native_profiler");
        $__internal_aa21c3a0d737755f4f87f2a4a78f8aef355e715cd926dc1f58f02e509b82493b->enter($__internal_aa21c3a0d737755f4f87f2a4a78f8aef355e715cd926dc1f58f02e509b82493b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_aa21c3a0d737755f4f87f2a4a78f8aef355e715cd926dc1f58f02e509b82493b->leave($__internal_aa21c3a0d737755f4f87f2a4a78f8aef355e715cd926dc1f58f02e509b82493b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
