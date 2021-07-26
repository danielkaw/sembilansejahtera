<?php
$page = (isset($_GET['page']))? $_GET['page'] : '';
switch($page){
  case 'home': // $page == home (jika isi dari $page adalah home)
  include "views/home.php"; // load file home.php yang ada di folder views
  break;
  
  case 'about': // $page == berita (jika isi dari $page adalah berita)
  include "views/about.php"; // load file berita.php yang ada di folder views
  break;
  
  case 'whyus': // $page == tentang (jika isi dari $page adalah tentang)
  include "views/whyus.php"; // load file tentang.php yang ada di folder views
  break;
        
  // case 'case_selanjutnya':
  // include "views/case_selanjutnya.php";
  // break;
  
  default: // Ini untuk set default jika isi dari $page tidak ada pada 3 kondisi diatas
  echo include "views/404.php"; // 
        break;
}