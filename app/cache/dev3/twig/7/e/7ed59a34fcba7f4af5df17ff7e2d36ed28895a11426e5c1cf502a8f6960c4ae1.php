<?php

/* base.html.twig */
class __TwigTemplate_7ed59a34fcba7f4af5df17ff7e2d36ed28895a11426e5c1cf502a8f6960c4ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d754efd5f220957e5073164600f3e46a0014eb5b9db1b2afda4ec833c04938b = $this->env->getExtension("native_profiler");
        $__internal_9d754efd5f220957e5073164600f3e46a0014eb5b9db1b2afda4ec833c04938b->enter($__internal_9d754efd5f220957e5073164600f3e46a0014eb5b9db1b2afda4ec833c04938b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title></title>

        <!-- BEGIN META -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"keywords\" content=\"your,keywords\">
        <meta name=\"description\" content=\"Short explanation about this website\">
        <!-- END META -->
        <!-- BEGIN STYLESHEETS -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/bootstrap.cs"), "html", null, true);
        echo "s\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/materialadmin.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/material-design-iconic-font.min.css"), "html", null, true);
        echo "\" />
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/theme-4/libs/DataTables/jquery.dataTables.css"), "html", null, true);
        echo "\">
        <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\">
        
        ";
        // line 21
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <!-- END STYLESHEETS -->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script type=\"text/javascript\" src=\"//assets/js/libs/utils/html5shiv.js?1403934957\"></script>
        <script type=\"text/javascript\" src=\"//assets/js/libs/utils/respond.min.js?1403934956\"></script>
        <![endif]-->
    </head>
    <body class=\"menubar-hoverable header-fixed \">

        <!-- BEGIN HEADER-->
        <header id=\"header\" >
            <div class=\"headerbar\">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class=\"headerbar-left\">
                    <ul class=\"header-nav header-nav-options\">
                        <li class=\"header-nav-brand\" >
                            <div class=\"brand-holder\">
                                <a href=\"/\" >
                                    <!--span class=\"text-lg text-bold text-primary\">MATERIAL ADMIN</span-->
                                    <img style=\"height: 50px;\" src=\"/assets/img/logo.png\"/>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a class=\"btn btn-icon-toggle menubar-toggle\" data-toggle=\"menubar\" href=\"javascript:void(0);\">
                                <i class=\"fa fa-bars\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"headerbar-right\">

                    <ul class=\"header-nav header-nav-profile\">
                        <li class=\"dropdown\">
                            <a href=\"javascript:void(0);\" class=\"dropdown-toggle ink-reaction\" data-toggle=\"dropdown\">
                                <img src=\"/assets/img/avatar1.jpg?1403934956\" alt=\"\" />
                                <span class=\"profile-info\">
                                    <?php echo \$this->user->getFirstName() . \" \" . \$this->user->getLastName() ?>
                                    <small><?php echo \$this->userrole; ?></small>
                                </span>
                            </a>
                            <ul class=\"dropdown-menu animation-dock\">
                                <li class=\"dropdown-header\">Config</li>
                                <li><a href=\"/settings\"><i class=\"fa fa-fw fa-cogs\"></i> Settings</a></li>
                                <li><a href=\"/site/logout\"><i class=\"fa fa-fw fa-power-off text-danger\"></i> Logout</a></li>
                            </ul><!--end .dropdown-menu -->
                        </li><!--end .dropdown -->
                    </ul><!--end .header-nav-profile -->
                    <ul class=\"header-nav header-nav-toggle\">
                        <li>
                            <a class=\"btn btn-icon-toggle btn-default\" id=\"offcanvaschat\" href=\"#offcanvas-chat\" data-toggle=\"offcanvas\" data-backdrop=\"false\">
                                <i class=\"fa fa-wechat\"></i>
                            </a>
                        </li>
                    </ul><!--end .header-nav-toggle -->
                </div><!--end #header-navbar-collapse -->
            </div>
        </header>
        <!-- END HEADER-->

        <!-- BEGIN BASE-->
        <div id=\"base\">

            <!-- BEGIN OFFCANVAS LEFT -->
            <div class=\"offcanvas\">
            </div><!--end .offcanvas-->
            <!-- END OFFCANVAS LEFT -->

            <!-- BEGIN CONTENT-->
            <div id=\"content\">
                <section>
                    <div class=\"section-body\">
                        <div class=\"row\">

                            <!-- BEGIN ALERT - REVENUE -->
                            <div class=\"col-md-12 col-sm-6\">
                                <div class=\"card\">
                                    <div class=\"card-head style-primary-light\">
                                        <header>
                                            <i class=\"fa fa-fw fa-tag\"></i>
                                           
                                        </header>
                                    </div>
                                    <div class=\"card-body\">
                                    ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "                                    </div><!--end .card-body -->
                                </div><!--end .card -->
                            </div><!--end .col -->


                        </div><!--end .row -->

                    </div><!--end .section-body -->
                </section>
            </div><!--end #content-->
            <!-- END CONTENT -->

            <!-- BEGIN MENUBAR-->
            <div id=\"menubar\" class=\"menubar-inverse \">
                <div class=\"menubar-fixed-panel\">
                    <div>
                        <a class=\"btn btn-icon-toggle btn-default menubar-toggle\" data-toggle=\"menubar\" href=\"javascript:void(0);\">
                            <i class=\"fa fa-bars\"></i>
                        </a>
                    </div>
                    <div class=\"expanded\">
                        <a href=\"/\">
                            <span class=\"text-lg text-bold text-primary \">MATERIAL&nbsp;ADMIN</span>
                        </a>
                    </div>
                </div>
                <div class=\"menubar-scroll-panel\">

                    <!-- BEGIN MAIN MENU -->
                    <ul id=\"main-menu\" class=\"gui-controls\">


                        <li>
                            <a href=\"/\" class=\"\">
                                <div class=\"gui-icon\"><i class=\"md md-home\"></i></div>
                                <span class=\"title\">Αρχική</span>
                            </a>
                        </li>
                        <li>
                            <a href=\"/users/user\" class=\"\">
                                <div class=\"gui-icon\"><i class=\"md md-person\"></i></div>
                                <span class=\"title\">Χρήστες</span>
                            </a>
                        </li>   
                        <li>
                            <a href=\"/product/product\" class=\"\">
                                <div class=\"gui-icon\"><i class=\"fa fa-gear\"></i></div>
                                <span class=\"title\">Είδη</span>
                            </a>
                        </li>                          
                        <li>
                            <a href=\"/supplier/supplier\" class=\"\">
                                <div class=\"gui-icon\"><i class=\"md md-computer\"></i></div>
                                <span class=\"title\">Προμηθευτές</span>
                            </a>
                        </li>    
                        <li>
                            <a href=\"/customers/customer\" class=\"\">
                                <div class=\"gui-icon\"><i class=\"md md-people\"></i></div>
                                <span class=\"title\">Πελάτες</span>
                            </a>
                        </li>  
                        <li>
                            <a href=\"/route/route\" class=\"\">
                                <div class=\"gui-icon\"><i class=\"fa fa-truck\"></i></div>
                                <span class=\"title\">Δρομολόγια</span>
                            </a>
                        </li>                          
                        <li class=\"gui-folder\">
                            <a class=\"\">
                                <div class=\"gui-icon\"><i class=\"md md-shopping-cart\"></i></div>
                                <span class=\"title\">Παραγγελίες</span>
                            </a>

                            <!--start submenu -->
                            <ul>
                                <li><a href=\"/orders/order\" ><span class=\"title\">Λίστα Παραγγελιών</span></a></li>
                                <li><a href=\"/orders/order/edit\" ><span class=\"title\">Νέα Πραγγελία</span></a></li>  
                                <li><a href=\"/orders/order/noorder\" ><span class=\"title\">Νέα Προσφορά</span></a></li>  
                            </ul><!--end /submenu -->
                        </li><!--end /menu-li -->
                        <li class=\"gui-folder\">
                            <a href=\"#\">
                                <div class=\"gui-icon\"><i class=\"md md-assessment\"></i></div>
                                <span class=\"title\">Στατιστικά</span>
                            </a>
                            <ul>
                                <li><a href=\"/report/report/sales\" ><span class=\"title\">Πωλήσεις</span></a></li>
                                <li><a href=\"/report/report/search\" ><span class=\"title\">Αναζητήσεις</span></a></li>  
                            </ul><!--end /submenu -->                           
                        </li>
                    </ul><!--end .main-menu -->
                    <!-- END MAIN MENU -->

                    <div class=\"menubar-foot-panel\">
                        <small class=\"no-linebreak hidden-folded\">
                            <span class=\"opacity-75\">Copyright &copy; 2014</span> <strong>CodeCovers</strong>
                        </small>
                    </div>
                </div><!--end .menubar-scroll-panel-->
            </div><!--end #menubar-->
            <!-- END MENUBAR -->

            <button class=\"btn btn-default-bright btn-raised\" data-toggle=\"modal\" style=\"display:none;\" id=\"loadingmodal\" data-target=\"#loading\">loading</button>
            <div class=\"modal fade\" id=\"loading\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"formModalLabel\" aria-hidden=\"true\">
                <div style=\"width:1000px\" class=\"modal-dialog\">
                    <div  style=\"width:1000px\"  class=\"modal-content\">
                        <div class=\"modal-body\">
                            <h2>Please Wait</h2>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>      
            <button class=\"btn btn-default-bright btn-raised\" data-toggle=\"modal\" style=\"display:none;\" id=\"binfomodal\" data-target=\"#infomodal\">loading</button>
            <div class=\"modal fade\" id=\"infomodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"formModalLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-body\">

                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>                 
            <!-- BEGIN OFFCANVAS RIGHT -->
            <div class=\"offcanvas\">

                <!-- BEGIN OFFCANVAS SEARCH -->
                <div id=\"offcanvas-search\" style='width: 1600px' class=\"offcanvas-pane style-default-light\">
                    <div class=\"offcanvas-head\">
                        <header class=\"text-primary\">Search</header>
                        <div class=\"offcanvas-tools\">
                            <a class=\"btn btn-icon-toggle btn-default-light pull-right\" data-dismiss=\"offcanvas\">
                                <i class=\"md md-close\"></i>
                            </a>
                        </div>
                    </div>
                    <div class=\"offcanvas-body\">

                    </div><!--end .offcanvas-body -->
                </div><!--end .offcanvas-pane -->
                <!-- END OFFCANVAS SEARCH -->

                <div id=\"offcanvas-form\" class=\"offcanvas-pane style-default-light\" style='width:1000px'>
                    <div class=\"offcanvas-head\">
                        <header class=\"text-primary\">Search</header>
                        <div class=\"offcanvas-tools\">

                        </div>
                    </div>                    
                    <div class=\"offcanvas-body\">

                    </div>
                </div>

                <!-- BEGIN OFFCANVAS CHAT -->
                <div id=\"offcanvas-chat\" class=\"offcanvas-pane style-default-light width-12\">
                    <div class=\"offcanvas-head style-default-bright\">
                        <header class=\"text-primary\">Chat</header>
                        <div class=\"offcanvas-tools\">
                            <a class=\"btn btn-icon-toggle btn-default-light pull-right\" data-dismiss=\"offcanvas\">
                                <i class=\"md md-close\"></i>
                            </a>
                            <!--a class=\"btn btn-icon-toggle btn-default-light pull-right\" href=\"#offcanvas-search\" data-toggle=\"offcanvas\" data-backdrop=\"false\">
                                <i class=\"md md-arrow-back\"></i>
                            </a-->
                        </div>
                        <div class=\"form\">
                            <div class=\"form-group floating-label\">
                                <input  name=\"sidebarChatMessage\" id=\"sidebarChatMessage\" maxlength=200 class=\"form-control autosize\" rows=\"1\">
                                <label for=\"sidebarChatMessage\">Leave a message</label>
                            </div>
                        </div>
                    </div>
                    <div  class=\"offcanvas-body\">
                        <ul id=\"chat-area\" class=\"list-chats\">
                        </ul>
                    </div><!--end .offcanvas-body -->
                </div><!--end .offcanvas-pane -->
                <!-- END OFFCANVAS CHAT -->

            </div><!--end .offcanvas-->
            <!-- END OFFCANVAS RIGHT -->

        </div><!--end #base-->
        <!-- END BASE -->        
        <!-- BEGIN JAVASCRIPT -->
        
        ";
        // line 296
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7e890b3_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_jquery-1.11.2.min_1.js");
            // line 317
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_jquery-migrate-1.2.1.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_bootstrap.min_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_spin.min_4.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_part_5_App_1.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_part_5_App.min_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_part_5_AppCard_3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_part_5_AppForm_4.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_part_5_AppNavSearch_5.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_9") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_part_5_AppNavigation_6.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_10") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_part_5_AppOffcanvas_7.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_11") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_part_5_AppVendor_8.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_12") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_jquery.autosize.min_6.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_13") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_jquery.nanoscroller.min_7.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_14") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_jquery.dataTables.min_8.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_15") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_api-check_9.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_16") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_angular_10.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_17") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_angular-ui-bootstrap_11.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_18") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_angular-ui-bootstrap-tpls_12.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_19") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_angular-sanitize_13.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_20") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_angular-formly_14.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_21") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_angular-animate_15.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_22") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_angular-messages_16.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_23") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_angular-formly-templates-bootstrap_17.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_24") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_angular-base64_18.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_25") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_part_19_alexDataTable_1.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7e890b3_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3_26") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3_part_19_alexTabs_2.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "7e890b3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7e890b3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/7e890b3.js");
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 318
        echo " 
            
            
        <!--
        <script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/jquery/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/jquery/jquery-migrate-1.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/spin.js/spin.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/autosize/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/nanoscroller/jquery.nanoscroller.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core/source/App.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core/source/AppNavigation.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core/source/AppOffcanvas.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core/source/AppCard.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core/source/AppForm.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core/source/AppNavSearch.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core/source/AppVendor.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core/demo/Demo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/DataTables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core/source/Angular.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core/source/angular-datatables.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 339
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/libs/alexander.js"), "html", null, true);
        echo "\"></script>
        -->
            
        ";
        // line 342
        $this->displayBlock('javascripts', $context, $blocks);
        // line 343
        echo "        <!-- END JAVASCRIPT -->    
    </body>
