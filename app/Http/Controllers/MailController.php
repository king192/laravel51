<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
class MailController extends Controller
{
     public function send()
    {
        $name = '学院君';
        $flag = Mail::send('mail.test',['name'=>$name],function($message){
        	// $message -> from('15626519209@163.com','hello');
            $to = '1434970057@qq.com';
            $message ->to($to)->subject('测试邮件');
        });
        if($flag){
            echo '发送邮件成功，请查收！';
        }else{
            echo '发送邮件失败，请重试！';
        }
    }

    public function zhanghu(){
    	echo base64_encode('15626519209@163.com');
    	echo '<br/>';
    	echo base64_encode('ilovexhq2016');
    }
}
