<?php

class My_Controller extends CI_Controller
{
    public $js = array();
    function __construct()
    {
        parent::__construct();
        array_push($this->js, base_url() . 'assets/js/custom/cart.js');
    }

    public $parseData = [
        'navbar' => 'parts/header',
        'sidebar' => 'parts/sidebar',
        'modal' => 'parts/modal',
        'content' => 'errors/error',
        'footer' => 'parts/footer',
        'javascript' => array(),
        'menu_wrapper' => 'parts/menu_wrapper',
        'url_image' => 'http://localhost:9000/assets/images_product/',

        'title_budge' => 'Not Found!',
        'title_tab' => 'Not Found!',
        'app_name' => 'Web Penjualan'
    ];

    function encryptIt($q)
    {
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qEncoded      = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $q, MCRYPT_MODE_CBC, md5(md5($cryptKey))));
        return ($qEncoded);
    }

    function decryptIt($q)
    {
        $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
        $qDecoded      = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode($q), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
        return ($qDecoded);
    }

    /***
     * @param array $body
     * @param $url
     * @param array $header
     * @return mixed
     */
    public function request_API_POST($body = [], $url, $header = [])
    {
        $headr = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];

        if (!empty($header)) $headr = array_merge($headr, $header);

        $crl = curl_init();

        curl_setopt_array($crl, array(
            CURLOPT_RETURNTRANSFER => true,   // return web page
            CURLOPT_HEADER         => false,  // don't return headers
            CURLOPT_FOLLOWLOCATION => true,   // follow redirects
            CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
            CURLOPT_ENCODING       => "",     // handle compressed
            CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 60,    // time-out on connect
            CURLOPT_TIMEOUT        => 60,    // time-out on response
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => $headr,
        ));


        $result = curl_exec($crl);
        $error = curl_error($crl);

        curl_close($crl);

        return json_decode($result);
    }

    /***
     * @param array $body
     * @param $url
     * @param array $header
     * @return mixed
     */
    public function request_API_GET($body = [], $url, $header = [])
    {
        $headr = [
            'Content-Type: application/json',
            'Accept: application/json'
        ];

        if (!empty($header)) $headr = array_merge($headr, $header);

        $crl = curl_init();

        curl_setopt_array($crl, array(
            CURLOPT_RETURNTRANSFER => true,   // return web page
            CURLOPT_HEADER         => false,  // don't return headers
            CURLOPT_FOLLOWLOCATION => true,   // follow redirects
            CURLOPT_MAXREDIRS      => 10,     // stop after 10 redirects
            CURLOPT_ENCODING       => "",     // handle compressed
            CURLOPT_AUTOREFERER    => true,   // set referrer on redirect
            CURLOPT_CONNECTTIMEOUT => 60,    // time-out on connect
            CURLOPT_TIMEOUT        => 60,    // time-out on response
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_URL => $url,
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => $headr,
        ));


        $result = curl_exec($crl);
        $error = curl_error($crl);

        curl_close($crl);

        return json_decode($result);
    }

    /***
     * @param string $environment
     * @return string
     */
    public function BaseUrl(string $environment)
    {
        switch ($environment) {
            case "development":
                return "http://192.168.100.5:7000/api/v1/";
                break;
            default:
                return "";
        }
    }

    /***
     * @return bool
     */
    public function isLogin()
    {
        $isLogin = false;
        if ($this->session->userdata('userIsLogin')) $isLogin = true;

        return $isLogin;
    }
}
