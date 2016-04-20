<?php

/* base.html.twig */
class __TwigTemplate_188df84d04db5e029218c3fab25ec540db676d598f7ecbcfd2d059dba60da14d extends Twig_Template
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
        $__internal_79d9450aa9062d1e81e9a851e0f44222688117ced128917a992151953dd5c802 = $this->env->getExtension("native_profiler");
        $__internal_79d9450aa9062d1e81e9a851e0f44222688117ced128917a992151953dd5c802->enter($__internal_79d9450aa9062d1e81e9a851e0f44222688117ced128917a992151953dd5c802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_79d9450aa9062d1e81e9a851e0f44222688117ced128917a992151953dd5c802->leave($__internal_79d9450aa9062d1e81e9a851e0f44222688117ced128917a992151953dd5c802_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bb5d1976aa5346892bc78c5505fa3ff91706765696dac940d955b14f3e8e27fa = $this->env->getExtension("native_profiler");
        $__internal_bb5d1976aa5346892bc78c5505fa3ff91706765696dac940d955b14f3e8e27fa->enter($__internal_bb5d1976aa5346892bc78c5505fa3ff91706765696dac940d955b14f3e8e27fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bb5d1976aa5346892bc78c5505fa3ff91706765696dac940d955b14f3e8e27fa->leave($__internal_bb5d1976aa5346892bc78c5505fa3ff91706765696dac940d955b14f3e8e27fa_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_210c067695f6def0538a58057a243a754d7f8af148e8a037fd76cfae076ae11b = $this->env->getExtension("native_profiler");
        $__internal_210c067695f6def0538a58057a243a754d7f8af148e8a037fd76cfae076ae11b->enter($__internal_210c067695f6def0538a58057a243a754d7f8af148e8a037fd76cfae076ae11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_210c067695f6def0538a58057a243a754d7f8af148e8a037fd76cfae076ae11b->leave($__internal_210c067695f6def0538a58057a243a754d7f8af148e8a037fd76cfae076ae11b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a68f95874aab28c4cbff5ab7f3bc7e302f7230f989a6580cdc1b3b2a3aeadfe3 = $this->env->getExtension("native_profiler");
        $__internal_a68f95874aab28c4cbff5ab7f3bc7e302f7230f989a6580cdc1b3b2a3aeadfe3->enter($__internal_a68f95874aab28c4cbff5ab7f3bc7e302f7230f989a6580cdc1b3b2a3aeadfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a68f95874aab28c4cbff5ab7f3bc7e302f7230f989a6580cdc1b3b2a3aeadfe3->leave($__internal_a68f95874aab28c4cbff5ab7f3bc7e302f7230f989a6580cdc1b3b2a3aeadfe3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a85d2d4bb3ae708fccb3d5b40b3f4c47242d493c62239fbef4bdba6e12557499 = $this->env->getExtension("native_profiler");
        $__internal_a85d2d4bb3ae708fccb3d5b40b3f4c47242d493c62239fbef4bdba6e12557499->enter($__internal_a85d2d4bb3ae708fccb3d5b40b3f4c47242d493c62239fbef4bdba6e12557499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a85d2d4bb3ae708fccb3d5b40b3f4c47242d493c62239fbef4bdba6e12557499->leave($__internal_a85d2d4bb3ae708fccb3d5b40b3f4c47242d493c62239fbef4bdba6e12557499_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
