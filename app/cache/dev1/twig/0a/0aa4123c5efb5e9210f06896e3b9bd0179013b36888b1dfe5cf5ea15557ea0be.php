<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9193fa4ef4892984c6977c97f79811d1da3f2f5c69c8ae2d2f325c44047d368c extends Twig_Template
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
        $__internal_3506c662bb06ff390a7fff49ef441af0dca96570d7fa9e58161d50ad1f5db0c6 = $this->env->getExtension("native_profiler");
        $__internal_3506c662bb06ff390a7fff49ef441af0dca96570d7fa9e58161d50ad1f5db0c6->enter($__internal_3506c662bb06ff390a7fff49ef441af0dca96570d7fa9e58161d50ad1f5db0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3506c662bb06ff390a7fff49ef441af0dca96570d7fa9e58161d50ad1f5db0c6->leave($__internal_3506c662bb06ff390a7fff49ef441af0dca96570d7fa9e58161d50ad1f5db0c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
