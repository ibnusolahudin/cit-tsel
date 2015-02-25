<?php

/* X4DSBAdmin2Bundle:Login:layout.html.twig */
class __TwigTemplate_ac1aa1af236efd5f9c44c594c8711fe056017ea59b6ded055f766eb2a7ac3e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("X4DSBAdmin2Bundle:Login:base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "X4DSBAdmin2Bundle:Login:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"row\">
    <div class=\"col-md-4 col-md-offset-4\">
        <div class=\"login-panel panel panel-default\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 8
        $this->displayBlock('header', $context, $blocks);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 14
        echo "            </div>
        </div>
    </div>
</div>
";
    }

    // line 8
    public function block_header($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login.title"), "html", null, true);
    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 12
        echo "                
                ";
    }

    public function getTemplateName()
    {
        return "X4DSBAdmin2Bundle:Login:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  69 => 11,  63 => 8,  55 => 14,  53 => 11,  47 => 8,  41 => 4,  38 => 3,  11 => 1,);
    }
}
