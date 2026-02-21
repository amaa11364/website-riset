<?php
$pageTitle = "Galeri Dokumentasi Riset - PUI-TVET Research Center";
include '../../partials/header/index.php';
?>

<div class="container main-content">
    <div class="row">
        <!-- Kolom Kiri - Konten Utama -->
        <div class="col-8">
            <article class="content-article">
                <h1 class="article-title">Galeri Dokumentasi Riset</h1>
                
                <div class="article-meta">
                    <span class="post-date"><i class="far fa-calendar-alt"></i> Terakhir diperbarui: 28 Januari 2025</span>
                    <span class="post-author"><i class="far fa-user"></i> Oleh admin_tvet</span>
                </div>
                
                <div class="article-content">
                    <p>Dokumentasi kegiatan riset, seminar, workshop, dan berbagai kegiatan PUI-TVET Research Center. Galeri ini menampilkan momen-momen penting dalam perjalanan kami mengembangkan pendidikan teknik dan vokasi di Indonesia.</p>
                    
                    <!-- Filter Galeri -->
                    <div class="gallery-filters">
                        <button class="gallery-filter active" data-filter="all">Semua</button>
                        <button class="gallery-filter" data-filter="riset">Kegiatan Riset</button>
                        <button class="gallery-filter" data-filter="seminar">Seminar & Konferensi</button>
                        <button class="gallery-filter" data-filter="workshop">Workshop & Pelatihan</button>
                        <button class="gallery-filter" data-filter="kerjasama">Kerjasama & Kunjungan</button>
                        <button class="gallery-filter" data-filter="lab">Laboratorium</button>
                    </div>
                    
                    <!-- Featured Gallery -->
                    <div class="featured-gallery">
                        <div class="featured-gallery-main">
                            <img src="https://via.placeholder.com/800x450/996600/ffffff?text=Featured+Gallery" alt="Featured Gallery" id="featuredImage">
                            <div class="featured-caption" id="featuredCaption">
                                <h3>Konferensi Internasional Pendidikan Vokasi 2025</h3>
                                <p>Pembukaan ICVE 2025 oleh Rektor UPI dan tamu internasional</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kategori: Kegiatan Riset -->
                    <h2><i class="fas fa-flask"></i> Kegiatan Riset</h2>
                    
                    <div class="gallery-grid">
                        <div class="gallery-item" data-category="riset">
                            <img src="https://via.placeholder.com/400x300/996600/ffffff?text=Riset+Lab" alt="Kegiatan Riset">
                            <div class="gallery-overlay">
                                <h4>Penelitian Teaching Factory</h4>
                                <p>Tim peneliti sedang menguji coba modul pembelajaran di SMK N 2 Bandung</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 15 Jan 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/996600/ffffff?text=Riset+Lab"
                                    data-title="Penelitian Teaching Factory"
                                    data-desc="Tim peneliti sedang menguji coba modul pembelajaran di SMK N 2 Bandung"
                                    data-date="15 Januari 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="riset">
                            <img src="https://via.placeholder.com/400x300/b37400/ffffff?text=Riset+IoT" alt="Kegiatan Riset">
                            <div class="gallery-overlay">
                                <h4>Pengembangan IoT untuk Industri</h4>
                                <p>Uji coba alat monitoring berbasis IoT di laboratorium terpadu</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 10 Jan 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/b37400/ffffff?text=Riset+IoT"
                                    data-title="Pengembangan IoT untuk Industri"
                                    data-desc="Uji coba alat monitoring berbasis IoT di laboratorium terpadu"
                                    data-date="10 Januari 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="riset">
                            <img src="https://via.placeholder.com/400x300/cc9900/ffffff?text=Riset+Otomotif" alt="Kegiatan Riset">
                            <div class="gallery-overlay">
                                <h4>Riset Kendaraan Listrik</h4>
                                <p>Tim riset sedang melakukan pengujian baterai kendaraan listrik</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 5 Jan 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/cc9900/ffffff?text=Riset+Otomotif"
                                    data-title="Riset Kendaraan Listrik"
                                    data-desc="Tim riset sedang melakukan pengujian baterai kendaraan listrik"
                                    data-date="5 Januari 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="riset">
                            <img src="https://via.placeholder.com/400x300/7a5200/ffffff?text=Riset+AI" alt="Kegiatan Riset">
                            <div class="gallery-overlay">
                                <h4>Pengembangan AI untuk Pembelajaran</h4>
                                <p>Tim mengembangkan sistem rekomendasi pembelajaran adaptif</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 20 Des 2024</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/7a5200/ffffff?text=Riset+AI"
                                    data-title="Pengembangan AI untuk Pembelajaran"
                                    data-desc="Tim mengembangkan sistem rekomendasi pembelajaran adaptif"
                                    data-date="20 Desember 2024">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kategori: Seminar & Konferensi -->
                    <h2><i class="fas fa-users"></i> Seminar & Konferensi</h2>
                    
                    <div class="gallery-grid">
                        <div class="gallery-item" data-category="seminar">
                            <img src="https://via.placeholder.com/400x300/996600/ffffff?text=ICVE+2025" alt="Seminar">
                            <div class="gallery-overlay">
                                <h4>International Conference on Vocational Education 2025</h4>
                                <p>Pembukaan ICVE 2025 oleh Rektor UPI dan keynote speaker internasional</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 15-17 Mar 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/996600/ffffff?text=ICVE+2025"
                                    data-title="International Conference on Vocational Education 2025"
                                    data-desc="Pembukaan ICVE 2025 oleh Rektor UPI dan keynote speaker internasional"
                                    data-date="15-17 Maret 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="seminar">
                            <img src="https://via.placeholder.com/400x300/b37400/ffffff?text=Seminar+Nasional" alt="Seminar">
                            <div class="gallery-overlay">
                                <h4>Seminar Nasional Hasil Riset Vokasi</h4>
                                <p>Sesi presentasi 45 penelitian dari berbagai perguruan tinggi</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 22 Feb 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/b37400/ffffff?text=Seminar+Nasional"
                                    data-title="Seminar Nasional Hasil Riset Vokasi"
                                    data-desc="Sesi presentasi 45 penelitian dari berbagai perguruan tinggi"
                                    data-date="22 Februari 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="seminar">
                            <img src="https://via.placeholder.com/400x300/cc9900/ffffff?text=Webinar" alt="Seminar">
                            <div class="gallery-overlay">
                                <h4>Webinar Internasional: TVET di Era Society 5.0</h4>
                                <p>Diskusi panel dengan pembicara dari Jerman, Jepang, dan Indonesia</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 10 Jan 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/cc9900/ffffff?text=Webinar"
                                    data-title="Webinar Internasional: TVET di Era Society 5.0"
                                    data-desc="Diskusi panel dengan pembicara dari Jerman, Jepang, dan Indonesia"
                                    data-date="10 Januari 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="seminar">
                            <img src="https://via.placeholder.com/400x300/7a5200/ffffff?text=Seminar+Industri" alt="Seminar">
                            <div class="gallery-overlay">
                                <h4>Seminar Industri: Kolaborasi SMK dan Dunia Kerja</h4>
                                <p>Penandatanganan MoU dengan 15 mitra industri</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 5 Des 2024</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/7a5200/ffffff?text=Seminar+Industri"
                                    data-title="Seminar Industri: Kolaborasi SMK dan Dunia Kerja"
                                    data-desc="Penandatanganan MoU dengan 15 mitra industri"
                                    data-date="5 Desember 2024">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kategori: Workshop & Pelatihan -->
                    <h2><i class="fas fa-chalkboard-teacher"></i> Workshop & Pelatihan</h2>
                    
                    <div class="gallery-grid">
                        <div class="gallery-item" data-category="workshop">
                            <img src="https://via.placeholder.com/400x300/996600/ffffff?text=Workshop+IoT" alt="Workshop">
                            <div class="gallery-overlay">
                                <h4>Workshop IoT untuk Guru SMK</h4>
                                <p>Peserta praktik membuat aplikasi IoT sederhana</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 25-27 Jan 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/996600/ffffff?text=Workshop+IoT"
                                    data-title="Workshop IoT untuk Guru SMK"
                                    data-desc="Peserta praktik membuat aplikasi IoT sederhana"
                                    data-date="25-27 Januari 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="workshop">
                            <img src="https://via.placeholder.com/400x300/b37400/ffffff?text=Pelatihan+Teaching+Factory" alt="Workshop">
                            <div class="gallery-overlay">
                                <h4>Pelatihan Teaching Factory</h4>
                                <p>Simulasi pengelolaan teaching factory di SMK</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 10-12 Jan 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/b37400/ffffff?text=Pelatihan+Teaching+Factory"
                                    data-title="Pelatihan Teaching Factory"
                                    data-desc="Simulasi pengelolaan teaching factory di SMK"
                                    data-date="10-12 Januari 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="workshop">
                            <img src="https://via.placeholder.com/400x300/cc9900/ffffff?text=Workshop+Penulisan" alt="Workshop">
                            <div class="gallery-overlay">
                                <h4>Workshop Penulisan Artikel Jurnal Internasional</h4>
                                <p>Peserta konsultasi dengan editor jurnal bereputasi</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 20 Des 2024</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/cc9900/ffffff?text=Workshop+Penulisan"
                                    data-title="Workshop Penulisan Artikel Jurnal Internasional"
                                    data-desc="Peserta konsultasi dengan editor jurnal bereputasi"
                                    data-date="20 Desember 2024">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="workshop">
                            <img src="https://via.placeholder.com/400x300/7a5200/ffffff?text=Pelatihan+Otomotif" alt="Workshop">
                            <div class="gallery-overlay">
                                <h4>Pelatihan Teknologi Kendaraan Listrik</h4>
                                <p>Praktik perawatan baterai kendaraan listrik</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 5-8 Des 2024</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/7a5200/ffffff?text=Pelatihan+Otomotif"
                                    data-title="Pelatihan Teknologi Kendaraan Listrik"
                                    data-desc="Praktik perawatan baterai kendaraan listrik"
                                    data-date="5-8 Desember 2024">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kategori: Kerjasama & Kunjungan -->
                    <h2><i class="fas fa-handshake"></i> Kerjasama & Kunjungan</h2>
                    
                    <div class="gallery-grid">
                        <div class="gallery-item" data-category="kerjasama">
                            <img src="https://via.placeholder.com/400x300/996600/ffffff?text=MoU+Industri" alt="Kerjasama">
                            <div class="gallery-overlay">
                                <h4>Penandatanganan MoU dengan PT Astra Honda Motor</h4>
                                <p>Kerjasama pengembangan kurikulum otomotif</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 20 Jan 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/996600/ffffff?text=MoU+Industri"
                                    data-title="Penandatanganan MoU dengan PT Astra Honda Motor"
                                    data-desc="Kerjasama pengembangan kurikulum otomotif"
                                    data-date="20 Januari 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="kerjasama">
                            <img src="https://via.placeholder.com/400x300/b37400/ffffff?text=Kunjungan+Delegasi" alt="Kerjasama">
                            <div class="gallery-overlay">
                                <h4>Kunjungan Delegasi SEAMEO VOCTECH</h4>
                                <p>Diskusi kerjasama riset vokasi tingkat regional</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 15 Jan 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/b37400/ffffff?text=Kunjungan+Delegasi"
                                    data-title="Kunjungan Delegasi SEAMEO VOCTECH"
                                    data-desc="Diskusi kerjasama riset vokasi tingkat regional"
                                    data-date="15 Januari 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="kerjasama">
                            <img src="https://via.placeholder.com/400x300/cc9900/ffffff?text=Kunjungan+Industri" alt="Kerjasama">
                            <div class="gallery-overlay">
                                <h4>Kunjungan ke PT Dirgantara Indonesia</h4>
                                <p>Studi banding dan identifikasi kebutuhan industri</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 8 Jan 2025</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/cc9900/ffffff?text=Kunjungan+Industri"
                                    data-title="Kunjungan ke PT Dirgantara Indonesia"
                                    data-desc="Studi banding dan identifikasi kebutuhan industri"
                                    data-date="8 Januari 2025">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="kerjasama">
                            <img src="https://via.placeholder.com/400x300/7a5200/ffffff?text=Kerjasama+Internasional" alt="Kerjasama">
                            <div class="gallery-overlay">
                                <h4>Penandatanganan LoI dengan German University</h4>
                                <p>Kerjasama riset dan pertukaran peneliti</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> 5 Des 2024</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/7a5200/ffffff?text=Kerjasama+Internasional"
                                    data-title="Penandatanganan LoI dengan German University"
                                    data-desc="Kerjasama riset dan pertukaran peneliti"
                                    data-date="5 Desember 2024">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Kategori: Laboratorium -->
                    <h2><i class="fas fa-microscope"></i> Laboratorium</h2>
                    
                    <div class="gallery-grid">
                        <div class="gallery-item" data-category="lab">
                            <img src="https://via.placeholder.com/400x300/996600/ffffff?text=Lab+Otomasi" alt="Laboratorium">
                            <div class="gallery-overlay">
                                <h4>Laboratorium Otomasi Industri</h4>
                                <p>Peralatan PLC dan robotika untuk riset otomasi</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> Fasilitas</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/996600/ffffff?text=Lab+Otomasi"
                                    data-title="Laboratorium Otomasi Industri"
                                    data-desc="Peralatan PLC dan robotika untuk riset otomasi"
                                    data-date="Fasilitas">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="lab">
                            <img src="https://via.placeholder.com/400x300/b37400/ffffff?text=Lab+Komputer" alt="Laboratorium">
                            <div class="gallery-overlay">
                                <h4>Laboratorium Komputer dan AI</h4>
                                <p>Fasilitas riset machine learning dan AI</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> Fasilitas</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/b37400/ffffff?text=Lab+Komputer"
                                    data-title="Laboratorium Komputer dan AI"
                                    data-desc="Fasilitas riset machine learning dan AI"
                                    data-date="Fasilitas">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="lab">
                            <img src="https://via.placeholder.com/400x300/cc9900/ffffff?text=Lab+Otomotif" alt="Laboratorium">
                            <div class="gallery-overlay">
                                <h4>Laboratorium Otomotif</h4>
                                <p>Peralatan diagnosa kendaraan modern</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> Fasilitas</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/cc9900/ffffff?text=Lab+Otomotif"
                                    data-title="Laboratorium Otomotif"
                                    data-desc="Peralatan diagnosa kendaraan modern"
                                    data-date="Fasilitas">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                        
                        <div class="gallery-item" data-category="lab">
                            <img src="https://via.placeholder.com/400x300/7a5200/ffffff?text=Lab+CNC" alt="Laboratorium">
                            <div class="gallery-overlay">
                                <h4>Laboratorium CNC dan Manufaktur</h4>
                                <p>Mesin CNC dan 3D printer untuk riset manufaktur</p>
                                <span class="gallery-date"><i class="far fa-calendar"></i> Fasilitas</span>
                                <button class="gallery-zoom" onclick="openModal(this)" 
                                    data-image="https://via.placeholder.com/1200x800/7a5200/ffffff?text=Lab+CNC"
                                    data-title="Laboratorium CNC dan Manufaktur"
                                    data-desc="Mesin CNC dan 3D printer untuk riset manufaktur"
                                    data-date="Fasilitas">
                                    <i class="fas fa-search-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Video Gallery -->
                    <h2><i class="fas fa-video"></i> Video Dokumentasi</h2>
                    
                    <div class="video-grid">
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <img src="https://via.placeholder.com/400x250/996600/ffffff?text=Video+Riset" alt="Video">
                                <span class="play-icon"><i class="fas fa-play"></i></span>
                            </div>
                            <h4>Profil PUI-TVET Research Center</h4>
                            <p>Video profil dan capaian riset 2024-2025</p>
                        </div>
                        
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <img src="https://via.placeholder.com/400x250/b37400/ffffff?text=Video+Seminar" alt="Video">
                                <span class="play-icon"><i class="fas fa-play"></i></span>
                            </div>
                            <h4>Highlights ICVE 2025</h4>
                            <p>Cuplikan konferensi internasional pendidikan vokasi</p>
                        </div>
                        
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <img src="https://via.placeholder.com/400x250/cc9900/ffffff?text=Video+Workshop" alt="Video">
                                <span class="play-icon"><i class="fas fa-play"></i></span>
                            </div>
                            <h4>Workshop IoT untuk Guru SMK</h4>
                            <p>Dokumentasi kegiatan workshop IoT</p>
                        </div>
                        
                        <div class="video-item">
                            <div class="video-thumbnail">
                                <img src="https://via.placeholder.com/400x250/7a5200/ffffff?text=Video+Lab" alt="Video">
                                <span class="play-icon"><i class="fas fa-play"></i></span>
                            </div>
                            <h4>Virtual Tour Laboratorium</h4>
                            <p>Tur virtual fasilitas laboratorium terpadu</p>
                        </div>
                    </div>
                    
                    <!-- Lightbox Modal -->
                    <div id="imageModal" class="modal">
                        <span class="modal-close" onclick="closeModal()">&times;</span>
                        <div class="modal-content">
                            <img id="modalImage" src="" alt="Gallery Image">
                            <div class="modal-info">
                                <h3 id="modalTitle"></h3>
                                <p id="modalDesc"></p>
                                <p id="modalDate"></p>
                            </div>
                            <div class="modal-nav">
                                <button class="modal-prev" onclick="changeImage(-1)"><i class="fas fa-chevron-left"></i></button>
                                <button class="modal-next" onclick="changeImage(1)"><i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
        
        <!-- Kolom Kanan - Sidebar -->
        <div class="col-4">
            <?php include '../../partials/sidebar/index.php'; ?>
            
            <!-- Sidebar Tambahan -->
            <div class="sidebar-widget">
                <h3 class="widget-title">Album Terpopuler</h3>
                <ul class="album-list">
                    <li>
                        <a href="#">
                            <i class="fas fa-folder"></i> ICVE 2025
                            <span class="album-count">24 foto</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-folder"></i> Workshop IoT
                            <span class="album-count">18 foto</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-folder"></i> Kunjungan Industri
                            <span class="album-count">15 foto</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fas fa-folder"></i> Laboratorium
                            <span class="album-count">12 foto</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="sidebar-widget">
                <h3 class="widget-title">Tahun Dokumentasi</h3>
                <ul class="archive-years">
                    <li><a href="#">2025 <span>(48)</span></a></li>
                    <li><a href="#">2024 <span>(76)</span></a></li>
                    <li><a href="#">2023 <span>(52)</span></a></li>
                    <li><a href="#">2022 <span>(38)</span></a></li>
                </ul>
            </div>
            
            <div class="sidebar-widget">
                <h3 class="widget-title">Kontak Dokumentasi</h3>
                <div class="doc-contact">
                    <p><i class="fas fa-user"></i> Humas & Dokumentasi</p>
                    <p><i class="fas fa-envelope"></i> humas@puivet.ac.id</p>
                    <p><i class="fas fa-phone"></i> (022) 1234-5678 ext. 111</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Gallery Filters */
