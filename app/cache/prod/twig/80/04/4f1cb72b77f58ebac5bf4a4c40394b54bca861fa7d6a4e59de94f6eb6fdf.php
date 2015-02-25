<?php

/* AppAgnBundle:Default:test.html.twig */
class __TwigTemplate_80044f1cb72b77f58ebac5bf4a4c40394b54bca861fa7d6a4e59de94f6eb6fdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("BCoreAdminBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'nav_left_block' => array($this, 'block_nav_left_block'),
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BCoreAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_nav_left_block($context, array $blocks = array())
    {
        echo "  
    ";
        // line 4
        $this->env->loadTemplate("AppAgnBundle::left_menu.html.twig")->display($context);
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo " Dashboard ";
    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        echo " Welcome, ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo " ";
    }

    public function getTemplateName()
    {
        return "AppAgnBundle:Default:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 9,  47 => 7,  43 => 4,  38 => 3,  11 => 1,);
    }
}
