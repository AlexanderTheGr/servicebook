<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_245ff11f1767d8326eb5248133c22c18200829031e8979eb83eebfd1670aa06a extends Twig_Template
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
        $__internal_68d93e13f90aa7f27904fdc4a517f319acec4e93c7461a88c01bdbbb61468cfc = $this->env->getExtension("native_profiler");
        $__internal_68d93e13f90aa7f27904fdc4a517f319acec4e93c7461a88c01bdbbb61468cfc->enter($__internal_68d93e13f90aa7f27904fdc4a517f319acec4e93c7461a88c01bdbbb61468cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_68d93e13f90aa7f27904fdc4a517f319acec4e93c7461a88c01bdbbb61468cfc->leave($__internal_68d93e13f90aa7f27904fdc4a517f319acec4e93c7461a88c01bdbbb61468cfc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
