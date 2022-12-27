<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware'=>'localization'], function() {
    Route::get('/muhumElonlar', [ApiController::class, 'muhumElonlar']);
    Route::get('/contacts', [ApiController::class, 'getcontact']);
    Route::get('/bussins', [ApiController::class, 'getbussins']);
    Route::get('/studentmens', [ApiController::class, 'getstudentmens']);
    Route::get('/students', [ApiController::class, 'getstudents']);
    Route::get('/getstudentsallbycategory/{category}', [ApiController::class, 'getstudentsallbycategory']);
    Route::get('/getstudentsallMagistratura', [ApiController::class, 'getstudentsallMagistratura']);
    Route::get('/getstudentsbyid/{id}', [ApiController::class, 'getstudentsbyid']);
    Route::get('/praper', [ApiController::class, 'getspraper']);
    Route::get('/allnewscategory', [ApiController::class, 'allnewscategories']);
    Route::get('/rekvizts', [ApiController::class, 'getrekvizts']);
    Route::get('/qabul', [ApiController::class, 'getqabul']);




    Route::get('/bachelors', [ApiController::class, 'getbachelors']);
    Route::get('/bachelorsbyid/{id}', [ApiController::class, 'bachelorsbyid']);




    Route::get('/masters', [ApiController::class, 'getmasters']);
    Route::get('/extramunals', [ApiController::class, 'getextramunals']);
    Route::get('/jointeducationals', [ApiController::class, 'getjointeducationals']);
    Route::get('/foreigncitizens', [ApiController::class, 'getforeigncitizens']);
    Route::get('/graduats', [ApiController::class, 'getgraduats']);
    Route::get('/graduats/count/{id}', [ApiController::class, 'getGraduatsPag']);
    Route::get('/nams', [ApiController::class, 'getnams']);
    Route::get('/nams/{id}', [ApiController::class, 'getOneNams']);
    Route::get('/nams/count/{id}', [ApiController::class, 'getNewsPag']);
    Route::get('/allnews', [ApiController::class, 'getallnews']);
    Route::get('/slidernews', [ApiController::class, 'getnewssliders']);
    Route::get('/news', [ApiController::class, 'getnews']);
    Route::get('/news/{id}', [ApiController::class, 'getOneNews']);
    Route::get('/getevents', [ApiController::class, 'getevents']);
    Route::get('/getoneevents/{id}', [ApiController::class, 'getOneEvents']);
    Route::get('/getannouncements', [ApiController::class, 'getannouncements']);
    Route::get('/getoneannouncements/{id}', [ApiController::class, 'getOneAnnouncements']);
    Route::get('/getsports', [ApiController::class, 'getsports']);
    Route::get('/getonesports/{id}', [ApiController::class, 'getOneSports']);
    Route::get('/facts', [ApiController::class, 'getfacts']);
    Route::get('/facults', [ApiController::class, 'getfacults']);
    Route::get('/facultsinfo/{id}', [ApiController::class, 'getfacultsinfo']);
    Route::get('/congratulations', [ApiController::class, 'getcongratulations']);
    Route::get('/onerectorat/{id}', [ApiController::class, 'getOneRektorat']);
    Route::get('/rectorats', [ApiController::class, 'getrectorats']);
    Route::get('/rectorats/count/{id}', [ApiController::class, 'getRektoratsPag']);
    Route::get('/receptions', [ApiController::class, 'getReception']);
    Route::get('/charters', [ApiController::class, 'getcharters']);
    Route::get('/architecturals', [ApiController::class, 'getarchitecturals']);
    Route::get('/interactivservs', [ApiController::class, 'getinteractivservs']);
    Route::get('/sliders', [ApiController::class, 'getsliders']);
    Route::get('/sliders/{id}', [ApiController::class, 'getOneSliders']);
    Route::get('/histors', [ApiController::class, 'gethistors']);
    Route::get('/centers', [ApiController::class, 'getcenters']);
    Route::get('/centerabouts', [ApiController::class, 'getcenterabouts']);
    Route::get('/getcenteraboutsById/{id}', [ApiController::class, 'getcenteraboutsById']);


    Route::get('/departments', [ApiController::class, 'getdepartments']);
    Route::get('/departmentabouts', [ApiController::class, 'getdepartmentabouts']);
    Route::get('/getdepartmentaboutById/{id}', [ApiController::class, 'getdepartmentaboutById']);



    Route::get('/allfaculties', [ApiController::class, 'getallfaculties']);
    Route::get('/facultydirectors', [ApiController::class, 'getfacultydirectors']);
    Route::get('/facultymembers', [ApiController::class, 'getfacultymembers']);
    Route::get('/facultyabouts', [ApiController::class, 'getfacultyabouts']);
    Route::get('/kafedrainfo/{id}', [ApiController::class, 'getkafedrainfo']);
    Route::get('/kafedramenu', [ApiController::class, 'getkafedramenu']);
    Route::get('/kafedradirectors', [ApiController::class, 'getkafedradirectors']);
    Route::get('/kafedraabouts', [ApiController::class, 'getkafedraabouts']);
    Route::get('/kafedraworkers', [ApiController::class, 'getkafedraworkers']);
    Route::get('/captcha', [ApiController::class, 'getcaptcha']);

    Route::get('/filials', [ApiController::class, 'getfilials']);
    Route::get('/filialdirectors', [ApiController::class, 'getfilialdirectors']);
    Route::get('/filialabouts', [ApiController::class, 'getfilialabouts']);
    Route::get('/getfilialaboutsById/{id}', [ApiController::class, 'getfilialaboutsById']);



    Route::get('/applicantmens', [ApiController::class, 'getapplicantmens']);
    Route::get('/uniquelinks', [ApiController::class, 'getuniquelinks']);
    Route::get('/corruptionsectors/{corruptionmen}', [ApiController::class, 'getcorruptionsectors']);
    Route::get('/corruptionmens', [ApiController::class, 'getcorruptionmens']);

    Route::post('/add/receptions', [ApiController::class, 'postReception']);
    Route::get('/masterylessons', [ApiController::class, 'getmasterylessons']);
    Route::get('/techniqs', [ApiController::class, 'gettechniqs']);
    Route::get('/gettechniqsfile/{category}', [ApiController::class, 'gettechniqsfile']);

    Route::get('/fans', [ApiController::class, 'getfans']);
    Route::get('/inovations', [ApiController::class, 'getinovations']);
    Route::get('/doctorals', [ApiController::class, 'getdoctorals']);
    Route::get('/finances', [ApiController::class, 'getfinances']);
    Route::get('/youngs', [ApiController::class, 'getyoungs']);
    Route::get('/culturals', [ApiController::class, 'getculturals']);
    Route::get('/creatives', [ApiController::class, 'getcreatives']);
    Route::get('/erasmus', [ApiController::class, 'geterasmus']);
    Route::get('/mechauzs', [ApiController::class, 'getmechauzs']);
    Route::get('/spaces', [ApiController::class, 'getspaces']);
    Route::get('/raqamlis', [ApiController::class, 'getraqamlis']);
    Route::get('/mixtures', [ApiController::class, 'getmixtures']);
    Route::get('/getmixturesbyid/{id}', [ApiController::class, 'getmixturesbyid']);


    Route::get('/internationalconnection', [ApiController::class, 'internationalconnection']);
    Route::get('/internationalConnectionWorker', [ApiController::class, 'internationalConnectionWorker']);
});
