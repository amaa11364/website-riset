<?php
$pageTitle = "Profil Peneliti - PUI-TVET Research Center";
include '../../partials/header.php';

// Simulasi data peneliti berdasarkan ID
$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;

$researchers = [
    1 => [
        'name' => 'Prof. Dr. H. Ahmad Saefudin, M.Pd.',
        'photo' => '/assets/images/researchers/prof-ahmad.jpg',
        'title' => 'Guru Besar Pendidikan Vokasi',
        'position' => 'Kepala Pusat PUI-TVET',
        'nidn' => '0023056801',
        'email' => 'ahmad.saefudin@ikipsiliwangi.ac.id',
        'phone' => '+62 812 3456 7890',
        'bidang' => ['Pendidikan Vokasi', 'Kurikulum', 'Pembelajaran Berbasis Industri'],
        'afiliasi' => 'IKIP Siliwangi',
        'pendidikan' => [
            'S3' => 'Universitas Pendidikan Indonesia - Pendidikan Teknologi dan Kejuruan (2005)',
            'S2' => 'Universitas Negeri Yogyakarta - Pendidikan Teknik (1998)',
            'S1' => 'IKIP Bandung - Pendidikan Teknik Mesin (1993)'
        ],
        'publikasi' => [
            ['tahun' => '2025', 'judul' => 'Pengembangan Model Pembelajaran Vokasi Berbasis Industri 4.0', 'jurnal' => 'Jurnal Pendidikan Vokasi'],
            ['tahun' => '2024', 'judul' => 'Analisis Kebutuhan Kompetensi Lulusan SMK di Era Digital', 'jurnal' => 'International Journal of Vocational Education'],
            ['tahun' => '2023', 'judul' => 'Framework Kolaborasi Industri-Perguruan Tinggi', 'jurnal' => 'Journal of Technical Education'],
            ['tahun' => '2023', 'judul' => 'Evaluasi Implementasi Teaching Factory di SMK', 'jurnal' => 'Jurnal Inovasi Pendidikan'],
            ['tahun' => '2022', 'judul' => 'Pengembangan Kurikulum Vokasi Berbasis Green Skills', 'jurnal' => 'Jurnal Pendidikan Teknik']
        ],
        'penelitian' => [
            '2025-2026' => 'Pengembangan Platform Pembelajaran Vokasi Berbasis AI (Ketua)',
            '2024-2025' => 'Model Sertifikasi Kompetensi Berbasis Standar Industri (Anggota)',
            '2023-2024' => 'Pengembangan Kurikulum Vokasi Berbasis Green Skills (Ketua)'
        ],
        'paten' => [
            '2024' => 'Metode Pembelajaran Vokasi Berbasis Virtual Reality',
            '2023' => 'Sistem Evaluasi Kompetensi Otomatis Berbasis AI',
            '2022' => 'Alat Peraga Pembelajaran Teknik Mesin Modular'
        ],
        'penghargaan' => [
            '2024' => 'Peneliti Terbaik Nasional - Kemdikbudristek',
            '2023' => 'Innovation Award - International Conference on Vocational Education',
            '2022' => 'Satyalancana Karya Satya - Presiden RI'
        ],
        'sinopsis' => 'Prof. Dr. H. Ahmad Saefudin, M.Pd. adalah Guru Besar Pendidikan Vokasi di IKIP Siliwangi yang saat ini menjabat sebagai Kepala Pusat PUI-TVET Research Center. Beliau memiliki pengalaman lebih dari 25 tahun dalam bidang pendidikan vokasi dan telah menghasilkan berbagai publikasi ilmiah baik di tingkat nasional maupun internasional.'
    ],
    2 => [
        'name' => 'Dr. Ratna Puspita, M.Pd.',
        'photo' => '/assets/images/researchers/dr-ratna.jpg',
        'title' => 'Sekretaris PUI-TVET',
        'position' => 'Sekretaris',
        'nidn' => '0012057201',
        'email' => 'ratna.puspita@ikipsiliwangi.ac.id',
        'phone' => '+62 813 4567 8901',
        'bidang' => ['Pendidikan Teknik', 'Evaluasi Pembelajaran', 'Pengembangan Kurikulum'],
        'afiliasi' => 'IKIP Siliwangi',
        'pendidikan' => [
            'S3' => 'Universitas Negeri Malang - Pendidikan Teknologi dan Kejuruan (2010)',
            'S2' => 'Universitas Pendidikan Indonesia - Penelitian dan Evaluasi Pendidikan (2003)',
            'S1' => 'IKIP Bandung - Pendidikan Tata Busana (1998)'
        ],
        'publikasi' => [
            ['tahun' => '2025', 'judul' => 'Pengembangan Instrumen Evaluasi Pembelajaran Vokasi', 'jurnal' => 'Jurnal Penelitian Pendidikan'],
            ['tahun' => '2024', 'judul' => 'Analisis Efektivitas Pembelajaran Daring di SMK', 'jurnal' => 'Jurnal Pendidikan Teknik'],
            ['tahun' => '2023', 'judul' => 'Model Asesmen Kompetensi Berbasis Portofolio Digital', 'jurnal' => 'International Journal of Assessment']
        ],
        'penelitian' => [
            '2025-2026' => 'Pengembangan Instrumen Evaluasi Pembelajaran Vokasi (Ketua)',
            '2024-2025' => 'Analisis Efektivitas Pembelajaran Hybrid di SMK (Anggota)'
        ],
        'paten' => [
            '2024' => 'Instrumen Evaluasi Pembelajaran Vokasi Terintegrasi'
        ],
        'penghargaan' => [
            '2024' => 'Dosen Berprestasi - IKIP Siliwangi'
        ],
        'sinopsis' => 'Dr. Ratna Puspita, M.Pd. adalah Sekretaris PUI-TVET Research Center dengan keahlian utama dalam evaluasi pembelajaran dan pengembangan kurikulum vokasi. Beliau aktif dalam berbagai penelitian tentang efektivitas pembelajaran di SMK.'
    ]
];

