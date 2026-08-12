

<?php $__env->startSection('title', 'Tentang Aplikasi POS'); ?>

<?php $__env->startSection('content'); ?>

<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    * {
        box-sizing: border-box;
    }

    body {
        background: #f4f7fb;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .about-wrapper {
        max-width: 1150px;
        margin: 35px auto;
        padding: 0 20px;
    }

    /* HERO */
    .hero-card {
        position: relative;
        overflow: hidden;
        border-radius: 25px;
        padding: 50px 45px;
        color: white;
        background: linear-gradient(
            135deg,
            #0d6efd 0%,
            #2563eb 45%,
            #4f46e5 100%
        );
        box-shadow: 0 15px 40px rgba(37, 99, 235, 0.22);
        margin-bottom: 25px;
    }

    .hero-card::before {
        content: "";
        position: absolute;
        width: 250px;
        height: 250px;
        border-radius: 50%;
        background: rgba(255,255,255,0.08);
        top: -100px;
        right: -70px;
    }

    .hero-card::after {
        content: "";
        position: absolute;
        width: 180px;
        height: 180px;
        border-radius: 50%;
        background: rgba(255,255,255,0.06);
        bottom: -90px;
        left: -50px;
    }

    .hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
    }

    .hero-icon {
        width: 75px;
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
        border-radius: 22px;
        background: rgba(255,255,255,0.16);
        border: 1px solid rgba(255,255,255,0.25);
        font-size: 38px;
        backdrop-filter: blur(8px);
    }

    .hero-content h1 {
        font-size: 34px;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .hero-content p {
        font-size: 16px;
        margin: 0;
        color: rgba(255,255,255,0.88);
    }

    /* MAIN CARD */
    .section-card {
        background: white;
        border-radius: 24px;
        padding: 35px;
        margin-bottom: 25px;
        border: 1px solid #e8edf5;
        box-shadow: 0 8px 30px rgba(15, 23, 42, 0.06);
    }

    .section-title {
        display: flex;
        align-items: center;
        gap: 12px;
        font-size: 22px;
        font-weight: 750;
        color: #172033;
        margin-bottom: 22px;
    }

    .section-title .title-icon {
        width: 43px;
        height: 43px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 13px;
        background: #eaf2ff;
        color: #0d6efd;
        font-size: 21px;
    }

    .description {
        color: #64748b;
        font-size: 15px;
        line-height: 1.9;
        margin-bottom: 0;
    }

    .description strong {
        color: #334155;
    }

    /* STATS */
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 18px;
        margin-top: 28px;
    }

    .stat-card {
        padding: 20px;
        border-radius: 18px;
        background: #f8fafc;
        border: 1px solid #edf1f7;
        transition: 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
    }

    .stat-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #eaf2ff;
        color: #0d6efd;
        font-size: 20px;
        margin-bottom: 12px;
    }

    .stat-number {
        font-size: 22px;
        font-weight: 800;
        color: #172033;
    }

    .stat-label {
        font-size: 13px;
        color: #64748b;
        margin-top: 3px;
    }

    /* FEATURES */
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 18px;
    }

    .feature-card {
        position: relative;
        display: flex;
        gap: 17px;
        padding: 22px;
        background: #f8fafc;
        border: 1px solid #edf1f7;
        border-radius: 18px;
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        background: white;
        box-shadow: 0 12px 28px rgba(15, 23, 42, 0.08);
        border-color: #dbe7ff;
    }

    .feature-icon {
        min-width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 15px;
        background: #eaf2ff;
        color: #0d6efd;
        font-size: 24px;
    }

    .feature-card:nth-child(2) .feature-icon {
        background: #e9fbf2;
        color: #16a34a;
    }

    .feature-card:nth-child(3) .feature-icon {
        background: #fff7df;
        color: #f59e0b;
    }

    .feature-card:nth-child(4) .feature-icon {
        background: #e9f9ff;
        color: #06b6d4;
    }

    .feature-card h5 {
        margin: 0 0 7px;
        color: #172033;
        font-size: 16px;
        font-weight: 750;
    }

    .feature-card p {
        margin: 0;
        color: #64748b;
        font-size: 13px;
        line-height: 1.7;
    }

    /* BIODATA */
    .profile-area {
        display: grid;
        grid-template-columns: 250px 1fr;
        gap: 45px;
        align-items: center;
    }

    .profile-box {
        text-align: center;
    }

    .profile-photo {
        width: 170px;
        height: 170px;
        margin: 0 auto 15px;
        border-radius: 50%;
        object-fit: cover;
        border: 7px solid #edf4ff;
        box-shadow: 0 10px 25px rgba(13, 110, 253, 0.15);
    }

    .profile-name {
        font-size: 18px;
        font-weight: 800;
        color: #172033;
        margin-bottom: 4px;
    }

    .profile-role {
        color: #64748b;
        font-size: 13px;
    }

    .biodata-list {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .biodata-item {
        display: grid;
        grid-template-columns: 145px 20px 1fr;
        padding: 13px 16px;
        border-radius: 12px;
        background: #f8fafc;
        font-size: 14px;
    }

    .biodata-label {
        color: #64748b;
        font-weight: 650;
    }

    .biodata-colon {
        color: #94a3b8;
    }

    .biodata-value {
        color: #172033;
        font-weight: 500;
    }

    /* CONTACT */
    .contact-section {
        margin-top: 35px;
        padding-top: 28px;
        border-top: 1px solid #e5eaf1;
    }

    .contact-title {
        font-size: 17px;
        font-weight: 750;
        color: #172033;
        margin-bottom: 17px;
    }

    .contact-buttons {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
    }

    .contact-btn {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        padding: 11px 18px;
        border-radius: 12px;
        text-decoration: none;
        font-size: 13px;
        font-weight: 650;
        transition: 0.3s;
    }

    .contact-btn:hover {
        transform: translateY(-3px);
    }

    .btn-email {
        color: #dc2626;
        border: 1px solid #fecaca;
        background: #fff5f5;
    }

    .btn-instagram {
        color: #c026d3;
        border: 1px solid #f5d0fe;
        background: #fdf4ff;
    }

    .btn-github {
        color: #172033;
        border: 1px solid #d1d5db;
        background: #f8fafc;
    }

    .btn-home {
        color: #0d6efd;
        border: 1px solid #bfdbfe;
        background: #eff6ff;
    }

    /* FOOTER */
    .about-footer {
        text-align: center;
        padding: 10px 0 30px;
        color: #94a3b8;
        font-size: 13px;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {

        .about-wrapper {
            margin-top: 20px;
            padding: 0 12px;
        }

        .hero-card {
            padding: 38px 20px;
            border-radius: 20px;
        }

        .hero-content h1 {
            font-size: 27px;
        }

        .section-card {
            padding: 25px 20px;
            border-radius: 20px;
        }

        .stats-grid {
            grid-template-columns: 1fr;
        }

        .feature-grid {
            grid-template-columns: 1fr;
        }

        .profile-area {
            grid-template-columns: 1fr;
            gap: 30px;
        }

        .biodata-item {
            grid-template-columns: 110px 15px 1fr;
            font-size: 13px;
        }

        .contact-buttons {
            flex-direction: column;
        }

        .contact-btn {
            justify-content: center;
        }
    }

    @media (max-width: 480px) {

        .hero-content h1 {
            font-size: 24px;
        }

        .hero-content p {
            font-size: 13px;
        }

        .section-title {
            font-size: 19px;
        }

        .feature-card {
            padding: 17px;
        }

        .biodata-item {
            grid-template-columns: 1fr;
            gap: 3px;
        }

        .biodata-colon {
            display: none;
        }
    }
</style>


<div class="about-wrapper">

    
    <div class="hero-card">
        <div class="hero-content">

            <div class="hero-icon">
                <i class="bi bi-shop"></i>
            </div>

            <h1>Tentang Aplikasi POS</h1>

            <p>
                Sistem Point of Sale untuk Pengelolaan Transaksi & Stok
            </p>

        </div>
    </div>


    
    <div class="section-card">

        <div class="section-title">
            <div class="title-icon">
                <i class="bi bi-rocket-takeoff-fill"></i>
            </div>

            <span>Deskripsi Aplikasi</span>
        </div>

        <p class="description">
            Aplikasi <strong>Point of Sale (POS)</strong> ini dirancang
            untuk memudahkan proses pencatatan penjualan, pengelolaan
            stok barang, serta pemantauan data transaksi secara
            <strong>real-time</strong>.
            Dengan antarmuka yang sederhana, modern, dan intuitif,
            pengguna dapat mengelola toko dengan lebih cepat dan efisien.
        </p>


        
        <div class="stats-grid">

            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-box-seam"></i>
                </div>

                <div class="stat-number">
                    Produk
                </div>

                <div class="stat-label">
                    Manajemen barang & stok
                </div>
            </div>


            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-cart-check"></i>
                </div>

                <div class="stat-number">
                    Transaksi
                </div>

                <div class="stat-label">
                    Proses penjualan lebih cepat
                </div>
            </div>


            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-bar-chart-line"></i>
                </div>

                <div class="stat-number">
                    Laporan
                </div>

                <div class="stat-label">
                    Monitoring penjualan
                </div>
            </div>

        </div>

    </div>


    
    <div class="section-card">

        <div class="section-title">
            <div class="title-icon">
                <i class="bi bi-stars"></i>
            </div>

            <span>Fitur Utama</span>
        </div>


        <div class="feature-grid">

            
            <div class="feature-card">

                <div class="feature-icon">
                    <i class="bi bi-box"></i>
                </div>

                <div>
                    <h5>Manajemen Produk</h5>

                    <p>
                        Kelola data barang, harga, kategori,
                        serta ketersediaan stok dengan mudah.
                    </p>
                </div>

            </div>


            
            <div class="feature-card">

                <div class="feature-icon">
                    <i class="bi bi-cart-check"></i>
                </div>

                <div>
                    <h5>Transaksi Kasir</h5>

                    <p>
                        Proses transaksi penjualan dengan
                        perhitungan total secara otomatis.
                    </p>
                </div>

            </div>


            
            <div class="feature-card">

                <div class="feature-icon">
                    <i class="bi bi-people"></i>
                </div>

                <div>
                    <h5>Manajemen Pengguna</h5>

                    <p>
                        Pembagian hak akses untuk Admin
                        dan Kasir sesuai kebutuhan.
                    </p>
                </div>

            </div>


            
            <div class="feature-card">

                <div class="feature-icon">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>

                <div>
                    <h5>Laporan Penjualan</h5>

                    <p>
                        Pantau ringkasan pendapatan,
                        transaksi harian dan bulanan.
                    </p>
                </div>

            </div>

        </div>

    </div>


    
    <div class="section-card">

        <div class="section-title">
            <div class="title-icon">
                <i class="bi bi-person-badge-fill"></i>
            </div>

            <span>Biodata</span>
        </div>


        <div class="profile-area">

            
            <div class="profile-box">

                <img
                    src="<?php echo e(asset('images/profile.jpg')); ?>"
                    alt="Foto Profil"
                    class="profile-photo"
                    onerror="this.src='https://ui-avatars.com/api/?name=Naysa+Fauziah&background=0d6efd&color=fff&size=300';"
                >

                <div class="profile-name">
                    NAYSA FAUZIAH
                </div>

                <div class="profile-role">
                    Web Developer
                </div>

            </div>


            
            <div class="biodata-list">

                <div class="biodata-item">

                    <div class="biodata-label">
                        Nama Lengkap
                    </div>

                    <div class="biodata-colon">
                        :
                    </div>

                    <div class="biodata-value">
                        NAYSA FAUZIAH
                    </div>

                </div>


                <div class="biodata-item">

                    <div class="biodata-label">
                        NIM / NIS
                    </div>

                    <div class="biodata-colon">
                        :
                    </div>

                    <div class="biodata-value">
                        12345678
                    </div>

                </div>


                <div class="biodata-item">

                    <div class="biodata-label">
                        Kelas / Jurusan
                    </div>

                    <div class="biodata-colon">
                        :
                    </div>

                    <div class="biodata-value">
                        Rekayasa Perangkat Lunak
                    </div>

                </div>


                <div class="biodata-item">

                    <div class="biodata-label">
                        Email
                    </div>

                    <div class="biodata-colon">
                        :
                    </div>

                    <div class="biodata-value">
                        naysafau@gmail.com
                    </div>

                </div>


                <div class="biodata-item">

                    <div class="biodata-label">
                        Instagram
                    </div>

                    <div class="biodata-colon">
                        :
                    </div>

                    <div class="biodata-value">
                        @nysfziii_
                    </div>

                </div>

            </div>

        </div>


        
        <div class="contact-section">

            <div class="contact-title">
                <i class="bi bi-chat-dots-fill text-primary"></i>
                Hubungi saya melalui
            </div>


            <div class="contact-buttons">

                <a
                    href="mailto:naysafau@gmail.com"
                    class="contact-btn btn-email"
                >
                    <i class="bi bi-envelope-fill"></i>
                    Email
                </a>


                <a
                    href="https://instagram.com/nysfziii_"
                    target="_blank"
                    class="contact-btn btn-instagram"
                >
                    <i class="bi bi-instagram"></i>
                    Instagram
                </a>


               <a
                href="https://github.com/USERNAME_GITHUB_KAMU"
                target="_blank"
                 rel="noopener noreferrer"
                 class="contact-btn btn-github"
                >
                   <i class="bi bi-github"></i>
                    GitHub
                </a>

                <a
                    href="<?php echo e(url('/dashboard')); ?>"
                    class="contact-btn btn-home"
                >
                    <i class="bi bi-house-fill"></i>
                    Kembali ke Dashboard
                </a>

            </div>

        </div>

    </div>


    
    <div class="about-footer">
        <i class="bi bi-heart-fill text-danger"></i>
        untuk Aplikasi Point of Sale
        <br>
        © <?php echo e(date('Y')); ?> Naysa Fauziah
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\pos_enay3\resources\views/tentang.blade.php ENDPATH**/ ?>