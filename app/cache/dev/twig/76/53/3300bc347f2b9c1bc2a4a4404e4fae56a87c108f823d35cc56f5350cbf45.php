<?php

/* AppAgnBundle::knp_menu.html.twig */
class __TwigTemplate_76533300bc347f2b9c1bc2a4a4404e4fae56a87c108f823d35cc56f5350cbf45 extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('knp_menu')->render("AppAgnBundle:Builder:mainMenu");
    }

    public function getTemplateName()
    {
        return "AppAgnBundle::knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
