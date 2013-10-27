<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ShoppingCart
 *
 * @author vgrynyuk
 */
class ShoppingCart {
    private $productsInTheCart = array();
    
    function add($productId) {
        $this->productsInTheCart = $this->makeProductFromId($productId);
        }
        
    private function isKeyboard($productId) {
        return substr($productId,0,1) == 'k';                        
        }
        
    private function makeProductFromId($productId) {
        if ($this->isKeyboard($productId))
            return new Keyboard ();
        return new Mouse ();        
    }
    
}   

