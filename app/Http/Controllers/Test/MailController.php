<?php

namespace App\Http\Controllers\Test;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\myclass\Test;

class MailController extends Controller
{
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function sendEmailReminder()
    {
        $user = User::findOrFail(1);

        Mail::send('mail/activemail', ['uid' => '1','activationcode' => '12efsd'], function ($m) use ($user) {
            // $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
    }
    /**
     * [test description]
     * @return [type] [description]
     */
    public function test(){
    	$user = User::findOrFail(1);
    	var_dump($user->name);
    }
    public function send(){
    	// header('content-type:text/html;charset=utf-8');
	    $data = ['email'=>'1434970057@qq.com', 'name'=>'xhq', 'uid'=>'1', 'activationcode'=>'123456'];
		Mail::send('mail/activemail', $data, function($message) use($data)
		{
			// $message->from('13510507252@163.com','Your ');
		    $message->to($data['email'], $data['name'])->subject('欢迎注册我们的网站，请激活您的账号！');
		});
	}
	public function info(){
		echo phpinfo();
	}
    public function tt(){
        // echo $this;
        echo 'hello';
    }
    public function getIndex(){
        echo 'index';
        echo $this;
        $test = new Test();
        $test();
        $test->test();
    }
    public function show(){
        echo 'show';
    }
    public function __tostring(){
        return 'this';
    }
}