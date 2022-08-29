<?
  // include "common.php";
  if(frmp("submit-contact")) {
    $source = frmp("source");
    $name = frmp("name");
    $phone = frmp("phone");
    $service = frmp("service");
    $address = frmp("address");
    $message = frmp("message");
   

    if($name==""){$error.=epfx($error,"Please enter your name.");}
    if($phone==""){$error.=epfx($error,"Please enter your phone number.");}
    if($service==""){$error.=epfx($error,"Please enter your service.");}
    if($address==""){$error.=epfx($error,"Please enter your address.");}
    if($message==""){$error.=epfx($error,"Please enter your message.");}

    if($error=="") {
      $recipient = $site_email;
      $mail_heading="Plumber Service Enquiry (".sdtf(now()).")";
      $msg="";

      $msg.="<html><head><style>body {line-height: 1.50;font:300 14px/1.50 'Helvetica Neue',Helvetica,Arial,sans-serif;color:#222;}</style></head>".
        "<body><table bgcolor='#F1F1F1' width='100%' border='0'> <tr> <td height='399'>".
            "<table width='70%' border='0' align='center' bgcolor='#FFF' style='padding:40px;'>".
                "<tr> <td align='left'><h1 style='color:#0071A2;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;'>".$mail_heading."</h1></td> </tr>".
                "<tr> <td style='border-top:2px solid #0071A2'><br>".
                    "You have recieved an enquiry from ".$name." the details are below.<br><br>".
                    "<strong>Source:</strong><br> ".$source." <br><br>".
                    "<strong>Name:</strong><br> ".$name." <br><br>".
                    "<strong>Phone:</strong><br> ".$phone." <br><br>".
                    "<strong>service:</strong><br> ".$service." <br><br>".
                    "<strong>address:</strong><br> ".$address." <br><br>".
                    "<strong>Message:</strong><br> ".lnbr($message)." <br><br>".
                    "</td></tr>".
                "</table></td> </tr>".
            "</table>".
        "</body></html>";

        // echo $msg;
        ini_set('sendmail_from',$mailsender);
        $result = mail (
            $recipient,
            $mail_heading,
            $msg,
            "From: ".$mailsender."\r\nBcc:xuanzai989830@gmail.com\nMIME-Version: 1.0\nContent-type: text/html\nX-Mailer: PHP 5.x"
            // "From: ".$mailsender."\r\nBcc:info@rubysoft.com.my\nMIME-Version: 1.0\nContent-type: text/html\nX-Mailer: PHP 5.x"
        );
        ini_restore('sendmail_from');

        $name="";
        $phone="";
        $service="";
        $address="";
        $message="";
        $msg="";

        echo "<script>alert('Your enquiry has been sent. We will get back to you shortly.')</script>";
        $enquiry_success=1;
    }
  }
  // $source=trim($source);
    // $source=strtolower($source);
    // $source=str_replace(" ","-",$source);
  // $source=$source.".html";
  // go($source);
?>
