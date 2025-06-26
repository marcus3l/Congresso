<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'HomeController'; 
$route['home'] = 'HomeController/index';
$route['comissao'] = 'HomeController/comissao';
$route['evento'] = 'HomeController/evento';
$route['trabalhos'] = 'HomeController/trabalhos';
$route['programacao'] = 'HomeController/programacao';
$route['palestrantes'] = 'HomeController/palestrantes';
$route['patrocinadores'] = 'HomeController/patrocinadores';

// retorna programação do palestrante
$route['programacao/palestrante/(:any)'] = 'programacao/palestrante/$1';


/* Login */
$route['entrar'] = 'login/entrar';
$route['sair'] = 'login/sair';

/* Restrito */
$route['restrito']               = 'restrito/inicio';

$route['teste']               = 'teste/inicio';

/* AREAS */
$route['restrito/areas']              = 'restrito/areas';
$route['restrito/areas/formulario']   = 'restrito/areas/formulario';
$route['restrito/area/editar/(:any)'] = 'restrito/areas/formulario/$1';
$route['restrito/area/excluir']       = 'restrito/areas/excluir';
$route['restrito/areas/salvar']       = 'restrito/areas/salvar';

/* SUB AREAS */
$route['restrito/subareas']              = 'restrito/subareas';
$route['restrito/subareas/formulario']   = 'restrito/subareas/formulario';
$route['restrito/subarea/editar/(:any)'] = 'restrito/subareas/formulario/$1';
$route['restrito/subarea/excluir']       = 'restrito/subareas/excluir';
$route['restrito/subareas/salvar']       = 'restrito/subareas/salvar';

/* PALESTRANTE */
$route['restrito/palestrantes']              = 'restrito/palestrantes';
$route['restrito/palestrantes/formulario']   = 'restrito/palestrantes/formulario';
$route['restrito/palestrante/editar/(:any)'] = 'restrito/palestrantes/formulario/$1';
$route['restrito/palestrante/excluir']       = 'restrito/palestrantes/excluir';
$route['restrito/palestrantes/salvar']       = 'restrito/palestrantes/salvar';

/* SALAS */
$route['restrito/salas']              = 'restrito/salas';
$route['restrito/salas/formulario']   = 'restrito/salas/formulario';
$route['restrito/sala/editar/(:any)'] = 'restrito/salas/formulario/$1';
$route['restrito/sala/excluir']       = 'restrito/salas/excluir';
$route['restrito/salas/salvar']       = 'restrito/salas/salvar';

/* PROGRAMAÇÃO */
$route['restrito/programacao']               = 'restrito/programacao';
$route['restrito/programacao/formulario']    = 'restrito/programacao/formulario';
$route['restrito/programacao/editar/(:any)'] = 'restrito/programacao/formulario/$1';
$route['restrito/programacao/excluir']       = 'restrito/programacao/excluir';
$route['restrito/programacao/salvar']        = 'restrito/programacao/salvar';
$route['restrito/programacao/(:any)/palestrantes'] = 'restrito/programacao/formularioPalestrantes/$1';
$route['restrito/programacao/palestrante/salvar']  = 'restrito/programacao/salvarPalestrante';
$route['restrito/programacao/palestrante/excluir']  = 'restrito/programacao/excluirPalestrante';


/* Tipo Programacao */
$route['restrito/tipo-programacao']               = 'restrito/tipoProgramacao';
$route['restrito/tipo-programacao/formulario']    = 'restrito/tipoProgramacao/formulario';
$route['restrito/tipo-programacao/editar/(:any)'] = 'restrito/tipoProgramacao/formulario/$1';
$route['restrito/tipo-programacao/excluir']       = 'restrito/tipoProgramacao/excluir';
$route['restrito/tipo-programacao/salvar']        = 'restrito/tipoProgramacao/salvar';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
