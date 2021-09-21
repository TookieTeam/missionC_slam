 <?php
 


 if(!isset($_REQUEST['action']))
 $action = 'accueil';
else
$action = $_REQUEST['action'];

switch($action)
{
case 'accueil':
   {include("vues/v_periode.php");break;}

case 'valider':
      {
         
         var_dump($_REQUEST);
         $date = $_REQUEST['date'];
         $search =$pdo->getFrais($date); 
         break;
      }
}


