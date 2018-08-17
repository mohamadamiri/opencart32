<?php

/* common/header.twig */
class __TwigTemplate_8a881f09b77050b2d178107257e98dc9c367ad7df2db5e439be8e0327a973b9d extends Twig_Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
<base href=\"";
        // line 6
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 7
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 10
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
";
        // line 16
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 17
            echo "<link href=\"view/stylesheet/bootstrap-rtl.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome-rtl.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        } else {
            // line 20
            echo "<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
";
        }
        // line 23
        echo "<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 27
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 28
            echo "<link type=\"text/css\" href=\"view/stylesheet/stylesheet-rtl.css\" rel=\"stylesheet\" media=\"screen\" />
";
        } else {
            // line 30
            echo "<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />
";
        }
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 33
            echo "<link type=\"text/css\" href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 36
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        if (((isset($context["direction"]) ? $context["direction"] : null) == "rtl")) {
            // line 39
            echo "<script src=\"view/javascript/common-rtl.js\" type=\"text/javascript\"></script>
";
        } else {
            // line 41
            echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
";
        }
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 44
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">

  
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 53
        echo (isset($context["home"]) ? $context["home"] : null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\" title=\"";
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "\" /></a></div>
    <a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>";
        // line 54
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 55
            echo "    
    

    
    <ul class=\"nav navbar-nav navbar-right\">
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 60
            echo (isset($context["image"]) ? $context["image"] : null);
            echo "\" alt=\"";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo "\" title=\"";
            echo (isset($context["username"]) ? $context["username"] : null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />";
            echo (isset($context["firstname"]) ? $context["firstname"] : null);
            echo " ";
            echo (isset($context["lastname"]) ? $context["lastname"] : null);
            echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 62
            echo (isset($context["profile"]) ? $context["profile"] : null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo (isset($context["text_profile"]) ? $context["text_profile"] : null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 64
            echo (isset($context["text_store"]) ? $context["text_store"] : null);
            echo "</li>
          ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 66
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["store"], "href", array());
                echo "\" target=\"_blank\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 69
            echo (isset($context["text_help"]) ? $context["text_help"] : null);
            echo "</li>
          <li><a href=\"http://www.opencart.com\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 70
            echo (isset($context["text_homepage"]) ? $context["text_homepage"] : null);
            echo "</a></li>
          <li><a href=\"http://docs.opencart.com\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 71
            echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
            echo "</a></li>
          <li><a href=\"http://opencartfarsi.com\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 72
            echo (isset($context["text_support"]) ? $context["text_support"] : null);
            echo "</a></li>
          <li><a href=\"http://www.opencartfarsi.ir\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 73
            echo (isset($context["text_website"]) ? $context["text_website"] : null);
            echo "</a></li>
          <li><a href=\"http://www.open-cart.ir\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 74
            echo (isset($context["text_shop"]) ? $context["text_shop"] : null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 77
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 79
        echo " </div>
</header>
";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 79,  238 => 77,  232 => 74,  228 => 73,  224 => 72,  220 => 71,  216 => 70,  212 => 69,  209 => 68,  198 => 66,  194 => 65,  190 => 64,  183 => 62,  168 => 60,  161 => 55,  159 => 54,  151 => 53,  142 => 46,  133 => 44,  129 => 43,  125 => 41,  121 => 39,  119 => 38,  108 => 36,  104 => 35,  91 => 33,  87 => 32,  83 => 30,  79 => 28,  77 => 27,  71 => 23,  66 => 20,  61 => 17,  59 => 16,  54 => 13,  48 => 11,  46 => 10,  40 => 8,  38 => 7,  34 => 6,  30 => 5,  22 => 2,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <title>{{ title }}</title>*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />*/
/* <script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>*/
/* <script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>*/
/* {% if direction == 'rtl' %}*/
/* <link href="view/stylesheet/bootstrap-rtl.css" type="text/css" rel="stylesheet" />*/
/* <link href="view/javascript/font-awesome/css/font-awesome-rtl.min.css" type="text/css" rel="stylesheet" />*/
/* {% else %}*/
/* <link href="view/stylesheet/bootstrap.css" type="text/css" rel="stylesheet" />*/
/* <link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />*/
/* {% endif %}*/
/* <script src="view/javascript/jquery/datetimepicker/moment/moment.min.js" type="text/javascript"></script>*/
/* <script src="view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" type="text/javascript"></script>*/
/* <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>*/
/* <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />*/
/* {% if direction == 'rtl' %}*/
/* <link type="text/css" href="view/stylesheet/stylesheet-rtl.css" rel="stylesheet" media="screen" />*/
/* {% else %}*/
/* <link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />*/
/* {% endif %}*/
/* {% for style in styles %}*/
/* <link type="text/css" href="{{ style.href }}" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% if direction == 'rtl' %}*/
/* <script src="view/javascript/common-rtl.js" type="text/javascript"></script>*/
/* {% else %}*/
/* <script src="view/javascript/common.js" type="text/javascript"></script>*/
/* {% endif %}*/
/* {% for script in scripts %}*/
/* <script type="text/javascript" src="{{ script }}"></script>*/
/* {% endfor %}*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/* <header id="header" class="navbar navbar-static-top">*/
/*   <div class="container-fluid">*/
/* */
/*   */
/*     <div id="header-logo" class="navbar-header"><a href="{{ home }}" class="navbar-brand"><img src="view/image/logo.png" alt="{{ heading_title }}" title="{{ heading_title }}" /></a></div>*/
/*     <a href="#" id="button-menu" class="hidden-md hidden-lg"><span class="fa fa-bars"></span></a>{% if logged %}*/
/*     */
/*     */
/* */
/*     */
/*     <ul class="nav navbar-nav navbar-right">*/
/*       <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ image }}" alt="{{ firstname }} {{ lastname }}" title="{{ username }}" id="user-profile" class="img-circle" />{{ firstname }} {{ lastname }} <i class="fa fa-caret-down fa-fw"></i></a>*/
/*         <ul class="dropdown-menu dropdown-menu-right">*/
/*           <li><a href="{{ profile }}"><i class="fa fa-user-circle-o fa-fw"></i> {{ text_profile }}</a></li>*/
/*           <li role="separator" class="divider"></li>*/
/*           <li class="dropdown-header">{{ text_store }}</li>*/
/*           {% for store in stores %}*/
/*           <li><a href="{{ store.href }}" target="_blank">{{ store.name }}</a></li>*/
/*           {% endfor %}*/
/*           <li role="separator" class="divider"></li>*/
/*           <li class="dropdown-header">{{ text_help }}</li>*/
/*           <li><a href="http://www.opencart.com" target="_blank"><i class="fa fa-opencart fa-fw"></i> {{ text_homepage }}</a></li>*/
/*           <li><a href="http://docs.opencart.com" target="_blank"><i class="fa fa-file-text-o fa-fw"></i> {{ text_documentation }}</a></li>*/
/*           <li><a href="http://opencartfarsi.com" target="_blank"><i class="fa fa-comments-o fa-fw"></i> {{ text_support }}</a></li>*/
/*           <li><a href="http://www.opencartfarsi.ir" target="_blank"><i class="fa fa-opencart fa-fw"></i> {{ text_website }}</a></li>*/
/*           <li><a href="http://www.open-cart.ir" target="_blank"><i class="fa fa-opencart fa-fw"></i> {{ text_shop }}</a></li>*/
/*         </ul>*/
/*       </li>*/
/*       <li><a href="{{ logout }}"><i class="fa fa-sign-out"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_logout }}</span></a></li>*/
/*     </ul>*/
/*     {% endif %} </div>*/
/* </header>*/
/* */