$researcher = $researchers[$id] ?? $researchers[1];
$avatarUrl = $researcher['photo'];
$avatarFallback = 'https://ui-avatars.com/api/?name=' . urlencode($researcher['name']) . '&size=200&background=996600&color=fff&bold=true';
?>

<div class="container main-content">
    <div class="row">
        <!-- Kolom Kiri - Konten Utama -->
        <div class="col-8">
            <article class="content-article">
                <div class="profile-header">
                    <div class="profile-avatar">
                        <img src="<?php echo $avatarUrl; ?>" alt="<?php echo $researcher['name']; ?>" onerror="this.src='<?php echo $avatarFallback; ?>'">
                    </div>
                    <div class="profile-title">
                        <h1 class="article-title"><?php echo $researcher['name']; ?></h1>
                        <p class="profile-position"><?php echo $researcher['title']; ?></p>
                        <p class="profile-role"><?php echo $researcher['position']; ?></p>
                    </div>
                </div>
                
                <div class="article-meta">
                    <span class="post-date"><i class="far fa-calendar-alt"></i> NIDN: <?php echo $researcher['nidn']; ?></span>
                    <span class="post-author"><i class="far fa-envelope"></i> <?php echo $researcher['email']; ?></span>
                </div>
                
                <div class="article-content">
                    <!-- Sinopsis -->
                    <div class="profile-synopsis">
                        <p><?php echo $researcher['sinopsis']; ?></p>
                    </div>
                    
                    <!-- Informasi Kontak -->
                    <div class="profile-contact">
                        <h2>Informasi Kontak</h2>
                        <div class="contact-grid">
                            <div class="contact-item">
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <strong>Email</strong>
                                    <span><?php echo $researcher['email']; ?></span>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-phone"></i>
                                <div>
                                    <strong>Telepon</strong>
                                    <span><?php echo $researcher['phone']; ?></span>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-university"></i>
                                <div>
                                    <strong>Afiliasi</strong>
                                    <span><?php echo $researcher['afiliasi']; ?></span>
                                </div>
                            </div>
                            <div class="contact-item">
                                <i class="fas fa-tag"></i>
                                <div>
                                    <strong>Bidang Keahlian</strong>
                                    <span><?php echo implode(', ', $researcher['bidang']); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Riwayat Pendidikan -->
                    <h2>Riwayat Pendidikan</h2>
                    <div class="education-timeline">
                        <?php foreach($researcher['pendidikan'] as $level => $desc): ?>
                        <div class="education-item">
                            <div class="edu-level"><?php echo $level; ?></div>
                            <div class="edu-desc"><?php echo $desc; ?></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Publikasi Terbaru -->
                    <h2>Publikasi Terbaru</h2>
                    <div class="publication-list">
                        <?php foreach(array_slice($researcher['publikasi'], 0, 5) as $pub): ?>
                        <div class="publication-item">
                            <div class="pub-year"><?php echo $pub['tahun']; ?></div>
                            <div class="pub-details">
                                <h3><?php echo $pub['judul']; ?></h3>
                                <p class="pub-journal"><?php echo $pub['jurnal']; ?></p>
                                <a href="#" class="pub-link">Detail <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Penelitian Berjalan -->
                    <h2>Penelitian Berjalan</h2>
                    <div class="ongoing-research">
                        <?php foreach($researcher['penelitian'] as $tahun => $judul): ?>
                        <div class="research-card">
                            <span class="research-status"><?php echo $tahun; ?></span>
                            <h3><?php echo $judul; ?></h3>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    
                    <!-- Paten dan HKI -->
                    <?php if(!empty($researcher['paten'])): ?>
                    <h2>Paten dan Hak Kekayaan Intelektual</h2>
                    <div class="patent-list">
                        <?php foreach($researcher['paten'] as $tahun => $paten): ?>
                        <div class="patent-item">
                            <span class="patent-year"><?php echo $tahun; ?></span>
                            <span class="patent-title"><?php echo $paten; ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Penghargaan -->
                    <?php if(!empty($researcher['penghargaan'])): ?>
                    <h2>Penghargaan</h2>
                    <div class="award-list">
                        <?php foreach($researcher['penghargaan'] as $tahun => $award): ?>
                        <div class="award-item">
                            <i class="fas fa-trophy"></i>
                            <div>
                                <strong><?php echo $tahun; ?></strong>
                                <span><?php echo $award; ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    
                    <!-- Tombol Kembali -->
                    <div class="back-button">
                        <a href="/pages/peneliti/daftar_peneliti.php" class="btn-view">
                            <i class="fas fa-arrow-left"></i> Kembali ke Daftar Peneliti
                        </a>
                    </div>
                </div>
            </article>
        </div>
        
        <!-- Kolom Kanan - Sidebar -->
        <div class="col-4">
            <?php include '../../partials/sidebar.php'; ?>
            
            <!-- Quick Info -->
            <div class="sidebar-widget">
                <h3 class="widget-title">Informasi Lainnya</h3>
                <div class="quick-info">
                    <div class="quick-info-item">
                        <span class="label">Scopus ID</span>
                        <span class="value">57212345678</span>
                    </div>
                    <div class="quick-info-item">
                        <span class="label">Sinta ID</span>
                        <span class="value">123456</span>
                    </div>
                    <div class="quick-info-item">
                        <span class="label">Google Scholar</span>
                        <span class="value">ahmad-saefudin</span>
                    </div>
                    <div class="quick-info-item">
                        <span class="label">ResearchGate</span>
                        <span class="value">Ahmad_Saefudin</span>
                    </div>
                </div>
            </div>
            
            <!-- Statistik -->
            <div class="sidebar-widget">
                <h3 class="widget-title">Statistik Publikasi</h3>
                <div class="researcher-stats-widget">
                    <div class="stat-item">
                        <span class="stat-value"><?php echo count($researcher['publikasi']); ?></span>
                        <span class="stat-label">Total Publikasi</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">127</span>
                        <span class="stat-label">Sitasi</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">8</span>
                        <span class="stat-label">H-Index</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value"><?php echo count($researcher['penelitian']); ?></span>
                        <span class="stat-label">Penelitian</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Profile Header */
