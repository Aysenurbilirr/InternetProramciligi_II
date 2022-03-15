<?php
    class uyeler extends CI_Controller{
        /*Üyeler isimli controller oluşturarak 
        İçerisindeki uyelistele isimli fonksiyonu oluşturarak dizi içeriğini
        aşağıdaki gibi ekrana yazdırınız
        uyeler{
            id=>1,
            adi=>"Ahmet",
            soyadi=>"Gül",
            email=>asd@assd.com
        } */
        

        public function uyelistele(){
            $uyeler=array(

                "id"=>1,
                "adi"=>'Ahmet',
                "soyadi"=>'Gül',
                "email"=>'asaas.com'
            );
            echo"<pre>";
            print_r($uyeler);
            echo"</pre>";

        }

    }



?>