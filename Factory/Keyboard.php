<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Keyboard
 *
 * @author vgrynyuk
 */
class Keyboard implements Product {
    public function getPrice () {
        return 50;
    }
    public function getPicture () {
        return NULL;
    }
    public function getDescription () {
        return "simpple description";
    }
}
