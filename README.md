# yii2-profil Modulü Nedir?
Profil modulü AydinCanAltun/sorucevap modulüne bağlı bir profil görüntüleme modulüdür. Bu modülde, sorucevap modülü kullanılarak sorulan sorular, verilen cevaplar görüntülenebilir. Veritabanı üzerinden çekilen bu bilgiler kişiye özel profil sekmesinde de görüntülenebilir.
<hr>

# Kurulum
Modülün kurulumu, yii2-advanced template'i kullanıllanılarak anlatılacaktır.
Vagrant makinenize ssh ile bağlandıktan sonra  
    `cd var/www`  
komutu kullanılarak yii2 projesini oluşturacağımız dizine gelinir.  
    `composer create-project yiisoft/yii2-app-advanced ['Proje Klasörü']`  
komutu kullanılarak bulunduğumuz dizindeki Proje Klasörü'ne yii2-advanced template'i kurulur.  
    `php yii migrate`  
komutu Proje Klasörü içerisinde çalıştırılarak yii proje hazır hale getirilir. Artık modüller projeye dahil edilebilir.  
    `composer require aybarsyildiz/yii2-profil "dev-main" aydincanaltun/yii2-sorucevap "dev-main"`  
komutu ile modüller projeye eklenir. Modülün bağımlı olduğu migrationları eklemek için ise  
    `php yii migrate/up --migrationPath=@vendor/aydincanaltun/yii2-sorucevap/src/migrations `  
komutu çalıştırılır.<br><hr>


composer ile modul kurulduktan ve migrationlar eklendikten sonra _app\config\main.php_ icerisindeki **modules** kismina  
    `'profil' => 'aybarsyildiz\profil\Module',`  
    `'sorucevap' => 'AydinCanAltun\sorucevap\Module'`  
satirlari eklenir.  
Bu satır eklendikten sonra modül çalışır hale gelmiştir.  
    `http://advanced/backend/web/index.php?r=profil`  
    `http://advanced/backend/web/index.php?r=sorucevap`  
adresleri kullanılarak bu modüllere ulaşılabilir.  
<hr>


## Modul icerisinden ekran goruntuleri
1. Ana Ekran
![Profil Görüntüleme](/screenshots/2.png?raw=true "Ana Modül Ekranı")
2. Profil Görüntüleme
![Ana Ekran Ekran Goruntuleri](/screenshots/1.png?raw=true "Profil Görüntüleme")
3. Profil Görüntüleme 2
![Profil Görüntüleme](/screenshots/3.jpeg?raw=true "Profil Görüntüleme 2")
4. Soru Sorma
![Soru Sorma](/screenshots/4.jpeg?raw=true "Soru Sorma")
5. Veritabanı İlişki Şeması
![Veritabanı İlişki Şeması](/screenshots/5.jpeg?raw=true "Veritabanı İlişki Şeması")