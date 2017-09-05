<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_06f3acf8549cd42ffec7e34d9f40a6a6a682a6234e7034291f7dc7eae07ed873 extends Twig_Template
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
        $__internal_d55e4417892da2abc1ed341966f1be39cfa132f9ddf172f5b1b7d929de1d76cd = $this->env->getExtension("native_profiler");
        $__internal_d55e4417892da2abc1ed341966f1be39cfa132f9ddf172f5b1b7d929de1d76cd->enter($__internal_d55e4417892da2abc1ed341966f1be39cfa132f9ddf172f5b1b7d929de1d76cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d55e4417892da2abc1ed341966f1be39cfa132f9ddf172f5b1b7d929de1d76cd->leave($__internal_d55e4417892da2abc1ed341966f1be39cfa132f9ddf172f5b1b7d929de1d76cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
