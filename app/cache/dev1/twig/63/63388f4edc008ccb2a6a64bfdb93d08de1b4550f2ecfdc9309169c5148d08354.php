<?php

/* PartsboxBundle:Default:index.html.twig */
class __TwigTemplate_b3b5c23ca3265a1544703dc4921cbff4e6484d3e6f38cc9dd4a9b070374e42d5 extends Twig_Template
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
        $__internal_6f831b21dcdc3cfc3921b6b6be995621cea7f9b9eb2c865ba32f70a4021f449d = $this->env->getExtension("native_profiler");
        $__internal_6f831b21dcdc3cfc3921b6b6be995621cea7f9b9eb2c865ba32f70a4021f449d->enter($__internal_6f831b21dcdc3cfc3921b6b6be995621cea7f9b9eb2c865ba32f70a4021f449d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartsboxBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_6f831b21dcdc3cfc3921b6b6be995621cea7f9b9eb2c865ba32f70a4021f449d->leave($__internal_6f831b21dcdc3cfc3921b6b6be995621cea7f9b9eb2c865ba32f70a4021f449d_prof);

    }

    public function getTemplateName()
    {
        return "PartsboxBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
