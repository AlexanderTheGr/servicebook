<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ad42fd809220c3996d8671f0b57c1c678767e8695acf88881dd96c6c8f045204 extends Twig_Template
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
        $__internal_8c0a3ecd5b1d3cb245d33a09a2b360f6e6429e3be1b399b16ed73597e337f369 = $this->env->getExtension("native_profiler");
        $__internal_8c0a3ecd5b1d3cb245d33a09a2b360f6e6429e3be1b399b16ed73597e337f369->enter($__internal_8c0a3ecd5b1d3cb245d33a09a2b360f6e6429e3be1b399b16ed73597e337f369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8c0a3ecd5b1d3cb245d33a09a2b360f6e6429e3be1b399b16ed73597e337f369->leave($__internal_8c0a3ecd5b1d3cb245d33a09a2b360f6e6429e3be1b399b16ed73597e337f369_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