.gallery-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 30px 0;
    justify-content: center;
}

.gallery-filter {
    padding: 8px 18px;
    background: var(--bg-white);
    border: 1px solid var(--border-color);
    border-radius: 30px;
    cursor: pointer;
    font-size: 0.85rem;
    transition: var(--transition);
}

.gallery-filter:hover,
.gallery-filter.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

/* Featured Gallery */
.featured-gallery {
    margin: 30px 0 50px;
}

.featured-gallery-main {
    position: relative;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.featured-gallery-main img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    display: block;
}

.featured-caption {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    color: white;
    padding: 30px 20px 20px;
}

.featured-caption h3 {
    color: white;
    margin-bottom: 5px;
    font-size: 1.3rem;
}

.featured-caption p {
    color: rgba(255, 255, 255, 0.9);
    margin: 0;
}

/* Gallery Grid */
.gallery-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin: 20px 0 40px;
}

.gallery-item {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
}

.gallery-item:hover {
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}

.gallery-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s;
}

.gallery-item:hover img {
    transform: scale(1.05);
}

.gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.9));
    color: white;
    padding: 15px;
    transform: translateY(100%);
    transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-overlay {
    transform: translateY(0);
}

.gallery-overlay h4 {
    color: white;
    font-size: 0.95rem;
    margin-bottom: 3px;
}

