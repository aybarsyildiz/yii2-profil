# yii2-profil Modulu

- Bu modul sorucevap moduluyle beraber ortaklasa olarak calisir.
- Modul icerisinde kullanilan soru-cevap platformunda kullanicinin sordugu soru sayisini, verdigi cevaplari siralar.
<hr>

## Kurulum

- Kurulum icin once vagrant instanceiniz uzerinde olusturdugunuz yii2 projesi klasorune girmelisiniz.
- Terminal uzerinde << composer require aybarsyildiz/yii2-profil AydinCanAltun/yii2-sorucevap "dev-main"  >> komutu ile proje icerisine modul kurulur.
- composer ile modul kurulduktan sonra << app\config\main.php >> icerisindeki modules kismina << 'profil' => 'aybarsyildiz\profil\Module', >> ve << 'AydinCanAltun\sorucevap\Module' >> satirlari eklenir.
- Bu satir eklendikten sonra modulumuz calisir hale gelmistir.

## Modul icerisinden ekran goruntuleri

![Ana Ekran Ekran Goruntuleri](/screenshots/1.png?raw=true)

![Profil Görüntüleme](/screenshots/2.png?raw=true)

