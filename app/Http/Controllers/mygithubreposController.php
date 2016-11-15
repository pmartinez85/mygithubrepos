<?php

namespace App\Http\Controllers;

//use Illuminate\Foundation\Bus\DispatchesJobs;
//use Illuminate\Routing\Controller as BaseController;
//use Illuminate\Foundation\Validation\ValidatesRequests;
//use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Services\GithubService;
use Illuminate\Http\Request;

/**
 * Class mygithubreposController
 * @property GithubService github
 * @package App\Http\Controllers
 */
class mygithubreposController extends Controller
{
    /**
     * mygithubreposController constructor.
     * @param GithubService $github
     */
    public function __construct(GithubService $github)
    {
        $this->github=$github;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $mygithubrepos = $this->github->obtainRepos();



        return view('mygithubrepos', compact($mygithubrepos));



   }
}
