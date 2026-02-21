<?php
$pageTitle = "Daftar Peneliti - PUI-TVET Research Center";
include '../../partials/header.php';
?>

<div class="container main-content">
    <div class="row">
        <!-- Kolom Kiri - Konten Utama -->
        <div class="col-8">
            <article class="content-article">
                <h1 class="article-title">Daftar Peneliti</h1>
                
                <div class="article-meta">
                    <span class="post-date"><i class="far fa-calendar-alt"></i> Terakhir diperbarui: 20 Februari 2025</span>
                    <span class="post-author"><i class="far fa-user"></i> Oleh admin_tvet</span>
                </div>
                
                <div class="article-content">
                    <p>PUI-TVET Research Center memiliki tim peneliti yang kompeten dan berpengalaman di bidang pendidikan teknik dan vokasi. Para peneliti berasal dari berbagai latar belakang keilmuan dan telah menghasilkan berbagai publikasi ilmiah baik di tingkat nasional maupun internasional.</p>
                    
                    <!-- Search and Filter -->
                    <div class="researcher-search">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Cari peneliti berdasarkan nama atau bidang keahlian..." id="searchResearcher">
                        </div>
                        
                        <div class="filter-box">
                            <select id="filterBidang">
                                <option value="">Semua Bidang</option>
                                <option value="pendidikan">Pendidikan Vokasi</option>
                                <option value="teknik">Teknik</option>
                                <option value="informatika">Informatika</option>
                                <option value="industri">Teknik Industri</option>
                                <option value="mesin">Teknik Mesin</option>
                                <option value="elektro">Teknik Elektro</option>
                                <option value="sipil">Teknik Sipil</option>
                            </select>
                            
                            <select id="filterStatus">
                                <option value="">Semua Status</option>
                                <option value="ketua">Ketua Peneliti</option>
                                <option value="anggota">Anggota Peneliti</option>
                                <option value="senior">Peneliti Senior</option>
                                <option value="muda">Peneliti Muda</option>
                            </select>
                        </div>
                    </div>
                    
                    <!-- Researchers Grid -->
                    <div class="researchers-grid">
                        <!-- Researcher Card 1 -->
                        <div class="researcher-card" data-bidang="pendidikan" data-status="senior">
                            <div class="researcher-avatar">
                                <img src="/assets/images/researchers/prof-ahmad.jpg" alt="Prof. Ahmad Saefudin" onerror="this.src='https://ui-avatars.com/api/?name=Ahmad+Saefudin&size=100&background=996600&color=fff&bold=true'">
                            </div>
                            <div class="researcher-info">
                                <h3 class="researcher-name">Prof. Dr. H. Ahmad Saefudin, M.Pd.</h3>
                                <p class="researcher-title">Guru Besar Pendidikan Vokasi</p>
                                <p class="researcher-bidang"><i class="fas fa-tag"></i> Pendidikan Vokasi, Kurikulum</p>
                                <p class="researcher-afiliasi"><i class="fas fa-university"></i> IKIP Siliwangi</p>
                                <div class="researcher-stats">
                                    <span><i class="fas fa-file-alt"></i> 45 Publikasi</span>
                                    <span><i class="fas fa-book"></i> 8 Buku</span>
                                    <span><i class="fas fa-trophy"></i> 12 Paten</span>
                                </div>
                                <div class="researcher-actions">
                                    <a href="/pages/peneliti/profil_peneliti.php?id=1" class="btn-view">
                                        <i class="fas fa-user"></i> Lihat Profil
                                    </a>
                                    <a href="#" class="btn-contact">
                                        <i class="fas fa-envelope"></i> Kontak
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Researcher Card 2 -->
                        <div class="researcher-card" data-bidang="pendidikan" data-status="senior">
                            <div class="researcher-avatar">
                                <img src="/assets/images/researchers/dr-ratna.jpg" alt="Dr. Ratna Puspita" onerror="this.src='https://ui-avatars.com/api/?name=Ratna+Puspita&size=100&background=b37400&color=fff&bold=true'">
                            </div>
                            <div class="researcher-info">
                                <h3 class="researcher-name">Dr. Ratna Puspita, M.Pd.</h3>
                                <p class="researcher-title">Sekretaris PUI-TVET</p>
                                <p class="researcher-bidang"><i class="fas fa-tag"></i> Pendidikan Teknik, Evaluasi Pembelajaran</p>
                                <p class="researcher-afiliasi"><i class="fas fa-university"></i> IKIP Siliwangi</p>
                                <div class="researcher-stats">
                                    <span><i class="fas fa-file-alt"></i> 32 Publikasi</span>
                                    <span><i class="fas fa-book"></i> 5 Buku</span>
                                    <span><i class="fas fa-trophy"></i> 7 Paten</span>
                                </div>
                                <div class="researcher-actions">
                                    <a href="/pages/peneliti/profil_peneliti.php?id=2" class="btn-view">
                                        <i class="fas fa-user"></i> Lihat Profil
                                    </a>
                                    <a href="#" class="btn-contact">
                                        <i class="fas fa-envelope"></i> Kontak
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Researcher Card 3 -->
                        <div class="researcher-card" data-bidang="informatika" data-status="senior">
                            <div class="researcher-avatar">
                                <img src="/assets/images/researchers/dr-agus.jpg" alt="Dr. Agus Wibowo" onerror="this.src='https://ui-avatars.com/api/?name=Agus+Wibowo&size=100&background=cc9900&color=fff&bold=true'">
                            </div>
                            <div class="researcher-info">
                                <h3 class="researcher-name">Dr. Agus Wibowo, M.T.</h3>
                                <p class="researcher-title">Kepala Divisi Riset</p>
                                <p class="researcher-bidang"><i class="fas fa-tag"></i> Teknik Informatika, AI dalam Pendidikan</p>
                                <p class="researcher-afiliasi"><i class="fas fa-university"></i> IKIP Siliwangi</p>
                                <div class="researcher-stats">
                                    <span><i class="fas fa-file-alt"></i> 28 Publikasi</span>
                                    <span><i class="fas fa-book"></i> 3 Buku</span>
                                    <span><i class="fas fa-trophy"></i> 15 Paten</span>
                                </div>
                                <div class="researcher-actions">
                                    <a href="/pages/peneliti/profil_peneliti.php?id=3" class="btn-view">
                                        <i class="fas fa-user"></i> Lihat Profil
                                    </a>
                                    <a href="#" class="btn-contact">
                                        <i class="fas fa-envelope"></i> Kontak
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Researcher Card 4 -->
                        <div class="researcher-card" data-bidang="pendidikan" data-status="senior">
                            <div class="researcher-avatar">
                                <img src="/assets/images/researchers/dr-siti.jpg" alt="Dr. Siti Nurjanah" onerror="this.src='https://ui-avatars.com/api/?name=Siti+Nurjanah&size=100&background=7a5200&color=fff&bold=true'">
                            </div>
                            <div class="researcher-info">
                                <h3 class="researcher-name">Dr. Siti Nurjanah, M.Si.</h3>
                                <p class="researcher-title">Kepala Divisi Pengembangan</p>
                                <p class="researcher-bidang"><i class="fas fa-tag"></i> Psikologi Pendidikan, Pengembangan Kurikulum</p>
                                <p class="researcher-afiliasi"><i class="fas fa-university"></i> IKIP Siliwangi</p>
                                <div class="researcher-stats">
                                    <span><i class="fas fa-file-alt"></i> 25 Publikasi</span>
                                    <span><i class="fas fa-book"></i> 4 Buku</span>
                                    <span><i class="fas fa-trophy"></i> 3 Paten</span>
                                </div>
                                <div class="researcher-actions">
                                    <a href="/pages/peneliti/profil_peneliti.php?id=4" class="btn-view">
                                        <i class="fas fa-user"></i> Lihat Profil
                                    </a>
                                    <a href="#" class="btn-contact">
                                        <i class="fas fa-envelope"></i> Kontak
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Researcher Card 5 -->
                        <div class="researcher-card" data-bidang="industri" data-status="senior">
                            <div class="researcher-avatar">
                                <img src="/assets/images/researchers/dr-hendra.jpg" alt="Dr. Hendra Gunawan" onerror="this.src='https://ui-avatars.com/api/?name=Hendra+Gunawan&size=100&background=996600&color=fff&bold=true'">
                            </div>
                            <div class="researcher-info">
                                <h3 class="researcher-name">Dr. Hendra Gunawan, M.Pd.</h3>
                                <p class="researcher-title">Kepala Divisi Kolaborasi Industri</p>
                                <p class="researcher-bidang"><i class="fas fa-tag"></i> Teknik Industri, Manajemen Produksi</p>
                                <p class="researcher-afiliasi"><i class="fas fa-university"></i> IKIP Siliwangi</p>
                                <div class="researcher-stats">
                                    <span><i class="fas fa-file-alt"></i> 22 Publikasi</span>
                                    <span><i class="fas fa-book"></i> 2 Buku</span>
                                    <span><i class="fas fa-trophy"></i> 8 Paten</span>
                                </div>
                                <div class="researcher-actions">
                                    <a href="/pages/peneliti/profil_peneliti.php?id=5" class="btn-view">
                                        <i class="fas fa-user"></i> Lihat Profil
                                    </a>
                                    <a href="#" class="btn-contact">
                                        <i class="fas fa-envelope"></i> Kontak
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Researcher Card 6 -->
                        <div class="researcher-card" data-bidang="mesin" data-status="senior">
                            <div class="researcher-avatar">
                                <img src="/assets/images/researchers/ir-bambang.jpg" alt="Ir. Bambang Purnomo" onerror="this.src='https://ui-avatars.com/api/?name=Bambang+Purnomo&size=100&background=b37400&color=fff&bold=true'">
                            </div>
                            <div class="researcher-info">
                                <h3 class="researcher-name">Ir. Bambang Purnomo, M.T.</h3>
                                <p class="researcher-title">Kepala Divisi Pelatihan</p>
                                <p class="researcher-bidang"><i class="fas fa-tag"></i> Teknik Mesin, Manufaktur</p>
                                <p class="researcher-afiliasi"><i class="fas fa-university"></i> IKIP Siliwangi</p>
                                <div class="researcher-stats">
                                    <span><i class="fas fa-file-alt"></i> 18 Publikasi</span>
                                    <span><i class="fas fa-book"></i> 1 Buku</span>
                                    <span><i class="fas fa-trophy"></i> 10 Paten</span>
                                </div>
                                <div class="researcher-actions">
                                    <a href="/pages/peneliti/profil_peneliti.php?id=6" class="btn-view">
                                        <i class="fas fa-user"></i> Lihat Profil
                                    </a>
                                    <a href="#" class="btn-contact">
                                        <i class="fas fa-envelope"></i> Kontak
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Researcher Card 7 -->
                        <div class="researcher-card" data-bidang="pendidikan" data-status="muda">
                            <div class="researcher-avatar">
                                <img src="/assets/images/researchers/dr-rina.jpg" alt="Dr. Rina Andriani" onerror="this.src='https://ui-avatars.com/api/?name=Rina+Andriani&size=100&background=cc9900&color=fff&bold=true'">
                            </div>
                            <div class="researcher-info">
                                <h3 class="researcher-name">Dr. Rina Andriani, M.T.</h3>
                                <p class="researcher-title">Sub Divisi Penelitian Terapan</p>
                                <p class="researcher-bidang"><i class="fas fa-tag"></i> Teknik Informatika, Sistem Informasi</p>
                                <p class="researcher-afiliasi"><i class="fas fa-university"></i> IKIP Siliwangi</p>
                                <div class="researcher-stats">
                                    <span><i class="fas fa-file-alt"></i> 15 Publikasi</span>
                                    <span><i class="fas fa-book"></i> 1 Buku</span>
                                    <span><i class="fas fa-trophy"></i> 4 Paten</span>
                                </div>
                                <div class="researcher-actions">
                                    <a href="/pages/peneliti/profil_peneliti.php?id=7" class="btn-view">
                                        <i class="fas fa-user"></i> Lihat Profil
                                    </a>
                                    <a href="#" class="btn-contact">
                                        <i class="fas fa-envelope"></i> Kontak
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Researcher Card 8 -->
                        <div class="researcher-card" data-bidang="pendidikan" data-status="muda">
                            <div class="researcher-avatar">
                                <img src="/assets/images/researchers/dr-lestari.jpg" alt="Dr. Lestari Handayani" onerror="this.src='https://ui-avatars.com/api/?name=Lestari+Handayani&size=100&background=7a5200&color=fff&bold=true'">
                            </div>
                            <div class="researcher-info">
                                <h3 class="researcher-name">Dr. Lestari Handayani, M.Pd.</h3>
                                <p class="researcher-title">Sub Divisi Publikasi</p>
                                <p class="researcher-bidang"><i class="fas fa-tag"></i> Pendidikan Bahasa, Literasi</p>
                                <p class="researcher-afiliasi"><i class="fas fa-university"></i> IKIP Siliwangi</p>
                                <div class="researcher-stats">
                                    <span><i class="fas fa-file-alt"></i> 20 Publikasi</span>
                                    <span><i class="fas fa-book"></i> 3 Buku</span>
                                    <span><i class="fas fa-trophy"></i> 2 Paten</span>
                                </div>
                                <div class="researcher-actions">
                                    <a href="/pages/peneliti/profil_peneliti.php?id=8" class="btn-view">
                                        <i class="fas fa-user"></i> Lihat Profil
                                    </a>
                                    <a href="#" class="btn-contact">
                                        <i class="fas fa-envelope"></i> Kontak
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="pagination">
                        <a href="#" class="page-link active">1</a>
                        <a href="#" class="page-link">2</a>
                        <a href="#" class="page-link">3</a>
                        <a href="#" class="page-link">4</a>
                        <a href="#" class="page-link">5</a>
                        <a href="#" class="page-link next"><i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
            </article>
        </div>
        
        <!-- Kolom Kanan - Sidebar -->
        <div class="col-4">
            <?php include '../../partials/sidebar.php'; ?>
            
            <!-- Additional Widget for Researchers -->
            <div class="sidebar-widget">
                <h3 class="widget-title">Statistik Peneliti</h3>
                <div class="researcher-stats-widget">
                    <div class="stat-item">
                        <span class="stat-value">28</span>
                        <span class="stat-label">Total Peneliti</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">12</span>
                        <span class="stat-label">Peneliti Senior</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">16</span>
                        <span class="stat-label">Peneliti Muda</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">8</span>
                        <span class="stat-label">Bidang Keahlian</span>
                    </div>
                </div>
            </div>
            
            <div class="sidebar-widget">
                <h3 class="widget-title">Bidang Keahlian</h3>
                <div class="expertise-list">
                    <a href="#" class="expertise-item">Pendidikan Vokasi <span>(12)</span></a>
                    <a href="#" class="expertise-item">Teknik Informatika <span>(8)</span></a>
                    <a href="#" class="expertise-item">Teknik Industri <span>(5)</span></a>
                    <a href="#" class="expertise-item">Teknik Mesin <span>(4)</span></a>
                    <a href="#" class="expertise-item">Teknik Elektro <span>(3)</span></a>
                    <a href="#" class="expertise-item">Teknik Sipil <span>(2)</span></a>
                    <a href="#" class="expertise-item">Pendidikan Bahasa <span>(4)</span></a>
                    <a href="#" class="expertise-item">Psikologi Pendidikan <span>(3)</span></a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
