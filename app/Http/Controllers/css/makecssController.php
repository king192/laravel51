<?php

namespace App\Http\Controllers\css;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
set_time_limit(0);
class makecssController extends Controller
{
    public function getTest(){
        echo 'hello';
    }
    /**
     * 从css中获取相应的属性和值
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        // $file = ROOT.'/storage/css/css/css.css';
        $file = ROOT.'/storage/css/css/all.css';
        // $file = ROOT.'server.php';
        if(!is_file($file)){
            echo $file;
            exit('no such file');
        }
        $con = file_get_contents($file);
        preg_match_all('/[^\{\}]*(ul|span)\s{0,}{[^\{\}]+}/', $con, $m);
        print_r($m);
    }
    /**
     * 从css中获取相应的属性和值
     *
     * @return \Illuminate\Http\Response
     */
    public function getCss()
    {
        $class = $this->getClass();
        // print_r($class);exit;
        // $file = ROOT.'/storage/css/css/test.css';
        $file = ROOT.'/storage/css/css/all.css';
        // $file = ROOT.'server.php';
        if(!is_file($file)){
            echo $file;
            exit('no such file');
        }
        $con = file_get_contents($file);
        $style = array();
        foreach ($class as $k => $v) {
            // preg_match_all('/[^\{\}]*'.$v.'\s{0,}{[^\{]+}/', $con, $m);
            preg_match_all('/[^\{\}]*('.$v.'[^\{]{0,}){[^\{]+}/', $con, $m);
            // print_r($m);
            $c = $m[0];
            $style = array_unique(array_merge($style,$c));
        }
        // preg_match_all('/[^\{\}]*(ul|span)\s{0,}{[^\{\}]+}/', $con, $m);
        // print_r($style);
        // 数组转化为字符串
        $stylestr = implode('', $style);
        // explode(delimiter, string)
        print_r($stylestr);
    }
    /**
     * 从css中获取相应的属性和值
     *
     * @return \Illuminate\Http\Response
     */
    public function getOnlycss()
    {
        $class = $this->getClass();
        // print_r($class);exit;
        // $file = ROOT.'/storage/css/css/test.css';
        $file = ROOT.'/storage/css/css/all.css';
        // $file = ROOT.'server.php';
        if(!is_file($file)){
            echo $file;
            exit('no such file');
        }
        $con = file_get_contents($file);
        $style = array();
        foreach ($class as $k => $v) {
            preg_match_all('/[^\{\}]*'.$v.'\s{0,}{[^\{]+}/', $con, $m);
            // preg_match_all('/[^\{\}]*('.$v.'[^\{]{0,}){[^\{]+}/', $con, $m);
            // print_r($m);
            $c = $m[0];
            $style = array_unique(array_merge($style,$c));
        }
        // preg_match_all('/[^\{\}]*(ul|span)\s{0,}{[^\{\}]+}/', $con, $m);
        // print_r($style);
        // 数组转化为字符串
        $stylestr = implode('', $style);
        // explode(delimiter, string)
        print_r($stylestr);
    }
    /**
     * 从css中获取相应的属性和值
     *
     * @return \Illuminate\Http\Response
     */
    public function getOnlytags()
    {
        $class = $this->getTags();
        // print_r($class);exit;
        // $file = ROOT.'/storage/css/css/test.css';
        $file = ROOT.'/storage/css/css/all.css';
        // $file = ROOT.'server.php';
        if(!is_file($file)){
            echo $file;
            exit('no such file');
        }
        $con = file_get_contents($file);
        $style = array();
        foreach ($class as $k => $v) {
            preg_match_all('/[^\{\}]*\s+'.$v.'\s{0,}{[^\{]+}/', $con, $m);
            // preg_match_all('/[^\{\}]*('.$v.'[^\{]{0,}){[^\{]+}/', $con, $m);
            // print_r($m);
            $c = $m[0];
            $style = array_unique(array_merge($style,$c));
        }
        // preg_match_all('/[^\{\}]*(ul|span)\s{0,}{[^\{\}]+}/', $con, $m);
        // print_r($style);
        // 数组转化为字符串
        $stylestr = implode('', $style);
        // explode(delimiter, string)
        print_r($stylestr);
    }
    /**
     * 从css中获取相应的属性和值(含逗号)
     *
     * @return \Illuminate\Http\Response
     */
    public function getDcss()
    {
        $class = $this->getClass();
        // print_r($class);exit;
        // $file = ROOT.'/storage/css/css/test.css';
        $file = ROOT.'/storage/css/css/all.css';
        // $file = ROOT.'server.php';
        if(!is_file($file)){
            echo $file;
            exit('no such file');
        }
        $con = file_get_contents($file);
        $style = array();
        foreach ($class as $k => $v) {
            // preg_match_all('/[^\{\}]*'.$v.'\s{0,}{[^\{]+}/', $con, $m);
            preg_match_all('/[^\{\}]*'.$v.'(\s{0,},[,\w\s\.]+){[^\{]+}/', $con, $m);
            // print_r($m);
            $c = $m[0];
            $style = array_unique(array_merge($style,$c));
        }
        // preg_match_all('/[^\{\}]*(ul|span)\s{0,}{[^\{\}]+}/', $con, $m);
        // print_r($style);
        // 数组转化为字符串
        $stylestr = implode('', $style);
        // explode(delimiter, string)
        print_r($stylestr);
    }
    /**
     * 从css中获取相应的属性和值(含逗号)
     *
     * @return \Illuminate\Http\Response
     */
    public function getDtags()
    {
        $class = $this->getTags();
        // print_r($class);exit;
        // $file = ROOT.'/storage/css/css/test.css';
        $file = ROOT.'/storage/css/css/all.css';
        // $file = ROOT.'server.php';
        if(!is_file($file)){
            echo $file;
            exit('no such file');
        }
        $con = file_get_contents($file);
        $style = array();
        foreach ($class as $k => $v) {
            // preg_match_all('/[^\{\}]*'.$v.'\s{0,}{[^\{]+}/', $con, $m);
            preg_match_all('/[^\{\}]*'.$v.'(\s{0,},[,\w\s\.]+){[^\{]+}/', $con, $m);
            // print_r($m);
            $c = $m[0];
            $style = array_unique(array_merge($style,$c));
        }
        // preg_match_all('/[^\{\}]*(ul|span)\s{0,}{[^\{\}]+}/', $con, $m);
        // print_r($style);
        // 数组转化为字符串
        $stylestr = implode('', $style);
        // explode(delimiter, string)
        print_r($stylestr);
    }
    /**
     * 获取class
     * @return [type] [description]
     */
    public function getClass(){
        $file = ROOT.'/storage/css/css/sinaa.html';
        // $file = ROOT.'/storage/css/css/test.html';
        if(!is_file($file)){
            echo $file;
            exit('no such file');
        }
        $con = file_get_contents($file);
        preg_match_all('/class="[^"]+"/', $con, $m);
        // print_r($m);exit;
        $class = array();
        foreach ($m[0] as $k => $v) {
            preg_match_all('/".+"/', $v, $m);
            // print_r(getType($v));
            // print_r($m[0][0]);
            $c = trim(str_replace('"', '', $m[0][0]));
            $a = preg_split('/\s+/', $c);
            // print_r($a);
            $class = array_unique(array_merge($class,$a));
        }
        // print_r($class);
        //加入.前缀
        foreach ($class as $k => &$v) {
            $v = '\.'.$v;
        }
        // print_r($class);exit;
        return $class;
    }
    /**
     * 获取div、p等标签
     * @return [type] [description]
     */
    public function getTags(){
        $file = ROOT.'/storage/css/css/sinaa.html';
        // $file = ROOT.'/storage/css/css/test.html';
        if(!is_file($file)){
            echo $file;
            exit('no such file');
        }
        $con = file_get_contents($file);
        preg_match_all('/<\w+/', $con, $m);
        // print_r($m);exit;
        $tags = array();
        foreach ($m[0] as $k => $v) {
            // preg_match_all('/".+"/', $v, $m);
            // print_r(getType($v));
            // print_r($m[0][0]);
            $c = trim(str_replace('<', '', $v));
            $a = preg_split('/\s+/', $c);
            // print_r($a);
            $tags = array_unique(array_merge($tags,$a));
        }
        // print_r($tags);
        //加入.前缀
        // foreach ($tags as $k => &$v) {
        //     $v = '\.'.$v;
        // }
        // print_r($tags);exit;
        return $tags;
    }
}
