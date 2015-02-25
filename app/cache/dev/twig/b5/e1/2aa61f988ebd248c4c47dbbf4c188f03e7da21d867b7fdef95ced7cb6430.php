<?php

/* AppAgnBundle::left_menu.html.twig */
class __TwigTemplate_b5e12aa61f988ebd248c4c47dbbf4c188f03e7da21d867b7fdef95ced7cb6430 extends Twig_Template
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
        echo $this->env->getExtension('knp_menu')->render("AppAgnBundle:MenuBuilder:mainMenu", array("currentClass" => "active", "template" => "AppAgnBundle:Menu:knp_menu.html.twig"));
    }

    public function getTemplateName()
    {
        return "AppAgnBundle::left_menu.html.twig";
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
