<?php

// Core App Class - handles Url requests
class Core
{
    protected $currentController = 'Pages';     // set default page to be loaded
    protected $currentMethod = 'index';         // set default method
    protected $params = [];                     // array to store url params

    public function __construct()
    {
        $url = $this->getUrl();

        if ($url != null) {
            // Url[0] = 'Controller name'
            // ucwords -> capitalize first letter
            if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
                $this->currentController = ucwords($url[0]);
                unset($url[0]);
            }
        }

        // require controller
        require_once '../app/controllers/' . $this->currentController . '.php';
        $this->currentController = new $this->currentController;

        // check url[1]
        if (isset($url[1])) {
            if (method_exists($this->currentController, $url[1]));
            $this->currentMethod = $url[1];
            unset($url[1]);
        }
        // get parameters -> if does not exits, keep it empty
        $this->params = $url ? array_values($url) : [];

        // callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    // method to process url
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');                // exclude '/' at the end of string

            $url = filter_var($url, FILTER_SANITIZE_URL);   // remove unnecessary special characters (Ex: @, $)

            $url = explode('/', $url);                      // breaking into an array
            return $url;
        }
    }
}
