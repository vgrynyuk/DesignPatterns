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
    private $productFactory;
    
    public function __construct() {
        $this->productFactory = new ProductFactory();
        
    }
            
    function add($productId) {
        $this->productsInTheCart[] = $this->productFactory->make($productId);
}
        
    
}   

