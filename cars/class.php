<?php


    class Car{

        private $immatr;
        private $circul;
        private $kilom;
        private $model;
        private $mark;
        private $color;
        private $poids;

        private $reserved; 
        private $used;

        public function __construct(){
            $this->immatr = $immatr;
            $this->circul = $circul;
            $this->kilom = $kilom;
            $this->model = $model;
            $this->mark = $mark;
            $this->color = $color;
            $this->poids = $poids;
       
        }

        private function used(){
            if($this->kilometer <= 100000){
                return array(
                    'used' => 'low'
                );
            }
            elseif($this->kilometer>100000 && $this->kilometer<200000){
                return array(
                    'used' => 'medium'
                );
            }else{
                return array(
                    'used' => 'high'
                );
            }
        }

        
        private function country(){
            
        }




    }


?>