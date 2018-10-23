<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2018/10/9
 * Time: 16:59
 */


/**
 * 秒速时时彩各种算法
 *
 */


/**
 * 计算出数字总和
 * @return int
 */
$this->sum = sum();

function sum(){
    $num =
    if (is_int($num)){
        $nums = str_split($num);
        $shuzi=0;
        for ($i = 0; $i < count($nums); $i++) {
            // code...
            $shuzi = $shuzi+$nums[$i];
        }
        return $shuzi;
    }
}



//总和大
function Greater(){
    return $this->sum >= 23;
}

//总和小
function Smallsum(){
    return $this->sum <=22;
}

//总和单
function Sumdan(){
    return $this->sum % 2 !== 0 && $this->sum !== 0;
}

//总和双
function Sumshuang(){
    return $this->sum % 2 == 0 || $this->sum == 0;
}

//龙
function Loong(){
    return $this->one > $this->five;
}

//虎
function Tiger(){
    return $this->one < $this->five;
}

//和
function He(){
    return $this->one == $this->five;
}



function danqiu($num){
    $nums = 123456;
    if (is_int($nums)){
        $nums = str_split($nums);
        return $nums[$num];
    }
}

$this->one = danqiu(1);
$this->two = danqiu(2);
$this->three = danqiu(3);
$this->four = danqiu(4);
$this->five = danqiu(5);

//-----------------两面---------------------------------------------------

//第一球大
function OneGreater(){
    return $this->one >=5;
}

//第一球小
function OneSmall(){
    return $this->one <=4;
}

//第一球单
function OneDan(){
    return $this->one % 2 !== 0 && $this->one !== 0;
}

//第一球双
function OneShuang(){
    return $this->one % 2 == 0 || $this->one == 0;
}

//第二球大
function TwoGreater(){
    return $this->two >=5;
}

//第二球小
function TwoSmall(){
    return $this->two <=4;
}

//第二球单
function TwoDan(){
    return $this->two % 2 !== 0 && $this->two   !== 0;
}

//第二球双
function TwoShuang(){
    return $this->two % 2 == 0 || $this->two == 0;
}

//第三球大
function ThreeGreater(){
    return $this->three >=5;
}

//第三球小
function ThreeSmall(){
    return $this->three <=4;
}

//第三球单
function ThreeDan(){
    return $this->three % 2 !== 0 && $this->three !== 0;
}

//第三球双
function ThreeShuang(){
    return $this->three % 2 == 0 || $this->three == 0;
}

//第四球大
function FourGreater(){
    return $this->four >=5;
}

//第四球小
function FourSmall(){
    return $this->four <=4;
}

//第四球单
function FourDan(){
    return $this->four % 2 !== 0 && $this->four !== 0;
}

//第四球双
function FourShuang(){
    return $this->four % 2 == 0 || $this->four == 0;
}

//第五球大
function FiveGreater(){
    return $this->five >=5;
}

//第五球小
function FiveSmall(){
    return $this->five <=4;
}

//第五球单
function FiveDan(){
    return $this->five % 2 !== 0 && $this->five !== 0;
}

//第五球双
function FiveShuang(){
    return $this->five % 2 == 0 || $this->five == 0;
}


//-----------------1~5球---------------------------------------------------

//第一球
function OneForZero(){
    return $this->one == 0;
}
function OneForOne(){
    return $this->one == 1;
}
function OneForTwo(){
    return $this->one == 2;
}
function OneForThree(){
    return $this->one == 3;
}
function OneForFour(){
    return $this->one == 4;
}
function OneForFive(){
    return $this->one == 5;
}
function OneForSix(){
    return $this->one == 6;
}
function OneForSeven(){
    return $this->one == 7;
}
function OneForEight(){
    return $this->one == 8;
}
function OneForNine(){
    return $this->one == 9;
}

//第二球
function TwoForZero(){
    return $this->two == 0;
}
function TwoForOne(){
    return $this->two == 1;
}
function TwoForTwo(){
    return $this->two == 2;
}
function TwoForThree(){
    return $this->two == 3;
}
function TwoForFour(){
    return $this->two == 4;
}
function TwoForFive(){
    return $this->two == 5;
}
function TwoForSix(){
    return $this->two == 6;
}
function TwoForSeven(){
    return $this->two == 7;
}
function TwoForEight(){
    return $this->two == 8;
}
function TwoForNine(){
    return $this->two == 9;
}