</html>
";
        
        $__internal_9d754efd5f220957e5073164600f3e46a0014eb5b9db1b2afda4ec833c04938b->leave($__internal_9d754efd5f220957e5073164600f3e46a0014eb5b9db1b2afda4ec833c04938b_prof);

    }

    // line 21
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c9ec7be4f98f3e8cb71b31e95669c9d5a87b50cf486454dc957a47842d101a0d = $this->env->getExtension("native_profiler");
        $__internal_c9ec7be4f98f3e8cb71b31e95669c9d5a87b50cf486454dc957a47842d101a0d->enter($__internal_c9ec7be4f98f3e8cb71b31e95669c9d5a87b50cf486454dc957a47842d101a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c9ec7be4f98f3e8cb71b31e95669c9d5a87b50cf486454dc957a47842d101a0d->leave($__internal_c9ec7be4f98f3e8cb71b31e95669c9d5a87b50cf486454dc957a47842d101a0d_prof);

    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        $__internal_cc40119fca81bbb727245d357251cfc016b1edd3d41f2233b928e03238c9536d = $this->env->getExtension("native_profiler");
        $__internal_cc40119fca81bbb727245d357251cfc016b1edd3d41f2233b928e03238c9536d->enter($__internal_cc40119fca81bbb727245d357251cfc016b1edd3d41f2233b928e03238c9536d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cc40119fca81bbb727245d357251cfc016b1edd3d41f2233b928e03238c9536d->leave($__internal_cc40119fca81bbb727245d357251cfc016b1edd3d41f2233b928e03238c9536d_prof);

    }

    // line 342
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e332c4cfc44e46d06bfac6acaf42102cb5bc1b47fe25e8062833dfe2f5a971b7 = $this->env->getExtension("native_profiler");
        $__internal_e332c4cfc44e46d06bfac6acaf42102cb5bc1b47fe25e8062833dfe2f5a971b7->enter($__internal_e332c4cfc44e46d06bfac6acaf42102cb5bc1b47fe25e8062833dfe2f5a971b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e332c4cfc44e46d06bfac6acaf42102cb5bc1b47fe25e8062833dfe2f5a971b7->leave($__internal_e332c4cfc44e46d06bfac6acaf42102cb5bc1b47fe25e8062833dfe2f5a971b7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 342,  623 => 108,  612 => 21,  602 => 343,  600 => 342,  594 => 339,  590 => 338,  586 => 337,  582 => 336,  578 => 335,  574 => 334,  570 => 333,  566 => 332,  562 => 331,  558 => 330,  554 => 329,  550 => 328,  546 => 327,  542 => 326,  538 => 325,  534 => 324,  530 => 323,  526 => 322,  520 => 318,  350 => 317,  346 => 296,  157 => 109,  155 => 108,  67 => 22,  65 => 21,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  40 => 14,  25 => 1,);
    }
}