.profile-header {
    display: flex;
    gap: 30px;
    margin-bottom: 20px;
    align-items: center;
}

.profile-avatar {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid var(--secondary-color);
    box-shadow: var(--shadow-md);
    flex-shrink: 0;
}

.profile-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-title {
    flex: 1;
}

.profile-title .article-title {
    margin-bottom: 5px;
}

.profile-position {
    font-size: 1.1rem;
    color: var(--secondary-color);
    font-weight: 600;
    margin-bottom: 5px;
}

.profile-role {
    font-size: 1rem;
    color: var(--text-medium);
    font-style: italic;
}

/* Profile Synopsis */
.profile-synopsis {
    background: var(--light-brown);
    padding: 25px;
    border-radius: 10px;
    margin: 20px 0;
    border-left: 4px solid var(--primary-color);
}

/* Contact Grid */
.contact-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin: 20px 0;
}

.contact-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px;
    background: var(--bg-white);
    border: 1px solid var(--border-color);
    border-radius: 8px;
    transition: var(--transition);
}

.contact-item:hover {
    border-color: var(--primary-color);
    box-shadow: var(--shadow-sm);
}

.contact-item i {
    width: 40px;
    height: 40px;
    background: var(--light-brown);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-color);
    font-size: 1.2rem;
}