.gallery-overlay p {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.8rem;
    margin-bottom: 5px;
}

.gallery-date {
    font-size: 0.7rem;
    color: var(--secondary-color);
    display: flex;
    align-items: center;
    gap: 3px;
}

.gallery-zoom {
    position: absolute;
    top: 10px;
    right: 10px;
    width: 35px;
    height: 35px;
    background: rgba(255,255,255,0.2);
    border: none;
    border-radius: 50%;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    backdrop-filter: blur(5px);
    transition: var(--transition);
}

.gallery-zoom:hover {
    background: var(--secondary-color);
    transform: scale(1.1);
}

/* Video Grid */
.video-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin: 30px 0;
}

.video-item {
    cursor: pointer;
}

.video-thumbnail {
    position: relative;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 10px;
}

.video-thumbnail img {
    width: 100%;
    height: 150px;
    object-fit: cover;
    display: block;
}

.play-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 40px;
    height: 40px;
    background: rgba(255,255,255,0.3);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 1rem;
    backdrop-filter: blur(5px);
    transition: var(--transition);
}

.video-item:hover .play-icon {
    background: var(--secondary-color);
    transform: translate(-50%, -50%) scale(1.1);
}

.video-item h4 {
    font-size: 0.9rem;
    margin-bottom: 3px;
}

