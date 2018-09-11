<?php
$lang_array = array(
    "media_outfit_exist_error" => "This media outfit already exist",
    "email_exist_error" => "Email doesnt exist in our record",
    "email_sent_successfully" => "An email has been sent to your mail address, please access it to reset your password",
    "password_reset_successfully" =>  "Your password has been reset successfully you can <a href='user_login.php'>Login here</a>",
    "access_link" =>  "Please access this page from the link sent to your email address or contact your admin",
    "password_change" =>  "Your password has been changed successfully",
    "password_change_error" =>  "Error while changing your password",

    "email_sent_error" => "Error while ending your email , please try again",
    "registeration_mail_subject" => "Media Outfit Registeration Confirmation",
    "registeration_mail_content" => "Your mediapay account has been created, please follow the link below to activate your account 
        <br>       
        " . SITE_URL . "/activation.php?new-outfit=" . base64_encode('d') . "&contact-person-email=" . base64_encode('d') . "",
    "media_outfit_registeration_successful" => "Your mediapay registeration is successful an email has been sent to the contact person email for confirmation, <a href='index.php' >click here to proceed to homepage</a>",
    "account_activation" => "Mediapay account activation successful,<a href='login.php' >you can now login here</a>",
    "account_activation_failure" => "please access this page through the link sent to your email address or <a href='index.php' >click here to proceed to homepage</a>",
    "activation_exp_date" => "This link has expired, please try click here to resend",
    "add_ads_error"=>"Error while adding this Advert to your company",
    "add_ads_success"=>"Advert successfully saved",
    "add_peak_periods_failure"=>"Error while adding this peak period",
    "add_peak_periods_success"=>"Peak Period Successfully saved",
    "update_peak_periods_failure"=>"Error while updating this peak period",
    "update_peak_periods_success"=>"Peak Period Successfully updated",
    "update_ads_success"=>"Advert successfully updated",
    "update_ads_failure"=>"Error while updating advert",
    "ads_availabe_success"=>"Advert successfully added",
    "ads_availabe_failure"=>"Error while adding add",
    "update_ads_avail_s"=>"Advert successfully updated",
    "update_ads_avail_f"=>"Advert Failed to update",
    "ads_elec_avail_success"=>"Additional services added successfully",
    "ads_elec_avail_failure"=>"Error trying to add additional services",
    "update_elec_avail_success"=>"Additional services saved successfully",
    "update_elec_avail_failure"=>"Aditional services didn't save successfully, retry",
    "serv_price_success"=>"Service price set successfully",
    "serv_price_failure"=>"Failed to set service price",
    "update_bill_board_success"  => "Board updated successfully",
    "update_bill_board_failure" => "Error updating board",
    "bill_board_success"=>"Board added successfully",
    "bill_board_failure" => "Board adding failed",
    "display_ad_serv" => "New additional services created",
    "display_ad_serv_failure" => "Failed  to create new additional services",
    "ads_display_avail_success"=>"Display successfully added",
    "ads_display_avail_failure"=>"Display adding failed ",
    "update_display_avail_success"=>"Display updated successfully",
    "update_display_avail_failure" => "Error while updating display",
    "display_serv_type_price_success" => "Display price saved successfully",
    "display_serv_type_price_fail" => "Error while attempting to save display success",
    "update_display_serv_type_price_success" => "Display price updated successfully",
    "update_display_serv_type_price_fail" => "Error while attempting to update price",
     "program_update_success" => "Program details updated successfully",
     "program_update_failure" => "Error updating the Program details",
     "cancellation_policy" => "Cancellation policy set successful",
     "cancellation_policy_fail" => "Error setting cancellation policy",
     "update_cancellation_policy" => "Cancellation settings updated",
     "update_cancellation_policy_fail" => "Error while updating cancellation",
     "enduser_signup_success" => "Registration successful, A mail has been sent to the email you provided to activate your account",
     "enduser_signup_exist" => "User already exist please use the login link to access your account",
     "enduser_signup_failure" => "An error occured while sending you an email please contact the admin ",
     "enduser_registration_mail_subject" => "User Registeration Confirmation",
     "enduser_registration_mail_head_content" => "Your user mediapay account has been created, please follow the link below to activate your account 
         <br>       
         " . SITE_URL . "/user_activation.php?activation_code=", 
    "end_user_activation_exp" => "The link you entered has been expired you are required to attempt registration again, thanks",
    "end_account_activation" => "Account activation successful, You can now login here",
    "end_activation_failure" => "Please access the page from the link provided in mail sent to you, thanks",
    "ads_type_success" => "Ads successfully added",
    "ads_type_failure" => "Ads failed to add",
    "display_category_success" => "Display category added successfully",
    "display_category_failure" => "Error while Adding Display category"
)


?>