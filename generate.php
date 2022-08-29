<?
$site_name = ""; $site_keyword = ""; $site_description = "";
include "common.php";

$arr1 = array(
    "Sewer Line Repair",
    "Plumbing Installation",
    "Water Heater Repair",
    "Toilet Pump Repair Service",
    "Roof Leaking Repair",
    "Clogged Drain",
    "CLogged Toilet",
    "Pipe Leaking",
    "Pipe Burst",
    "location",
    
);

$arr2=array(
   "Kuala Lumpur",
  "Wangsa Maju",
  "Cheras",
  "Titiwangsa",
  "Mont Kiara",
  "Sri Hartamas",
  "Seputeh",
  "Lembah Pantai",
  "Setiawangsa",
  "Segambut",
  "Ampang",
  "Pudu",
  "Batu",
  "Brickfields",
  "Taman OUG",
  "Sri Petaling",
  "Jalan Klang Lama",
  "Taman Desa",
  "Klang",
  "Bandar Bukit Tinggi",
  "Kota Kemuning",
  "Subang Jaya",
  "Shah Alam",
  "Glenmarie",
  "Petaling Jaya",
  "PJ Seksyen 1-22|SS1-26",
  "Damansara",
  "Batu Caves",
  "Seri Kembangan",
  "Kajang",
  "Kepong",
  "Setia Alam",
  "Meru",
  "Bandar Utama",
  "Puchong",
  "Bandar Tasik Puteri",
  "Kelana Jaya",
  "Sunway Mas",
  "Aman Suria",
  "Ara Damansara",
  "Bandar Sunway",
  "Tropiana",
);

$out1="";
$out2="";
$count=0;
for ($j=0; $j < sizeof($arr1); $j++) {
    // code...
    $data=file_get_contents("");
    for($i=0;$i<sizeof($arr2);$i++) {
        $data=str_replace("",$arr1[$j],$data);
        if($i==0)
            $data=str_replace("",$arr2[$i],$data);
            else
                $data=str_replace($arr2[$i-1],$arr2[$i],$data);
                $tmp=$arr1[$j];
                $tmp=strtolower($tmp);
                $tmp=str_replace(" ","-",$tmp);
                $tmp2=$arr2[$i];
                $tmp2=strtolower($tmp2);
                $tmp2=str_replace(" ","-",$tmp2);
                $fname=$tmp."-".$tmp2.".php";
                // put into tmp because of permission constraint
                file_put_contents("./tmp/".$fname,$data);
                // file_put_contents($fname,$data);
                $out1.=$site_url.$fname."<br>";
                $out2.="<a href='".$site_url.$fname."'>".$arr1[$j]." ".$arr2[$i]."</a>\n";
    }
}
echo $out1;
echo $out2;
?>
