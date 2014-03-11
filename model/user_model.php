<?php
/*function __autoload($class_name){
    require_once $class_name.'php';
*/
//include 'db_model.php';
class user_model
{
   function insert($data){
       include 'db_model.php';
       try{
	   $data['u_password'] = md5($data['u_password'].'adsbook');
	   $sql = "INSERT INTO ads_user SET
	       u_name = :u_name,
	       u_email = :u_email,
	       u_password = :u_password,
	       u_qq = :u_qq,
	       u_phone = :u_phone";
	   $s = $pdo->prepare($sql);
	   $s->bindValue(':u_name',$data['u_name']);
	   $s->bindValue(':u_email',$data['u_email']);
	   $s->bindValue(':u_password',$data['u_password']);
	   $s->bindValue(':u_qq',$data['u_qq']);
	   $s->bindValue(':u_phone',$data['u_phone']);
	   $s->execute();
       }
       catch(PDOException $e){
           $output = 'Unable to insert users information'.$e->getMessage();
           return  $output;
       }
   }

   //取出当前用户的信息
    function select_user($userid){
       include 'db_model.php';
       try{
            $sql = 'SELECT * FROM ads_user WHERE user_id = :user_id';
            $s = $pdo->prepare($sql);
            $s->bindValue(':user_id',$userid);
            $s->execute();
       }
       catch(PDOException $e){
            $output='uable to select the user information!'.$e->getMessage();
            echo $output;
            exit();
       }
       return $s->fetch();
     }

     //修改当前用户的信息
     function update_user($data,$where){
         include 'db_model.php';
         try{
             $sql = "UPDATE ads_user SET
	       u_email = :u_email,
	       u_qq = :u_qq,
	       u_phone = :u_phone".$where;
	   $s = $pdo->prepare($sql);
	   $s->bindValue(':u_email',$data['u_email']);
	   $s->bindValue(':u_qq',$data['u_qq']);
	   $s->bindValue(':u_phone',$data['u_phone']);
       $s->execute();
        var_dump($sql);
         }
         catch(PDOException $e){
           $output = 'Unable to update the user information'.$e->getMessage();
           var_dump($sql);
           echo $output;
           exit();
         }
      }

}
