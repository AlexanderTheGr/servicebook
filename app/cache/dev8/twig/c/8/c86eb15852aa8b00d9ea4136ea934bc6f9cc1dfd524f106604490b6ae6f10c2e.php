<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e206dfae19a49f9fd47da439f234077689b7732146c833eec71440a559afdf9b extends Twig_Template
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
        $__internal_c6aaf4ef1ca40fb567da00c1a0ceede001fb753b1c8ce95599d06bad987fc55b = $this->env->getExtension("native_profiler");
        $__internal_c6aaf4ef1ca40fb567da00c1a0ceede001fb753b1c8ce95599d06bad987fc55b->enter($__internal_c6aaf4ef1ca40fb567da00c1a0ceede001fb753b1c8ce95599d06bad987fc55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6aaf4ef1ca40fb567da00c1a0ceede001fb753b1c8ce95599d06bad987fc55b->leave($__internal_c6aaf4ef1ca40fb567da00c1a0ceede001fb753b1c8ce95599d06bad987fc55b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36fed9a713976a0197cb93b018e5572e3539562269cc805a475c8fda520ca881 = $this->env->getExtension("native_profiler");
        $__internal_36fed9a713976a0197cb93b018e5572e3539562269cc805a475c8fda520ca881->enter($__internal_36fed9a713976a0197cb93b018e5572e3539562269cc805a475c8fda520ca881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36fed9a713976a0197cb93b018e5572e3539562269cc805a475c8fda520ca881->leave($__internal_36fed9a713976a0197cb93b018e5572e3539562269cc805a475c8fda520ca881_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3137fd11e6a3ccc933736d172eecb16157c8d2e48f2de701f0c479ea9536292c = $this->env->getExtension("native_profiler");
        $__internal_3137fd11e6a3ccc933736d172eecb16157c8d2e48f2de701f0c479ea9536292c->enter($__internal_3137fd11e6a3ccc933736d172eecb16157c8d2e48f2de701f0c479ea9536292c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3137fd11e6a3ccc933736d172eecb16157c8d2e48f2de701f0c479ea9536292c->leave($__internal_3137fd11e6a3ccc933736d172eecb16157c8d2e48f2de701f0c479ea9536292c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c36b0bb4bdcd4279351281c5aa579a275535087c2dddb435b0c42b1f56dda30e = $this->env->getExtension("native_profiler");
        $__internal_c36b0bb4bdcd4279351281c5aa579a275535087c2dddb435b0c42b1f56dda30e->enter($__internal_c36b0bb4bdcd4279351281c5aa579a275535087c2dddb435b0c42b1f56dda30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c36b0bb4bdcd4279351281c5aa579a275535087c2dddb435b0c42b1f56dda30e->leave($__internal_c36b0bb4bdcd4279351281c5aa579a275535087c2dddb435b0c42b1f56dda30e_prof);

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
