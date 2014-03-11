<?php
class userindex_model
{
   public $row;

   //查询用户的id
   function select_userid($name){
       include 'db_model.php';
       try{
          $sql = "SELECT user_id from ads_user WHERE u_name = :u_name";
          $s = $pdo->prepare($sql);
          $s->bindValue(':u_name',$_SESSION['name']);
          $s->execute();
       }
       catch(PDOException $e){
          $output = 'Unable to select user_id from ads_user'.$e->getMessage();
          echo $output;
          exit();
       }
       return $s->fetch();
   }

   //此方法用于查询目前用户的联系人的信息
   public function select_fri($data){
       include 'db_model.php';
       $and ='';
       if($data != '') $and = " AND fri_id = {$data}";
       else $and ==' AND TRUE';
       $row = $this->select_userid($_SESSION['name']);
       try{
	   $sql = "SELECT * FROM ads_friend WHERE user_id = :user_id {$and} ORDER BY f_name";
	   $s = $pdo->prepare($sql);
	   $s->bindValue(':user_id',$row[0]);
	   $s->execute();
       }
       catch(PDOException $e){
           echo $row[0];
           $output = 'Unable to select from ads_friend'.$e->getMessage();
           echo $output;
           exit();
       }
       if($data != '') return $s->fetch();
       return $s;
   }

   //添加或更新联系人
   function insert_update_fri($data,$where,$userid){
       include 'db_model.php';
       if($where == '') $action = 'INSERT INTO';
       else $action = 'UPDATE';
       try{
          $sql = "{$action} ads_friend SET
                user_id =  {$userid},
                f_name =  :f_name,
                f_date = :f_date,
                f_phone = :f_phone,
                f_email = :f_email,
                f_work = :f_work,
                f_address = :f_address".$where;
          $s = $pdo->prepare($sql);
          $s->bindValue(':f_name',$data['f_name']);
          $s->bindValue(':f_date',$data['f_date']);
          $s->bindValue(':f_phone',$data['f_phone']);
          $s->bindValue(':f_email',$data['f_email']);
          $s->bindValue(':f_work',$data['f_work']);
          $s->bindValue(':f_address',$data['f_address']);
          $s->execute();
       }
       catch(PDOException $e){
          $output = 'unable to insert into ads_friend'.$e->getMessage();
          var_dump($sql);
          echo $output;
          exit();
       }
   }

   //查找对应的联系人信息
   function search_fri($data,$id){
       include 'db_model.php';
       try{
          $sql = "SELECT * FROM ads_friend WHERE f_name LIKE :f_name  AND user_id =  {$id} ORDER BY f_name";
          $s = $pdo->prepare($sql);
          $s->bindValue(':f_name',$data);
          $s->execute();
       }
       catch(PDOException $e){
          $output = 'unable to search adsbook at ads_friend'.$e->getMessage();
          echo $output;
          exit();
       }
       return $s;
   }

   //删除联系人
   function delete_fri($id){
      include 'db_model.php';
      try{
      	    $sql = "DELETE FROM ads_friend WHERE fri_id = :fri_id";
            $s = $pdo->prepare($sql);
            $s->bindValue(':fri_id',$id);
            $s->execute();
       }
      catch(PDOException $e){
            $output = 'unable to delete ads_fri';
            echo $output;
            exit();
       }
    }



}