.video-item p {
    font-size: 0.8rem;
    color: var(--text-light);
    margin: 0;
}

/* Modal */
.modal {
    display: none;
    position: fixed;
    z-index: 2000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.95);
}

.modal.show {
    display: flex;
    align-items: center;
    justify-content: center;
}

.modal-close {
    position: absolute;
    top: 20px;
    right: 30px;
    color: white;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
    z-index: 2001;
}

.modal-close:hover {
    color: var(--secondary-color);
}

.modal-content {
    position: relative;
    max-width: 90%;
    max-height: 90vh;
}

.modal-content img {
    max-width: 100%;
    max-height: 70vh;
    object-fit: contain;
    border-radius: 8px;
}

.modal-info {
    color: white;
    text-align: center;
    padding: 20px;
}

.modal-info h3 {
    color: white;
    margin-bottom: 5px;
}

.modal-info p {
    color: rgba(255,255,255,0.8);
    margin: 5px 0;
}

.modal-nav {
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}

.modal-prev,
.modal-next {
    background: rgba(255,255,255,0.2);
    border: none;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1.2rem;
    transition: var(--transition);
}

.modal-prev:hover,
.modal-next:hover {
    background: var(--secondary-color);
}

/* Sidebar */
.album-list,
.archive-years {
    list-style: none;
}

