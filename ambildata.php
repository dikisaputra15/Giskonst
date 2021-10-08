<?php

$koneksi = mysqli_connect("localhost","root","","sig");


$Q = mysqli_query($koneksi,"SELECT * FROM jasaweb);
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));
      echo $data;                     
}

?>