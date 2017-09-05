<?php

/* customer/index.html.twig */
class __TwigTemplate_b06e39088959418fe677daf47ca37f3049e4f0c39a1539561bed3e3d8771cd3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "customer/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9bc093000bcc78df29e05b33f44c4ed2cea8247b4542927cf0d9d7b91b3a4e8 = $this->env->getExtension("native_profiler");
        $__internal_e9bc093000bcc78df29e05b33f44c4ed2cea8247b4542927cf0d9d7b91b3a4e8->enter($__internal_e9bc093000bcc78df29e05b33f44c4ed2cea8247b4542927cf0d9d7b91b3a4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "customer/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9bc093000bcc78df29e05b33f44c4ed2cea8247b4542927cf0d9d7b91b3a4e8->leave($__internal_e9bc093000bcc78df29e05b33f44c4ed2cea8247b4542927cf0d9d7b91b3a4e8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_71be2be09bcacfcf93fd74f18707a61cbed9e314d605bf3a28d3f6f0a80e226f = $this->env->getExtension("native_profiler");
        $__internal_71be2be09bcacfcf93fd74f18707a61cbed9e314d605bf3a28d3f6f0a80e226f->enter($__internal_71be2be09bcacfcf93fd74f18707a61cbed9e314d605bf3a28d3f6f0a80e226f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("PartsboxBundle:Customer:datatable", array("ctrl" => (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "app" => (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))));
        echo "
";
        
        $__internal_71be2be09bcacfcf93fd74f18707a61cbed9e314d605bf3a28d3f6f0a80e226f->leave($__internal_71be2be09bcacfcf93fd74f18707a61cbed9e314d605bf3a28d3f6f0a80e226f_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7d753b1410123dc5c612548887f258368089d1a29dcfe2a610504a2f5705112 = $this->env->getExtension("native_profiler");
        $__internal_f7d753b1410123dc5c612548887f258368089d1a29dcfe2a610504a2f5705112->enter($__internal_f7d753b1410123dc5c612548887f258368089d1a29dcfe2a610504a2f5705112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
";
        
        $__internal_f7d753b1410123dc5c612548887f258368089d1a29dcfe2a610504a2f5705112->leave($__internal_f7d753b1410123dc5c612548887f258368089d1a29dcfe2a610504a2f5705112_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_07c7c9c77566485946529b2ebb0f6d95035f8d31f5550ed999edc535c3a6a121 = $this->env->getExtension("native_profiler");
        $__internal_07c7c9c77566485946529b2ebb0f6d95035f8d31f5550ed999edc535c3a6a121->enter($__internal_07c7c9c77566485946529b2ebb0f6d95035f8d31f5550ed999edc535c3a6a121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "<script>\$(\".";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\").alexDataTable(\"";
        echo twig_escape_filter($this->env, (isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["ctrl"]) ? $context["ctrl"] : $this->getContext($context, "ctrl")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\", \"";
        echo twig_escape_filter($this->env, (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "html", null, true);
        echo "\");</script>
";
        
        $__internal_07c7c9c77566485946529b2ebb0f6d95035f8d31f5550ed999edc535c3a6a121->leave($__internal_07c7c9c77566485946529b2ebb0f6d95035f8d31f5550ed999edc535c3a6a121_prof);

    }

    public function getTemplateName()
    {
        return "customer/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 11,  57 => 8,  51 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