.album-list li,
.archive-years li {
    margin-bottom: 10px;
    padding-bottom: 10px;
    border-bottom: 1px solid var(--border-color);
}

.album-list li:last-child,
.archive-years li:last-child {
    border-bottom: none;
}

.album-list a,
.archive-years a {
    display: flex;
    justify-content: space-between;
    color: var(--text-medium);
    font-size: 0.9rem;
}

.album-list a:hover,
.archive-years a:hover {
    color: var(--primary-color);
}

.album-count,
.archive-years span {
    color: var(--text-light);
    font-size: 0.8rem;
}

.doc-contact p {
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.doc-contact i {
    width: 20px;
    color: var(--secondary-color);
}

/* Responsive */
@media (max-width: 768px) {
    .gallery-grid {
        grid-template-columns: 1fr;
    }
    
    .video-grid {
        grid-template-columns: 1fr;
    }
    
    .featured-gallery-main img {
        height: 250px;
    }
    
    .modal-nav {
        display: none;
    }
}
</style>

<script>
// Gallery Filter
document.addEventListener('DOMContentLoaded', function() {
    const filters = document.querySelectorAll('.gallery-filter');
    const items = document.querySelectorAll('.gallery-item');
    
    filters.forEach(filter => {
        filter.addEventListener('click', function() {
            // Remove active class from all filters
            filters.forEach(f => f.classList.remove('active'));
            // Add active class to clicked filter
            this.classList.add('active');
            
            const category = this.getAttribute('data-filter');
            
            items.forEach(item => {
                if (category === 'all' || item.getAttribute('data-category') === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});

// Modal
let currentImageIndex = 0;
let galleryImages = [];

function openModal(button) {
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDesc = document.getElementById('modalDesc');
    const modalDate = document.getElementById('modalDate');
    
    // Get image data
    const imgSrc = button.getAttribute('data-image');
    const title = button.getAttribute('data-title');
    const desc = button.getAttribute('data-desc');
    const date = button.getAttribute('data-date');
    
    // Set modal content
    modalImg.src = imgSrc;
    modalTitle.textContent = title;
    modalDesc.textContent = desc;
    modalDate.innerHTML = '<i class="far fa-calendar-alt"></i> ' + date;
    
    // Show modal
    modal.classList.add('show');
    
    // Collect all gallery images for navigation
    galleryImages = Array.from(document.querySelectorAll('.gallery-zoom')).map(btn => ({
        src: btn.getAttribute('data-image'),
        title: btn.getAttribute('data-title'),
        desc: btn.getAttribute('data-desc'),
        date: btn.getAttribute('data-date')
    }));
    
    currentImageIndex = galleryImages.findIndex(img => img.src === imgSrc);
}

function closeModal() {
    document.getElementById('imageModal').classList.remove('show');
}

function changeImage(direction) {
    currentImageIndex += direction;
    
    if (currentImageIndex < 0) {
        currentImageIndex = galleryImages.length - 1;
    } else if (currentImageIndex >= galleryImages.length) {
        currentImageIndex = 0;
    }
    
    const img = galleryImages[currentImageIndex];
    document.getElementById('modalImage').src = img.src;
    document.getElementById('modalTitle').textContent = img.title;
    document.getElementById('modalDesc').textContent = img.desc;
    document.getElementById('modalDate').innerHTML = '<i class="far fa-calendar-alt"></i> ' + img.date;
}

// Close modal with ESC key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    } else if (e.key === 'ArrowLeft') {
        changeImage(-1);
    } else if (e.key === 'ArrowRight') {
        changeImage(1);
    }
});
</script>

<?php include '../../partials/footer/index.php'; ?>