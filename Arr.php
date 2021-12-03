<?php


class Arr
{
    public $nums=[];
    public function add($num){
        $this->nums[]=$num;
    }
    public $sumHelper;
    public function __construct(){
       $this->sumHelper=new SumHelper;
    }
    public function getSum23(){
        $nums=$this->nums;
        return $this->sumHelper->getSum2($nums)+$this->sumHelper->getSum3($nums);
    }

}
