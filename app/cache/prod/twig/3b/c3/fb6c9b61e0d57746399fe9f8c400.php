<?php

/* PtuitBundle:Security:login.html.twig */
class __TwigTemplate_3bc3fb6c9b61e0d57746399fe9f8c400 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'alertas' => array($this, 'block_alertas'),
            'barraNavegacion' => array($this, 'block_barraNavegacion'),
            'contenido' => array($this, 'block_contenido'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("PtuitBundle::plantilla.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_alertas($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"alert\" >
       ";
        // line 5
        if ($this->getContext($context, 'error')) {
            // line 6
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'error'), "message", array(), "any", false), "html");
            echo "
       ";
        }
        // line 8
        echo "        ";
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "hasFlash", array("notice", ), "method", false)) {
            echo "            
                    ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "                
        ";
        }
        // line 11
        echo "    </div>
";
    }

    // line 13
    public function block_barraNavegacion($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"Bnavegacion\">
        <div class=\"l\">
        ";
        // line 16
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "hasFlash", array("notice", ), "method", false)) {
            // line 17
            echo "                <h3 style=\"color: #ffffff;padding-left: 1em;\">
                 ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "
                    </h3>                
        ";
        }
        // line 21
        echo "                </div>
                <div class=\"r\"></div>
            </div>
";
    }

    // line 25
    public function block_contenido($context, array $blocks = array())
    {
        // line 26
        echo "
            <div class=\"bloqueCabecera\">
                <div class=\"l\"></div>
                <div class=\"r\"></div>
                <h3 class=\"t\">Entrar a Ptuit</h3>
            </div>
            <div class=\"bloqueContenido\">
                <div class=\"bloqueContenido-tl\"></div>
                <div class=\"bloqueContenido-tr\"></div>
                <div class=\"bloqueContenido-bl\"></div>
                <div class=\"bloqueContenido-br\"></div>
                <div class=\"bloqueContenido-tc\"></div>
                <div class=\"bloqueContenido-bc\"></div>
                <div class=\"bloqueContenido-cl\"></div>
                <div class=\"bloqueContenido-cr\"></div>
                <div class=\"bloqueContenido-cc\"></div>
                <div class=\"bloqueContenido-body\">
                    <form action=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login_check"), "html");
        echo "\" method=\"post\" name=\"login_check\"  >
                        <fieldset >
                            <p >
                                <label for=\"modlgn_username\">Email</label><br />
                                <input  type=\"text\" name=\"_username\" 
                                       class=\"inputbox\" alt=\"username\" size=\"18\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getContext($context, 'last_username'), "html");
        echo "\" />
                            </p>
                            <p >
                                <label for=\"modlgn_passwd\">Password</label><br />
                                <input  type=\"password\" name=\"_password\" 
                                       class=\"inputbox\" size=\"18\" alt=\"password\" />
                            </p>
                            <p >
                                <label for=\"remember_me\">Recordar</label>
                                <input id=\"remember_me\" name=\"_remember_me\" type=\"checkbox\"  
                                       class=\"inputbox\" value=\"yes\" alt=\"Remember Me\" />
                            </p>
                            <span class=\"art-button-wrapper\">
                                <span class=\"art-button-l\"> </span>
                                <span class=\"art-button-r\"> </span>
                                <input type=\"submit\" name=\"Submit\" class=\"art-button\" value=\"Login\" />
                            </span>
                ";
        // line 65
        if ($this->getContext($context, 'error')) {
            // line 66
            echo "                            <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'error'), "message", array(), "any", false), "html");
            echo "</div>
                ";
        }
        // line 67
        echo " 
                        </fieldset>
                        <p>Para ver una demostracion de la aplicacion entrar con Usuario: demo1234@ptuit.com y Password: demo1234</p>
                        <ul>
                            <li><a href=\"#\">Perdiste tu password?</a></li>                
                            <li><a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registro"), "html");
        echo "\">Registrarse</a></li>
                        </ul>
                    </form>

                    <div class=\"cleared\"></div>
                </div>
            </div>


";
    }

    public function getTemplateName()
    {
        return "PtuitBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