//第三球
function ThreeForZero(){
    return $this->three == 0;
}
function ThreeForOne(){
    return $this->three == 1;
}
function ThreeForTwo(){
    return $this->three == 2;
}
function ThreeForThree(){
    return $this->three == 3;
}
function ThreeForFour(){
    return $this->three == 4;
}
function ThreeForFive(){
    return $this->three == 5;
}
function ThreeForSix(){
    return $this->three == 6;
}
function ThreeForSeven(){
    return $this->three == 7;
}
function ThreeForEight(){
    return $this->three == 8;
}
function ThreeForNine(){
    return $this->three == 9;
}

//第四球
function FourForZero(){
    return $this->four == 0;
}
function FourForOne(){
    return $this->four == 1;
}
function FourForTwo(){
    return $this->four == 2;
}
function FourForThree(){
    return $this->four == 3;
}
function FourForFour(){
    return $this->four == 4;
}
function FourForFive(){
    return $this->four == 5;
}
function FourForSix(){
    return $this->four == 6;
}
function FourForSeven(){
    return $this->four == 7;
}
function FourForEight(){
    return $this->four == 8;
}
function FourForNine(){
    return $this->four == 9;
}

//第五球
function FiveForZero(){
    return $this->five == 0;
}
function FiveForOne(){
    return $this->five == 1;
}
function FiveForTwo(){
    return $this->five == 2;
}
function FiveForThree(){
    return $this->five == 3;
}
function FiveForFour(){
    return $this->five == 4;
}
function FiveForFive(){
    return $this->five == 5;
}
function FiveForSix(){
    return $this->five == 6;
}
function FiveForSeven(){
    return $this->five == 7;
}
function FiveForEight(){
    return $this->five == 8;
}
function FiveForNine(){
    return $this->five == 9;
}

//-----------------前中后-------------------------------------------------

function qian(){
    $number = 12345;
    $numbers = str_split($number);
    return $numbers[0].$numbers[1].$numbers[2];
}

function zhong(){
    $number = 12345;
    $numbers = str_split($number);
    return $numbers[1].$numbers[2].$numbers[3];
}

function hou(){
    $number = 123456;
    $numbers = str_split($number);
    return $numbers[2].$numbers[3].$numbers[4];
}

//前三 豹子
function QianLeo(){
    $qian = qian();
    $numbers = str_split($qian);
    return $numbers[0] == $numbers[1] && $numbers[0] == $numbers[2] && $numbers[1] == $numbers[2];
}

//前三 顺子
function QianShunZi(){
    $arr = str_split(qian());
    $len = count($arr);
    for($i=1;$i<$len;$i++)
    {
        for($k=0;$k<$len-$i;$k++)
        {
            if($arr[$k]>$arr[$k+1])
            {
                $tmp=$arr[$k+1];
                $arr[$k+1]=$arr[$k];
                $arr[$k]=$tmp;
            }
        }
    }
    $qian = $arr[0].$arr[1].$arr[2];
    if($qian == '019' && $qian =='089'){
        return true;
    }
    if ($arr[0]+1==$arr[1] && $arr[0]+2==$arr[2] && $arr[1]+1==$arr[2]){
        return true;
    }
    return false;

}

//前三 对子
function QianDuizi(){
    $qian = qian();
    $numbers = str_split($qian);
    return $numbers[0] == $numbers[1] || $numbers[0] == $numbers[2] ||$numbers[1] == $numbers[2];
}

//前三 半顺子
function QianBanShun(){
    $arr = str_split(qian());
    $len = count($arr);
    for($i=1;$i<$len;$i++)
    {
        for($k=0;$k<$len-$i;$k++)
        {
            if($arr[$k]>$arr[$k+1])
            {
                $tmp=$arr[$k+1];
                $arr[$k+1]=$arr[$k];
                $arr[$k]=$tmp;
            }
        }
    }
    if ($arr[0] == 0&&$arr[2] == 9){
        return true;
    }
    if ($arr[0]+1 == $arr[1] || $arr[1]+1 == $arr[2]){
        return true;
    }
    return false;
}

