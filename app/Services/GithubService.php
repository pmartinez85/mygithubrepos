<?php

namespace App\Services;
use GuzzleHttp\Client;

/**
 * Class GithubService
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
     * @return \Illuminate\Support\Collection
     */
    public function obtainRepos()
    {
        $res = $this->guzzle->request('GET', $this->githubReposUrl(),
        [
            "auth" => $this->credentials()
        ]
    );

       //dd(\GuzzleHttp\json_decode($res->getBody));
        return collect(\GuzzleHttp\json_decode($res->getBody()))->pluck('name');
//        return [
//            'repo1',
//            'repo2',
//            'repo3'
//        ];
    }

    /**
     * @return string
     */
    private function githubReposUrl()
    {
        return $this->github_api_url . $this->uri;
    }

    /**
     * @return array
     */
    private function credentials()
    {
        return ['pmartinez85', $this->token];
    }




}