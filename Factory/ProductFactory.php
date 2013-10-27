<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProductFactory
 *
 * @author vgrynyuk
 */
class ProductFactory {
    function make($productId) {
        if ($this->isKeyboard($productId)) {
            return new Keyboard ();
        }
        return new Mouse ();        
    }
    private function isKeyboard($productId) {
        return substr($productId,0,1) == 'k';                        
        }
        
}
