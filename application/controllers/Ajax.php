<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

    public function test()
    {
        $this->load->model('Attendees_model', '', true);
        printObject($this->Attendees_model->currentTilePosition());
    }

    public function getTile($intID)
    {
        $this->load->model('Attendees_model', '', true);
        $objAttendee = $this->Attendees_model->get($intID);

        header('Content-Type: application/json');
        $json_string = json_encode($objAttendee, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);
        echo($json_string);
    }

    public function getRandomTile($strExceptions = null)
    {
        if($strExceptions) {
            $strExceptions = str_replace("_", ",", $strExceptions);
        }

        $this->load->model('Attendees_model', '', true);
        $objAttendee = $this->Attendees_model->getRandom($strExceptions)[0];

        header('Content-Type: application/json');
        $json_string = json_encode($objAttendee, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);
        echo($json_string);
    }

    public function publishTile($intID)
    {
        $this->load->model('Attendees_model', '', true);
        $objAttendee = $this->Attendees_model->get($intID);
        $objAttendee->AtIsPublished = 1;
        $arrAttendee = array();

        foreach ($objAttendee as $key => $value) {
            $strNewKey = str_replace("At", "", $key);
            $arrAttendee[$strNewKey] = $value;
        }

        $this->Attendees_model->update($arrAttendee, $intID);

        header('Content-Type: application/json');
        $json_string = json_encode($objAttendee, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);
        echo($json_string);
    }

    public function getQueue()
    {
        $this->load->model('Attendees_model', '', true);

        $arrQueue = $this->Attendees_model->getQueue();

        if(isset($arrQueue[0])){
            $intID = $arrQueue[0]->QuAttendeeID;

            $objAttendee = $this->Attendees_model->get($intID);

            $this->Attendees_model->updateQueue($intID);

            header('Content-Type: application/json');
            $json_string = json_encode($objAttendee, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);
            echo($json_string);
        }
    }


    public function getAllTiles()
    {
        $this->load->model('Attendees_model', '', true);
        $objAll = $this->Attendees_model->getPublished();

        header('Content-Type: application/json');
        $json_string = json_encode($objAll, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);
        echo($json_string);
    }

    public function convert($intID)
    {
        $this->load->model('Attendees_model', '', true);
        $objAttendee = $this->Attendees_model->get($intID);

        header("Content-type: image/png");
        $strBase64 = $objAttendee->AtImage;
        $strBase64 = str_replace("data:image/png;base64,", "", $strBase64);
        echo(base64_decode($strBase64));
    }

    public function queueTile($intID)
    {
        $this->load->model('Attendees_model', '', true);
        $this->Attendees_model->queueTile($intID);
    }

    public function checkText() {

        if ($this->input->post()) {
            $objPostData = $this->input->post();
            $strText = $objPostData["strText"];
            $strFirstName = $objPostData["strFirstName"];
            $strLastName = $objPostData["strLastName"];

            $this->load->model('Words_model', '', true);

            $objAll = $this->Words_model->getAll();
            $arrWords = array();
            $boolOkay = true;
            $arrFound = array();
            $CollectionID = "";

            foreach ($objAll as $objWord) {
                $strTmpWord = strtolower($objWord->WoText);

                if(preg_match("/{$strTmpWord}/i", $strText)) {
                    $arrFound[] = $strTmpWord;
                    $boolOkay = false;
                }

                if(preg_match("/{$strTmpWord}/i", $strFirstName)) {
                    $arrFound[] = $strTmpWord;
                    $boolOkay = false;
                }

                if(preg_match("/{$strTmpWord}/i", $strLastName)) {
                    $arrFound[] = $strTmpWord;
                    $boolOkay = false;
                }
            }

            $objReturn = new \stdClass();
            $objReturn->status = $boolOkay;

            header('Content-Type: application/json');
            $json_string = json_encode($objReturn, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);
            echo($json_string);

        }
    }

    public function saveText() {

        if ($this->input->post()) {

            $objPostData = $this->input->post();
            $strText = $objPostData["strText"];
            $strFirstName = $objPostData["strFirstName"];
            $strLastName = $objPostData["strLastName"];
            $strCompany = $objPostData["strCompany"];
            $strDesignation = $objPostData["strDesignation"];

            $this->load->model('Words_model', '', true);

            $objAll = $this->Words_model->getAll();
            $arrWords = array();
            $boolOkay = true;
            $arrFound = array();
            $CollectionID = "";

            foreach ($objAll as $objWord) {
                $strTmpWord = strtolower($objWord->WoText);

                if(preg_match("/{$strTmpWord}/i", $strText)) {
                    $arrFound[] = $strTmpWord;
                    $boolOkay = false;
                }

                if(preg_match("/{$strTmpWord}/i", $strFirstName)) {
                    $arrFound[] = $strTmpWord;
                    $boolOkay = false;
                }

                if(preg_match("/{$strTmpWord}/i", $strLastName)) {
                    $arrFound[] = $strTmpWord;
                    $boolOkay = false;
                }
            }

            if($boolOkay) {
                $this->load->model('Attendees_model', '', true);

                //$strImage = $objPostData["strImage"];
                //$strTag = $objPostData["strTag"];
                //$strEmail = $objPostData["strEmail"];
                //$strAlignment = $objPostData["strAlignment"];

                $objAttendee = array();
                $objAttendee["Image"]  = "";
                $objAttendee["IPAddress"]  = $this->input->ip_address();
                $objAttendee["Text"]  = $strText;

                $objAttendee["FirstName"]  = $strFirstName;
                $objAttendee["LastName"]  = $strLastName;
                $objAttendee["Company"]  = $strCompany;
                $objAttendee["Designation"]  = $strDesignation;
                $objAttendee["HashTag"]  = "";
                $objAttendee["EmailAddress"]  = "";
                $objAttendee["Alignment"]  = "";


                $objSettings = db_GetSettings();
                if ($objSettings["Moderated"]=="true") {
                    $objAttendee["IsPublished"]  = 0;
                } else {
                    $objAttendee["IsPublished"]  = 1;
                }

                $objAttendee["IsPinned"]  = 0;

                //$objPos = $this->Attendees_model->getNextPositionByAlignment($strAlignment);

                $objAttendee["Row"]  = "";
                $objAttendee["Column"] = "";

                $objAttendee["Header"]  = json_encode($this->input->request_headers(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);

                if($this->input->post('image')) {

                    $path = FCPATH . 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;

                    $seed = str_replace('.', '', (((float)microtime() * (float)time()) . rand(0, 99)));
                    $base64 = array_values(array_slice(explode(',', $this->input->post('image')), -1))[0];
                    $image = base64_decode($base64);
                    $fileName = $date . '_' . $seed . '.jpg';

                    $this->load->helper('file');
                    $write = write_file($path . $fileName, $image);
                    $objAttendee["Image"] = $fileName;
                }

                $intID = $this->Attendees_model->update($objAttendee);

                $CollectionID  = $intID;

                $objReturn = new \stdClass();
                $objReturn->status = $boolOkay;
                $objReturn->found = $arrFound;
                $objReturn->ID = $CollectionID;

                header('Content-Type: application/json');
                $json_string = json_encode($objReturn, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);
                echo($json_string);
                $size = ob_get_length();
                header("Content-Length: $size");
                header('Connection: close');
                ob_end_flush();
                ob_flush();
                flush();

                $objSettings = db_GetSettings();
                $this->load->library('email');
                $this->email->set_mailtype('html');
                $this->config->load('email', true);
                $this->email->from($this->config->item("email")["email_from"]);
                $this->email->to($objSettings["Notification Email"]);
                $this->email->bcc("kelvyn@ansuz.info");
                $this->email->subject('[Deloitte Year End Party 2026]: A New Message Has Been Posted');
                //$this->email->attach(base_url("/ajax/convert/1"));

                $filename = "assets/templates/mail.html";
                $strTemplate = file_get_contents($filename);
                $strTemplate = str_replace('[FIRST_NAME]', $strFirstName, $strTemplate);
                $strTemplate = str_replace('[LAST_NAME]', $strLastName, $strTemplate);
                $strTemplate = str_replace('[MESSAGE]', $strText, $strTemplate);
                $strTemplate = str_replace('[ID]', $CollectionID, $strTemplate);
                $strTemplate = str_replace('[PHOTO]', $fileName, $strTemplate);
                $strTemplate = str_replace('[BASE_URL]', base_url(), $strTemplate);


                $this->email->message($strTemplate);
                $this->email->send();


                $this->load->library('Curl');

                $strMessage = "Name:[FIRST_NAME]<br>Message:[MESSAGE]";
                $strMessage = str_replace('[FIRST_NAME]', $strFirstName, $strMessage);
                $strMessage = str_replace('[MESSAGE]', $strText, $strMessage);

                $strMessage = rawurlencode($strMessage);


                //$strMessage = str_replace('[BASE_URL]', base_url(), $strMessage);

                //$strMessage = str_replace('[FIRST_NAME]', $strFirstName, $strMessage);
                //$strMessage = str_replace('[MESSAGE]', $strText, $strMessage);


                $whatsAppAPIURL = "http://localhost:4321/notifyGroup/[MESSAGE]";

                $whatsAppAPIURL = $whatsAppAPIURL;
                $strCall = str_replace("[NUMBER]", $strNumber, $whatsAppAPIURL);
                $strCall = str_replace("[MESSAGE]", $strMessage, $strCall);

                //echo($strCall);

                $this->curl->simple_get($strCall, array(CURLOPT_PORT => 1080));
            }


            /*
            if($boolOkay) {

                $objSettings = db_GetSettings();
                $this->load->library('email');
                $this->email->set_mailtype('html');
                $this->config->load('email', true);
                $this->email->from($this->config->item("email")["email_from"]);
                $this->email->to($objSettings["Notification Email"]);
                $this->email->bcc("kelvyn@ansuz.info");
                $this->email->subject('[Wishing Tree]: A New Message Has Been Posted');
                //$this->email->attach(base_url("/ajax/convert/1"));

                $filename = "assets/templates/mail.html";
                $strTemplate = file_get_contents($filename);
                $strTemplate = str_replace('[FIRST_NAME]', $strFirstName, $strTemplate);
                $strTemplate = str_replace('[LAST_NAME]', $strLastName, $strTemplate);
                $strTemplate = str_replace('[MESSAGE]', $strText, $strTemplate);
                $strTemplate = str_replace('[ID]', $CollectionID, $strTemplate);
                $strTemplate = str_replace('[BASE_URL]', base_url(), $strTemplate);


                $this->email->message($strTemplate);
                $this->email->send();
            }
            */
        }
    }

    public function saveImage()
    {
        if ($this->input->post()) {
            $objPostData = $this->input->post();
            $strText = $objPostData["strText"];

            $this->load->model('Words_model', '', true);

            $objAll = $this->Words_model->getAll();
            $arrWords = array();
            $boolOkay = true;
            $strText = strtolower($strText);
            $arrFound = array();
            $CollectionID = "";

            foreach ($objAll as $objWord) {
                $strTmpWord = strtolower($objWord->WoText);

                if(preg_match("/{$strTmpWord}/i", $strText)) {
                    $arrFound[] = $strTmpWord;
                    $boolOkay = false;
                }
            }

            if($boolOkay) {
                $this->load->model('Attendees_model', '', true);

                $strImage = $objPostData["strImage"];
                $strTag = $objPostData["strTag"];
                $strEmail = $objPostData["strEmail"];
                $strAlignment = $objPostData["strAlignment"];

                $objAttendee = array();
                $objAttendee["Image"]  = $strImage;
                $objAttendee["IPAddress"]  = $this->input->ip_address();
                $objAttendee["Text"]  = $strText;

                $objAttendee["HashTag"]  = $strTag;
                $objAttendee["EmailAddress"]  = $strEmail;
                $objAttendee["Alignment"]  = $strAlignment;

                $objAttendee["IsPublished"]  = 1;
                $objAttendee["IsPinned"]  = 0;

                $objPos = $this->Attendees_model->getNextPositionByAlignment($strAlignment);

                $objAttendee["Row"]  = $objPos["row"];
                $objAttendee["Column"]  = $objPos["column"];

                $objAttendee["Header"]  = json_encode($this->input->request_headers(), JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);

                $intID = $this->Attendees_model->update($objAttendee);

                $this->load->library('email');
                $this->email->set_mailtype('html');
                $this->config->load('email', true);
                $this->email->from($this->config->item('from_email'));
                $this->email->to($strEmail);
                $this->email->bcc("kelvyn@ansuz.info");
                $this->email->subject('Thank you for participating in our reflection wall!');
                //$this->email->attach(base_url("/ajax/convert/1"));

                $filename = "assets/templates/mail.html";
                $strTemplate = file_get_contents($filename);
                $strTemplate = str_replace('[IMAGE]', base_url("/ajax/convert/" . $intID), $strTemplate);

                $this->email->message($strTemplate);
                $this->email->send();

                $CollectionID  = $intID;
            }


            $objReturn = new \stdClass();
            $objReturn->status = $boolOkay;
            $objReturn->found = $arrFound;
            $objReturn->ID = $CollectionID;

            header('Content-Type: application/json');
            $json_string = json_encode($objReturn, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);
            echo($json_string);

        }


    }


    public function checkEmail() {
        $this->load->library('email');
        $this->email->set_mailtype('html');
        $this->config->load('email', true);
        $this->email->from("sitex.marketing@singex.com");
        $this->email->to("lance@searix.net");
        $this->email->subject('Thank you for participating in our Lucky Draw!');

        $filename="assets/templates/mail.html";
        $strTemplate = file_get_contents($filename);
        $this->email->message($strTemplate);
        $this->email->send();

        //echo $this->email->print_debugger();
        //echo("end");
    }


    public function uploadImage() {


        if ($this->input->post()) {
            $arrPost = $this->input->post();
            $base64_string = $this->input->post('image');

            if (empty($base64_string)) {
            // Handle error: No data provided
                return false;
            }

            if (preg_match('/^data:image\/(\w+);base64,/', $base64_string, $matches)) {
                $file_extension = $matches[1]; // png, jpeg, gif, etc.
                // Remove the data scheme prefix to get only the encoded content
                $base64_string = substr($base64_string, strpos($base64_string, ',') + 1);
            } else {
                // Fallback or error if the string is not a proper Data URI scheme
                $file_extension = 'jpg';
            }

            // 3. Decode the base64 data back into pure binary image data
            $image_data = base64_decode($base64_string);

            if ($image_data === false) {
                // Handle error: Failed to decode string
                return false;
            }

            // 4. Load the CodeIgniter File Helper to use write_file()
            $this->load->helper('file');

            $path = FCPATH . 'assets' . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;


            // 5. Define a unique file name and absolute server destination path
            $file_name = 'img_' . uniqid() . '.' . $file_extension;

            // FCPATH is a default CodeIgniter constant pointing to your root folder.
            // Ensure your "uploads" folder exists and is writable (chmod 777 or 755).
            $file_path = $path . $file_name;

            //exit($file_path);

            // 6. Save the data to the server file system
            if (write_file($file_path, $image_data)) {



                $this->load->model('Attendees_model', '', true);

                $objAttendee = array();
                $objAttendee["IsPublished"]  = 0;
                $objAttendee["Image"] = $file_name;

                $intID = $this->Attendees_model->update($objAttendee);

                echo json_encode([
                    'status' => 'success',
                    'message' => 'Image saved successfully',
                    'file_name' => $file_name
                ]);
            } else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Failed to write the file to the server folder.'
                ]);
            }


        }
    }


}