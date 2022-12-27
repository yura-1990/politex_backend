<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AllNews;
use App\Models\Prepare;
use App\Models\Qabul;
use App\Models\InternationalConnection;
use App\Models\InternationalConnectionWorker;
use App\Models\MuhumElonlar;
use App\Models\Applicantmen;
use App\Models\Architectural;
use App\Models\Bachelor;
use App\Models\Bussin;
use App\Models\Center;
use App\Models\Centerabout;
use App\Models\Charter;
use App\Models\Congratulation;
use App\Models\Contact;
use App\Models\Corruptionmen;
use App\Models\Corruptionsector;
use App\Models\Department;
use App\Models\Departmentabout;
use App\Models\Fact;
use App\Models\Facult;
use App\Models\Facultyabout;
use App\Models\Facultydirector;
use App\Models\Facultymember;
use App\Models\Filial;
use App\Models\Filialabout;
use App\Models\Filialdirector;
use App\Models\Graduat;
use App\Models\Histor;
use App\Models\Interactivserv;
use App\Models\Kafedraabout;
use App\Models\Kafedradirector;
use App\Models\Kafedramen;
use App\Models\Kafedraworker;
use App\Models\Masterylesson;
use App\Models\Nam;
use App\Models\Reception;
use App\Models\Rectorat;
use App\Models\Rekvizt;
use App\Models\Slider;
use App\Models\Student;
use App\Models\Studentmen;
use App\Models\Techniq;
use App\Models\Uniquelink;
use App\Models\Fan;
use App\Models\Inovation;
use App\Models\Doctoral;
use App\Models\Finance;
use App\Models\Young;
use App\Models\Cultural;
use App\Models\Creative;
use App\Models\Erasmu;
use App\Models\Mechauz;
use App\Models\Space;
use App\Models\Raqamli;
use App\Models\Mixture;
use App\Traits\Localization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ApiController extends Controller
{

    use Localization;

    /**
     * @OA\Get(
     *     path="/api/allnewscategory",
     *     tags={"AllnewsCategory"},
     *     summary="All News",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="allnewscategories",
     *     @OA\Parameter(
     *         name="All News",
     *         in="query",
     *         description="https://homeworking.uz/api/news",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function allnewscategories(){
        try {
            $data = Allnews::select('id', 'img', 'category',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'),
                'imgs', 'created_at', 'updated_at')->orderBy('created_at', 'desc')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }



    /**
     * @OA\Get(
     *     path="/api/contacts",
     *     tags={"Contact"},
     *     summary="All contact",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getcontact",
     *     @OA\Parameter(
     *         name="Contacts",
     *         in="query",
     *         description="https://homeworking.uz/api/contacts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getcontact(Request $req)
    {
        try {
            $data = Contact::all();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/qabul",
     *     tags={"Qabul"},
     *     summary="All qabul",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getqabul",
     *     @OA\Parameter(
     *         name="Qabul",
     *         in="query",
     *         description="https://homeworking.uz/api/contacts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */


    public function getqabul(Request $req): \Illuminate\Http\JsonResponse
    {
        try {
            $data = Qabul::all();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }








    /**
     * @OA\Get(
     *     path="/api/praper",
     *     tags={"Prepare"},
     *     summary="All contact",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getspraper",
     *     @OA\Parameter(
     *         name="Contacts",
     *         in="query",
     *         description="https://homeworking.uz/api/contacts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getspraper(Request $req)
    {
        try {
            $data = Prepare::select('id', Localization::column('text'))->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/bussins",
     *     tags={"Bussin"},
     *     summary="All bussins",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getbussins",
     *     @OA\Parameter(
     *         name="All bussins",
     *         in="query",
     *         description="https://homeworking.uz/api/bussins",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getbussins(Request $req)
    {
        try {
            $data = Bussin::select('id', Localization::column('text'), 'img', 'link')->get();
            return response()->json([
                'ok' => true,
                $data
            ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/studentmens",
     *     tags={"Studentmen"},
     *     summary="All studentmens",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getstudentmens",
     *     @OA\Parameter(
     *         name="All studentmens",
     *         in="query",
     *         description="https://homeworking.uz/api/studentmens",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getstudentmens(Request $req)
    {
        try {
            $data = [];
            $data = Studentmen::select('id', Localization::column('menu'))->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/students",
     *     tags={"Student"},
     *     summary="All students",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getstudents",
     *     @OA\Parameter(
     *         name="All students",
     *         in="query",
     *         description="https://homeworking.uz/api/students",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getstudents(Request $req)
    {
        try {
            $data = [];
            $data = Student::select('id', 'img', Localization::column('title'),
                Localization::column('text'), 'imgs', 'menu_uz')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/getstudentsallbycategory/{category}",
     *     tags={"Student"},
     *     summary="All students",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getstudentsallbycategory",
     *     @OA\Parameter(
     *         name="category",
     *         in="path",
     *         description="https://homeworking.uz/api/students",
     *         required=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getstudentsallbycategory($category)
    {
        try {
            $data = [];
            $data = Student::select('id', 'img', Localization::column('title'),
                Localization::column('text'), 'imgs', 'menu_uz')->where('menu_uz', $category)->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/getstudentsallMagistratura",
     *     tags={"Student"},
     *     summary="All students",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getstudentsallMagistratura",
     *     @OA\Parameter(
     *         name="All students",
     *         in="query",
     *         description="https://homeworking.uz/api/students",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getstudentsallMagistratura(Request $req)
    {
        try {
            $data = [];
            $data = Student::select('id', 'img', Localization::column('title'),
                Localization::column('text'), 'imgs', 'menu_uz')->where('menu_uz', 'Magistratura')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/getstudentsbyid/{id}",
     *     tags={"Student"},
     *     summary="All students",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getstudentsbyid",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="https://homeworking.uz/api/students",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getstudentsbyid($id)
    {
        try {
            $data = [];
            $data = Student::select('id', 'img', Localization::column('title'),
                Localization::column('text'), 'imgs', 'menu_uz')->where('id', $id)->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }





    /**
     * @OA\Get(
     *     path="/api/bachelors",
     *     tags={"Bachelor"},
     *     summary="All bachelors",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getbachelors",
     *     @OA\Parameter(
     *         name="All bachelors",
     *         in="query",
     *         description="https://homeworking.uz/api/bachelors",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getbachelors(Request $req)
    {
        try {
            $data = Bachelor::where('menu_uz', 'Bakalavriat')->select('id', 'img', Localization::column('text'),
                Localization::column('subtext'), 'file', 'menu_uz')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }


    /**
     * @OA\Get(
     *     path="/api/bachelorsbyid/{id}",
     *     tags={"Bachelor"},
     *     summary="All bachelors",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="bachelorsbyid",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="https://homeworking.uz/api/bachelors",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */




    public function bachelorsbyid($id)
    {
        try {
            $data = Bachelor::select('id', 'img', Localization::column('text'),
                Localization::column('subtext'), 'file', 'menu_uz')->where('id', $id)->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }






    /**
     * @OA\Get(
     *     path="/api/masters",
     *     tags={"Bachelor"},
     *     summary="All bachelors",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getmasters",
     *     @OA\Parameter(
     *         name="All masters",
     *         in="query",
     *         description="https://homeworking.uz/api/masters",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */


    public function getmasters(Request $req)
    {
        try {
            $data = Bachelor::where('menu_uz', 'Magistratura')->select('id', 'img', Localization::column('text'),
                Localization::column('subtext'), 'file', 'menu_uz')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }


   /**
     * @OA\Get(
     *     path="/api/extramunals",
     *     tags={"Bachelor"},
     *     summary="All extramunals",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getextramunals",
     *     @OA\Parameter(
     *         name="All extramunals",
     *         in="query",
     *         description="https://homeworking.uz/api/extramunals",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getextramunals(Request $req)
    {
        try {
            $data = Bachelor::where('menu_uz', 'Sirtqi va kechki ta’lim shakillari')->select('id', 'img', Localization::column('text'),
                Localization::column('subtext'), 'file', 'menu_uz')->paginate(6);
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/jointeducationals",
     *     tags={"Bachelor"},
     *     summary="All joint educationals",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getjointeducationals",
     *     @OA\Parameter(
     *         name="All joint educationals",
     *         in="query",
     *         description="https://homeworking.uz/api/jointeducationals",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getjointeducationals(Request $req)
    {
        try {
            $data = Bachelor::where('menu_uz', 'Qo’shma ta’lim dasturlari')->select('id', 'img', Localization::column('text'),
                Localization::column('subtext'), 'file', 'menu_uz')->paginate(6);
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/foreigncitizens",
     *     tags={"Bachelor"},
     *     summary="All joint educationals",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getforeigncitizens",
     *     @OA\Parameter(
     *         name="All foreign citizens",
     *         in="query",
     *         description="https://homeworking.uz/api/foreigncitizens",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getforeigncitizens(Request $req)
    {
        try {
            $data = Bachelor::where('menu_uz', 'Xorijiy Fuqarolar')->select('id', 'img', Localization::column('text'),
                Localization::column('subtext'), 'file', 'menu_uz')->paginate(6);
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/graduats",
     *     tags={"Graduat"},
     *     summary="All graduats",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getgraduats",
     *     @OA\Parameter(
     *         name="All graduats",
     *         in="query",
     *         description="https://homeworking.uz/api/graduats",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getgraduats(Request $req)
    {
        try {
            $data = Graduat::select('id', 'img',
                Localization::column('name'),
                Localization::column('positions'))->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/facultsinfo/1",
     *     tags={"Faculties"},
     *     summary="All facults info",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfacultsinfo",
     *     @OA\Parameter(
     *         name="All facults info",
     *         in="query",
     *         description="https://homeworking.uz/api/facultsinfo/{id}",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getfacultsinfo(Request $req)
    {
        try {
            $facult = Facult::where('id', $req->id)->select('id', 'menu_uz', 'img', Localization::column('menu'))->first();
            $facultabout = Facultyabout::where('menu_uz', $facult->menu_uz)->select('id', 'menu_uz', Localization::column('text'))->get();
            $facultdirector = Facultydirector::where('menu_uz', $facult->menu_uz)
                ->select('id', 'menu_uz', 'director_img',
                    Localization::column('directorname'), Localization::column('position'),
                    Localization::column('degree'), Localization::column('acceptance'),
                    'phone', 'email')->get();
            $facultmember = Facultymember::where('menu_uz', $facult->menu_uz)->select('id', 'menu_uz', 'employee_img', Localization::column('employeename'),
                Localization::column('position'), 'phone', 'email')->get();
            $kafedra = Kafedramen::where('faculty', $facult->menu_uz)->select('id', 'faculty', 'img', Localization::column('menu'))->get();
            $data = [
                'facult'=>$facult,
                'facultabout'=>$facultabout,
                'facultdirector'=>$facultdirector,
                'facultmember'=>$facultmember,
                'kafedra'=>$kafedra,
            ];
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/facults",
     *     tags={"Facult"},
     *     summary="All facults",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfacults",
     *     @OA\Parameter(
     *         name="All facults",
     *         in="query",
     *         description="https://homeworking.uz/api/facults",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getfacults(Request $req)
    {
        try {
            $data = Facult::select('id', 'img', Localization::column('menu'), 'iconka')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/nams",
     *     tags={"Nam"},
     *     summary="All nams",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getnams",
     *     @OA\Parameter(
     *         name="All facults",
     *         in="query",
     *         description="https://homeworking.uz/api/nams",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getnams(Request $req)
    {
        try {
            $data = Nam::select('id', 'img', Localization::column('text'), 'imgs')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/nams/{id}",
     *     tags={"Nam"},
     *     summary="get One Nams",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getOneNams",
     *     @OA\Parameter(
     *         name="All facults",
     *         in="query",
     *         description="https://homeworking.uz/api/nams/{id}",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getOneNams(Request $req, $id)
    {
        try {

            $news = Nam::where("id", $id)->select('id', 'img', Localization::column('text'), 'imgs')->first();
            return response()->json([
                'ok' => true,
                "data" => $news
            ]);
        } catch (\Exception $e) {
            if (str_contains($e->getMessage(), 'seen')) {
                return response()->json([
                    'ok' => false,
                    'msg' => "Invalid id.",
                ]);
            }
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/news",
     *     tags={"Allnews"},
     *     summary="All News",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getnews",
     *     @OA\Parameter(
     *         name="All News",
     *         in="query",
     *         description="https://homeworking.uz/api/news",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getnews(Request $req)
    {
        try {
            $data = Allnews::where('category', 1)->select('id', 'id', 'img',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'),
                'imgs', 'created_at', 'updated_at')->orderBy('id', 'desc')->paginate(6);
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/slidernews",
     *     tags={"Slider"},
     *     summary="All News Slider",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getnewssliders",
     *     @OA\Parameter(
     *         name="All News Slider",
     *         in="query",
     *         description="https://homeworking.uz/api/slidernews",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getnewssliders(Request $req)
    {
        try {
            $data = Allnews::where('slider', 1)->select('id', 'id', 'img','category',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'),
                'imgs', 'created_at', 'updated_at')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/news/1",
     *     tags={"Allnews"},
     *     summary="get One News",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getOneNews",
     *     @OA\Parameter(
     *         name="All News",
     *         in="query",
     *         description="https://homeworking.uz/api/news/1",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getOneNews(Request $req, $id)
    {
        try {
            $news = AllNews::select('id', 'id', 'img',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'),
                'imgs', 'created_at', 'updated_at')->where(['id' => $id, 'category' => 1])->first();
            return response()->json([
                'ok' => true,
                "data" => $news
            ]);
        } catch (\Exception $e) {
            if (str_contains($e->getMessage(), 'seen')) {
                return response()->json([
                    'ok' => false,
                    'msg' => "Invalid id.",
                ]);
            }
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/getevents",
     *     tags={"Allnews"},
     *     summary="get Events",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getevents",
     *     @OA\Parameter(
     *         name="All Events",
     *         in="query",
     *         description="https://homeworking.uz/api/getevents",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getevents(Request $req)
    {
        try {
            $data = Allnews::where('category', 2)->select('id', 'id', 'img',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'), 'imgs', 'created_at', 'updated_at')->orderBy('id', 'desc')->paginate(6);
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/getoneevents/3",
     *     tags={"Allnews"},
     *     summary="get One Events",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getOneEvents",
     *     @OA\Parameter(
     *         name="get One Events",
     *         in="query",
     *         description="https://homeworking.uz/api/getoneevents/3",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getOneEvents(Request $req, $id)
    {
        try {
            $news = AllNews::select('id', 'id', 'img',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'),
                'imgs', 'created_at', 'updated_at')->where(['id' => $id, 'category' => 2])->first();
            return response()->json([
                'ok' => true,
                "data" => $news
            ]);
        } catch (\Exception $e) {
            if (str_contains($e->getMessage(), 'seen')) {
                return response()->json([
                    'ok' => false,
                    'msg' => "Invalid id.",
                ]);
            }
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/getannouncements",
     *     tags={"Allnews"},
     *     summary="get Announcements",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getannouncements",
     *     @OA\Parameter(
     *         name="get Announcements",
     *         in="query",
     *         description="https://homeworking.uz/api/getannouncements",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getannouncements(Request $req)
    {
        try {
            $data = Allnews::where('category', 3)->select('id', 'id', 'img',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'), 'imgs', 'created_at', 'updated_at')->paginate(6);
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/getoneannouncements/4",
     *     tags={"Allnews"},
     *     summary="get One Announcements",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getOneAnnouncements",
     *     @OA\Parameter(
     *         name="get Announcements",
     *         in="query",
     *         description="https://homeworking.uz/api/getoneannouncements/4",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getOneAnnouncements(Request $req, $id)
    {
        try {
            $news = AllNews::select('id', 'id', 'img',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'),
                'imgs', 'created_at', 'updated_at')->where(['id' => $id, 'category' => 3])->first();
            return response()->json([
                'ok' => true,
                "data" => $news
            ]);
        } catch (\Exception $e) {
            if (str_contains($e->getMessage(), 'seen')) {
                return response()->json([
                    'ok' => false,
                    'msg' => "Invalid id.",
                ]);
            }
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/getsports",
     *     tags={"Allnews"},
     *     summary="get sports",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getsports",
     *     @OA\Parameter(
     *         name="get sports",
     *         in="query",
     *         description="https://homeworking.uz/api/getsports",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getsports(Request $req)
    {
        try {
            $data = Allnews::where('category', 4)->select('id', 'id', 'img',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'), 'imgs', 'created_at', 'updated_at')->orderBy('id', 'desc')->paginate(6);
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/allnews",
     *     tags={"Allnews"},
     *     summary="get sports",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getallnews",
     *     @OA\Parameter(
     *         name="get sports",
     *         in="query",
     *         description="https://homeworking.uz/api/allnews",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getallnews(Request $req)
    {
        try {
            $data = Allnews::select('id', 'id', 'img',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'),
                'imgs', 'created_at', 'updated_at')->paginate(1);
            $count = count($data);
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                    'count' => $count,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/getonesports/5",
     *     tags={"Allnews"},
     *     summary="get one sports",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getOneSports",
     *     @OA\Parameter(
     *         name="get one sports",
     *         in="query",
     *         description="https://homeworking.uz/api/getonesports/5",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getOneSports(Request $req, $id)
    {
        try {
            $news = AllNews::select('id', 'id', 'img',
                Localization::column('title'), Localization::column('text'),
                Localization::column('text1'),
                'imgs', 'created_at', 'updated_at')->where(['id' => $id, 'category' => 4])->first();
            return response()->json([
                'ok' => true,
                "data" => $news
            ]);
        } catch (\Exception $e) {
            if (str_contains($e->getMessage(), 'seen')) {
                return response()->json([
                    'ok' => false,
                    'msg' => "Invalid id.",
                ]);
            }
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/facts",
     *     tags={"Fact"},
     *     summary="get facts",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfacts",
     *     @OA\Parameter(
     *         name="get facts",
     *         in="query",
     *         description="https://homeworking.uz/api/facts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getfacts(Request $req)
    {
        try {
            $data = Fact::all();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/congratulations",
     *     tags={"Congratulation"},
     *     summary="get congratulations",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getcongratulations",
     *     @OA\Parameter(
     *         name="get facts",
     *         in="query",
     *         description="https://homeworking.uz/api/congratulations",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getcongratulations(Request $req)
    {
        try {
            $data = Congratulation::select('id', 'img', Localization::column('text'))->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/rectorats",
     *     tags={"Rectorat"},
     *     summary="get rectorats",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getrectorats",
     *     @OA\Parameter(
     *         name="get rectorats",
     *         in="query",
     *         description="https://homeworking.uz/api/rectorats",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getrectorats(Request $req)
    {
        try {
            $data = Rectorat::select('id', 'phone', 'address', 'img',
                Localization::column('name'),
                Localization::column('position'),
                Localization::column('degree'))->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return
                response()->json([
                    'ok' => false,
                    'msg' => $e->getMessage(),
                ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/receptions",
     *     tags={"Reception"},
     *     summary="get Reception",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getReception",
     *     @OA\Parameter(
     *         name="get Reception",
     *         in="query",
     *         description="https://homeworking.uz/api/receptions",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getReception(Request $req)
    {
        try {
            $data = Reception::all();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Post(
     *     path="/api/add/receptions",
     *     tags={"Reception"},
     *     summary="get Reception",
     *     operationId="postReception",

     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     @OA\RequestBody(
     *         description="https://homeworking.uz/api/add/receptions",
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 type="object",
     *                 @OA\Property(
     *                     property="name",
     *                     description="Updated name of the pet",
     *                     type="string",
     *                 ),
     *                 @OA\Property(
     *                     property="phone",
     *                     description="Enter product phone",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="matn",
     *                     description="Enter product matn",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="mavsu",
     *                     description="Enter product mavsu",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="fayl",
     *                     description="Enter product fayl",
     *                     type="file"
     *                 )
     *             )
     *         )
     *     )
     * )
     */

    public function postReception(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'phone' => 'required|min:2|max:15',
            'matn' => 'required',
            'mavsu' => 'required',
            'fayl' => 'required',
        ]);
        $product = new Reception;
        $product->name = $request->name;
        $product->phone = $request->phone;
        $product->matn = $request->matn;
        $product->mavsu = $request->mavsu;

        $fayl = $request->file('fayl');
        $path = $fayl->store('public/files');
        $product->fayl = substr(Storage::url($path),8);

        $product->save();
        return response()->json([
            'message' => ' Product Added Successfully:',
            'fileurl' => $path,
        ], 200);
    }
    /**
     * @OA\Get(
     *     path="/api/interactivservs",
     *     tags={"Interactivserv"},
     *     summary="get interactivservs",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getinteractivservs",
     *     @OA\Parameter(
     *         name="get interactivservs",
     *         in="query",
     *         description="https://homeworking.uz/api/interactivservs",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getinteractivservs(Request $req)
    {
        try {
            $data = Interactivserv::select('id', 'link',
                Localization::column('title'),
                Localization::column('subtitle')
            )->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/charters",
     *     tags={"Charter"},
     *     summary="get charters",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getcharters",
     *     @OA\Parameter(
     *         name="get charters",
     *         in="query",
     *         description="https://homeworking.uz/api/charters",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getcharters(Request $req)
    {
        try {
            $data = Charter::select('id', Localization::column('text'))->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/centers",
     *     tags={"Center"},
     *     summary="get centers",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getcenters",
     *     @OA\Parameter(
     *         name="get centers",
     *         in="query",
     *         description="https://homeworking.uz/api/centers",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getcenters(Request $req)
    {
        try {
            $data = Center::select('id', Localization::column('menu'))->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/centerabouts",
     *     tags={"Centerabout"},
     *     summary="get centers abouts",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getcenterabouts",
     *     @OA\Parameter(
     *         name="get center abouts",
     *         in="query",
     *         description="https://homeworking.uz/api/centerabouts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getcenterabouts(Request $req)
    {
        try {
            $data = Centerabout::select('id',
                Localization::column('directorname'),
                Localization::column('position'),
                Localization::column('degree'),
                Localization::column('acceptance'),
                Localization::column('text'),
                'director_img', 'menu_uz', 'phone', 'email', 'center_id')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/getcenteraboutsById/{id}",
     *     tags={"Centerabout"},
     *     summary="get centers abouts by id",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getcenteraboutsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="https://homeworking.uz/api/centerabouts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getcenteraboutsById( $id )
    {
        try {
            $data = Centerabout::select('id',
                Localization::column('directorname'),
                Localization::column('position'),
                Localization::column('degree'),
                Localization::column('acceptance'),
                Localization::column('text'),
                'director_img', 'menu_uz', 'phone', 'email', 'center_id')->where('center_id', $id)->get();

            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }



    /**
     * @OA\Get(
     *     path="/api/departments",
     *     tags={"Department"},
     *     summary="get Department",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getdepartments",
     *     @OA\Parameter(
     *         name="get departments",
     *         in="query",
     *         description="https://homeworking.uz/api/departments",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getdepartments(Request $req)
    {
        try {
            $data = Department::select('id', Localization::column('menu'))->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/departmentabouts",
     *     tags={"Departmentabout"},
     *     summary="get Department about",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getdepartmentabouts",
     *     @OA\Parameter(
     *         name="get Department about",
     *         in="query",
     *         description="https://homeworking.uz/api/departmentabouts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getdepartmentabouts(Request $req)
    {
        try {
            $data = Departmentabout::select('id',
                Localization::column('directorname'),
                Localization::column('position'),
                Localization::column('degree'),
                Localization::column('acceptance'),
                Localization::column('text'),
                'director_img', 'menu_uz', 'phone', 'email', 'department_id')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/getdepartmentaboutById/{id}",
     *     tags={"Departmentabout"},
     *     summary="get Department about by id",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getdepartmentaboutById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="https://homeworking.uz/api/centerabouts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getdepartmentaboutById($id)
    {
        try {
            $data = Departmentabout::select('id',
                Localization::column('directorname'),
                Localization::column('position'),
                Localization::column('degree'),
                Localization::column('acceptance'),
                Localization::column('text'),
                'director_img', 'menu_uz', 'phone', 'email', 'department_id')->where('department_id', $id)->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/architecturals",
     *     tags={"Architectural"},
     *     summary="get architecturals",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getarchitecturals",
     *     @OA\Parameter(
     *         name="get architecturals",
     *         in="query",
     *         description="https://homeworking.uz/api/architecturals",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getarchitecturals(Request $req)
    {
        try {
            $data = Architectural::select('id', Localization::column('text'))->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/sliders",
     *     tags={"Slider"},
     *     summary="get sliders",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getsliders",
     *     @OA\Parameter(
     *         name="get sliders",
     *         in="query",
     *         description="https://homeworking.uz/api/sliders",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getsliders(Request $req)
    {
        try {
            $data = Slider::select('id', Localization::column('text'),
                Localization::column('title'), 'img')->get();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/histors",
     *     tags={"Histor"},
     *     summary="get histors",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="gethistors",
     *     @OA\Parameter(
     *         name="get histors",
     *         in="query",
     *         description="https://homeworking.uz/api/histors",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function gethistors(Request $req)
    {
        try {
            $data = Histor::select('id', Localization::column('text'), 'imgs')->first();
            return
                response()->json([
                    'ok' => true,
                    'data' => $data,
                ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/sliders/1",
     *     tags={"Histor"},
     *     summary="get histors",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getOneSliders",
     *     @OA\Parameter(
     *         name="get one slider",
     *         in="query",
     *         description="https://homeworking.uz/api/sliders/1",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getOneSliders(Request $req, $id)
    {
        try {
            $news = Slider::where("id", $id)->select('id',
                Localization::column('title'),
                Localization::column('text')
            )->first();
            return response()->json([
                'ok' => true,
                "data" => $news
            ]);
        } catch (\Exception $e) {
            if (str_contains($e->getMessage(), 'seen')) {
                return response()->json([
                    'ok' => false,
                    'msg' => "Invalid id.",
                ]);
            }
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/nams/count/1",
     *     tags={"Nam"},
     *     summary="get one nams",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getNewsPag",
     *     @OA\Parameter(
     *         name="get one nams",
     *         in="query",
     *         description="https://homeworking.uz/api/nams/count/1",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getNewsPag(Request $req, $count)
    {
        try {
            //
            if (intval($count) == 0) {
                throw new \ErrorException('not found');
            }
            $data = Nam::select('id', Localization::column('text'), 'img', 'imgs')->orderBy("created_at", "DESC")->simplePaginate($count);
            return response()->json([
                'ok' => true,
                'data' => $data,
                "total_number" => Nam::all()->count()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/graduats/count/1",
     *     tags={"Graduat"},
     *     summary="get one graduate",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getGraduatsPag",
     *     @OA\Parameter(
     *         name="get one graduate",
     *         in="query",
     *         description="https://homeworking.uz/api/graduats/count/1",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getGraduatsPag(Request $req, $count)
    {
        try {
            //
            if (intval($count) == 0) {
                throw new \ErrorException('not found');
            }
            $data = Graduat::select('id', Localization::column('name'), Localization::column('positions'))
                ->orderBy("created_at", "DESC")->simplePaginate($count);
            return response()->json([
                'ok' => true,
                'data' => $data,
                "total_number" => Graduat::all()->count()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/rectorats/count/{id}",
     *     tags={"Rectorat"},
     *     summary="get rectorats page",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getRektoratsPag",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="https://homeworking.uz/api/rectorats/count/1",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getRektoratsPag(Request $req, $id)
    {
        try {
            $data = Rectorat::select('id', 'phone', 'address', 'img',
                Localization::column('name'),
                Localization::column('position'),
                Localization::column('degree'),
                Localization::column('time'))->orderBy("created_at", "DESC")->where('id', $id)->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
                "total_number" => Rectorat::all()->count()
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/onerectorat/2",
     *     tags={"Rectorat"},
     *     summary="get one rectorat",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getOneRektorat",
     *     @OA\Parameter(
     *         name="get one rectorats",
     *         in="query",
     *         description="https://homeworking.uz/api/onerectorat/1",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getOneRektorat(Request $req, $count)
    {
        try {

            $data = Rectorat::where('id', $req->id)->select('id', 'phone', 'address', 'img',
                Localization::column('name'),
                Localization::column('position'),
                Localization::column('degree'),
                Localization::column('time'))->first();
            return response()->json([
                'ok' => true,
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/facultydirectors",
     *     tags={"Facultydirector"},
     *     summary="get faculty directors",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfacultydirectors",
     *     @OA\Parameter(
     *         name="get faculty directors",
     *         in="query",
     *         description="https://homeworking.uz/api/facultydirectors",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getfacultydirectors(Request $req)
    {
        try {
            $data = Facultydirector::select('id', 'menu_uz', 'director_img',
                Localization::column('directorname'),
                Localization::column('position'),
                Localization::column('degree'),
                Localization::column('acceptance'), 'phone', 'email')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/allfaculties",
     *     tags={"Faculties"},
     *     summary="get faculties",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getallfaculties",
     *     @OA\Parameter(
     *         name="get faculties",
     *         in="query",
     *         description="https://homeworking.uz/api/allfaculties",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getallfaculties(Request $req)
    {
        try {
            $data = Facult::select('id', 'img',
                Localization::column('menu'), 'created_at', 'updated_at')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/facultymembers",
     *     tags={"Facultymember"},
     *     summary="get faculty members",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfacultymembers",
     *     @OA\Parameter(
     *         name="get faculty members",
     *         in="query",
     *         description="https://homeworking.uz/api/facultymembers",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getfacultymembers(Request $req)
    {
        try {
            $data = Facultymember::select('id', 'menu_uz',
                Localization::column('employeename'),
                Localization::column('position'), 'phone', 'email')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/facultyabouts",
     *     tags={"Facultyabout"},
     *     summary="get faculty abouts",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfacultyabouts",
     *     @OA\Parameter(
     *         name="get faculty abouts",
     *         in="query",
     *         description="https://homeworking.uz/api/facultyabouts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getfacultyabouts(Request $req)
    {
        try {
            $data = Facultyabout::select('id', 'menu_uz',
                Localization::column('text'))->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/kafedramenu",
     *     tags={"kafedramenu"},
     *     summary="get all kafedramenu",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getkafedramenu",
     *     @OA\Parameter(
     *         name="get all kafedramenu",
     *         in="query",
     *         description="https://homeworking.uz/api/kafedramenu",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getkafedramenu(Request $req)
    {
        try {
            $data = Kafedramen::select('id', Localization::column('menu'), 'iconka', 'img', 'created_at', 'updated_at')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/kafedrainfo/1",
     *     tags={"KafedraInfo"},
     *     summary="get all kafedrainfo",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getkafedrainfo",
     *     @OA\Parameter(
     *         name="get all kafedrainfo",
     *         in="query",
     *         description="https://homeworking.uz/api/kafedrainfo/{id}",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getkafedrainfo(Request $req)
    {
        try {
            $kafedra = Kafedramen::where('id', $req->id)->select('id', 'faculty', 'menu_uz', 'img', Localization::column('menu'))->first();
            $kaferdaabout = Kafedraabout::where('menu_uz', $kafedra->menu_uz)
                ->select('id', 'menu_uz', Localization::column('text'), 'kafedra')->get();
            $kafedradirector = Kafedradirector::where('menu_uz', $kafedra->menu_uz)
                ->select('id', 'menu_uz', 'kafedra', 'director_img',
                    Localization::column('directorname'), Localization::column('position'),
                    Localization::column('degree'), Localization::column('acceptance'),
                    'phone', 'email')->get();
            $kafedramember = Kafedraworker::where('menu_uz', $kafedra->menu_uz)
                ->select('id', 'menu_uz', 'kafedra', 'employee_img', Localization::column('employeename'),
                    Localization::column('position'), 'phone', 'email')->get();
            $data = [
                'kafedra'=>$kafedra,
                'kaferdaabout'=>$kaferdaabout,
                'kafedradirector'=>$kafedradirector,
                'kafedramember'=>$kafedramember,
            ];
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/kafedradirectors",
     *     tags={"Kafedradirector"},
     *     summary="get kafedra mens",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getkafedradirectors",
     *     @OA\Parameter(
     *         name="get kafedra directors",
     *         in="query",
     *         description="https://homeworking.uz/api/kafedradirectors",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getkafedradirectors(Request $req)
    {
        try {
            $data = Kafedradirector::select('id', 'menu_uz', 'faculty', 'director_img',
                Localization::column('directorname'),
                Localization::column('position'),
                Localization::column('degree'),
                Localization::column('acceptance'), 'phone', 'email')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/kafedraworkers",
     *     tags={"Kafedraworker"},
     *     summary="get kafedra workers",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getkafedraworkers",
     *     @OA\Parameter(
     *         name="get kafedra workers",
     *         in="query",
     *         description="https://homeworking.uz/api/kafedraworkers",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getkafedraworkers(Request $req)
    {
        try {
            $data = Kafedraworker::select('id', 'menu_uz', 'faculty', 'employee_img',
                Localization::column('employeename'),
                Localization::column('position'),
                'phone', 'email')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/kafedraabouts",
     *     tags={"Kafedraabout"},
     *     summary="get kafedra abouts",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getkafedraabouts",
     *     @OA\Parameter(
     *         name="get kafedra abouts",
     *         in="query",
     *         description="https://homeworking.uz/api/kafedraabouts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getkafedraabouts(Request $req)
    {
        try {
            $data = Kafedraabout::select('id', 'menu_uz', 'faculty', Localization::column('menu'))->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/filials",
     *     tags={"Filial"},
     *     summary="get  filials",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfilials",
     *     @OA\Parameter(
     *         name="get filials",
     *         in="query",
     *         description="https://homeworking.uz/api/filials",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */


    /**
     * @OA\Get(
     *     path="/api/captcha",
     *     tags={"getcaptcha"},
     *     summary="get captcha",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getcaptcha",
     *     @OA\Parameter(
     *         name="get captcha",
     *         in="query",
     *         description="https://homeworking.uz/api/captcha",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getcaptcha(Request $req)
    {
        try {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randarray = [];
            for ($i = 0; $i < 10; $i++) {
                $randarray = rand(0, strlen($characters));
            }
            $randstring = implode($randarray);
            return response()->json($randarray);
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    public function getfilials(Request $req)
    {
        try {
            $data = Filial::select('id',  Localization::column('menu'))->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/filialdirectors",
     *     tags={"Filialdirector"},
     *     summary="get filialdirectors",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfilialdirectors",
     *     @OA\Parameter(
     *         name="get filialdirectors",
     *         in="query",
     *         description="https://homeworking.uz/api/filialdirectors",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getfilialdirectors(Request $req)
    {
        try {
            $data = Filialdirector::select('id', 'menu_uz', 'director_img',
                Localization::column('directorname'),
                Localization::column('position'),
                Localization::column('degree'),
                Localization::column('acceptance'), 'phone', 'email')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/filialabouts",
     *     tags={"Filialabout"},
     *     summary="get filialdirectors",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfilialabouts",
     *     @OA\Parameter(
     *         name="get filialabouts",
     *         in="query",
     *         description="https://homeworking.uz/api/filialabouts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getfilialabouts(Request $req)
    {
        try {
            $data = Filialabout::select('id', 'manu_uz', Localization::column('text'))->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/getfilialaboutsById/{id}",
     *     tags={"Filialabout"},
     *     summary="get Department about by id",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfilialaboutsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="https://homeworking.uz/api/centerabouts",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getfilialaboutsById($id)
    {
        try {
            $data = Filialdirector::select('id', 'menu_uz', 'director_img',
                Localization::column('directorname'),
                Localization::column('position'),
                Localization::column('degree'),
                Localization::column('acceptance'),
                Localization::column('text'),
                'phone', 'email')->where('filial_id',$id)->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }















    /**
     * @OA\Get(
     *     path="/api/applicantmens",
     *     tags={"Applicantmen"},
     *     summary="get applicantmens",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getapplicantmens",
     *     @OA\Parameter(
     *         name="get applicantmens",
     *         in="query",
     *         description="https://homeworking.uz/api/applicantmens",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getapplicantmens(Request $req)
    {
        try {
            $data = Applicantmen::select('id', Localization::column('menu'))->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/uniquelinks",
     *     tags={"Uniquelink"},
     *     summary="get uniquelinks",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getuniquelinks",
     *     @OA\Parameter(
     *         name="get uniquelinks",
     *         in="query",
     *         description="https://homeworking.uz/api/uniquelinks",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getuniquelinks(Request $req)
    {
        try {
            $data = Uniquelink::select('id', Localization::column('title'), 'link')
                ->pluck('title', 'link');
            return response()->json(
                $data,
            );
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/corruptionsectors/{corruptionmen}",
     *     tags={"Corruptionmen"},
     *     summary="get Corruptionmen",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getcorruptionsectors",
     *     @OA\Parameter(
     *         name="get uniquelinks",
     *         in="query",
     *         description="https://homeworking.uz/api/corruptionsectors/{corruptionmen}",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getcorruptionsectors(Request $req, Corruptionmen $corruptionmen)
    {
        try {
            $data = $corruptionmen->corruptionsectors()->select(
                'id',
                Localization::column('menu'),
                Localization::column('text')
            )->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/corruptionmens",
     *     tags={"Corruptionmen"},
     *     summary="get Corruptionmen",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getcorruptionmens",
     *     @OA\Parameter(
     *         name="get corruptionmens",
     *         in="query",
     *         description="https://homeworking.uz/api/corruptionmens",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getcorruptionmens(Request $req)
    {
        try {
            $data = Corruptionmen::select('id', 'menu')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/techniqs",
     *     tags={"Techniq"},
     *     summary="get techniqs",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="gettechniqs",
     *     @OA\Parameter(
     *         name="get techniqs",
     *         in="query",
     *         description="https://homeworking.uz/api/techniqs",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function gettechniqs(Request $req)
    {
        try {
            $data = Techniq::select('id', 'img', Localization::column('title'), 'fileurl')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/gettechniqsfile/{category}",
     *     tags={"Techniq"},
     *     summary="get techniqs",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="gettechniqsfile",
     *     @OA\Parameter(
     *         name="category",
     *         in="path",
     *         description="https://homeworking.uz/api/techniqs",
     *         required=true,
     *         @OA\Schema(
     *             default="Texnika yulduzlari",
     *             type="string",
     *             enum={"Texnika yulduzlari", "Ta’lim tizimida ijtimoiy gumanitar fanlar", "Yosh texnika yulduzlari"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function gettechniqsfile($category)
    {
        try {
            $data = Techniq::select('id',
                Localization::column('title'),
                'fileurl', 'img',
                'techniq_category_title'
            )->where('techniq_category_title', $category)->get();

            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/masterylessons",
     *     tags={"Techniq"},
     *     summary="get masterylessons",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getmasterylessons",
     *     @OA\Parameter(
     *         name="get masterylessons",
     *         in="query",
     *         description="https://homeworking.uz/api/masterylessons",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getmasterylessons(Request $req)
    {
        try {
            $data = Masterylesson::select('id',
                'videourl',
                Localization::column('title')
            )->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/rekvizts",
     *     tags={"Rekvizts"},
     *     summary="get fans",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getrekvizts",
     *     @OA\Parameter(
     *         name="get fans",
     *         in="query",
     *         description="https://homeworking.uz/api/fans",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function getrekvizts(Request $req)
    {
        try {
            $data = Rekvizt::select('id', Localization::column('text'))->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/fans",
     *     tags={"Fan"},
     *     summary="get fans",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfans",
     *     @OA\Parameter(
     *         name="get fans",
     *         in="query",
     *         description="https://homeworking.uz/api/fans",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getfans(Request $req)
    {
        try {
            $data = Fan::select('id', Localization::column('text'))->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/inovations",
     *     tags={"Inovation"},
     *     summary="get inovations",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getinovations",
     *     @OA\Parameter(
     *         name="get inovations",
     *         in="query",
     *         description="https://homeworking.uz/api/inovations",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getinovations(Request $req)
    {
        try {
            $data = Inovation::select('id', Localization::column('text'))->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/doctorals",
     *     tags={"Inovation"},
     *     summary="get doctorals",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getdoctorals",
     *     @OA\Parameter(
     *         name="get doctorals",
     *         in="query",
     *         description="https://homeworking.uz/api/doctorals",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getdoctorals(Request $req)
    {
        try {
            $data = Doctoral::select('id', Localization::column('text'))->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/finances",
     *     tags={"Finance"},
     *     summary="get finances",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getfinances",
     *     @OA\Parameter(
     *         name="get finances",
     *         in="query",
     *         description="https://homeworking.uz/api/finances",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getfinances(Request $req)
    {
        try {
            $data = Finance::select('id', Localization::column('title'), 'fileurl')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/youngs",
     *     tags={"Young"},
     *     summary="get youngs",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getyoungs",
     *     @OA\Parameter(
     *         name="get youngs",
     *         in="query",
     *         description="https://homeworking.uz/api/youngs",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getyoungs(Request $req)
    {
        try {
            $data = Young::select('id', Localization::column('text'), 'video_url')->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/culturals",
     *     tags={"Cultural"},
     *     summary="get culturals",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getculturals",
     *     @OA\Parameter(
     *         name="get culturals",
     *         in="query",
     *         description="https://homeworking.uz/api/culturals",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getculturals(Request $req)
    {
        try {
            $data = Cultural::select('id', Localization::column('title'), 'fileurl')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/creatives",
     *     tags={"Creative"},
     *     summary="get creatives",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getcreatives",
     *     @OA\Parameter(
     *         name="get creatives",
     *         in="query",
     *         description="https://homeworking.uz/api/creatives",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getcreatives(Request $req)
    {
        try {
            $data = Creative::select('id', Localization::column('text'))->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/erasmus",
     *     tags={"Erasmu"},
     *     summary="get erasmus",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="geterasmus",
     *     @OA\Parameter(
     *         name="get erasmus",
     *         in="query",
     *         description="https://homeworking.uz/api/erasmus",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function geterasmus(Request $req)
    {
        try {
            $data = Erasmu::select('id', Localization::column('text'))->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/mechauzs",
     *     tags={"Mechauz"},
     *     summary="get mechauzs",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getmechauzs",
     *     @OA\Parameter(
     *         name="get mechauzs",
     *         in="query",
     *         description="https://homeworking.uz/api/mechauzs",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getmechauzs(Request $req)
    {
        try {
            $data = Mechauz::select('id', Localization::column('text'))->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/spaces",
     *     tags={"Space"},
     *     summary="get spaces",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getspaces",
     *     @OA\Parameter(
     *         name="get spaces",
     *         in="query",
     *         description="https://homeworking.uz/api/spaces",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getspaces(Request $req)
    {
        try {
            $data = Space::select('id', Localization::column('text'))->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/raqamlis",
     *     tags={"Raqamli"},
     *     summary="get raqamlis",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getraqamlis",
     *     @OA\Parameter(
     *         name="get raqamlis",
     *         in="query",
     *         description="https://homeworking.uz/api/raqamlis",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getraqamlis(Request $req)
    {
        try {
            $data = Raqamli::select('id', Localization::column('text'))->first();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }
    /**
     * @OA\Get(
     *     path="/api/mixtures",
     *     tags={"Mixture"},
     *     summary="get mixtures",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getmixtures",
     *     @OA\Parameter(
     *         name="get mixtures",
     *         in="query",
     *         description="https://homeworking.uz/api/mixtures",
     *         required=true,
     *         explode=true,
     *         @OA\Schema(
     *             default="available",
     *             type="string",
     *             enum={"available", "pending", "sold"},
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */
    public function getmixtures(Request $req)
    {
        try {
            $data = Mixture::select('id',
                Localization::column('text'),
                Localization::column('title'),
                'img'
            )->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }



    /**
     * @OA\Get(
     *     path="/api/getmixturesbyid/{id}",
     *     tags={"Mixture"},
     *     summary="get mixtures",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="getmixturesbyid",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="https://homeworking.uz/api/mixtures",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */




    public function getmixturesbyid($id)
    {
        try {
            $data = Mixture::select('id',
                Localization::column('text'),
                Localization::column('title'),
                'img'
            )->where('id', $id)->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }








    /**
     * @OA\Get(
     *     path="/api/muhumElonlar",
     *     tags={"MuhumElonlar"},
     *     summary="get mixtures",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="muhumElonlar",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function muhumElonlar(Request $req)
    {
        try {
            $data = MuhumElonlar::select('id', Localization::column('text'), 'created_at', 'updated_at')->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/internationalconnection/",
     *     tags={"InternationalConnection"},
     *     summary="get mixtures",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="internationalconnection",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function internationalconnection(Request $req)
    {
        try {
            $data = InternationalConnection::select('id',
                Localization::column('text'),
                Localization::column('name'),
                Localization::column('position'),
                Localization::column('degree'),
                'phone',
                'photo',
                'email',
                'accept_date',
                'created_at',
                'updated_at'
            )->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/internationalConnectionWorker/",
     *     tags={"InternationalConnection"},
     *     summary="get mixtures",
     *     description="Multiple status values can be provided with comma separated string",
     *     operationId="internationalConnectionWorker",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid status value"
     *     )
     * )
     */

    public function internationalConnectionWorker(Request $req)
    {
        try {
            $data = InternationalConnectionWorker::select('id',
                Localization::column('name'),
                Localization::column('position'),
                'phone',
                'photo',
                'email',
                'international_connection_id',
                'created_at',
                'updated_at'
            )->get();
            return response()->json([
                'ok' => true,
                'data' => $data,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'ok' => false,
                'msg' => $e->getMessage(),
            ]);
        }
    }







}
