<?php

/* navbar_footer.html */
class __TwigTemplate_1ad1efb40e82cf4acb110e8ad8df73ebe027ff775b7788d24fa0ee718bb1d033 extends Twig_Template
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
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-footer\" class=\"nav-footer linklist\" role=\"menubar\">
\t\t<li class=\"breadcrumbs\">";
        // line 6
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 7
            ob_start();
            // line 8
            echo "\t\t\t\t<span class=\"crumb\">
\t\t\t\t\t<a href=\"";
            // line 9
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" data-navbar-reference=\"home\">
\t\t\t\t\t\t<i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 10
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</span>";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        // line 15
        // line 16
        ob_start();
        // line 17
        echo "\t\t\t<span class=\"crumb\">
\t\t\t\t<a href=\"";
        // line 18
        echo ($context["U_INDEX"] ?? null);
        echo "\" data-navbar-reference=\"index\">";
        // line 19
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i>";
        }
        echo "<span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span>
\t\t\t\t</a>
\t\t\t</span>";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 23
        // line 24
        echo "\t\t</li>";
        // line 25
        if ((($context["U_WATCH_FORUM_LINK"] ?? null) &&  !($context["S_IS_BOT"] ?? null))) {
            // line 26
            echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 27
            echo ($context["U_WATCH_FORUM_LINK"] ?? null);
            echo "\" title=\"";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"icon";
            if (($context["S_WATCHING_FORUM"] ?? null)) {
                echo "fa-check-square-o";
            } else {
                echo "fa-square-o";
            }
            echo " fa-fw\" data-toggle-text=\"";
            echo ($context["S_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\" data-toggle-url=\"";
            echo ($context["U_WATCH_FORUM_TOGGLE"] ?? null);
            echo "\">
\t\t\t\t\t<i class=\"icon";
            // line 28
            if (($context["S_WATCHING_FORUM"] ?? null)) {
                echo "fa-square-o";
            } else {
                echo "fa-check-square-o";
            }
            echo " fa-fw\" aria-hidden=\"true\"></i><span>";
            echo ($context["S_WATCH_FORUM_TITLE"] ?? null);
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>";
        }
        // line 33
        // line 34
        echo "\t\t<li class=\"rightside\">";
        echo ($context["S_TIMEZONE"] ?? null);
        echo "</li>";
        // line 35
        // line 36
        if ( !($context["S_IS_BOT"] ?? null)) {
            // line 37
            echo "\t\t\t<li class=\"rightside\">
\t\t\t\t<a href=\"";
            // line 38
            echo ($context["U_DELETE_COOKIES"] ?? null);
            echo "\" data-ajax=\"true\" data-refresh=\"true\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-trash fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 39
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("DELETE_COOKIES");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>";
            // line 42
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 43
                echo "\t\t\t\t<li class=\"rightside\" data-last-responsive=\"true\">
\t\t\t\t\t<a href=\"";
                // line 44
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST_EXPLAIN");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 45
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t</a>
\t\t\t\t</li>";
            }
        }
        // line 50
        // line 51
        if (($context["U_TEAM"] ?? null)) {
            // line 52
            echo "\t\t\t<li class=\"rightside\" data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 53
            echo ($context["U_TEAM"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 54
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("THE_TEAM");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>";
        }
        // line 58
        // line 59
        if (($context["U_CONTACT_US"] ?? null)) {
            // line 60
            echo "\t\t\t<li class=\"rightside\" data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 61
            echo ($context["U_CONTACT_US"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-envelope fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 62
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONTACT_US");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>";
        }
        // line 66
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 66,  162 => 62,  158 => 61,  155 => 60,  153 => 59,  152 => 58,  146 => 54,  142 => 53,  139 => 52,  137 => 51,  136 => 50,  129 => 45,  123 => 44,  120 => 43,  118 => 42,  113 => 39,  109 => 38,  106 => 37,  104 => 36,  103 => 35,  99 => 34,  98 => 33,  86 => 28,  70 => 27,  67 => 26,  65 => 25,  63 => 24,  62 => 23,  52 => 19,  49 => 18,  46 => 17,  44 => 16,  43 => 15,  36 => 10,  32 => 9,  29 => 8,  27 => 7,  25 => 6,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navbar_footer.html", "");
    }
}