//前三 杂六
function QianZaLiu(){
    if (QianShunZi()){

        return false;
    }elseif (QianBanShun()){
        return false;
    }
    return true;

}


//中三 豹子
function ZhongLeo(){
    $zhong = zhong();
    $numbers = str_split($zhong);
    return $numbers[0] == $numbers[1] && $numbers[0] == $numbers[2] && $numbers[1] == $numbers[2];
}

//中三 顺子
function ZhongShunZi(){
    $arr = str_split(zhong());
    $len = count($arr);
    for($i=1;$i<$len;$i++)
    {
        for($k=0;$k<$len-$i;$k++)
        {
            if($arr[$k]>$arr[$k+1])
            {
                $tmp=$arr[$k+1];
                $arr[$k+1]=$arr[$k];
                $arr[$k]=$tmp;
            }
        }
    }
    $zhong = $arr[0].$arr[1].$arr[2];
    if($zhong == '019' && $zhong =='089'){
        return true;
    }
    if ($arr[0]+1==$arr[1] && $arr[0]+2==$arr[2] && $arr[1]+1==$arr[2]){
        return true;
    }
    return false;

}

//中三 对子
function ZhongDuizi(){
    $zhong = zhong();
    $numbers = str_split($zhong);
    return $numbers[0] == $numbers[1] || $numbers[0] == $numbers[2] ||$numbers[1] == $numbers[2];
}

//中三 半顺子
function ZhongBanShun(){
    $arr = str_split(zhong());
    $len = count($arr);
    for($i=1;$i<$len;$i++)
    {
        for($k=0;$k<$len-$i;$k++)
        {
            if($arr[$k]>$arr[$k+1])
            {
                $tmp=$arr[$k+1];
                $arr[$k+1]=$arr[$k];
                $arr[$k]=$tmp;
            }
        }
    }
    if ($arr[0] == 0&&$arr[2] == 9){
        return true;
    }
    if ($arr[0]+1 == $arr[1] || $arr[1]+1 == $arr[2]){
        return true;
    }
    return false;
}

//中三 杂六
function ZhongZaLiu(){
    if (ZhongShunZi()){

        return false;
    }elseif (ZhongBanShun()){
        return false;
    }
    return true;

}



//后三 豹子
function HouLeo(){
    $hou = hou();
    $numbers = str_split($hou);
    return $numbers[0] == $numbers[1] && $numbers[0] == $numbers[2] && $numbers[1] == $numbers[2];
}

//中三 顺子
function HouShunZi(){
    $arr = str_split(hou());
    $len = count($arr);
    for($i=1;$i<$len;$i++)
    {
        for($k=0;$k<$len-$i;$k++)
        {
            if($arr[$k]>$arr[$k+1])
            {
                $tmp=$arr[$k+1];
                $arr[$k+1]=$arr[$k];
                $arr[$k]=$tmp;
            }
        }
    }
    $hou = $arr[0].$arr[1].$arr[2];
    if($hou == '019' && $hou =='089'){
        return true;
    }
    if ($arr[0]+1==$arr[1] && $arr[0]+2==$arr[2] && $arr[1]+1==$arr[2]){
        return true;
    }
    return false;

}

//后三 对子
function HouDuizi(){
    $hou = hou();
    $numbers = str_split($hou);
    return $numbers[0] == $numbers[1] || $numbers[0] == $numbers[2] ||$numbers[1] == $numbers[2];
}

//后三 半顺子
function HouBanShun(){
    $arr = str_split(hou());
    $len = count($arr);
    for($i=1;$i<$len;$i++)
    {
        for($k=0;$k<$len-$i;$k++)
        {
            if($arr[$k]>$arr[$k+1])
            {
                $tmp=$arr[$k+1];
                $arr[$k+1]=$arr[$k];
                $arr[$k]=$tmp;
            }
        }
    }
    if ($arr[0] == 0&&$arr[2] == 9){
        return true;
    }
    if ($arr[0]+1 == $arr[1] || $arr[1]+1 == $arr[2]){
        return true;
    }
    return false;
}

//后三 杂六
function HouZaLiu(){
    if (HouShunZi()){

        return false;
    }elseif (HouBanShun()){
        return false;
    }
    return true;

}