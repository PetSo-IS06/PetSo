<?php

    class Organizations extends Controller {
        public function __construct() {
            $this->authModel = $this->model('Authentication');
            $this->organizationModel = $this->model('Organization');
        }
    

        public function organizationViewProfile() {
            $data = [
                'organization' => $this->organizationModel->getOrganization()[0],
                'animal_types' => $this->organizationModel->getOrganizationAnimalTypes(),
            ];


            $this->view('users/OrganizationViewProfile', $data);
        }

        public function organizationSignUp() {

            $data = [
                "title"                  => "SignUp Page",
                "org_name"               => '',
                "org_mobile"             => '',
                "org_landline"           => '',
                "email"              => '',
                "password"           => '',
                "org_confirm_password"   => '',
                "org_address1"           => '',
                "org_address2"           => '',
                "org_area"               => '',
                "org_district"           => '',
                "if_findhelp"            => '',
                "org_website"            => '',
                "org_facebook"           => '',
                "org_insta"              => '', 
                "org_profile_img"        => '',
                "org_doc"                => '',
                    
                "name_error"             => '',
                "contact_error"          => '',
                // "animal_type_error"      => '',
                "email_error"            => '',
                "if_findhelp_error"      => '',
                "password_error"         => '',
                "confirm_password_error" => '',
                "password_match_error"   => '',
                "address_error"          => '',
                "org_district"         => '',
            ];


            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(isset($_POST['submit'])){

                    $data = [
                        "org_name"               => isset($_POST['org_name']) ? trim($_POST['org_name']) : '',
                        "org_mobile"             => isset($_POST['org_mobile']) ? trim($_POST['org_mobile']) : '',
                        "org_landline"           => isset($_POST['org_landline']) ? trim($_POST['org_landline']) : '',
                        "email"              => isset($_POST['email']) ? trim($_POST['email']) : '',
                        "password"           => isset($_POST['password']) ? trim($_POST['password']) : '',
                        "org_confirm_password"   => isset($_POST['org_confirm_password']) ? trim($_POST['org_confirm_password']) : '',
                        "org_address1"           => isset($_POST['org_address1']) ? trim($_POST['org_address1']) : '',
                        "org_address2"           => isset($_POST['org_address2']) ? trim($_POST['org_address2']) : '',
                        "org_area"               => isset($_POST['org_area']) ? trim($_POST['org_area']) : '',
                        "org_district"           => isset($_POST['org_district']) ? trim($_POST['org_district']) : '',
                        "if_findhelp"            => isset($_POST['if_findhelp']) ? trim($_POST['if_findhelp']) : '',
                        "org_website"            => isset($_POST['org_website']) ? trim($_POST['org_website']) : '',
                        "org_facebook"           => isset($_POST['org_facebook']) ? trim($_POST['org_facebook']) : '',
                        "org_insta"              => isset($_POST['org_insta']) ? trim($_POST['org_insta']) : '',
                        "org_profile_img"        => isset($_POST['org_profile_img']) ? trim($_POST['org_profile_img']) : '',
                        "org_doc"                => isset($_POST['org_doc']) ? trim($_POST['org_doc']) : '',
                    ];

                    if(empty($data['org_name'])){
                        $data["name_error"] = "Please enter organization name";
                    }

                    if(empty($data['org_mobile']) && empty($data['org_landline'])){
                        $data["contact_error"] = "Please enter at least one mobile number";
                    }

                    if(empty($data['email'])){
                        $data["email_error"] = "Please enter organization email";
                    }else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                        $data["email_error"] = "Please enter a valid email";
                    }else{
                        if($this->authModel->ifEmailExists($data['email'])){
                            $data["email_error"] = "This email is already taken";
                        };
                    }

                    if(empty($data['password'])){
                        $data["password_error"] = "Please enter password";
                    }else if(strlen($data['password']) < 8){
                        $data["password_error"] = "Password should contain atleast 8 characters";
                    }

                    if(empty($data['password_error'])){
                        if(empty($data['org_confirm_password'])){
                            $data["confirm_password_error"] = "Please confirm your password by re-entering";
                        }
                    }

                    if(empty($data['password_error']) && empty($data['confirm_password_error'])){
                        if($data['password'] != $data['org_confirm_password']){
                            $data["password_match_error"] = "Password Mismatch";
                        }
                    }

                    if(empty($data['animal_type'])){
                        $data["animal_type_error"] = "Please select animal type";
                    }

                    if(empty($data['if_findhelp'])){
                        $data["if_findhelp_error"] = "Please select YES or NO";
                    }

                    if(empty($data['org_address1']) && empty($data['org_address2'])){
                        $data["address_error"] = "Please enter at least one address";
                    }

                    if(empty($data['name_error']) && empty($data['contact_error']) && empty($data['password_error']) 
                    && empty($data['confirm_password_error']) && empty($data['password_match_error']) && empty($data['address_error'])){

                        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
                        $type = 'org';

                        if(!empty($_FILES['org_doc']['name'])){
                            $output_dir = "uploads";//Path for file upload
                            $RandomNum = time();
                            $file_name = str_replace(' ','-',strtolower($_FILES['org_doc']['name']));
                            $ImageType = $_FILES['org_doc']['type']; //"image/png", image/jpeg etc.
                            $ImageExt = substr($file_name, strrpos($file_name, '.'));
                            $ImageExt = str_replace('.','',$ImageExt);
                            $file_name = preg_replace("/\.[^.\s]{3,4}$/", "", $file_name);
                            $Newfile_name = $file_name.'-'.$RandomNum.'.'.$ImageExt;
                            $ret[$Newfile_name]= $output_dir.$Newfile_name;
                            move_uploaded_file($_FILES["org_doc"]["tmp_name"],$output_dir."/".$Newfile_name );
                        
                            $data["org_doc"] = $output_dir."/".$Newfile_name;
                        }

                        if($this->authModel->createAccount($data, $type)){
                            $accountID = $this->authModel->getAccountID($data['email']);

                            if($accountID){
                                $this->organizationModel->addOrganization($data, $accountID);
                                // // redirect to login page
                                // header('location:' . URL_ROOT . '/authentications/login');
                            } else {
                                die('Could not register organization');
                            }

                            $data = [
                                "title"                  => "organization",
                                "org_name"               => '',
                                "org_mobile"             => '',
                                "org_landline"           => '',
                                "email"              => '',
                                "password"           => '',
                                "org_confirm_password"   => '',
                                "org_address1"           => '',
                                "org_address2"           => '',
                                "org_area"               => '',
                                "org_district"           => '',
                                "if_findhelp"            => '',
                                "org_website"            => '',
                                "org_facebook"           => '',
                                "org_insta"              => '', 
                                "org_profile_img"        => '',
                                "org_doc"                => '',
                                    
                                "name_error"             => '',
                                "contact_error"          => '',
                                // "animal_type_error"      => '',
                                "email_error"            => '',
                                "if_findhelp_error"      => '',
                                "password_error"         => '',
                                "confirm_password_error" => '',
                                "password_match_error"   => '',
                                "address_error"          => '',
                                "district_error"         => '',
                            ];

                            // $organization_id = $this->organizationModel->getLastInsertedId();
                            // print_r($organization_id);

                            $organization_id = $this->organizationModel->getLastInsertedId();

                            if(isset($_POST['animals'])){
                                $animals = $_POST['animals'];
                                foreach($animals as $animal){
                                    $this->organizationModel->addOrganizationAnimal($organization_id, $animal);
                                }
                            }   
                            // redirect to login page
                            header('location:' . URL_ROOT . '/authentications/login');
                        } else {
                            die('Something went wrong.');
                        }
                    }
                }
            }

            $this->view('users/OrganizationSignUp', $data);
        }


        public function selectAccount() {
            $data = [
                'title' => 'Login Page'
            ];
            $this->view('users/selectAccount', $data);
        }

        public function dashboard(){
            $data = [
                'title' => 'Dashboard Data'
            ];

            $this->view('users/organization/dashboard', $data);
        }
    }
