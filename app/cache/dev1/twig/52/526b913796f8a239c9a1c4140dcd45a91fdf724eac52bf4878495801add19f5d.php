<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_76d3304b8d771c01f461588c87715b39149693059a4593f7d0e0e6471742ce73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aad61eff020ed366877cfcddde1ee85c429aa7baab7110f706665ccec8e00d13 = $this->env->getExtension("native_profiler");
        $__internal_aad61eff020ed366877cfcddde1ee85c429aa7baab7110f706665ccec8e00d13->enter($__internal_aad61eff020ed366877cfcddde1ee85c429aa7baab7110f706665ccec8e00d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_aad61eff020ed366877cfcddde1ee85c429aa7baab7110f706665ccec8e00d13->leave($__internal_aad61eff020ed366877cfcddde1ee85c429aa7baab7110f706665ccec8e00d13_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d48c0a80bea2cde71c3ffcf5b98d0ac4a198730a2b82829a47d9d7b86acd8c0 = $this->env->getExtension("native_profiler");
        $__internal_1d48c0a80bea2cde71c3ffcf5b98d0ac4a198730a2b82829a47d9d7b86acd8c0->enter($__internal_1d48c0a80bea2cde71c3ffcf5b98d0ac4a198730a2b82829a47d9d7b86acd8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_1d48c0a80bea2cde71c3ffcf5b98d0ac4a198730a2b82829a47d9d7b86acd8c0->leave($__internal_1d48c0a80bea2cde71c3ffcf5b98d0ac4a198730a2b82829a47d9d7b86acd8c0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
