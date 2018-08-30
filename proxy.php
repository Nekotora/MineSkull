<?php

if(isset($_GET['skin'])&&$_GET['skin']=='body') {
  $api = "https://crafatar.com/renders/body/".$_GET['uuid'];
}else{
  $api = $api = "https://crafatar.com/skins/".$_GET['uuid'];
}

$img = file_get_contents($api);

if($img){
  header('Content-Type: image/png');
  echo($img);
}else{
  echo "API ERROR";
}