<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends MX_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->module('templates');
        $this->load->model('Administrator_model');
    }

    public function index() 
    {
        if($this->session->userdata('is_logged_in')) {
            redirect('dashboard');
        } 
        $this->templates->login();
    }
    
    public function login_credential() 
    {
        $username = htmlentities($this->input->post('username'));
        $password = $this->input->post('password');

        $encryptPassword = $this->encrypt($password);

        $admin = $this->Administrator_model->check_login($username, $encryptPassword);
        if ($admin) {
            $id = $admin->id;

            // Load PHPMailer library
            $this->load->library('phpmailer_lib');

            // PHPMailer object
            $mail = $this->phpmailer_lib->load();

            // SMTP configuration
            $mail->isSMTP();
            $mail->Host     = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'icslegaladvice@gmail.com';
            $mail->Password = 'omgmksqtxrmfrkzl';
            $mail->SMTPSecure = 'tls';
            $mail->Port     = 587;

            $mail->setFrom('icslegaladvice@gmail.com', 'Tech ICS');
            $mail->addReplyTo('info@techics.com', 'Tech ICS');

            // Add a recipient
            if($id == 1) {
                $mail->addAddress('sk@sk-associates.org');
            } else {
                $mail->addAddress('shajjad.miah@sk-associates.org');
                // $mail->addAddress('rh@sk-associates.org');
            }

            // Email subject
            $mail->Subject = 'OTP for login in Global Controller';

            // Set email format to HTML
            $mail->isHTML(true);

            // Email body content
            $six_digit_random_number = random_int(100000, 999999);
            $userName = $admin->fname . ' '. $admin->lname;

            $mailContent = '
                <!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
                <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><!--[if gte mso 9]><xml>
                <o:OfficeDocumentSettings>
                    <o:AllowPNG/>
                    <o:PixelsPerInch>96</o:PixelsPerInch>
                </o:OfficeDocumentSettings>
                </xml>
                <![endif]-->
                <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="x-apple-disable-message-reformatting">
                <!--[if !mso]><!--><meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
                <title></title>
              
                <style type="text/css">
                  table, td { color: #000000; } a { color: #de0000; text-decoration: underline; } @media (max-width: 480px) { #u_content_image_1 .v-src-width { width: 714px !important; } #u_content_image_1 .v-src-max-width { max-width: 54% !important; } #u_content_image_2 .v-src-width { width: 800px !important; } #u_content_image_2 .v-src-max-width { max-width: 92% !important; } #u_content_heading_1 .v-text-align { text-align: center !important; } #u_content_heading_2 .v-text-align { text-align: center !important; } #u_content_heading_2 .v-line-height { line-height: 120% !important; } #u_content_text_1 .v-text-align { text-align: center !important; } #u_content_button_1 .v-size-width { width: 67% !important; } #u_content_image_3 .v-src-width { width: 800px !important; } #u_content_image_3 .v-src-max-width { max-width: 33% !important; } #u_content_image_3 .v-text-align { text-align: center !important; } #u_content_heading_3 .v-container-padding-padding { padding: 20px 10px 0px !important; } #u_content_heading_3 .v-text-align { text-align: center !important; } #u_content_text_2 .v-container-padding-padding { padding: 4px 10px 40px !important; } #u_content_text_2 .v-text-align { text-align: center !important; } }
                    @media only screen and (min-width: 570px) {
                    .u-row {
                        width: 550px !important;
                    }
                    .u-row .u-col {
                        vertical-align: top;
                    }
                    
                    .u-row .u-col-36p18 {
                        width: 198.99px !important;
                    }
                    
                    .u-row .u-col-63p82 {
                        width: 351.01px !important;
                    }
                    
                    .u-row .u-col-100 {
                        width: 550px !important;
                    }
                    
                    }
            
                    @media (max-width: 570px) {
                    .u-row-container {
                        max-width: 100% !important;
                        padding-left: 0px !important;
                        padding-right: 0px !important;
                    }
                    .u-row .u-col {
                        min-width: 320px !important;
                        max-width: 100% !important;
                        display: block !important;
                    }
                    .u-row {
                        width: calc(100% - 40px) !important;
                    }
                    .u-col {
                        width: 100% !important;
                    }
                    .u-col > div {
                        margin: 0 auto;
                    }
                    }
                    body {
                    margin: 0;
                    padding: 0;
                    }
                    
                    table,
                    tr,
                    td {
                    vertical-align: top;
                    border-collapse: collapse;
                    }
                    
                    p {
                    margin: 0;
                    }
                    
                    .ie-container table,
                    .mso-container table {
                    table-layout: fixed;
                    }
                    
                    * {
                    line-height: inherit;
                    }
                    
                    a[x-apple-data-detectors="true"] {
                    color: inherit !important;
                    text-decoration: none !important;
                    }
            
                 </style>
              
                    <!--[if !mso]><!--><link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet" type="text/css"><!--<![endif]-->
                    
                    </head>
                    
                    <body class="clean-body u_body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #0e0a25;color: #000000">
                    <!--[if IE]><div class="ie-container"><![endif]-->
                    <!--[if mso]><div class="mso-container"><![endif]-->
                    <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #0e0a25;width:100%" cellpadding="0" cellspacing="0">
                    <tbody>
                    <tr style="vertical-align: top">
                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #0e0a25;"><![endif]-->
                        
                    
                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                        <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: transparent;"><![endif]-->
                        
                    <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                    <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                    <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                    <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                    
                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                        <tbody>
                        <tr style="vertical-align: top">
                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                            <span>&#160;</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                    </div>
                    </div>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                        <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: #ffffff;"><![endif]-->
                        
                    <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                    <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                    <div style="width: 100% !important;">
                    <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;"><!--<![endif]-->
                    
                    <table id="u_content_image_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:50px 10px 27px 30px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">
                        <a href="https://techics.com" target="_blank">
                        <img align="center" border="0" src="https://www.techics.com/uploads/software_settings/Tech-ICS-logo.png" alt="Logo" title="Logo" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 38%;max-width: 193.8px;" width="193.8" class="v-src-width v-src-max-width"/>
                        </a>
                        </td>
                    </tr>
                    </table>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="92%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 2px dashed #dfdada;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                        <tbody>
                        <tr style="vertical-align: top">
                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                            <span>&#160;</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                    </div>
                    </div>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                        <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: #ffffff;"><![endif]-->
                        
                    <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                    <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                    <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                    <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                    
                    <table id="u_content_image_2" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="center">
                        
                        <img align="center" border="0" src="https://cdn.templates.unlayer.com/assets/1636511813524-dsd.png" alt="Hero Image" title="Hero Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 90%;max-width: 495px;" width="495" class="v-src-width v-src-max-width"/>
                        
                        </td>
                    </tr>
                    </table>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <table id="u_content_heading_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:41px 30px 5px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <h4 class="v-text-align v-line-height" style="margin: 0px; color: #34495e; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: tahoma,arial,helvetica,sans-serif; font-size: 19px;">
                        You are one step away
                    </h4>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <table id="u_content_heading_2" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:1px 10px 25px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                            <h1 class="v-text-align v-line-height" style="margin: 0px; color: #022835; line-height: 100%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: "Cabin",sans-serif; font-size: 48px;">
                            <strong>Verify your access</strong>
                            </h1>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <table id="u_content_heading_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:25px 30px 5px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                            <h4 class="v-text-align v-line-height" style="margin: 0px; color: #34495e; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: tahoma,arial,helvetica,sans-serif; font-size: 19px;">
                            Hello <b>'. $userName .'</b>
                            </h4>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <table id="u_content_text_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 44px 35px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                            <div class="v-text-align v-line-height" style="color: #34495e; line-height: 180%; text-align: center; word-wrap: break-word;">
                            <p style="font-size: 14px; line-height: 180%;"><span style="font-family: Cabin, sans-serif; font-size: 16px; line-height: 28.8px;">
                                You are requested to enter the following code to Sign in into <b>Global Controller</b>. Please Enter the code in 5 minutes.
                            </span></p>
                            </div>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <table id="u_content_button_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:20px 10px 70px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <div class="v-text-align" align="center">
                    <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:arial,helvetica,sans-serif;"><tr><td class="v-text-align" style="font-family:arial,helvetica,sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="https://techics.com" style="height:63px; v-text-anchor:middle; width:243px;" arcsize="47.5%" stroke="f" fillcolor="#de0000"><w:anchorlock/><center style="color:#FFFFFF;font-family:arial,helvetica,sans-serif;"><![endif]-->
                        <a href="javascript::" class="v-size-width" style="box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #de0000; border-radius: 30px;-webkit-border-radius: 30px; -moz-border-radius: 30px; width:46%; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;border-top-color: #CCC; border-top-style: solid; border-top-width: 0px; border-left-color: #CCC; border-left-style: solid; border-left-width: 0px; border-right-color: #CCC; border-right-style: solid; border-right-width: 0px; border-bottom-color: #bdbbbb; border-bottom-style: solid; border-bottom-width: 4px;">
                        <span class="v-line-height" style="display:block;padding:23px 0px 22px;line-height:120%;"><strong><span style="font-size: 45px; line-height: 19.2px; font-family: Cabin, sans-serif;">'. $six_digit_random_number .'</span></strong></span>
                        </a>
                    <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
                    </div>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                    </div>
                    </div>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                        <div style="border-collapse: collapse;display: table;width: 100%;background-image: url("https://cdn.templates.unlayer.com/assets/1636516116825-sd.png");background-repeat: no-repeat;background-position: center top;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-image: url("https://cdn.templates.unlayer.com/assets/1636516116825-sd.png");background-repeat: no-repeat;background-position: center top;background-color: #ffffff;"><![endif]-->
                        
                    <!--[if (mso)|(IE)]><td align="center" width="199" style="width: 199px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                    <div class="u-col u-col-36p18" style="max-width: 320px;min-width: 199px;display: table-cell;vertical-align: top;">
                    <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                    <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                    
                    <table id="u_content_image_3" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:45px 30px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td class="v-text-align" style="padding-right: 0px;padding-left: 0px;" align="right">
                        
                        <img align="right" border="0" src="https://cdn.templates.unlayer.com/assets/1636515537691-25-01.png" alt="icon" title="icon" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 42%;max-width: 66.78px;" width="66.78" class="v-src-width v-src-max-width"/>
                        
                        </td>
                    </tr>
                    </table>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                    </div>
                    </div>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                    <!--[if (mso)|(IE)]><td align="center" width="351" style="width: 351px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                    <div class="u-col u-col-63p82" style="max-width: 320px;min-width: 351px;display: table-cell;vertical-align: top;">
                    <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                    <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                    
                    <table id="u_content_heading_3" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:35px 10px 0px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <h1 class="v-text-align v-line-height" style="margin: 0px; color: #022835; line-height: 140%; text-align: left; word-wrap: break-word; font-weight: normal; font-family: tahoma,arial,helvetica,sans-serif; font-size: 32px;">
                        Have a Question?
                    </h1>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <table id="u_content_text_2" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:4px 10px 35px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <div class="v-text-align v-line-height" style="color: #de0000; line-height: 140%; text-align: left; word-wrap: break-word;">
                        <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;"><a rel="noopener" href="https://support.techics.com/" target="_blank">Reach Out To Our Team</a></span></p>
                    </div>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                    </div>
                    </div>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                        <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: #ffffff;"><![endif]-->
                        
                    <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                    <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                    <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                    <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                    
                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:50px 15px 21px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #efeff1;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                        <tbody>
                        <tr style="vertical-align: top">
                            <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                            <span>&#160;</span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:30px 10px 11px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <div align="center">
                    <div style="display: table; max-width:140px;">
                    <!--[if (mso)|(IE)]><table width="140" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:140px;"><tr><![endif]-->
                    
                        
                        <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                        <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
                        <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                            <a href="https://www.linkedin.com/in/techics/" title="LinkedIn" target="_blank">
                            <img src="https://cdn.tools.unlayer.com/social/icons/circle-black/linkedin.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                            </a>
                        </td></tr>
                        </tbody></table>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        
                        <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                        <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
                        <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                            <a href="https://www.facebook.com/TechICSDigital/" title="Email" target="_blank">
                            <img src="https://cdn.tools.unlayer.com/social/icons/circle-black/email.png" alt="Email" title="Email" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                            </a>
                        </td></tr>
                        </tbody></table>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        
                        <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
                        <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                        <tbody><tr style="vertical-align: top"><td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                            <a href="https://www.instagram.com/techics/" title="Instagram" target="_blank">
                            <img src="https://cdn.tools.unlayer.com/social/icons/circle-black/instagram.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                            </a>
                        </td></tr>
                        </tbody></table>
                        <!--[if (mso)|(IE)]></td><![endif]-->
                        
                        
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                    </div>
                    </div>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 66px 45px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <div class="v-text-align v-line-height" style="color: #9e9d9d; line-height: 180%; text-align: center; word-wrap: break-word;">
                        <p style="font-size: 14px; line-height: 180%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 25.2px;">You\'re receiving this email as you want to signed up Global Controller.</span></p>
                    <p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
                    <p style="font-size: 14px; line-height: 180%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 25.2px;">If this wasn\'t you, please ignore this email or please let us know <a href="https://support.techics.com" target="_blank">here</a>. | Tech ICS Suite 11, City Business Centre, Lower Road, London SE16 2XB</span></p>
                    </div>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                    </div>
                    </div>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    <div class="u-row-container" style="padding: 0px;background-color: transparent">
                    <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                        <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: transparent;"><![endif]-->
                        
                    <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;" valign="top"><![endif]-->
                    <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                    <div style="width: 100% !important;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;">
                    <!--[if (!mso)&(!IE)]><!--><div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;border-radius: 0px;-webkit-border-radius: 0px; -moz-border-radius: 0px;"><!--<![endif]-->
                    
                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tbody>
                        <tr>
                        <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:20px 10px;font-family:arial,helvetica,sans-serif;" align="left">
                            
                    <div class="v-text-align v-line-height" style="color: #b8b8b8; line-height: 140%; text-align: center; word-wrap: break-word;">
                        <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Cabin, sans-serif; font-size: 14px; line-height: 19.6px;">&copy; '. date("Y") .' Company. All Rights Reserved</span></p>
                    </div>
                    
                        </td>
                        </tr>
                    </tbody>
                    </table>
                    
                    <!--[if (!mso)&(!IE)]><!--></div><!--<![endif]-->
                    </div>
                    </div>
                    <!--[if (mso)|(IE)]></td><![endif]-->
                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                        </div>
                    </div>
                    </div>
                    
                    
                        <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                        </td>
                    </tr>
                    </tbody>
                    </table>
                    <!--[if mso]></div><![endif]-->
                    <!--[if IE]></div><![endif]-->
                    </body>
                    
                    </html> ';
            $mail->Body = $mailContent;

            // Send email
            if(!$mail->send()){
                // echo 'Message could not be sent.';
                // echo 'Mailer Error: ' . $mail->ErrorInfo;
                echo json_encode(['status' => 0, 'message' => 'Email Error: '. $mail->ErrorInfo]);
            }

            $updateData = [
                'email_timestamp' => time(),
                'code' => $six_digit_random_number
            ];

            $this->Administrator_model->update($updateData, $id);


            // $updateData = [
            //     'last_activity' => time(),
            //     'is_online' => 1
            // ];

            // $this->Administrator_model->update($updateData, $id);

            // $data = array(
            //     'username' => $admin->username,
            //     'user_type' => $admin->usertype,
            //     'id' => $admin->id,
            //     'is_logged_in' => true
            // );

            $data = array(
                'tempId' => $admin->id 
            );
            $this->session->set_userdata($data);

            $json = json_encode(['status' => 1, 'message' => 'Process Completed Successfully.', 'goto' => base_url().'verify']);
        } else {
            $json = json_encode(['status' => 0, 'message' => 'Incorrect Username Or Password']);
        }
        echo $json;exit();
    }

    public function verify_page() {
        if(isset($_SESSION['tempId']) && $_SESSION['tempId'] != '') {
            $id = $_SESSION['tempId'];

            $admin = $this->Administrator_model->get($id);
            if(time() - $admin->email_timestamp > 300) { 
                echo"<script>alert('Sorry. Time is Over');</script>";
                $updateData = [
                    'email_timestamp' => null,
                    'code' => null
                ];

                $this->db->update('techics_users',$updateData,array('id' => $id));
                
				session_set_cookie_params(7200,"/");
				session_start();

                $this->session->unset_userdata('user_type');
                $this->session->unset_userdata('id');

                redirect('/administrator', 'refresh');
            } else {
                $this->templates->verify();
            }
        } else {
            redirect('/administrator');
        }
    }

    public function verify_credential() {
        $otp = $this->input->post('otp');
        
        $id = $_SESSION['tempId'];
        $admin = $this->Administrator_model->get($id);
        if(time() - $admin->email_timestamp > 300) { 

            $updateData = [
                'email_timestamp' => null,
                'code' => null
            ];

            $this->db->update('techics_users',$updateData,array('id' => $id));
            
            $this->session->unset_userdata('user_type');
            $this->session->unset_userdata('tempId');

            echo json_encode(['status' => 0, 'message' => 'Sorry. Time is Over. Try Again', 'goto' => base_url().'administrator']);
            exit();
        } else {
            
            if($admin->code !== $otp) {
                echo json_encode(['status' => 0, 'message' => 'Sorry. Invalid OTP given']);
                exit();
            } else {

                $updateData = [
                    'email_timestamp' => null,
                    'code' => null
                ];
                $this->db->update('techics_users',$updateData,array('id' => $id));

                $updateDataOne = [
                    'last_activity' => time(),
                    'is_online' => 1
                ];

                $this->Administrator_model->update($updateDataOne, $id);

                $data = array(
                    'username' => $admin->username,
                    'user_type' => $admin->usertype,
                    'id' => $admin->id,
                    'is_logged_in' => true
                );

                $this->session->set_userdata($data);
                echo json_encode(['status' => 1, 'message' => 'Logged In Successfully.', 'goto' => base_url().'dashboard']);
                exit();
            }
        }
    }

    public function logout() 
    {
        $userId = $_SESSION['id'];

        $updateData = [
            'last_activity' => null,
            'is_online' => 0
        ];

        $this->Administrator_model->update($updateData, $userId);

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('usertype');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('is_logged_in');
        echo json_encode(['status' => 1, 'message' => 'Logged Out Successfully', 'goto' => base_url()]);
    }

    private function encrypt($string, $key=5) 
    {
        $result = '';
        for($i=0, $k= strlen($string); $i<$k; $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key))-1, 1);
            $char = chr(ord($char)+ord($keychar));
            $result .= $char;
        }
        return base64_encode($result);
    }

    public function batchLogOut($id) {
        $updateData = [
            'last_activity' => null,
            'is_online' => 0
        ];

        $this->Administrator_model->update($updateData, $id);
        echo json_encode(['status' => 1, 'message' => 'Logged Out Successfully', 'goto' => site_url('admin/users')]);
    }

}
