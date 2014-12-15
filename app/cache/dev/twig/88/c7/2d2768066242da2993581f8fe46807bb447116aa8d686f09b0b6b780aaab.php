<?php

/* ::base.html.twig */
class __TwigTemplate_88c72d2768066242da2993581f8fe46807bb447116aa8d686f09b0b6b780aaab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    <!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css\">
            <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        </head>
        <body>
        <style>
        .tweet{
            margin-top:17px; 
            border-bottom: #eeeeee solid 1px;
            padding-bottom: 10px;
        }
        </style>
        <div class=\"container\">
        <div class=\"row\">
          ";
        // line 20
        $this->displayBlock('contenido', $context, $blocks);
        // line 22
        echo "        </div>
        </div>
        </body>
        ";
        // line 25
        $this->displayBlock('javascripts', $context, $blocks);
        // line 26
        echo "
    </html>

";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Consula en Twitter";
    }

    // line 20
    public function block_contenido($context, array $blocks = array())
    {
        // line 21
        echo "          ";
    }

    // line 25
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  71 => 21,  68 => 20,  62 => 8,  55 => 26,  53 => 25,  48 => 22,  46 => 20,  31 => 8,  22 => 1,);
    }
}
