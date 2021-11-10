<?php

/* notification_dropdown.html */
class __TwigTemplate_9af42463a95382cabc236031a225bcdeabc691d08a35a74cf1bde2d0eaf9aea2 extends Twig_Template
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
        echo "<div id=\"notification_list\" class=\"dropdown dropdown-extended notification_list\">
\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t<div class=\"dropdown-contents\">
\t\t<div class=\"header\">";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NOTIFICATIONS");
        echo "
\t\t\t<span class=\"header_settings\">
\t\t\t\t<a href=\"";
        // line 7
        echo ($context["U_NOTIFICATION_SETTINGS"] ?? null);
        echo "\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SETTINGS");
        echo "</a>";
        // line 8
        if (($context["NOTIFICATIONS_COUNT"] ?? null)) {
            // line 9
            echo "\t\t\t\t\t<span id=\"mark_all_notifications\"> &bull; <a href=\"";
            echo ($context["U_MARK_ALL_NOTIFICATIONS"] ?? null);
            echo "\" data-ajax=\"notification.mark_all_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_ALL_READ");
            echo "</a></span>";
        }
        // line 11
        echo "\t\t\t</span>
\t\t</div>

\t\t<ul>";
        // line 15
        if ( !twig_length_filter($this->env, $this->getAttribute(($context["loops"] ?? null), "notifications", array()))) {
            // line 16
            echo "\t\t\t\t<li class=\"no_notifications\">";
            // line 17
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_NOTIFICATIONS");
            echo "
\t\t\t\t</li>";
        }
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["loops"] ?? null), "notifications", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["notifications"]) {
            // line 21
            echo "\t\t\t\t<li class=\"";
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                echo " bg2";
            }
            if ($this->getAttribute($context["notifications"], "STYLING", array())) {
                echo $this->getAttribute($context["notifications"], "STYLING", array());
            }
            if ( !$this->getAttribute($context["notifications"], "URL", array())) {
                echo " no-url";
            }
            echo "\">";
            // line 22
            if ($this->getAttribute($context["notifications"], "URL", array())) {
                // line 23
                echo "\t\t\t\t\t\t<a class=\"notification-block\" href=\"";
                if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                    echo $this->getAttribute($context["notifications"], "U_MARK_READ", array());
                    echo "\" data-real-url=\"";
                    echo $this->getAttribute($context["notifications"], "URL", array());
                } else {
                    echo $this->getAttribute($context["notifications"], "URL", array());
                }
                echo "\">";
            }
            // line 25
            if ($this->getAttribute($context["notifications"], "AVATAR", array())) {
                echo $this->getAttribute($context["notifications"], "AVATAR", array());
            } else {
                echo "<img src=\"";
                echo ($context["T_THEME_PATH"] ?? null);
                echo "/images/no_avatar.gif\" alt=\"\" />";
            }
            // line 26
            echo "\t\t\t\t\t\t<div class=\"notification_text\">
\t\t\t\t\t\t\t<p class=\"notification-title\">";
            // line 27
            echo $this->getAttribute($context["notifications"], "FORMATTED_TITLE", array());
            echo "</p>";
            // line 28
            if ($this->getAttribute($context["notifications"], "REFERENCE", array())) {
                echo "<p class=\"notification-reference\">";
                echo $this->getAttribute($context["notifications"], "REFERENCE", array());
                echo "</p>";
            }
            // line 29
            if ($this->getAttribute($context["notifications"], "FORUM", array())) {
                echo "<p class=\"notification-forum\">";
                echo $this->getAttribute($context["notifications"], "FORUM", array());
                echo "</p>";
            }
            // line 30
            if ($this->getAttribute($context["notifications"], "REASON", array())) {
                echo "<p class=\"notification-reason\">";
                echo $this->getAttribute($context["notifications"], "REASON", array());
                echo "</p>";
            }
            // line 31
            echo "\t\t\t\t\t\t\t<p class=\"notification-time\">";
            echo $this->getAttribute($context["notifications"], "TIME", array());
            echo "</p>
\t\t\t\t\t\t</div>";
            // line 33
            if ($this->getAttribute($context["notifications"], "URL", array())) {
                echo "</a>";
            }
            // line 34
            if ($this->getAttribute($context["notifications"], "UNREAD", array())) {
                // line 35
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["notifications"], "U_MARK_READ", array());
                echo "\" class=\"mark_read icon-mark\" data-ajax=\"notification.mark_read\" title=\"";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                echo "\">
\t\t\t\t\t\t\t <i class=\"icon fa-check-circle icon-xl fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                // line 36
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_READ");
                echo "</span>
\t\t\t\t\t\t</a>";
            }
            // line 39
            echo "\t\t\t\t</li>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notifications'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t</ul>

\t\t<div class=\"footer\">
\t\t\t<a href=\"";
        // line 44
        echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
        echo "\"><span>";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEE_ALL");
        echo "</span></a>
\t\t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "notification_dropdown.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 44,  147 => 41,  141 => 39,  136 => 36,  129 => 35,  127 => 34,  123 => 33,  118 => 31,  112 => 30,  106 => 29,  100 => 28,  97 => 27,  94 => 26,  86 => 25,  75 => 23,  73 => 22,  61 => 21,  57 => 20,  52 => 17,  50 => 16,  48 => 15,  43 => 11,  36 => 9,  34 => 8,  29 => 7,  24 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "notification_dropdown.html", "");
    }
}