/* Researcher Search */
.researcher-search {
    margin: 30px 0;
    background: var(--bg-light);
    padding: 25px;
    border-radius: 10px;
    border: 1px solid var(--border-color);
}

.search-box {
    display: flex;
    align-items: center;
    background: white;
    border: 1px solid var(--border-color);
    border-radius: 8px;
    padding: 0 15px;
    margin-bottom: 15px;
}

.search-box i {
    color: var(--text-light);
    font-size: 1rem;
}

.search-box input {
    width: 100%;
    padding: 15px;
    border: none;
    outline: none;
    font-size: 1rem;
    background: transparent;
}

.filter-box {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.filter-box select {
    padding: 12px 15px;
    border: 1px solid var(--border-color);
    border-radius: 8px;
    font-size: 0.95rem;
    color: var(--text-medium);
    background: white;
    cursor: pointer;
    outline: none;
}

.filter-box select:focus {
    border-color: var(--primary-color);
    box-shadow: 0 0 0 3px rgba(153, 102, 0, 0.1);
}

/* Researchers Grid */
.researchers-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 25px;
    margin: 30px 0;
}

.researcher-card {
    display: flex;
    gap: 25px;
    background: var(--bg-white);
    border: 1px solid var(--border-color);
    border-radius: 12px;
    padding: 25px;
    transition: var(--transition);
    position: relative;
}

