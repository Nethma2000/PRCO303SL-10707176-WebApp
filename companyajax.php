<?php

// print_r($_REQUEST);
// die;

$action=$_REQUEST['action'];

if(!empty($action)){
    require_once 'companyusers.php';

    $obj=new companyusers();

}

//adding user action
if($action=='adduser' && !empty($_POST)){
 $company_name=$_POST['company_name'];
$field=$_POST['field'];
$company_address=$_POST['company_address'];
$company_contact=$_POST['company_contact'];
$HRhead=$_POST['HRhead'];
$HRphone=$_POST['HRphone'];
$website=$_POST['website'];
$email=$_POST['email'];
$password=$_POST['comp_password'];

$playerid=(!empty($_POST['userId'])) ? $_POST['userId']:"";


    $playerData=[
        'company_name'=> $company_name,
        'field' =>$field,
        'address' =>$company_address,
        'company_contact' =>$company_contact,
        'HRhead' =>$HRhead,
        'HRphone'=>$HRphone,
        'website'=>$website,
        'email'=> $email,
        'password'=>$password,
    
    ];
    $playerid=$obj->add($playerData);



if(!empty($playerid)){
    $player=$obj->getRow('id',$playerid);
    echo json_encode($player);
    exit();
}

}
?>