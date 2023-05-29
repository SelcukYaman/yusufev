<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sisteme Ev Gir </title>
  <link rel="stylesheet" type="text/css" href="css/iletisimstyle.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link href="css/ilanverstyle.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/077c6498ae.js" crossorigin="anonymous"></script>
  <style>
   input:hover {background-color: #07fa10;  border: 2px solid red;}
  </style>
</head>
<body>

<h1>Ev Bilgileri</h1>

<table id="customers">
  <tr>
    <th>Oda Sayısı</th>
    <th>Açıklama</th>
    <th>m²</th>
    <th>Fotoğraf</th>
    <th>Statü</th> 
    <th>Takas Durumu</th>
    <th>Fiyat</th>
    <th>İşlem</th>
  </tr>
  <tr>
    <form action="ilanver.php" method="Post" multipart="" enctype="multipart/form-data"> 
    <td><select name="odas" id="odas">
  <option value="1+0">1+0</option>
  <option value="1+1">1+1</option>
    <option value="2+1">2+1</option>
  <option value="3+0">3+0</option>
    <option value="3+1">3+1</option>
  <option value="3+2">3+2</option>
  <option value="4+1">4+1</option>
  <option value="4+2">4+2</option>
  <option value="5+1">5+1</option>
</select>  </td>
    <td> <input type="text" name="acık" required> </td>
    <td> <input type="text" name="metre" required> </td>
    <td> <input type="file" name="foto[]" multiple> </td>
    <td> <select name="statu" id="statu">
  <option value="0">Kiralık</option>
  <option value="1">Satılık</option>
</select> </td>
    <td> 
    <select name="takas" id="takas">
  <option value="0">Var</option>
  <option value="1">Yok</option>
</select> </td>
  <td> <input type="text" name="fiyat" required> </td>
  <td> <input type="submit" name="islem" value="İlan Ver"></td>
      </form>

   <?php    

	  	  $img = $_FILES['foto'];

$photo="";
	  $photosayim=0;
$uzanti="";
if(!empty($img))
{
    $img_desc = reArrayFiles($img);
    print_r($img_desc);
    
    foreach($img_desc as $val)
    {
		$photo=$photo.',photo'.$photosayim;
		$photosayim=$photosayim+1;
        $newname = date('YmdHis',time()).mt_rand().$val['extension'];
		$uzantigecici='img2/'.$newname.$val['name'];
		$uzanti=$uzanti.',"'.$uzantigecici.'"';
        move_uploaded_file($val['tmp_name'],$uzantigecici);
    }
}
	  session_start();
   include("baglan.php");
   $ekleyen=$_SESSION['id'];


if($uzanti!=""&&$photo!=""){
  $sql='INSERT INTO home(value,about,size,buy,statu,swap,ekleyen'.$photo.') VALUES ("'.$_POST["odas"].'","'.$_POST["acık"].'","'.$_POST["metre"].'","'.$_POST["fiyat"].'",'.$_POST["statu"].','.$_POST["takas"].',"'.$ekleyen.'"'.$uzanti.') ';
if ($baglan->query($sql)==TRUE) { 
      echo "<script>alert('Başarıyla Eklendi')</script>";
    }
    else{
      echo "<script>alert('Kayıt Başarısız Oldu')</script>";
    }

}  
function reArrayFiles($file)
{
    $file_ary = array();
    $file_count = count($file['name']);
    $file_key = array_keys($file);
    
    for($i=0;$i<$file_count;$i++)
    {
        foreach($file_key as $val)
        {
            $file_ary[$i][$val] = $file[$val][$i];
        }
    }
    return $file_ary;
}

   
   ?> 
  </tr>

 
</table>

</body>
</html>