.researcher-card:hover {
    transform: translateY(-3px);
    box-shadow: var(--shadow-lg);
    border-color: var(--secondary-color);
}

.researcher-avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid var(--light-brown);
    box-shadow: var(--shadow-sm);
    flex-shrink: 0;
}

.researcher-avatar img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.researcher-info {
    flex: 1;
}

.researcher-name {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 5px;
}

.researcher-title {
    font-size: 1rem;
    color: var(--secondary-color);
    font-weight: 600;
    margin-bottom: 10px;
}

.researcher-bidang, .researcher-afiliasi {
    font-size: 0.95rem;
    color: var(--text-medium);
    margin-bottom: 8px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.researcher-bidang i, .researcher-afiliasi i {
    width: 18px;
    color: var(--primary-color);
}

.researcher-stats {
    display: flex;
    gap: 20px;
    margin: 15px 0;
    padding: 10px 0;
    border-top: 1px solid var(--border-color);
    border-bottom: 1px solid var(--border-color);
}

.researcher-stats span {
    font-size: 0.9rem;
    color: var(--text-medium);
    display: flex;
    align-items: center;
    gap: 5px;
}

.researcher-stats i {
    color: var(--secondary-color);
}

.researcher-actions {
    display: flex;
    gap: 10px;
}

.btn-view, .btn-contact {
    padding: 8px 20px;
    border-radius: 6px;
    font-size: 0.9rem;
    font-weight: 500;
    transition: var(--transition);
    display: inline-flex;
    align-items: center;
    gap: 8px;
}

.btn-view {
    background: var(--primary-color);
    color: white;
}

.btn-view:hover {
    background: var(--primary-light);
    color: white;
}

.btn-contact {
    background: var(--light-brown);
    color: var(--primary-color);
    border: 1px solid var(--border-color);
}

.btn-contact:hover {
    background: var(--secondary-color);
    color: white;
    border-color: var(--secondary-color);
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    gap: 8px;
    margin-top: 40px;
}

.page-link {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 8px;
    background: var(--bg-white);
    border: 1px solid var(--border-color);
    color: var(--text-medium);
    font-weight: 500;
    transition: var(--transition);
}

.page-link:hover, .page-link.active {
    background: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.page-link.next {
    width: auto;
    padding: 0 15px;
}

/* Sidebar Widgets */
.researcher-stats-widget {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 15px;
}

.stat-item {
    text-align: center;
    padding: 15px;
    background: var(--light-brown);
    border-radius: 8px;
    border: 1px solid var(--border-color);
}

.stat-value {
    display: block;
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--primary-color);
    line-height: 1.2;
}

.stat-label {
    font-size: 0.8rem;
    color: var(--text-medium);
}

.expertise-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.expertise-item {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid var(--border-color);
    color: var(--text-medium);
    transition: var(--transition);
}

.expertise-item:hover {
    color: var(--primary-color);
    padding-left: 5px;
}

.expertise-item span {
    color: var(--text-light);
    font-size: 0.9rem;
}

@media (max-width: 768px) {
    .researcher-card {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }
    
    .researcher-stats {
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }
    
    .researcher-actions {
        justify-content: center;
    }
    
    .filter-box {
        grid-template-columns: 1fr;
    }
    
    .researcher-stats-widget {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 576px) {
    .researcher-avatar {
        width: 100px;
        height: 100px;
    }
    
    .researcher-name {
        font-size: 1.1rem;
    }
    
    .researcher-actions {
        flex-direction: column;
    }
    
    .btn-view, .btn-contact {
        width: 100%;
        justify-content: center;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchResearcher');
    const filterBidang = document.getElementById('filterBidang');
    const filterStatus = document.getElementById('filterStatus');
    const researcherCards = document.querySelectorAll('.researcher-card');
    
    function filterResearchers() {
        const searchTerm = searchInput.value.toLowerCase();
        const bidangValue = filterBidang.value;
        const statusValue = filterStatus.value;
        
        researcherCards.forEach(card => {
            const name = card.querySelector('.researcher-name').textContent.toLowerCase();
            const bidang = card.dataset.bidang;
            const status = card.dataset.status;
            
            const matchesSearch = name.includes(searchTerm);
            const matchesBidang = !bidangValue || bidang === bidangValue;
            const matchesStatus = !statusValue || status === statusValue;
            
            if (matchesSearch && matchesBidang && matchesStatus) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }
    
    searchInput.addEventListener('input', filterResearchers);
    filterBidang.addEventListener('change', filterResearchers);
    filterStatus.addEventListener('change', filterResearchers);
});
</script>

<?php include '../../partials/footer.php'; ?>