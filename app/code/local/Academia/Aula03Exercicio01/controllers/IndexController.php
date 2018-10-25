<?php

class Academia_Aula03Exercicio01_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction(){
        echo "Aula 03 - Exercicio 01";
    }

    public function blocksAction(){
        $this->loadLayout();
        $block = $this->getLayout()->createBlock('academia_aula03exercicio01/hello');
        $block->setText("Message in the bottle");
        $this->getLayout()->getBlock('content')->insert($block);
        $this->renderLayout();
    }
}

?>