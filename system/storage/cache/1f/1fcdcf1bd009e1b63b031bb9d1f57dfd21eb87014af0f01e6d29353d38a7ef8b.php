<?php

/* common/footer.twig */
class __TwigTemplate_b5f701d653972092550a63417a318035ed42c2667085aa955480fd5f2c3d80ed extends Twig_Template
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
        echo "<footer>
  <div class=\"container\"><a href=\"http://www.opencart.com\" target=\"_blank\">";
        // line 2
        echo (isset($context["text_project"]) ? $context["text_project"] : null);
        echo "</a>|<a href=\"http://www.opencart.com/index.php?route=documentation/introduction\" target=\"_blank\">";
        echo (isset($context["text_documentation"]) ? $context["text_documentation"] : null);
        echo "</a>|<a href=\"http://opencartfarsi.com\" target=\"_blank\">";
        echo (isset($context["text_support"]) ? $context["text_support"] : null);
        echo "</a>|<a href=\"http://www.opencartfarsi.ir\" target=\"_blank\">";
        echo (isset($context["text_website"]) ? $context["text_website"] : null);
        echo "</a>|<a href=\"http://www.open-cart.ir\" target=\"_blank\">";
        echo (isset($context["text_shop"]) ? $context["text_shop"] : null);
        echo "</a><br />
    </div>
</footer>
</body></html>";
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
/* <footer>*/
/*   <div class="container"><a href="http://www.opencart.com" target="_blank">{{ text_project }}</a>|<a href="http://www.opencart.com/index.php?route=documentation/introduction" target="_blank">{{ text_documentation }}</a>|<a href="http://opencartfarsi.com" target="_blank">{{ text_support }}</a>|<a href="http://www.opencartfarsi.ir" target="_blank">{{ text_website }}</a>|<a href="http://www.open-cart.ir" target="_blank">{{ text_shop }}</a><br />*/
/*     </div>*/
/* </footer>*/
/* </body></html>*/
