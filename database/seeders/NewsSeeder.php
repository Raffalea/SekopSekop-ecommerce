<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run(): void
    {
        News::create([
            'title' => 'Tips Memilih Material Bangunan Berkualitas',
            'content' => 'Memilih material bangunan yang berkualitas adalah langkah penting dalam membangun rumah impian Anda. Kualitas material akan mempengaruhi daya tahan, keamanan, dan estetika bangunan secara keseluruhan. Pastikan Anda membeli dari supplier terpercaya yang memiliki sertifikat dan reputasi baik di industri konstruksi.

Sebelum membeli, lakukanlah penelitian mendalam tentang spesifikasi dan standar material yang Anda butuhkan. Bandingkan harga dari berbagai supplier untuk mendapatkan penawaran terbaik tanpa mengorbankan kualitas. Jangan tergoda dengan harga yang terlalu murah karena bisa jadi material tersebut memiliki kualitas yang rendah dan tidak tahan lama.

Konsultasikan dengan ahli bangunan atau arsitek untuk mendapatkan rekomendasi material yang sesuai dengan kebutuhan dan budget Anda. Selalu periksa sertifikat keaslian dan garansi dari setiap material yang Anda beli. Dengan memilih material yang tepat, Anda akan menghemat biaya jangka panjang karena tidak perlu sering melakukan perbaikan.',
            'image' => 'https://via.placeholder.com/800x400?text=Material+Bangunan',
        ]);

        News::create([
            'title' => 'Inovasi Terbaru dalam Teknologi Konstruksi',
            'content' => 'Industri konstruksi terus berkembang dengan adanya inovasi-inovasi terbaru yang memudahkan proses pembangunan. Teknologi Building Information Modeling (BIM) memungkinkan para profesional untuk merencanakan proyek dengan lebih detail dan akurat sebelum pelaksanaan di lapangan. Sistem ini mengurangi kesalahan dan meningkatkan efisiensi waktu serta biaya konstruksi.

Drone juga telah menjadi alat penting dalam survei dan inspeksi area konstruksi yang luas. Dengan menggunakan drone, pekerja dapat memetakan lokasi dengan lebih cepat dan aman tanpa harus mengakses area-area berbahaya. Teknologi ini juga membantu dalam dokumentasi visual yang lebih baik untuk keperluan laporan proyek.

Selain itu, penggunaan material ramah lingkungan semakin populer di industri konstruksi modern. Material yang dapat didaur ulang dan memiliki dampak minimal terhadap lingkungan menjadi pilihan utama bagi para developer yang peduli keberlanjutan. Investasi dalam teknologi konstruksi modern adalah investasi untuk masa depan yang lebih baik.',
            'image' => 'https://via.placeholder.com/800x400?text=Teknologi+Konstruksi',
        ]);

        News::create([
            'title' => 'Cara Merawat Beton Agar Lebih Tahan Lama',
            'content' => 'Beton adalah material yang kuat namun tetap memerlukan perawatan yang tepat untuk mempertahankan fungsinya. Kerusakan pada beton dapat terjadi karena berbagai faktor seperti cuaca ekstrem, kelembaban tinggi, dan beban berlebihan. Perawatan rutin dapat memperpanjang umur beton hingga puluhan tahun lebih lama.

Salah satu cara efektif merawat beton adalah dengan membersihkan permukaannya secara berkala menggunakan air bersih dan sikat lembut. Hindari penggunaan bahan kimia yang terlalu keras karena dapat merusak struktur beton secara permanen. Perhatikan juga kondisi drainase di sekitar struktur beton untuk mencegah penumpukan air yang dapat menyebabkan korosi.

Jika ditemukan retakan atau kerusakan pada beton, segera lakukan perbaikan sebelum kerusakan meluas. Gunakan material perbaikan beton berkualitas yang sesuai dengan jenis kerusakan yang ditemukan. Dengan perawatan yang konsisten dan tepat, investasi Anda dalam struktur beton akan terlindungi dengan baik.',
            'image' => 'https://via.placeholder.com/800x400?text=Perawatan+Beton',
        ]);

        News::create([
            'title' => 'Tren Desain Arsitektur Modern 2026',
            'content' => 'Desain arsitektur modern terus mengalami evolusi seiring dengan perubahan kebutuhan dan gaya hidup masyarakat. Pada tahun 2026, tren minimalis masih menjadi favorit dengan kombinasi elemen alami seperti kayu dan batu. Konsep open space semakin dipopulerkan untuk memberikan kesan luas dan airy pada bangunan.

Keberlanjutan lingkungan juga menjadi pertimbangan utama dalam desain arsitektur modern saat ini. Bangunan yang dirancang dengan sistem pencahayaan alami, ventilasi alami, dan penggunaan energi terbarukan semakin banyak diadopsi oleh para arsitek. Pendekatan ini tidak hanya ramah lingkungan tetapi juga menghemat biaya operasional jangka panjang.

Teknologi smart home terintegrasi juga semakin menjadi bagian dari desain modern. Rumah pintar dengan kontrol otomatis untuk pencahayaan, suhu, dan keamanan memberikan kenyamanan dan efisiensi yang lebih baik. Desain yang menggabungkan estetika, fungsionalitas, dan teknologi adalah tren yang akan terus berkembang di masa depan.',
            'image' => 'https://via.placeholder.com/800x400?text=Desain+Arsitektur',
        ]);

        News::create([
            'title' => 'Standar Keselamatan Kerja di Industri Konstruksi',
            'content' => 'Keselamatan kerja adalah prioritas utama dalam setiap proyek konstruksi untuk melindungi para pekerja dari risiko kecelakaan. Standar internasional seperti OSHA dan regulasi lokal harus selalu diterapkan dengan ketat di setiap lokasi proyek. Pelatihan keselamatan kerja yang komprehensif harus diberikan kepada semua anggota tim sebelum memulai pekerjaan.

Penggunaan Alat Pelindung Diri (APD) yang tepat seperti helm, rompi keselamatan, dan sepatu safety adalah kewajiban yang tidak boleh diabaikan. Setiap pekerja harus memahami pentingnya menggunakan APD dan disiplin dalam menerapkannya setiap hari. Inspeksi APD secara berkala perlu dilakukan untuk memastikan kondisinya masih memenuhi standar keselamatan.

Komunikasi yang baik antar anggota tim juga merupakan aspek penting dalam mencegah kecelakaan. Briefing harian sebelum memulai pekerjaan dan rapid report untuk setiap insiden yang terjadi dapat membantu mengidentifikasi risiko dan mencegah kecelakaan berulang. Budaya keselamatan yang kuat dalam organisasi adalah investasi terbaik untuk melindungi aset terpenting yaitu nyawa para pekerja.',
            'image' => 'https://via.placeholder.com/800x400?text=Keselamatan+Kerja',
        ]);

        News::create([
            'title' => 'Panduan Lengkap Menghitung Kebutuhan Material Bangunan',
            'content' => 'Menghitung kebutuhan material bangunan dengan akurat adalah kunci untuk mengendalikan biaya proyek dan menghindari pemborosan. Langkah pertama adalah membuat rencana detail dari bangunan yang akan dibangun termasuk dimensi, ketinggian, dan spesifikasi setiap bagian. Dari rencana tersebut, Anda dapat menghitung volume material yang diperlukan dengan perhitungan matematis yang tepat.

Untuk batu bata misalnya, perhitungan dilakukan berdasarkan luas dinding dan standar jumlah batu bata per meter persegi. Untuk semen dan pasir, perhitungan dilakukan berdasarkan komposisi adukan yang digunakan untuk setiap fungsi spesifik. Setiap jenis pekerjaan memiliki standar konsumsi material yang berbeda sehingga penting untuk mereferensikan standar yang benar.

Tambahkan margin keamanan sekitar 5-10% dari total perhitungan untuk mengantisipasi pemborosan dan kesalahan di lapangan. Konsultasikan perhitungan Anda dengan ahli bangunan atau pengalaman proyek-proyek sebelumnya untuk memastikan akurasi. Dengan perhitungan yang tepat, Anda dapat memaksimalkan efisiensi biaya dan meminimalkan pemborosan material.',
            'image' => 'https://via.placeholder.com/800x400?text=Kalkulasi+Material',
        ]);

        News::create([
            'title' => 'Pengaruh Cuaca terhadap Jadwal Konstruksi',
            'content' => 'Cuaca memiliki pengaruh signifikan terhadap pelaksanaan proyek konstruksi dan dapat menyebabkan keterlambatan jika tidak dikelola dengan baik. Musim hujan sering kali menjadi tantangan besar karena menyulitkan beberapa jenis pekerjaan terutama yang berkaitan dengan excavation dan concrete pouring. Rencana kerja yang fleksibel dan adaptif terhadap kondisi cuaca adalah kunci sukses proyek.

Peralatan dan material tambahan harus disediakan untuk menghadapi musim hujan seperti terpal, pompa air, dan scaffold yang aman. Jadwal konstruksi harus dirancang dengan mempertimbangkan pola cuaca regional untuk mengoptimalkan waktu kerja yang produktif. Tim harus selalu memantau prakiraan cuaca dan siap untuk menyesuaikan rencana kerja harian.

Selain musim hujan, suhu ekstrem juga dapat mempengaruhi kualitas material dan kecepatan kerja. Pada cuaca panas ekstrem, pekerja perlu istirahat lebih sering dan asupan cairan lebih banyak untuk menjaga kesehatan. Manajemen yang baik terhadap faktor cuaca adalah bagian integral dari perencanaan proyek yang profesional dan matang.',
            'image' => 'https://via.placeholder.com/800x400?text=Pengaruh+Cuaca',
        ]);

        News::create([
            'title' => 'Strategi Mengurangi Biaya Konstruksi Tanpa Mengorbankan Kualitas',
            'content' => 'Mengurangi biaya konstruksi adalah kebutuhan yang umum dihadapi oleh banyak proyek namun harus dilakukan dengan bijak agar kualitas tetap terjaga. Strategi pertama adalah dengan melakukan value engineering yaitu menganalisis setiap komponen untuk menemukan alternatif yang lebih ekonomis tanpa mengorbankan fungsi. Ini bisa melibatkan penggunaan material lokal yang berkualitas atau merekayasa ulang desain untuk efisiensi.

Negosiasi yang kuat dengan supplier dan kontraktor dapat menghasilkan penghematan biaya yang signifikan. Pembelian material dalam volume besar sering kali mendapatkan diskon yang lebih baik dibanding pembelian kecil-kecilan. Sistem pembayaran yang jelas dan tepat waktu juga dapat memberikan leverage untuk mendapatkan harga yang lebih kompetitif.

Efisiensi operasional di lapangan juga sangat penting untuk mengurangi pemborosan waktu dan tenaga kerja. Perencanaan logistik yang baik, manajemen sumber daya yang efektif, dan minimalisasi rework dapat menghemat biaya operasional secara keseluruhan. Dengan strategi yang holistik dan terpadu, penghematan biaya dapat dicapai tanpa mengorbankan standar kualitas bangunan.',
            'image' => 'https://via.placeholder.com/800x400?text=Efisiensi+Biaya',
        ]);

        News::create([
            'title' => 'Jenis-jenis Pondasi dan Pemilihan yang Tepat',
            'content' => 'Pemilihan jenis pondasi yang tepat adalah fondasi dari keberhasilan konstruksi bangunan baik secara harfiah maupun kiasan. Kondisi tanah di lokasi proyek menjadi faktor utama dalam menentukan jenis pondasi yang paling sesuai dan ekonomis. Survey geoteknik yang detail harus dilakukan sebelum memutuskan jenis pondasi guna memastikan kapasitas daya dukung tanah tercukupi.

Pondasi lajur (strip foundation) cocok untuk bangunan bertingkat rendah dengan beban terdistribusi merata di atas tanah yang stabil. Pondasi plat (raft foundation) digunakan ketika tanah memiliki daya dukung yang lebih lemah dan beban bangunan berat. Pondasi tiang (pile foundation) dipilih untuk kondisi tanah yang sangat lunak atau ketika bangunan harus didirikan di atas air.

Setiap jenis pondasi memiliki kelebihan dan kekurangan serta implikasi biaya yang berbeda-beda. Konsultasi dengan engineer geoteknik yang berpengalaman sangat penting untuk membuat keputusan yang tepat. Pemilihan pondasi yang salah dapat mengakibatkan kerusakan struktural yang serius dan biaya perbaikan yang sangat mahal.',
            'image' => 'https://via.placeholder.com/800x400?text=Jenis+Pondasi',
        ]);

        News::create([
            'title' => 'Manfaat Menggunakan Software BIM dalam Manajemen Proyek',
            'content' => 'Building Information Modeling (BIM) telah merevolusi cara para profesional konstruksi merencanakan, merancang, dan melaksanakan proyek. Software BIM memungkinkan kolaborasi yang lebih baik antar disiplin ilmu karena semua informasi bangunan tersentralisasi dalam satu model 3D yang komprehensif. Visualisasi yang lebih baik membantu mengidentifikasi konflik desain sebelum pelaksanaan di lapangan.

Penggunaan BIM dapat mengurangi biaya proyek secara keseluruhan melalui perencanaan yang lebih detail dan akurat. Simulasi berbagai scenario konstruksi dapat membantu mengoptimalkan urutan pekerjaan dan alokasi sumber daya. Dokumentasi otomatis dari model BIM juga menghemat waktu yang sebelumnya dihabiskan untuk pembuatan gambar dan dokumen manual.

Untuk proyek besar dan kompleks, manfaat BIM menjadi semakin jelas dengan pengurangan signifikan dalam waste dan rework. Training yang tepat untuk tim adalah investasi penting untuk memaksimalkan manfaat penggunaan BIM. Dengan adopsi BIM yang konsisten, proyek konstruksi modern dapat mencapai efisiensi dan kualitas yang superior.',
            'image' => 'https://via.placeholder.com/800x400?text=Software+BIM',
        ]);

        News::create([
            'title' => 'Pentingnya Sertifikasi Profesional dalam Industri Konstruksi',
            'content' => 'Sertifikasi profesional dalam industri konstruksi bukan hanya sekadar penghargaan tetapi bukti kompetensi dan dedikasi terhadap standar kualitas. Sertifikasi dari lembaga yang diakui secara internasional seperti PMP atau OSHA memberikan kredibilitas dan kepercayaan kepada klien dan pihak ketiga lainnya. Profesional yang tersertifikasi menunjukkan komitmen mereka terhadap pembelajaran berkelanjutan dan perbaikan diri.

Program sertifikasi biasanya mencakup pelatihan mendalam tentang best practices, standar industri, dan keterampilan teknis yang relevan. Proses sertifikasi yang ketat memastikan bahwa hanya mereka yang benar-benar kompeten yang dapat memperoleh sertifikat. Ini menciptakan jaminan kualitas bagi klien dan meningkatkan kepercayaan publik terhadap profesional konstruksi.

Investasi dalam pendidikan dan sertifikasi profesional adalah investasi jangka panjang yang membawa manfaat karir yang signifikan. Profesional yang tersertifikasi umumnya mendapatkan peluang kerja yang lebih baik dan kompensasi yang lebih tinggi. Perusahaan konstruksi yang memiliki tim yang tersertifikasi juga memiliki reputasi yang lebih baik dan dapat memenangkan tender proyek yang lebih prestisius.',
            'image' => 'https://via.placeholder.com/800x400?text=Sertifikasi+Profesional',
        ]);

        News::create([
            'title' => 'Transformasi Digital dalam Industri Konstruksi',
            'content' => 'Transformasi digital telah mengubah cara industri konstruksi beroperasi dari perencanaan hingga penyelesaian proyek. Cloud-based project management tools memungkinkan tim yang tersebar di berbagai lokasi untuk berkomunikasi dan berkolaborasi secara efektif. Data real-time dari lapangan dapat diakses oleh semua stakeholder sehingga membuat pengambilan keputusan menjadi lebih cepat dan informed.

Internet of Things (IoT) dalam konstruksi memungkinkan monitoring otomatis terhadap kondisi material, peralatan, dan keselamatan kerja. Sensor yang dipasang pada lokasi proyek dapat memberikan data tentang suhu, kelembaban, dan kondisi struktural secara kontinyu. Analitik data besar dapat membantu memprediksi masalah sebelum terjadi dan mengoptimalkan keputusan operasional.

Augmented Reality (AR) dan Virtual Reality (VR) membuka peluang baru untuk training, simulasi, dan komunikasi visual dengan klien. Teknologi ini membantu mengurangi kesalahpahaman antara tim dan klien dengan memberikan visualisasi yang lebih realistis. Adopsi teknologi digital adalah kebutuhan untuk tetap kompetitif di industri konstruksi modern yang terus berkembang.',
            'image' => 'https://via.placeholder.com/800x400?text=Transformasi+Digital',
        ]);

        News::create([
            'title' => 'Praktik Terbaik dalam Manajemen Risiko Proyek Konstruksi',
            'content' => 'Manajemen risiko yang efektif adalah kunci untuk memastikan proyek konstruksi berjalan sesuai jadwal dan budget yang telah ditetapkan. Identifikasi risiko harus dilakukan secara komprehensif pada awal proyek melibatkan semua stakeholder untuk mengumpulkan perspektif yang beragam. Setiap risiko yang teridentifikasi harus dianalisis menurut probabilitas dan dampaknya untuk memprioritaskan penanganan.

Strategi mitigasi risiko harus dirancang secara spesifik untuk setiap risiko yang teridentifikasi dengan tujuan mengurangi kemungkinan terjadinya dan dampaknya. Contingency plan harus disiapkan untuk risiko-risiko kritis yang mungkin tidak dapat sepenuhnya dihindari. Monitoring dan control risiko yang terus menerus selama proyek berlangsung memastikan bahwa strategi mitigasi efektif dan risiko baru dapat diidentifikasi dengan segera.

Pembelajaran dari pengalaman proyek sebelumnya adalah sumber yang sangat berharga untuk meningkatkan praktik manajemen risiko. Dokumentasi yang baik mengenai risiko yang telah terjadi dan cara penanganannya dapat menjadi referensi untuk proyek-proyek mendatang. Dengan praktik manajemen risiko yang matang, proyek konstruksi dapat dijalankan dengan margin kesalahan yang minimal dan hasil yang lebih optimal.',
            'image' => 'https://via.placeholder.com/800x400?text=Manajemen+Risiko',
        ]);
    }
}
