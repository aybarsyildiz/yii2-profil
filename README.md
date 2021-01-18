# yii2-profil Modulu

- Bu modul sorucevap moduluyle beraber ortaklasa olarak calisir.
- Modul icerisinde kullanilan soru-cevap platformunda kullanicinin sordugu soru sayisini, verdigi cevaplari siralar.
<hr>

## Kurulum

- Kurulum icin once vagrant instanceiniz uzerinde olusturdugunuz yii2 projesi klasorune girmelisiniz.
- Terminal uzerinde <br>
     `composer require aybarsyildiz/yii2-profil AydinCanAltun/yii2-sorucevap "dev-main" `
 komutu ile proje icerisine modul kurulur.

- composer ile modul kurulduktan sonra _app\config\main.php_ icerisindeki **modules** kismina 
`'profil' => 'aybarsyildiz\profil\Module',  
'AydinCanAltun\sorucevap\Module' `
    satirlari eklenir.
- Bu satir eklendikten sonra modulumuz calisir hale gelmistir.
<hr>


## Modul icerisinden ekran goruntuleri
1. Profil Görüntüleme
![Profil Görüntüleme](/screenshots/2.png?raw=true "Ana Modül Ekranı")
2. Ana Ekran
![Ana Ekran Ekran Goruntuleri](/screenshots/1.png?raw=true "Profil Görüntüleme")
