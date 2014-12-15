<?php

/* searchBundle:Default:index.html.twig */
class __TwigTemplate_a4ce1daac07f7b647195a63d7d0bdaea6cb9c6e3fb4b01af25071f674b2ce483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Consulta en Twitter";
    }

    // line 5
    public function block_contenido($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"col-md-10 col-md-offset-1\" >
<div class=\"page-header\">
  <h1>Consulta en Twitter</h1>
</div>
\t\t<div class=\"col-md-12 jumbotron\" style=\"margin-bottom:20px;\">
\t\t<p>Ingrese la palabra que quiere consultar</p>
\t\t<input id=\"search\" placeholder=\"Palabra a consutar\"/>&nbsp;&nbsp;&nbsp;
\t\t<button onclick=\"searchKey('";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("search_key");
        echo "')\">Buscar</button>
\t\t</div>
\t\t<div class=\"col-md-12\" style=\"margin-bottom:20px;\" id=\"error\"></div>
\t\t<div class=\"col-md-8\" id=\"tweets\">
\t\t</div>
\t\t<div class=\"col-md-4\" id=\"keys\">
\t\t</div>
\t\t<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/search/js/search.js"), "html", null, true);
        echo "\" type=\"text/javascript\">
\t\t</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "searchBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 20,  47 => 13,  38 => 6,  35 => 5,  29 => 3,);
    }
}
