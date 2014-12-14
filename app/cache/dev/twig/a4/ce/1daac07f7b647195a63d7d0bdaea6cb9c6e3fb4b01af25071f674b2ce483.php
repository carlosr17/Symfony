<?php

/* searchBundle:Default:index.html.twig */
class __TwigTemplate_a4ce1daac07f7b647195a63d7d0bdaea6cb9c6e3fb4b01af25071f674b2ce483 extends Twig_Template
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
        echo "<!doctype html>
<html>
\t<head>
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js\"></script>
\t</head>
\t<body>
\t\t<input id=\"search\"/>
\t\t<button onclick=\"searchKey()\">Search</button>
\t\t<div id=\"tweets\">
\t\t</div>
\t\t<div id=\"keys\">
\t\t\t
\t\t</div>
\t\t<script>
\t\t\tfunction searchKey(){
\t\t\t\tvar key=\$(\"#search\").val();
\t\t\t\tvar divKeys=\$(\"#keys\");
\t\t\t\tvar divTweets=\$(\"#tweets\");
\t\t\t\t\$.ajax({
\t\t\t\t\tdata:{
\t\t\t\t\t\t'key': key
\t\t\t\t\t},
\t\t\t\t\turl:'/Symfony/web/app_dev.php/search/key',
\t\t\t\t\ttype:'get',
\t\t\t\t\tsuccess: function(data){
\t\t\t\t\t\tvar history=data.history;
\t\t\t\t\t\tvar tweets=data.tweets;
\t\t\t\t\t\tdivKeys.html(renderKeys(history));
\t\t\t\t\t\tdivTweets.html(renderTweets(tweets));
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\tfunction renderKeys(datos){
\t\t\t\tvar html=\"<ul>\";
\t\t\t\t\$.each(datos, function(i, item) {
    \t\t\t\thtml+=\"<li>\"+item.nombre+\"</li>\";
\t\t\t\t});
\t\t\t\thtml+=\"</ul>\"
\t\t\t\treturn html;
\t\t\t}
\t\t\tfunction renderTweets(datos){
\t\t\t\tvar html=\"<ul>\";
\t\t\t\t\$.each(datos, function(i, item) {
    \t\t\t\thtml+=\"<li>\"+item.user+\"-\"+item.text+\"</li>\";
\t\t\t\t});
\t\t\t\thtml+=\"</ul>\"
\t\t\t\treturn html;
\t\t\t}

\t\t</script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "searchBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
