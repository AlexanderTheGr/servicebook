<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_d927dc58f89e799f3cb10037b3029291e78b640bcdfa496728002b7fa81ee99a extends Twig_Template
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
        $__internal_893857a86f982e56c756c7c24d97ffedaccd021e4ca8f6bacddacea321c2249e = $this->env->getExtension("native_profiler");
        $__internal_893857a86f982e56c756c7c24d97ffedaccd021e4ca8f6bacddacea321c2249e->enter($__internal_893857a86f982e56c756c7c24d97ffedaccd021e4ca8f6bacddacea321c2249e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_893857a86f982e56c756c7c24d97ffedaccd021e4ca8f6bacddacea321c2249e->leave($__internal_893857a86f982e56c756c7c24d97ffedaccd021e4ca8f6bacddacea321c2249e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
