<?php
function is_user_logged_in(){
    return true;
}
function set_background($background_color){
    $result="";
    switch ($background_color){
        case 'red':
           return $result="red";
            break;
        case 'blue':
          return  $result="blue";
            break;
        case 'green':
           return $result="green";
            break;

    }


}
function get_users(){
    return array(
        array('id'=>1,'name'=>'shahoo','email'=>'shahoo_gh@yahoo.com','jensiat'=>'koloft'),
        array('id'=>1,'name'=>'samira','email'=>'samira_s@yahoo.com','jensiat'=>'tang'),
        array('id'=>1,'name'=>'safora','email'=>'safo_s@yahoo.com','jensiat'=>'sefi'),
        array('id'=>1,'name'=>'elham','email'=>'eli_b@yahoo.com','jensiat'=>'topol'),
        array('id'=>1,'name'=>'sana','email'=>'sana_s@yahoo.com','jensiat'=>'tangetopol'),
        array('id'=>1,'name'=>'del','email'=>'deli_d@yahoo.com','jensiat'=>'topol'),
    );
}