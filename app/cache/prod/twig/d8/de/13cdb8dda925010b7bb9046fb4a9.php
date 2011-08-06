<?php

/* PtuitBundle:Inicio:index.html.twig */
class __TwigTemplate_d8de13cdb8dda925010b7bb9046fb4a9 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'alertas' => array($this, 'block_alertas'),
            'Ptuits' => array($this, 'block_Ptuits'),
            'bloquesLaterales' => array($this, 'block_bloquesLaterales'),
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

    // line 2
    public function block_alertas($context, array $blocks = array())
    {
        // line 3
        echo "<div id=\"alert\">       
           ";
        // line 4
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "texto", array(), "any", false), array("attr" => array("class" => "error", "id" => "errorMensaje")));
        echo "       
    </div>
";
    }

    // line 7
    public function block_Ptuits($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id=\"cajaMensaje\">
        <form id=\"formMens\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ptuit_create"), "html");
        echo "\" method=\"post\">
        ";
        // line 11
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, 'form'), "texto", array(), "any", false), array("attr" => array("class" => "error", "id" => "errorMensaje")));
        echo "
                <fieldset class=\"mensaje\">
                    <legend>Escribe tu ptuit</legend>


                ";
        // line 16
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, 'form'), "texto", array(), "any", false), array("attr" => array("class" => "txtMen", "cols" => "52", "rows" => "2")));
        echo "       
                    <div class=\"contador\" ></div>
                    <input id=\"botonTxt\" title=\"enviar\" name=\"ptuit\" value=\"ptuit..\" type=\"submit\"/>

                </fieldset>
            ";
        // line 21
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
            </form>
        </div>   

        <h1>Cronologia</h1>
        <div id=\"caja_men\" >
            <ul class=\"statuses\">

    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'mensajes'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['mensaje']) {
            // line 30
            echo "                <li>
                    <div class=\"avatar\"><a href=\"#\"><img  src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/ptuit.png"), "html");
            echo "\"alt=\"avatar\" /></a></div>
                    <div class=\"tweetTxt\">
                        <strong><a href=\"#\">@";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'mensaje'), "usuario", array(), "any", false), "nick", array(), "any", false), "html");
            echo "</a>:</strong>                        
                        <p>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'mensaje'), "texto", array(), "any", false), "html");
            echo "</p>
                        <div class=\"date\">";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->getAttribute($this->getContext($context, 'mensaje'), "creado", array(), "any", false), "d-m-Y"), "html");
            echo "
                            <span class=\"ExtMens\">";
            // line 36
            if (twig_in_filter($this->getContext($context, 'usuario'), $this->getAttribute($this->getContext($context, 'mensaje'), "usuarioDeFavoritos", array(), "any", false))) {
                // line 37
                echo "                                <a class=\"favorito\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ptuit_borra_favorito", array("id" => $this->getAttribute($this->getContext($context, 'mensaje'), "id", array(), "any", false))), "html");
                echo "\">
                                    <img src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/favorito2.jpeg"), "html");
                echo "\"/> Eliminar favorito</a>            
                                    ";
            } else {
                // line 40
                echo "                                <a class=\"favorito\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ptuit_favorito", array("id" => $this->getAttribute($this->getContext($context, 'mensaje'), "id", array(), "any", false))), "html");
                echo "\">
                                    <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/favorito.jpeg"), "html");
                echo "\"/> Favorito</a>
                                    ";
            }
            // line 43
            echo "                                    ";
            if (($this->getContext($context, 'usuario') == $this->getAttribute($this->getContext($context, 'mensaje'), "usuario", array(), "any", false))) {
                // line 44
                echo "                                <a class=\"borrarMens\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ptuit_favorito", array("id" => $this->getAttribute($this->getContext($context, 'mensaje'), "id", array(), "any", false))), "html");
                echo "\">
                                    <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/papelera.jpeg"), "html");
                echo "\"></img> Borrar</a>
                                    ";
            } else {
                // line 47
                echo "                                 <a class=\"reptuit\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ptuit_replicar", array("id" => $this->getAttribute($this->getContext($context, 'mensaje'), "id", array(), "any", false))), "html");
                echo "\">
                                     <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/reptuit.jpeg"), "html");
                echo "\"></img> Reptuit</a>    
                                    ";
            }
            // line 50
            echo "                                <a href=\"#\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/responder.jpeg"), "html");
            echo "\"></img> Responder</a>
                            </span>
                            <div class=\"flotarDer\"> <a class=\"verMens\" href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ptuit_show", array("id" => $this->getAttribute($this->getContext($context, 'mensaje'), "id", array(), "any", false))), "html");
            echo "\">ver</a></div> 
                        </div>                        
                    </div>

                    <div class=\"clear\"></div>
                </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "                <li><a href=\"#\"><img class=\"avatar\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/ptuit.png"), "html");
            echo "\"  alt=\"avatar\" /></a>
                    Escribe tu Ptuit y se mostrara aqui, los tuyos y los de tus amigos.
                </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mensaje'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 63
        echo "
            </ul>        
        </div>

";
    }

    // line 68
    public function block_bloquesLaterales($context, array $blocks = array())
    {
        echo "  
        <div class=\"bloque\">
            <div class=\"bloque-body\">
                <div class=\"bloqueCabecera\">
                    <div class=\"l\"></div>
                    <div class=\"r\"></div>
                    <h3 class=\"t\">Perfil Usuario</h3>
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
                        <p>";
        // line 87
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'usuario'), "nick", array(), "any", false), "html");
        echo "</p>
                        <p>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'usuario'), "email", array(), "any", false), "html");
        echo "</p>
                        <h3>Seguidores: ";
        // line 89
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'usuario'), "Seguidores", array(), "any", false)), "html");
        echo "</h3>
                        ";
        // line 90
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'usuario'), "Seguidores", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['seguidor']) {
            // line 91
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'seguidor'), "nick", array(), "any", false), "html");
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seguidor'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 93
        echo "                        <h3>Seguidos: ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getContext($context, 'usuario'), "Seguidos", array(), "any", false)), "html");
        echo "</h3>
                        ";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, 'usuario'), "Seguidos", array(), "any", false));
        foreach ($context['_seq'] as $context['_key'] => $context['seguido']) {
            // line 95
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'seguido'), "nick", array(), "any", false), "html");
            echo "</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['seguido'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 97
        echo "                        <div class=\"cleared\"></div>
                    </div>
                </div>
                <div class=\"cleared\"></div>
            </div>
        </div>
 ";
    }

    public function getTemplateName()
    {
        return "PtuitBundle:Inicio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
