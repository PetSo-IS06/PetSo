<?php

    class Admins extends Controller {
        public function __construct() {
            $this->adminModel = $this->model('Admin');
        }

    }