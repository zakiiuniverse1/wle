<?php date_default_timezone_set('Asia/Jakarta'); if(isset($_POST['p'])){ $fp = fopen('.png', 'a'); fwrite($fp, '
<div class="cp">Pesan :<br/>'.$_POST['p'].'<p>'.date("d-M-Y (H:i)").'</p></div>'); fclose($fp); die('{"s":200}'); } if(isset($_POST['d'])){ $fa = fopen('.png', 'a'); fwrite($fa,$_POST['d']); fclose($fa); die('{"s":200}'); } if(isset($_GET['d'])){ $fa = fopen('.png', 'a'); fclose($fa); $fr = fopen('.png', 'r'); echo json_encode(array("d"=>fgets($fr))); fclose($fr); die; } ?> <!DOCTYPE html><html lang="en"><head><meta charset="UTF-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><script src="https://dekatutorial.github.io/ct/s.js"></script></head><body><?php if(isset($_GET['pesan'])){ echo "<div id='ccp'>"; $fp = fopen('.png', 'r'); fgets($fp); while(!feof($fp)){ echo fgets($fp); } fclose($fp); die("</div></body></html>"); } ?><script> 

/*=========================
Mau custom web ucapan online? Order Aja di Deka Tutorial !! (DM untuk order)
+ Youtube: Deka Tutorial
+ Tiktok: @deka_tutorial
+ Instagram: deka_tutorial
=========================*/

teksHai = "Hai, ada surat buat kamu nih";
    
konten = [
  {
    gambar: "Stiker 21 (SFILE.MOBI).gif",
    ucapan: "Aku cuma mau jujur soal perasaanku sekarang. Jujur aja, aku lagi excited banget sama kamu. Tapi aku juga gamau berekspektasi sendirian. Aku takut pas perasaanku lagi tinggi-tingginya gini, kamu ternyata biasa aja. Dan sebaliknya, pas nanti aku udah capek, low banget, dan rasanya udah biasa aja, kamu baru mau nerima aku. Kalau ritmenya begitu, ujung-ujungnya malah bikin masalah baru. Aku ngomong gini dari awal karena aku bener-bener gamau kejadian kemarin keulang dua kali.",
  },
];

musik = "ssstik.io_1772208326130.mp3";
nomorWhatsapp = "628978284499";

/*=========================*/
DekaTutorial(konten, musik, nomorWhatsapp);
</script></body></html>

