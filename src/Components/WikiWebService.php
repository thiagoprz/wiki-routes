<?php
namespace Thiagoprz\WikiRoutes\Components;

use GuzzleHttp\Client;

class WikiWebService
{
    /**
     * Login API endpoint
     */
    const TOKEN_ENDPOINT = '/api.php?action=query&meta=tokens&format=json&type=login';

    /**
     * Login API endpoint
     */
//    const LOGIN_ENDPOINT = '/api.php?action=login&format=json';
    const LOGIN_ENDPOINT = '/api.php?action=query&meta=tokens&type=login&format=json';

    /**
     * Login API endpoint
     */
    const ALLPAGES_ENDPOINT = '/api.php?action=query&list=allpages&format=json';

    /**
     * @var string
     */
    protected $wiki_url;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

    public function __construct()
    {
        $this->wiki_url = config('wiki_routes.url');
        $this->login = config('wiki_routes.login');
        $this->password = config('wiki_routes.password');
    }

    public function login()
    {
        $client = new Client();
//        $res_token = $client->request('POST', $this->wiki_url . self::TOKEN_ENDPOINT);
//        echo '<pre>';
//        var_dump((string)$res_token->getBody());
//        echo '</pre>';
//        exit;
        $res_login = $client->request('POST', $this->wiki_url . self::LOGIN_ENDPOINT, [
            'form_params' => [
                'lgname' => $this->login,
                'lgpassword' => $this->password,
                'lgtoken' => '23454',
            ],
        ]);
        echo '<pre>';
        var_dump((string)$res_login->getBody());
        echo '</pre>';
        exit;
    }

    public function getAllPages($token = '')
    {

    }


}