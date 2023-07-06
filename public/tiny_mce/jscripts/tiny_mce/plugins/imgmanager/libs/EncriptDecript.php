<?php

/**
 * @name EncriptDecript
 * @copyright Darius Matulionis
 * @author Darius Matulionis <darius@matulionis.lt>
 * @since : 2012-03-02, 15.13.27
 */
class EncriptDecript{
    protected $salt = "098j*#YDJ_)#)@D)(FFM)JFN@*(_(h8(#@DFJ@_kjd20-f92fy23039djm";
 
    /**
     * Get Encripted string
     * @param String $string
     * @return String
     */
    public function encript($string){
        //return  base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($this->salt), $string, MCRYPT_MODE_CBC, md5(md5($this->salt))));
		
		$plaintext = $string;
		$ivlen = openssl_cipher_iv_length($cipher="AES-128-CBC");
		$iv = openssl_random_pseudo_bytes($ivlen);
		$key = hash('sha256',"secret",true);
		$ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
		$hmac = hash_hmac('sha256', $ciphertext_raw, $key, $as_binary=true);
		$ciphertext = base64_encode( $iv.$hmac.$ciphertext_raw );
		return  $ciphertext;
    }
    
    /**
     * Get Decripted string
     * @param String $encrypted Encripted string
     * @return String 
     */
    public function decript($encrypted){
        //return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($this->salt), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($this->salt))), "\0");
		
		$c = base64_decode($encrypted);
		$ivlen = openssl_cipher_iv_length("AES-128-CBC");
		$iv = substr($c, 0, $ivlen);
		$hmac = substr($c, $ivlen, $sha2len=32);
		$key = hash('sha256',"secret",true);
		$ciphertext_raw = substr($c, $ivlen+$sha2len);
		$original_plaintext = openssl_decrypt($ciphertext_raw, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
		return $original_plaintext;
		
    }
}
