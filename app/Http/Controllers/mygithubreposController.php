<?php

namespace App\Http\Controllers;

use App\Services\GithubService;

/**
 * Class mygithubreposController
 * @property GithubService github
 * @package App\Http\Controllers
 */
class mygithubreposController extends Controller
{
    protected $github;
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

        $githubrepos = $this->github->obtainRepos();

        return view('mygithubrepos', compact('githubrepos'));



   }
}
