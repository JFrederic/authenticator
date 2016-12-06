<?php

  class User
  {
    private $db;
    const INDEX_SESSION = "user_session";

    function __construct($bdd){
      $this->db = $bdd;
    }

    public function login($uname,$upass)
       {
          try
          {
             $stmt = $this->db->query("SELECT * FROM users WHERE user_name='".$uname."' AND user_pass='".$upass."' ");
             $userRow=$stmt->fetch();
             if($stmt->rowCount() > 0)
             {
                if( $upass == $_POST['pwd'])
                {
                   unset($userRow['user_pass']);
                   $_SESSION[self::INDEX_SESSION] = $userRow;

                   return true;
                }
                else
                {
                   return false;
                }
             }
          }
          catch(PDOException $e)
          {
              echo $e->getMessage();
          }
      }


      public function is_loggedin()
      {
        if(isset($_SESSION[self::INDEX_SESSION]))
        {
         return true;
        }
      }

    public function redirect($url)
      {
       header("Location: $url");
      }

    public function logout()
      {
       session_destroy();
       return true;
     }

     public function getUsername(){
       return $_SESSION[self::INDEX_SESSION]['user_name'];
     }



  }
 ?>
