<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d3ecf21d805c67dddf33108e1764942a791672ea7ca70d9f0f7a5f3cb3b8918c extends Twig_Template
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
        $__internal_490ff041ae870af2e35244d07e5bef525af963e274b3b5cd5c48ef511019cc65 = $this->env->getExtension("native_profiler");
        $__internal_490ff041ae870af2e35244d07e5bef525af963e274b3b5cd5c48ef511019cc65->enter($__internal_490ff041ae870af2e35244d07e5bef525af963e274b3b5cd5c48ef511019cc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_490ff041ae870af2e35244d07e5bef525af963e274b3b5cd5c48ef511019cc65->leave($__internal_490ff041ae870af2e35244d07e5bef525af963e274b3b5cd5c48ef511019cc65_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb349115b7570084778a7865367c25cf59b02eaba9495070f35771facd3abe07 = $this->env->getExtension("native_profiler");
        $__internal_eb349115b7570084778a7865367c25cf59b02eaba9495070f35771facd3abe07->enter($__internal_eb349115b7570084778a7865367c25cf59b02eaba9495070f35771facd3abe07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eb349115b7570084778a7865367c25cf59b02eaba9495070f35771facd3abe07->leave($__internal_eb349115b7570084778a7865367c25cf59b02eaba9495070f35771facd3abe07_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea6cc84d0acba9661940156bb15a22e00b57a4af5a27698f215dcaba5edb430b = $this->env->getExtension("native_profiler");
        $__internal_ea6cc84d0acba9661940156bb15a22e00b57a4af5a27698f215dcaba5edb430b->enter($__internal_ea6cc84d0acba9661940156bb15a22e00b57a4af5a27698f215dcaba5edb430b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ea6cc84d0acba9661940156bb15a22e00b57a4af5a27698f215dcaba5edb430b->leave($__internal_ea6cc84d0acba9661940156bb15a22e00b57a4af5a27698f215dcaba5edb430b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a69ba1d65dae206736c9ccce2090985b3c6166ead2f3a53a05bd7c6bb5ef673f = $this->env->getExtension("native_profiler");
        $__internal_a69ba1d65dae206736c9ccce2090985b3c6166ead2f3a53a05bd7c6bb5ef673f->enter($__internal_a69ba1d65dae206736c9ccce2090985b3c6166ead2f3a53a05bd7c6bb5ef673f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a69ba1d65dae206736c9ccce2090985b3c6166ead2f3a53a05bd7c6bb5ef673f->leave($__internal_a69ba1d65dae206736c9ccce2090985b3c6166ead2f3a53a05bd7c6bb5ef673f_prof);

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
