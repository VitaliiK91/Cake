<?php
    class InfoController extends AppController{
        public $helpers = array('Html','Form');
        
        public function index() {
            
            $this->set('infos',$this->Info->find('all', array('conditions' => array('id'=>array(1,4)))));
            
        }
    }
?>
