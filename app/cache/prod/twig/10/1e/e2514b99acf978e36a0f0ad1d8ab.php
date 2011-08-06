<?php

/* PtuitBundle:Ajax:favorito.json.twig */
class __TwigTemplate_101ee2514b99acf978e36a0f0ad1d8ab extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo twig_jsonencode_filter(array("imagen" => $this->env->getExtension('assets')->getAssetUrl($this->getContext($context, 'imagen')), "texto" => $this->getContext($context, 'texto'), "ruta" => $this->env->getExtension('routing')->getPath($this->getContext($context, 'ruta'), array("id" => $this->getAttribute($this->getContext($context, 'mensaje'), "id", array(), "any", false)))));
    }

    public function getTemplateName()
    {
        return "PtuitBundle:Ajax:favorito.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
