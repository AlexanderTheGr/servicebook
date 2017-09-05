<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_aff5706c9fcf5fc43c2c93c4893c864e9882500c3803f989ba3913479f50a3a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0519d380037e03cb83ba4ad757d35704a0717c2b50b9ad4956b1529f45ac98ac = $this->env->getExtension("native_profiler");
        $__internal_0519d380037e03cb83ba4ad757d35704a0717c2b50b9ad4956b1529f45ac98ac->enter($__internal_0519d380037e03cb83ba4ad757d35704a0717c2b50b9ad4956b1529f45ac98ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0519d380037e03cb83ba4ad757d35704a0717c2b50b9ad4956b1529f45ac98ac->leave($__internal_0519d380037e03cb83ba4ad757d35704a0717c2b50b9ad4956b1529f45ac98ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9acae0b0a6dd624af168267ce2c5564539baec910a264e2c73c85a6fdfed4b45 = $this->env->getExtension("native_profiler");
        $__internal_9acae0b0a6dd624af168267ce2c5564539baec910a264e2c73c85a6fdfed4b45->enter($__internal_9acae0b0a6dd624af168267ce2c5564539baec910a264e2c73c85a6fdfed4b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9acae0b0a6dd624af168267ce2c5564539baec910a264e2c73c85a6fdfed4b45->leave($__internal_9acae0b0a6dd624af168267ce2c5564539baec910a264e2c73c85a6fdfed4b45_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_06e37610d76fa53a70962838602df5edf0248d457343e185f52a03a01df1082b = $this->env->getExtension("native_profiler");
        $__internal_06e37610d76fa53a70962838602df5edf0248d457343e185f52a03a01df1082b->enter($__internal_06e37610d76fa53a70962838602df5edf0248d457343e185f52a03a01df1082b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_06e37610d76fa53a70962838602df5edf0248d457343e185f52a03a01df1082b->leave($__internal_06e37610d76fa53a70962838602df5edf0248d457343e185f52a03a01df1082b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb61dfa09093237a41aa79c92292a5dceb2460e5079c64d95fe5be788177ba34 = $this->env->getExtension("native_profiler");
        $__internal_fb61dfa09093237a41aa79c92292a5dceb2460e5079c64d95fe5be788177ba34->enter($__internal_fb61dfa09093237a41aa79c92292a5dceb2460e5079c64d95fe5be788177ba34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_fb61dfa09093237a41aa79c92292a5dceb2460e5079c64d95fe5be788177ba34->leave($__internal_fb61dfa09093237a41aa79c92292a5dceb2460e5079c64d95fe5be788177ba34_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
