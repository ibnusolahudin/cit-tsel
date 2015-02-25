<?php

/* AppAgnBundle:Security:setPasswd.html.twig */
class __TwigTemplate_0134d3f7dcb61d4e450bc8131d1ec176f33baa19d7b832464151ddf6b9ddc654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Hello ";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1 class=\"title\">Your password is ";
        echo twig_escape_filter($this->env, (isset($context["encode"]) ? $context["encode"] : $this->getContext($context, "encode")), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "AppAgnBundle:Security:setPasswd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  46 => 5,  40 => 3,  36 => 1,  34 => 9,  11 => 1,);
    }
}
