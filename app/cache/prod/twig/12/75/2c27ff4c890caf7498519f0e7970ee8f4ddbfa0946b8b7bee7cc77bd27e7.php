<?php

/* BCoreAdminBundle::base.html.twig */
class __TwigTemplate_12752c27ff4c890caf7498519f0e7970ee8f4ddbfa0946b8b7bee7cc77bd27e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
     <meta content=\"width=device-width, initial-scale=1\" name=\"viewport\" />
\t<meta content=\"\" name=\"description\" />
\t<meta content=\"\" name=\"author\" />
     <!--[if IE]>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <![endif]-->    
    
    <!-- GLOBAL STYLES line 1 - 5 PAGE STYLES line 5 - 8 -->
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "    <!--END GLOBAL STYLES -->
    
     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>

    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class=\"padTop53 \" >

    <!-- MAIN WRAPPER -->
    <div id=\"wrap\" >
        ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "    </div>

    <!--END MAIN WRAPPER -->

    <!-- FOOTER -->
    <div id=\"footer\">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
    
    <!-- GLOBAL SCRIPTS line 1 - 3, PAGE SCRIPT 4 - 8 -->
    ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 74
        echo "    <!-- END GLOBAL SCRIPTS -->

    
</body>

    <!-- END BODY -->
</html>
";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "28c7e8b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28c7e8b_0") : $this->env->getExtension('assets')->getAssetUrl("css/28c7e8b_bootstrap_1.css");
            // line 28
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "28c7e8b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28c7e8b_1") : $this->env->getExtension('assets')->getAssetUrl("css/28c7e8b_main_2.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "28c7e8b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28c7e8b_2") : $this->env->getExtension('assets')->getAssetUrl("css/28c7e8b_theme_3.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "28c7e8b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28c7e8b_3") : $this->env->getExtension('assets')->getAssetUrl("css/28c7e8b_MoneAdmin_4.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "28c7e8b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28c7e8b_4") : $this->env->getExtension('assets')->getAssetUrl("css/28c7e8b_font-awesome_5.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "28c7e8b_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28c7e8b_5") : $this->env->getExtension('assets')->getAssetUrl("css/28c7e8b_layout2_6.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "28c7e8b_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28c7e8b_6") : $this->env->getExtension('assets')->getAssetUrl("css/28c7e8b_examples_7.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
            // asset "28c7e8b_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28c7e8b_7") : $this->env->getExtension('assets')->getAssetUrl("css/28c7e8b_timeline_8.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "28c7e8b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_28c7e8b") : $this->env->getExtension('assets')->getAssetUrl("css/28c7e8b.css");
            echo "        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "
    ";
    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7103bac_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7103bac_0") : $this->env->getExtension('assets')->getAssetUrl("js/7103bac_jquery-1.9.0_1.js");
            // line 71
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "7103bac_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7103bac_1") : $this->env->getExtension('assets')->getAssetUrl("js/7103bac_bootstrap.min_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "7103bac_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7103bac_2") : $this->env->getExtension('assets')->getAssetUrl("js/7103bac_modernizr-2.6.2-respond-1.1.0.min_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "7103bac_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7103bac_3") : $this->env->getExtension('assets')->getAssetUrl("js/7103bac_jquery.flot_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "7103bac_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7103bac_4") : $this->env->getExtension('assets')->getAssetUrl("js/7103bac_jquery.flot.resize_5.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "7103bac_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7103bac_5") : $this->env->getExtension('assets')->getAssetUrl("js/7103bac_jquery.flot.time_6.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "7103bac_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7103bac_6") : $this->env->getExtension('assets')->getAssetUrl("js/7103bac_jquery.flot.stack_7.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
            // asset "7103bac_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7103bac_7") : $this->env->getExtension('assets')->getAssetUrl("js/7103bac_for_index_8.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "7103bac"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7103bac") : $this->env->getExtension('assets')->getAssetUrl("js/7103bac.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 73
        echo "    ";
    }

    public function getTemplateName()
    {
        return "BCoreAdminBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  236 => 73,  180 => 71,  175 => 61,  172 => 60,  167 => 48,  162 => 30,  106 => 28,  101 => 18,  98 => 17,  92 => 8,  81 => 74,  79 => 60,  66 => 49,  64 => 48,  46 => 32,  44 => 17,  32 => 8,  23 => 1,);
    }
}
