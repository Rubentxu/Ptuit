<?php

/* PtuitBundle::plantilla.html.twig */
class __TwigTemplate_e9127c9bebf20227c92008c0dba82108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'alertas' => array($this, 'block_alertas'),
            'cabecera' => array($this, 'block_cabecera'),
            'barraNavegacion' => array($this, 'block_barraNavegacion'),
            'Ptuits' => array($this, 'block_Ptuits'),
            'bloquesLaterales' => array($this, 'block_bloquesLaterales'),
            'contenido' => array($this, 'block_contenido'),
            'piePagina' => array($this, 'block_piePagina'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"ltr\" lang=\"en-US\" xml:lang=\"en\">
    <head>   
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
        <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\" />
    ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </head>
    <body>
";
        // line 20
        $this->displayBlock('alertas', $context, $blocks);
        // line 27
        echo "            <div id=\"fondoBody\">
                <div id=\"fondoBodyReflejo\">
                    <div id=\"fondoBodyReflejoImagen\">
                        <div id=\"principal\">
                            <div class=\"pagina\">
                                <div class=\"pagina-tl\"></div>
                                <div class=\"pagina-tr\"></div>
                                <div class=\"pagina-bl\"></div>
                                <div class=\"pagina-br\"></div>
                                <div class=\"pagina-tc\"></div>
                                <div class=\"pagina-bc\"></div>
                                <div class=\"pagina-cl\"></div>
                                <div class=\"pagina-cr\"></div>
                                <div class=\"pagina-cc\"></div>
                                <div class=\"pagina-body\">
                                ";
        // line 42
        $this->displayBlock('cabecera', $context, $blocks);
        // line 54
        echo "                                ";
        $this->displayBlock('barraNavegacion', $context, $blocks);
        // line 71
        echo "                                 ";
        $this->displayBlock('contenido', $context, $blocks);
        // line 439
        echo "                                                <div class=\"cleared\"></div>
                                    ";
        // line 440
        $this->displayBlock('piePagina', $context, $blocks);
        // line 456
        echo "                                            </div>
                                        </div>                            
                                    </div>
                                </div>
                            </div>
                        </div>





                    </body>
                </html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ptuit";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/estilos/estilo.css"), "html");
        echo "\" type=\"text/css\" media=\"screen\" />
        <!--[if IE 6]><link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/estilos/estilo.ie6.css"), "html");
        echo "\" type=\"text/css\" media=\"screen\" /><![endif]-->
        <!--[if IE 7]><link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/estilos/estilo.ie7.css"), "html");
        echo "\" media=\"screen\" /><![endif]-->
    ";
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        // line 15
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/js/jquery.js"), "html");
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/js/ptuit.js"), "html");
        echo "\"></script>
    ";
    }

    // line 20
    public function block_alertas($context, array $blocks = array())
    {
        // line 21
        echo "        <div id=\"alert\">
        ";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "hasFlash", array("notice", ), "method", false)) {
            echo "    
            ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "    
        ";
        }
        // line 25
        echo "        </div>
