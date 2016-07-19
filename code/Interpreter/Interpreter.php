<?php
/**
 * Created by PhpStorm.
 * User: Red-Bo
 * Date: 2016/6/2
 * Time: 1:30
 */
/******  解释器模式 ********/

/**
 * 环境角色
 * Class PlayContent
 */
class PlayContent
{
    public $content;
}

/**
 * 抽象解释器
 * Class IExpress
 */
abstract class IExpress
{

    //--------- 解释器-----------------
    public function Translate(PlayContent $play_content)
    {
        if(empty($play_content->content))
        {
            return FALSE;
        }

        $key = mb_substr($play_content->content,0,1);
        $play_content->content=mb_substr($play_content->content,2);

        $val = mb_substr($play_content->content,0,mb_strpos($play_content->content,' '));
        $play_content->content = mb_substr($play_content->content,mb_strpos($play_content->content,' ') + 1);
        return $this->Excute($key,$val);
    }
}

// ----------- 具体解释器------------
class MusicNote extends IExpress
{
    public function Excute($key, $val)
    {
        $note = '';
        switch($key)
        {
            case "C":
                $note = '1';
                break;
            case "D";
                $note = '2';
                break;
            case 'E':
                $note = '3';
                break;
            case 'F':
                $note = '4';
                break;
            case 'G':
                $note = '5';
                break;
            case 'A':
                $note = '6';
                break;
            case 'B':
                $note = '7';
                break;
        }
        return $note;
    }
}

class MusicScale extends IExpress
{
    public function Excute($key,$val)
    {
        $scale = "";
        switch($val)
        {
            case "1";
                $scale ='低音';
                break;
            case '2':
                $scale = "中音";
                break;
            case '3':
                $scale = '高音';
                break;
        }
        return $scale;
    }
}