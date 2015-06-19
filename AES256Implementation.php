<?php
/**
 * Created by PhpStorm.
 * User: Satoshi
 * Date: 26/05/2015
 * Time: 16:00
 */

  interface AES256Implementation
  {
    public function checkDependencies();
    public function createIV();
    public function createRandomKey();
    public function encryptData($the_data, $iv, $enc_key);
    public function decryptData($the_data, $iv, $enc_key);
  }