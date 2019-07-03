### Exchange Compare - Kur Karşılaştır

- Farklı sağlayıcılardan güncel kur bilgilerini alır, en uygun olanı bulur ve veri tabanına kaydını gerçekleştirir.
- Gereklilik; Symfony 4.3.2, Bootstrap 4.3.1, Composer


## Ana Ekran Görüntüsü
![](https://raw.githubusercontent.com/smtylmzx/symfony-kur-karsilastirma/master/doc/indexPage.png)

# Kullanım

#### Tarayıcı Üzerinden
![](https://raw.githubusercontent.com/smtylmzx/symfony-kur-karsilastirma/master/doc/addressAPI.png)

http://localhost:8000/api adresine istek atılarak veya console üzerinden çalıştırılabilir.

#### Console Üzerinden
```console
php bin/console app:get-exchange-data
```

![](https://raw.githubusercontent.com/smtylmzx/symfony-kur-karsilastirma/master/doc/console_command.png)

Bu komutu console üzerinde çalıştırarak, providerlardan güncel kur verilerini çekip birbirleriyle karşılaştırıp en ucuzunu veri tabanına kayıt edebilirsiniz.

> İşlem tamamlandığında aşağıdaki uyarı görünür.

![](https://raw.githubusercontent.com/smtylmzx/symfony-kur-karsilastirma/master/doc/StatusOK.png)

## Yeni Sağlayıcı (Provider) Ekleme
Yeni providerslar Providers klasörü altına class olarak eklenmelidir.

![](https://raw.githubusercontent.com/smtylmzx/symfony-kur-karsilastirma/master/doc/providers.png)

Class eklendikten sonra ilgili ayarları yapılmalıdır.

![](https://raw.githubusercontent.com/smtylmzx/symfony-kur-karsilastirma/master/doc/providersetting.png)

Eklenen class provider_list.json dosyasına eklenmelidir.

![](https://raw.githubusercontent.com/smtylmzx/symfony-kur-karsilastirma/master/doc/providerlist.png)

> Son olarak, projede veri tabanında id'si 1 olan bir kayıt olduğu varsayılmıştır.
Veri tabanı işlemlerinin çalışması için veri tabanını oluşturduktan sonra id'si 1 olan boş bir kayıt eklemeyi unutmayın.

**Hepsi bu kadar :)