";
    }

    // line 42
    public function block_cabecera($context, array $blocks = array())
    {
        // line 43
        echo "                                        <div class=\"cabecera\">
                                            <div class=\"cabecera-centro\">
                                                <div class=\"cabecera-png\"></div>
                                                <div class=\"cabecera-jpeg\"></div>
                                            </div>
                                            <div class=\"logotipo\">
                                                <h1 id=\"name-text\" class=\"logotipo-nombre\"><a href=\"#\">Ptuit</a></h1>
                                                <h2 id=\"slogan-text\" class=\"logotipo-texto\">Las palabras no se las lleva el viento</h2>
                                            </div>
                                        </div>
                                ";
    }

    // line 54
    public function block_barraNavegacion($context, array $blocks = array())
    {
        // line 55
        echo "                                        <div class=\"Bnavegacion\">
                                            <div class=\"l\"></div>
                                            <div class=\"r\"></div>
                                            <ul class=\"menu\">
                                                <li>
                                                    <a href=\"#\" class=\"active\"><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">Cronologia</span></a>
                                                </li>
                                                <li>
                                                    <a href=\"#\"><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">Mis Ptuits</span></a>
                                                </li>\t\t
                                                <li>
                                                    <a href=\"#\"><span class=\"l\"></span><span class=\"r\"></span><span class=\"t\">Perfil</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                 ";
    }

    // line 75
    public function block_Ptuits($context, array $blocks = array())
    {
        // line 76
        echo "                                                        <div class=\"Cptuits\">
                                                            <div class=\"Cptuits-body\">
                                                                <div class=\"Cptuits-inner ptuits\">
                                                                    <div class=\"Cptuitsmetadataheader\">
                                                                        <h2 class=\"Cptuitsheader\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/Cptuitsheadericon.png"), "html");
        echo "\" width=\"26\" height=\"26\" alt=\"\" />Text, <a href=\"#\">Link</a>, <a class=\"visited\" href=\"#\">Visited</a>, <a class=\"hovered\" href=\"#\">Hovered</a></h2>
                                                                        <div class=\"Cptuitsheadericons art-metadata-icons\">
                                                                            September 23th, 2007
                                                                            | Written by Administrator
                                                                            | <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/Cptuitspdficon.png"), "html");
        echo "\" width=\"16\" height=\"16\" alt=\"\" />

                                                                            | <img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/Cptuitsprinticon.png"), "html");
        echo "\" width=\"16\" height=\"16\" alt=\"\" />

                                                                            | <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/Cptuitsemailicon.png"), "html");
        echo "\" width=\"16\" height=\"10\" alt=\"\" />

                                                                            | <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenes/Cptuitsediticon.png"), "html");
        echo "\" width=\"15\" height=\"15\" alt=\"\" />
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"Cptuitscontent\">

                                                                        <img class=\"ptuits\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ptuit/imagenespreview.jpg"), "html");
        echo "\" alt=\"an image\" style=\"float:left;\" />                                                               
                                                                        <p>Lorem <sup>superscript</sup> dolor <sub>subscript</sub> amet, consectetuer adipiscing
                                                                            elit, <a href=\"#\" title=\"link\">link</a>, <a class=\"visited\" href=\"#\" title=\"visited link\">visited link</a>,
                                                                            <a class=\"hover\" href=\"#\" title=\"hovered link\">hovered link</a>. Nullam dignissim convallis est.
                                                                            Quisque aliquam. <cite>cite</cite>. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.
                                                                            Donec sed tellus eget sapien fringilla nonummy. <acronym title=\"National Basketball Association\">NBA</acronym> Mauris a
                                                                            ante. Suspendisse quam sem, consequat at, commodo vitae, feugiat in, nunc.
                                                                            <abbr title=\"Avenue\">
                                                                                AVE</abbr></p>

                                                                        <p>Aliquam pharetra. Nulla in tellus eget odio sagittis blandit.Maecenas at nisl. Nullam lorem mi, eleifend a,
                                                                            fringilla vel, semper at, ligula. Mauris eu wisi. Ut ante dui, aliquet nec, congue non,
                                                                            accumsan sit amet, lectus. Mauris et mauris. Duis sed massa id mauris pretium venenatis.
                                                                            Suspendisse cursus velit vel ligula. Mauris elit.
                                                                        </p>

                                                                        <p>Aliquam pharetra. Nulla in tellus eget odio sagittis blandit.Maecenas at nisl. Nullam
                                                                            lorem mi, eleifend a, fringilla vel, semper at, ligula. Mauris eu wisi. Ut ante
                                                                            dui, aliquet nec, congue non, accumsan sit amet, lectus. Mauris et mauris. Duis
                                                                            sed massa id mauris pretium venenatis. Suspendisse cursus velit vel ligula. Mauris
                                                                            elit.</p>

                                                                        <p class=\"modifydate\">Last Updated ( Thursday, 03 May 2008 09:39 )</p>

                                                                        <p>
                                                                            <span class=\"art-button-wrapper\">
                                                                                <span class=\"art-button-l\"> </span>
                                                                                <span class=\"art-button-r\"> </span>
                                                                                <a class=\"readon art-button\" href=\"javascript:void(0)\">Read&nbsp;more...</a>
                                                                            </span>
                                                                        </p>

                                                                    </div>
                                                                    <div class=\"cleared\"></div>
                                                                </div>


                                                                <div class=\"cleared\"></div>
                                                            </div>
                                                        </div>   
                                                     ";
    }

    // line 140
    public function block_bloquesLaterales($context, array $blocks = array())
    {
        // line 141
        echo "                                                            <div class=\"bloque\">
                                                                <div class=\"bloque-body\">
                                                                    <div class=\"bloqueCabecera\">
                                                                        <div class=\"l\"></div>
                                                                        <div class=\"r\"></div>
                                                                        <h3 class=\"t\">Main Menu</h3>
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
                                                                            <ul>
                                                                                <li class=\"active\"><a href=\"#\"><span>Home</span></a></li>
                                                                                <li class=\"parent\"><a href=\"#\"><span>Joomla! Overview</span></a></li>
                                                                                <li><a href=\"#\"><span>Joomla! License</span></a></li>
                                                                                <li><a href=\"#\"><span>More about Joomla!</span></a></li>
                                                                                <li><a href=\"#\"><span>FAQ</span></a></li>
                                                                                <li><a href=\"#\"><span>Hyperlink</span></a></li>
                                                                                <li><a href=\"#\" class=\"visited\"><span>Visited link</span></a></li>
                                                                                <li><a href=\"#\" class=\"hover\"><span>Hovered link</span></a></li>

                                                                            </ul>

                                                                            <div class=\"cleared\"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cleared\"></div>
                                                                </div>
                                                            </div>
                                                            <div class=\"bloque\">
                                                                <div class=\"bloque-body\">
                                                                    <div class=\"bloqueCabecera\">
                                                                        <div class=\"l\"></div>
                                                                        <div class=\"r\"></div>
                                                                        <h3 class=\"t\">Polls</h3>
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
                                                                            <form action=\"index.php\" method=\"post\" name=\"form2\">
                                                                                <table width=\"95%\" border=\"0\" cellspacing=\"0\" cellpadding=\"1\" align=\"center\" class=\"poll\">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td style=\"font-weight: bold;\">Joomla! is used for?</td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tr>
                                                                                        <td align=\"center\">
                                                                                            <table class=\"pollstableborder\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">
                                                                                                <tr>
                                                                                                    <td class=\"sectiontableentry2\" valign=\"top\">
                                                                                                        <input type=\"radio\" name=\"voteid\" id=\"voteid1\" value=\"1\" alt=\"1\" />
                                                                                                    </td>
                                                                                                    <td class=\"sectiontableentry2\" valign=\"top\">
                                                                                                        <label for=\"voteid1\">Community Sites</label>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class=\"sectiontableentry1\" valign=\"top\">
                                                                                                        <input type=\"radio\" name=\"voteid\" id=\"voteid2\" value=\"2\" alt=\"2\" />
                                                                                                    </td>
                                                                                                    <td class=\"sectiontableentry1\" valign=\"top\">
                                                                                                        <label for=\"voteid2\">Public Brand Sites</label>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class=\"sectiontableentry2\" valign=\"top\">
                                                                                                        <input type=\"radio\" name=\"voteid\" id=\"voteid3\" value=\"3\" alt=\"3\" />
                                                                                                    </td>
                                                                                                    <td class=\"sectiontableentry2\" valign=\"top\">
                                                                                                        <label for=\"voteid3\">eCommerce</label>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class=\"sectiontableentry1\" valign=\"top\">
                                                                                                        <input type=\"radio\" name=\"voteid\" id=\"voteid4\" value=\"4\" alt=\"4\" />
                                                                                                    </td>
                                                                                                    <td class=\"sectiontableentry1\" valign=\"top\">
                                                                                                        <label for=\"voteid4\">Blogs</label>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class=\"sectiontableentry2\" valign=\"top\">
                                                                                                        <input type=\"radio\" name=\"voteid\" id=\"voteid5\" value=\"5\" alt=\"5\" />
                                                                                                    </td>
                                                                                                    <td class=\"sectiontableentry2\" valign=\"top\">
                                                                                                        <label for=\"voteid5\">Intranets</label>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class=\"sectiontableentry1\" valign=\"top\">
                                                                                                        <input type=\"radio\" name=\"voteid\" id=\"voteid6\" value=\"6\" alt=\"6\" />
                                                                                                    </td>
                                                                                                    <td class=\"sectiontableentry1\" valign=\"top\">
                                                                                                        <label for=\"voteid6\">Photo and Media Sites</label>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td class=\"sectiontableentry2\" valign=\"top\">
                                                                                                        <input type=\"radio\" name=\"voteid\" id=\"voteid7\" value=\"7\" alt=\"7\" />
                                                                                                    </td>
                                                                                                    <td class=\"sectiontableentry2\" valign=\"top\">
                                                                                                        <label for=\"voteid7\">All of the Above!</label>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </table>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>
                                                                                            <div align=\"center\">
                                                                                                <span class=\"art-button-wrapper\">
                                                                                                    <span class=\"art-button-l\"> </span>
                                                                                                    <span class=\"art-button-r\"> </span>
                                                                                                    <input type=\"submit\" name=\"task_button\" class=\"art-button\" value=\"Vote\" />
                                                                                                </span>&nbsp;
                                                                                                <span class=\"art-button-wrapper\">
                                                                                                    <span class=\"art-button-l\"> </span>
                                                                                                    <span class=\"art-button-r\"> </span>
                                                                                                    <input type=\"button\" name=\"option\" class=\"art-button\" value=\"Results\" />
                                                                                                </span>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </table>
                                                                            </form>

                                                                            <div class=\"cleared\"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cleared\"></div>
                                                                </div>
                                                            </div>
                                                            <div class=\"bloque\">
                                                                <div class=\"bloque-body\">
                                                                    <div class=\"bloqueCabecera\">
                                                                        <div class=\"l\"></div>
                                                                        <div class=\"r\"></div>
                                                                        <h3 class=\"t\">Key Concepts</h3>
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
                                                                            <ul>
                                                                                <li><a href=\"#\"><span>Extensions</span></a></li>
                                                                                <li><a href=\"#\"><span>Content Layouts</span></a></li>
                                                                                <li><a href=\"#\"><span>Example Pages</span></a></li>
                                                                            </ul>

                                                                            <div class=\"cleared\"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cleared\"></div>
                                                                </div>
                                                            </div>
                                                            <div class=\"bloque\">
                                                                <div class=\"bloque-body\">
                                                                    <div class=\"bloqueCabecera\">
                                                                        <div class=\"l\"></div>
                                                                        <div class=\"r\"></div>
                                                                        <h3 class=\"t\">Who's Online</h3>
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
                                                                            We have&nbsp;1 guest&nbsp;online

                                                                            <div class=\"cleared\"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cleared\"></div>
                                                                </div>
                                                            </div>
                                                            <div class=\"bloque\">
                                                                <div class=\"bloque-body\">
                                                                    <div class=\"bloqueCabecera\">
                                                                        <div class=\"l\"></div>
                                                                        <div class=\"r\"></div>
                                                                        <h3 class=\"t\">Login Form</h3>
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
                                                                            <form action=\"#\" method=\"post\" name=\"login\" id=\"form-login\" >
                                                                                <fieldset class=\"input\">
                                                                                    <p id=\"form-login-username\">
                                                                                        <label for=\"modlgn_username\">Username</label><br />
                                                                                        <input id=\"modlgn_username\" type=\"text\" name=\"username\" class=\"inputbox\" alt=\"username\" size=\"18\" />
                                                                                    </p>
                                                                                    <p id=\"form-login-password\">
                                                                                        <label for=\"modlgn_passwd\">Password</label><br />
                                                                                        <input id=\"modlgn_passwd\" type=\"password\" name=\"passwd\" class=\"inputbox\" size=\"18\" alt=\"password\" />
                                                                                    </p>
                                                                                    <p id=\"form-login-remember\">
                                                                                        <label for=\"modlgn_remember\">Remember Me</label>
                                                                                        <input id=\"modlgn_remember\" type=\"checkbox\" name=\"remember\" class=\"inputbox\" value=\"yes\" alt=\"Remember Me\" />
                                                                                    </p>
                                                                                    <span class=\"art-button-wrapper\">
                                                                                        <span class=\"art-button-l\"> </span>
                                                                                        <span class=\"art-button-r\"> </span>
                                                                                        <input type=\"submit\" name=\"Submit\" class=\"art-button\" value=\"Login\" />
                                                                                    </span>
                                                                                </fieldset>
                                                                                <ul>
                                                                                    <li><a href=\"#\">Forgot your password?</a></li>
                                                                                    <li><a href=\"#\">Forgot your username?</a></li>
                                                                                    <li><a href=\"#\">Create an account</a></li>
                                                                                </ul>
                                                                            </form>

                                                                            <div class=\"cleared\"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cleared\"></div>
                                                                </div>
                                                            </div>
                                                            <div class=\"bloque\">
                                                                <div class=\"bloque-body\">
                                                                    <div class=\"bloqueCabecera\">
                                                                        <div class=\"l\"></div>
                                                                        <div class=\"r\"></div>
                                                                        <h3 class=\"t\">Advertisement</h3>
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
                                                                            <div class=\"bannergroup_text\">
                                                                                <div class=\"bannerheader\">Featured Links:</div>
                                                                                <div class=\"banneritem_text\"><a href=\"/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=3\" target=\"_blank\">Joomla!</a><br />
                                                                                    Joomla! The most popular and widely used Open Source CMS Project in the world.<div class=\"clr\"></div></div>
                                                                                <div class=\"banneritem_text\"><a href=\"/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=4\" target=\"_blank\">JoomlaCode</a><br />
                                                                                    JoomlaCode, development and distribution made easy.<div class=\"clr\"></div></div>
                                                                                <div class=\"banneritem_text\"><a href=\"/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=5\" target=\"_blank\">Joomla! Extensions</a><br />
                                                                                    Joomla! Components, Modules, Plugins and Languages by the bucket load.<div class=\"clr\"></div></div>
                                                                                <div class=\"banneritem_text\"><a href=\"/Joomla-1.5/index.php?option=com_banners&amp;task=click&amp;bid=6\" target=\"_blank\">Joomla! Shop</a><br />
                                                                                    For all your Joomla! merchandise.<div class=\"clr\"></div></div>
                                                                                <div class=\"bannerfooter_text\"><a href=\"http://www.joomla.org\">Ads by Joomla!</a></div>
                                                                            </div>

                                                                            <div class=\"cleared\"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"cleared\"></div>
                                                                </div>
                                                            </div>
                                                        ";
    }

    // line 71
    public function block_contenido($context, array $blocks = array())
    {
        // line 72
        echo "                                        <div class=\"contenido\">
                                            <div class=\"contenido-row\">
                                                <div class=\"capa _contenido\">
                                                ";
        // line 75
        $this->displayBlock('Ptuits', $context, $blocks);
        // line 136
        echo "                                                        <div class=\"cleared\"></div>
                                                    </div>

                                                    <div class=\"capa barraLateral\">
                                                    ";
        // line 140
        $this->displayBlock('bloquesLaterales', $context, $blocks);
        // line 434
        echo "                                                            <div class=\"cleared\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                    ";
    }

    // line 440
    public function block_piePagina($context, array $blocks = array())
    {
        // line 441
        echo "                                                <div class=\"pie\">
                                                    <div class=\"pie-t\"></div>
                                                    <div class=\"pie-l\"></div>
                                                    <div class=\"pie-b\"></div>
                                                    <div class=\"pie-r\"></div>
                                                    <div class=\"pie-body\">
                                                        <a href=\"#\" class=\"rss-icon\" title=\"RSS\"></a>
                                                        <div class=\"pie-text\">
                                                            <p>Desarrollado por Rubentxu y Grupo Ptuit- Licencia AGPL</p>
                                                            <p>Rubentxu74@gmail.com</p>
                                                        </div>
                                                        <div class=\"cleared\"></div>
                                                    </div>
                                                </div>
                                    ";
    }

    public function getTemplateName()
    {
        return "PtuitBundle::plantilla.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
