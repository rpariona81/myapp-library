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
//$route['default_controller'] = 'welcome';
/*$route['default_controller'] = 'testcontroller';
$route['enviar'] = 'testcontroller/send';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;*/

$route['default_controller'] = 'homecontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'authcontroller/index';

$route['logon'] = 'authcontroller/login';

$route['logout'] = 'homecontroller/logout';

/**AppController - Estudiantes - Docentes */
$route['user'] = 'appcontroller/view_cards';
$route['user/catalog'] = 'appcontroller/view_cards';
$route['user/catalog/(:num)'] = 'appcontroller/view_cards/$1';

$route['user/test'] = 'appcontroller/test';
$route['user/convocatoria/(:num)'] = 'appcontroller/viewConvocatoria/$1';
$route['user/postulaciones'] = 'appcontroller/viewPostulaciones';
$route['user/perfil'] = 'appcontroller/viewPerfil';
$route['user/credenciales'] = 'appcontroller/viewCredenciales';

$route['user/descarga_cv'] = 'appcontroller/descargacv';

$route['admin'] = 'admincontroller/index';
$route['admin/convocatorias'] = 'admincontroller/verConvocatorias';
$route['admin/newconvocatoria'] = 'admincontroller/nuevaConvocatoria';
$route['admin/convocatoria/(:num)'] = 'admincontroller/editaConvocatoria/$1';
$route['admin/convocados/(:num)'] = 'admincontroller/verConvocados/$1';

$route['admin/estudiantes'] = 'admincontroller/verEstudiantes';
$route['admin/newestudiante'] = 'admincontroller/nuevoEstudiante';
$route['admin/estudiante/(:num)'] = 'admincontroller/editaEstudiante/$1';

$route['admin/docentes'] = 'admincontroller/verDocentes';
$route['admin/newdocente'] = 'admincontroller/nuevoDocente';
$route['admin/docente/(:num)'] = 'admincontroller/editaDocente/$1';

$route['admin/catalogos'] = 'admincontroller/verCatalogos';
$route['admin/catalogos/(:num)'] = 'admincontroller/verCatalogos/$1';
$route['admin/catalogo/(:num)'] = 'admincontroller/verCatalogo/$1';

$route['admin/reportes'] = 'admincontroller/verReportes';
$route['admin/reportes/(:num)'] = 'admincontroller/verReportes/$1';
$route['admin/reportes/(:num)'] = 'admincontroller/verReporte/$1';



$route['admin/postulaciones'] = 'admincontroller/verPostulaciones';
$route['admin/postulaciones/(:num)'] = 'admincontroller/verPostulaciones/$1';
$route['admin/postulacion/(:num)'] = 'admincontroller/verPostulacion/$1';

$route['admin/programas'] = 'admincontroller/verProgramas';
$route['admin/newprograma'] = 'admincontroller/nuevoPrograma';
$route['admin/programa/(:num)'] = 'admincontroller/editaPrograma/$1';

$route['admin/custom'] = 'admincontroller/personalizar';
$route['admin/infosistema'] = 'admincontroller/infosistema';
$route['admin/soporte'] = 'admincontroller/soporte';

$route['admin/perfil'] = 'admincontroller/viewPerfil';
$route['admin/claves'] = 'admincontroller/viewClave';

$route['admin/vermodelocv'] = 'admincontroller/viewModeloCV';