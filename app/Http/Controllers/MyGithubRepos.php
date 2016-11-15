<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GithubService;

/**
 * @property GithubService github
 */
class MyGithubRepos extends Controller
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
