<?php

/* PartsboxBundle:Order:search.html.twig */
class __TwigTemplate_6db652d45614363b027ce166f600b6db2ee12bc57c196233e85cb30063feceb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d30801a4f6e7f6b7443109c4b0c18217e713d70c1d5815d9428ae89dfbba8c9 = $this->env->getExtension("native_profiler");
        $__internal_8d30801a4f6e7f6b7443109c4b0c18217e713d70c1d5815d9428ae89dfbba8c9->enter($__internal_8d30801a4f6e7f6b7443109c4b0c18217e713d70c1d5815d9428ae89dfbba8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PartsboxBundle:Order:search.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_8d30801a4f6e7f6b7443109c4b0c18217e713d70c1d5815d9428ae89dfbba8c9->leave($__internal_8d30801a4f6e7f6b7443109c4b0c18217e713d70c1d5815d9428ae89dfbba8c9_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_0b0fef362d46e4141b0433165dd740502b25b40536d259d8decb390dbe618a35 = $this->env->getExtension("native_profiler");
        $__internal_0b0fef362d46e4141b0433165dd740502b25b40536d259d8decb390dbe618a35->enter($__internal_0b0fef362d46e4141b0433165dd740502b25b40536d259d8decb390dbe618a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div>   
    <div class=\"\" style=\"float:left;  width: 100%; margin: 0; padding: 0\"> 
        <div class=\"col-lg-6 \">
            <div class=\"col-lg-12 \">
                <div class=\"height-2 form\" style=\"float:left;  width: 100%; margin: 0; padding: 0\">
                    <input id=\"productfreesearch\" class='form-control productfreesearch' placeholder=\"Ελεύθερη Αναζήτηση\" type=\"text\">  
                    <input id=\"productitem\" class='form-control productitem' placeholder=\"Αναζήτηση με Κωδικό\" type=\"text\">        
                </div> 
            </div>
            <div class=\"col-lg-12 \">

            </div>    
        </div>
        <div class=\"col-lg-6 \">
            <div class='categories'></div>    
        </div>
    </div>    
</div>
";
        
        $__internal_0b0fef362d46e4141b0433165dd740502b25b40536d259d8decb390dbe618a35->leave($__internal_0b0fef362d46e4141b0433165dd740502b25b40536d259d8decb390dbe618a35_prof);

    }

    public function getTemplateName()
    {
        return "PartsboxBundle:Order:search.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/* <div>   */
/*     <div class="" style="float:left;  width: 100%; margin: 0; padding: 0"> */
/*         <div class="col-lg-6 ">*/
/*             <div class="col-lg-12 ">*/
/*                 <div class="height-2 form" style="float:left;  width: 100%; margin: 0; padding: 0">*/
/*                     <input id="productfreesearch" class='form-control productfreesearch' placeholder="Ελεύθερη Αναζήτηση" type="text">  */
/*                     <input id="productitem" class='form-control productitem' placeholder="Αναζήτηση με Κωδικό" type="text">        */
/*                 </div> */
/*             </div>*/
/*             <div class="col-lg-12 ">*/
/* */
/*             </div>    */
/*         </div>*/
/*         <div class="col-lg-6 ">*/
/*             <div class='categories'></div>    */
/*         </div>*/
/*     </div>    */
/* </div>*/
/* {% endblock %}*/
