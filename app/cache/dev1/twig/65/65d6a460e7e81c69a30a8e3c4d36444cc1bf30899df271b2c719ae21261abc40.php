<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_19a08e5b91b4603435535406400ec43a3b2e552dc8b87cf6e0d683d955a7156a extends Twig_Template
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
        $__internal_98ed53fd6cffe009ef0375c7bed453491d42f32daddfb9ffe8ce83f94ca41785 = $this->env->getExtension("native_profiler");
        $__internal_98ed53fd6cffe009ef0375c7bed453491d42f32daddfb9ffe8ce83f94ca41785->enter($__internal_98ed53fd6cffe009ef0375c7bed453491d42f32daddfb9ffe8ce83f94ca41785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_98ed53fd6cffe009ef0375c7bed453491d42f32daddfb9ffe8ce83f94ca41785->leave($__internal_98ed53fd6cffe009ef0375c7bed453491d42f32daddfb9ffe8ce83f94ca41785_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
