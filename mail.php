<?php session_start();


require 'Mail/PHPMailerAutoload.html';

   $firstname = $_REQUEST['name'] ;
 $email = $_REQUEST['email'] ;
 $message = $_REQUEST['message'] ;


$mail = new PHPMailer;
                                 
$mail->isHTML(true);
   
$mail->setFrom($email,$firstname);

$mail->addAddress('mithunmanohar89@gmail.com', 'I Mithun'); 

$mail->Subject = 'Contact Enquiry - I Mithun website';

$mail->Body    = '
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>I Mithun</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body style="width: 100%; margin: 0; padding: 0;">

<div class="">
  <div class="aHl"></div>
  <div id=":1py" tabindex="-1"></div>
  <div id=":1q9" class="ii gt">
    <div id=":1qa" class="a3s aXjCH msg-1454359957100666214">
      <u></u>

      <div style="outline:none;margin:0;padding:0" bgcolor="#F4F4F4">

        <table width="100%" cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214outer_wrapper_table" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:auto!important;margin:0;padding:0" bgcolor="#F4F4F4">
          <tbody>
            <tr>

              <td style="outline:none;width:100%;margin:0;padding:0" align="left" valign="top">

                <center>

                  <table width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214inner_wrapper_table m_-1454359957100666214table_centered" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;max-width:800px;margin:0 auto;padding:0">
                    <tbody>
                      <tr>
                        <td width="600" class="m_-1454359957100666214inner_wrapper_td" style="outline:none;width:600px;min-width:600px;margin:0;padding:0" align="left" valign="top">

					  </td>
					</tr>
				  </tbody>
				</table>

			<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214main_content_outer_wrapper_table" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0" bgcolor="#FFFFFF">
			  <tbody>
				<tr>
				  <td style="outline:none;width:100%;margin:0;padding:0" align="left" valign="top">
					<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214table_full_width" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">
					  <tbody>
						<tr>
						  <td class="m_-1454359957100666214padded_mobile m_-1454359957100666214main_content_inner_wrapper_td" style="outline:none;width:100%;margin:0;padding:0" align="left" valign="top">
							<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214table_full_width" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">

							
							</table>
						  </td>
						</tr>
					  </tbody>
					</table>
				  </td>
				</tr>
			  </tbody>
			</table>


		<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214main_content_outer_wrapper_table" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0" bgcolor="#FFFFFF">
		  <tbody>
			<tr>
			  <td style="outline:none;width:100%;margin:0;padding:0" align="left" valign="top">
				<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214table_full_width" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">
				  <tbody>
					
					<tr style="width: 100%;">
					  <td class="m_-1454359957100666214padded_mobile m_-1454359957100666214main_content_inner_wrapper_td" style="outline:none;width:100%;margin:0;padding: 30px 50px;" align="left" valign="top">
						<table cellspacing="0" cellpadding="10" border="" class="m_-1454359957100666214table_full_width" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0;border: solid 1px #d4d4d4;font-family: Montserrat, sans-serif;">

						  <tbody>
							<tr style="width: 100%;">
							  <td style="width: 50%;">
								<span style="width: 100%;float:left;line-height: 25px;color: #454545;font-weight: 600;font-size: 13px;">Name</span>
							  </td>
							  <td style="width: 50%;">
								<span style="width: 100%;float:left;line-height: 25px;color: #454545;font-weight: 500;font-size: 13px;">'.$firstname.'</span>
							  </td>
							</tr>
							<tr style="width: 100%;">
							  <td style="width: 50%;">
								<span style="width: 100%;float:left;line-height: 25px;color: #454545;font-weight: 600;font-size: 13px;">Email</span>
							  </td>
							  <td style="width: 50%;">
								<span style="width: 100%;float:left;line-height: 25px;color: #454545;font-weight: 500;font-size: 13px;">'. $email .'</span>
							  </td>
							</tr>
							  
							

							
						   
							<tr style="width: 100%;">
							  <td style="width: 50%;">
								<span style="width: 100%;float:left;line-height: 25px;color: #454545;font-weight: 600;font-size: 13px;">Message </span>
							  </td>
							  <td style="width: 50%;">
								<span style="width: 100%;float:left;line-height: 25px;color: #454545;font-weight: 500;font-size: 13px;">'.$message.'</span>
							  </td>
							</tr>
						   
						
						   
						
						  </tbody>
						</table>
					  </td>
					</tr>
				  </tbody>
				</table>
			  </td>
			</tr>
		  </tbody>
		</table>



		<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214table_full_width" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">
		  <tbody>
			<tr>
			  <td class="m_-1454359957100666214add_our_email_outer_wrapper_td" style="outline:none;width:100%;margin:0;padding:2px 0 0" align="left" valign="top">

				<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214add_our_email_wrapper_table" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0" bgcolor="#FFFFFF">
				  <tbody>
					<tr>
					  <td class="m_-1454359957100666214padded_mobile m_-1454359957100666214add_our_email_inner_wrapper_td" style="outline:none;width:100%;margin:0;padding:0 20px" align="left" valign="top">

						<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214table_full_width" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">
						  <tbody>
							<tr>
							  <td class="m_-1454359957100666214add_our_email_td" style="outline:none;width:100%;margin:0;padding:25px 0;" align="center" valign="top">
								<p style="outline:none;margin:0;padding:0;color:#fcbd12;font-family:Montserrat, sans-serif;font-size:16px;font-style:normal;font-weight:800;line-height:24px;word-spacing:0;text-transform: uppercase;letter-spacing: 0.8px;"> <span style="color: #000;">I Mithun</span></p>
							  </td>
							</tr>
						  </tbody>
						</table>

					  </td>
					</tr>
				  </tbody>
				</table>

			  </td>
			</tr>
		  </tbody>
		</table>

		<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214table_full_width" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">
		  <tbody>
			<tr>
			  <td class="m_-1454359957100666214add_our_email_outer_wrapper_td" style="outline:none;width:100%;margin:0;padding:2px 0 0" align="left" valign="top">

				<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214add_our_email_wrapper_table" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0" bgcolor="#FFFFFF">
				  <tbody>
					<tr>
					  <td class="m_-1454359957100666214padded_mobile m_-1454359957100666214add_our_email_inner_wrapper_td" style="outline:none;width:100%;margin:0;padding:0 20px" align="left" valign="top">

						<table cellspacing="0" cellpadding="0" border="0" class="m_-1454359957100666214table_full_width" style="outline:none;border-collapse:collapse;border-spacing:0;table-layout:fixed;width:100%;margin:0;padding:0">
						  <tbody>
							<tr>
							  <td class="m_-1454359957100666214add_our_email_td" style="outline:none;width:100%;margin:0;padding:7px 0;" align="center" valign="top">
								
							  </td>
							</tr>
						  </tbody>
						</table>

					  </td>
					</tr>
				  </tbody>
				</table>

			  </td>
			</tr>
		  </tbody>
		</table>

				</td>
			  </tr>
			</tbody>
		  </table>
		  </table>

		</center>
	  </td>
	</tr>
  </tbody>
</table>


      </div>

    </div>
  </div>
</div>

</body>
</html>';

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

           
if(!$mail->send()) {
   
   echo 0;
} 
else {
   
    
   echo 1;
}


 
?>