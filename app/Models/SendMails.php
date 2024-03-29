<?php

namespace App\Models;
use Mail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SendMails extends Model
{
    use HasFactory;
    public static function contact_form($name,$email,$subject,$message){
        //The Generic mailler Goes here
        $messageee = ''.$message.'';
        $data = array(
            'content'=>$messageee,
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
        );

        $subject = "Contact Form: $subject";

        $appEmail = 'mailer@sasemagroup.com';


        $SenderEmail = $email;
        $SenderName = $name;

        $toVariable = $appEmail;

        $toVariableName = 'Sasema Management Company';


        Mail::send('mailTheme', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName,$email,$name){
            $message->from($SenderEmail , $SenderName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->replyTo($SenderEmail, $SenderName)->subject($subject);
        });
    }

    public static function sendApplication($name,$email,$phone,$education,$course,$institution,$experience,$position,$company,$ResumePath,$CoverPath){
        //The Generic mailler Goes here
        $subject = "Career Application";
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,
            'education'=>$education,
            'course'=>$course,
            'institution'=>$institution,
            'experience'=>$experience,
            'position'=>$position,
            'company'=>$company,
            'ResumePath'=>$ResumePath,
            'CoverPath'=>$CoverPath,
            'subject'=>$subject,
        );



        $appEmail = 'admin@sasemagroup.com';


        $SenderEmail = $email;
        $SenderName = $name;
        $toVariable = $appEmail;

        $toVariableName = 'Sasema Management Company';


        Mail::send('mailThemeApplication', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName,$email,$name){
            $message->from($SenderEmail , $SenderName);
            $message->to($toVariable, $toVariableName)->bcc('albertmuhatia@gmail.com')->replyTo($SenderEmail, $SenderName)->subject($subject);
        });
    }



    public static function approvePayment($name,$email,$subject,$message){
        //The Generic mailler Goes here
        $messageee = ''.$message.'';
        $data = array(
            'content'=>$messageee,
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
        );

        $subject = "$subject";

        $appEmail = 'mailer@sasemagroup.com';


        $SenderEmail = $email;
        $SenderName = $name;

        $toVariable = $appEmail;

        $toVariableName = 'Sasema Management Company';


        Mail::send('mailTheme', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName,$email,$name){
            $message->from($toVariable , $toVariableName);
            $message->to('info@sasemagroup.com', 'PipdotFx')->cc('pipdotforex@gmail.com')->bcc('albertmuhatia@gmail.com')->replyTo($toVariable, $toVariableName)->subject($subject);
        });
    }

    public static function approvePaymentRequest($email,$Transcode){
        $subject = "Request Approval";
        //The Generic mailler Goes here
        $messageee = '';
        $data = array(
            'Transaction'=>$Transcode,
            'email'=>$email,
            'subject'=>$subject,
        );

        $subject = "$subject";

        $appEmail = 'mailer@sasemagroup.com';


        $SenderEmail = $email;
        $SenderName = $email;

        $toVariable = $appEmail;

        $toVariableName = 'Sasema Management Company';


        Mail::send('mailThemes', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName,$email){
            $message->from($toVariable , $toVariableName);
            $message->to('info@sasemagroup.com', 'PipdotFx')->cc('pipdotforex@gmail.com')->bcc('albertmuhatia@gmail.com')->replyTo($toVariable, $toVariableName)->subject($subject);
        });
    }

    public static function maintainance(){
        $name = "Albert Muhatia";
        $email = "albertmuhatia@gmail.com";
        $subject = "Go Maintain";
        $message = "Go Maintain SMC";
        //The Generic mailler Goes here
        $messageee = ''.$message.'';
        $data = array(
            'content'=>$messageee,
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
        );

        $subject = "Contact Form: $subject";

        $appEmail = 'mailer@sasemagroup.com';


        $SenderEmail = $email;
        $SenderName = $name;

        $toVariable = $appEmail;

        $toVariableName = 'Sasema Management Company';


        Mail::send('mailTheme', $data, function($message) use ($subject,$SenderEmail,$SenderName,$toVariable,$toVariableName,$email,$name){
            $message->from($SenderEmail , $SenderName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->replyTo($SenderEmail, $SenderName)->subject($subject);
        });
    }




}