.contact-item div {
    flex: 1;
}

.contact-item strong {
    display: block;
    font-size: 0.8rem;
    color: var(--text-light);
    margin-bottom: 3px;
}

.contact-item span {
    font-size: 0.95rem;
    color: var(--text-dark);
    font-weight: 500;
}

/* Education Timeline */
.education-timeline {
    margin: 25px 0;
}

.education-item {
    display: flex;
    gap: 20px;
    padding: 15px 0;
    border-bottom: 1px solid var(--border-color);
}

.education-item:last-child {
    border-bottom: none;
}

.edu-level {
    min-width: 50px;
    font-weight: 700;
    color: var(--primary-color);
    font-size: 1.1rem;
}

.edu-desc {
    color: var(--text-medium);
    font-size: 0.95rem;
}

/* Patent List */
.patent-list {
    margin: 20px 0;
}

.patent-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 12px;
    background: var(--bg-light);
    border-radius: 8px;
    margin-bottom: 10px;
}

.patent-year {
    background: var(--secondary-color);
    color: white;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    min-width: 70px;
    text-align: center;
}

.patent-title {
    color: var(--text-dark);
    font-weight: 500;
}

/* Award List */
.award-list {
    margin: 20px 0;
}

.award-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 12px;
    border-left: 3px solid var(--secondary-color);
    background: var(--bg-light);
    margin-bottom: 10px;
    border-radius: 0 8px 8px 0;
}

.award-item i {
    color: gold;
    font-size: 1.2rem;
    width: 30px;
    text-align: center;
}

.award-item div {
    flex: 1;
}

.award-item strong {
    display: block;
    font-size: 0.9rem;
    color: var(--primary-color);
    margin-bottom: 3px;
}

/* Quick Info */
.quick-info {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.quick-info-item {
    display: flex;
    justify-content: space-between;
    padding: 8px 0;
    border-bottom: 1px dashed var(--border-color);
}

.quick-info-item .label {
    font-size: 0.9rem;
    color: var(--text-light);
}

.quick-info-item .value {
    font-size: 0.9rem;
    color: var(--text-dark);
    font-weight: 500;
}

/* Back Button */
.back-button {
    margin-top: 40px;
    text-align: center;
}

.back-button .btn-view {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 30px;
    background: var(--primary-color);
    color: white;
    border-radius: 8px;
    font-weight: 500;
    transition: var(--transition);
}

.back-button .btn-view:hover {
    background: var(--primary-light);
    transform: translateX(-5px);
}

@media (max-width: 768px) {
    .profile-header {
        flex-direction: column;
        text-align: center;
    }
    
    .profile-avatar {
        margin: 0 auto;
    }
    
    .contact-grid {
        grid-template-columns: 1fr;
    }
    
    .education-item {
        flex-direction: column;
        gap: 5px;
    }
    
    .patent-item {
        flex-direction: column;
        text-align: center;
    }
}
</style>

<?php include '../../partials/footer.php'; ?>