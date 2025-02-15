# mapCalculator
 Bu PHP projesi, belirli kriterlere göre mahalleleri değerlendirerek en uygun mahalleyi seçmeyi amaçlamaktadır. Değerlendirme süreci aşağıdaki adımları içerir:

Softmax Fonksiyonu: Kriterlerin önem ağırlıklarını normalleştirir.

Skor Hesaplama: Mahallelerin kriter değerlerini ağırlıklarla çarparak toplam skorlarını hesaplar.

En Uygun Mahalleyi Belirleme: En yüksek skora sahip mahalleyi seçer.

Kullanılan Fonksiyonlar

1. softmax(array $x): array

Bu fonksiyon, verilen kriter değerlerini softmax yöntemiyle normalleştirerek ağırlık vektörünü oluşturur. Softmax fonksiyonu, her kriterin göreceli önemini belirlemeye yardımcı olur.

Parametreler:

$x (array): Kriter önem değerleri.

Dönüş Değeri:

Normalleştirilmiş ağırlık değerleri (array).

2. hesaplaSkorlar(array $mahalleler, array $agirliklar): array

Bu fonksiyon, her mahalle için kriter skorlarını hesaplar. Kriterlerin ağırlıklarıyla çarpımı alınarak toplam mahalle skoru bulunur.

Parametreler:

$mahalleler (array): Mahallelerin kriter değerleri.

$agirliklar (array): Kriterlerin ağırlıkları.

Dönüş Değeri:

Mahallelerin skorlarını içeren bir dizi (array).

Kullanılan Veriler

Kriterler:

Nüfus Yoğunluğu

Mevcut Ulaşım Altyapısı

Maliyet Analizi

Çevresel Etki

Sosyal Fayda

Mahalle Verileri:

"Mahalle A": [8, 6, 7, 5, 9]

"Mahalle B": [6, 7, 6, 8, 7]

"Mahalle C": [9, 5, 8, 6, 8]

Kriter Öncelik Değerleri: [10, 7, 5, 6, 9]

Çalıştırma

Bu PHP dosyasını çalıştırarak mahalle skorlarını ve en uygun mahalleyi ekranda görüntüleyebilirsiniz. Çalıştırmak için bir PHP sunucusu gereklidir.

Örnek Çıktı
Mahalle Skorları:
Mahalle A Nüfus Yoğunluğu: 8
Mevcut Ulaşım Altyapısı: 6
Maliyet Analizi: 7
Çevresel Etki: 5
Sosyal Fayda: 9
Skor: 7.21

Mahalle B Nüfus Yoğunluğu: 6
Mevcut Ulaşım Altyapısı: 7
Maliyet Analizi: 6
Çevresel Etki: 8
Sosyal Fayda: 7
Skor: 7.03

Mahalle C Nüfus Yoğunluğu: 9
Mevcut Ulaşım Altyapısı: 5
Maliyet Analizi: 8
Çevresel Etki: 6
Sosyal Fayda: 8
Skor: 7.46

En uygun mahalle:
Mahalle C
