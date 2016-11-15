<?php

namespace App\Services;
use GuzzleHttp\Client;

/**
 * Class GithubService
 * @property  githubReposUrl
 * @package App\Service
 */
class GithubService
{
    protected $token;
    protected $guzzle;
    protected $github_api_url = 'http://api.github.com';
    protected $uri ='/user/repos';


    /**
     * GithubService constructor.
     * @param Client $guzzle
     */
    public function __construct(Client $guzzle)
    {
        $this->token = env('GITHUB_TOKEN');
        $this->guzzle = $guzzle;
    }

    /**
     * @return array
     */
    public function obtainRepos()
    {
        $res = $this->guzzle->request('GET', $this->githubReposUrl());

        dd($res->getBody);
        return [
            'repo1',
            'repo2',
            'repo3'
        ];
    }

    /**
     * @return string
     */
    private function githubReposUrl()
    {
        return $this->github_api_url . $this->uri;
    }





}