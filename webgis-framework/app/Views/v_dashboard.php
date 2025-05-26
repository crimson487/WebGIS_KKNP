<!-- File: app/Views/dashboard.php -->

<!-- Tambahkan font dan ikon -->
<link href="https://fonts.googleapis.com/css2?family=Georgia&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
    }

    .background-full {
        background: url('<?= base_url('assets/img/foto kantah.webp') ?>') no-repeat center center fixed;
        background-size: cover;
        width: 100%;
        min-height: 100vh;
        display: flex;
        position: relative;
    }

    .overlay {
        background: rgba(0, 0, 0, 0.5);
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        z-index: 1;
    }

    .content-wrapper {
        position: relative;
        z-index: 2;
        flex: 1; /* Mengisi sisa ruang kosong */
        padding: 100px 60px 40px 60px;
        color: white;
        animation: fadeIn 1.5s ease;
        box-sizing: border-box;
    }

    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    h1.display-large {
        font-family: 'Georgia', serif;
        font-size: 2.8rem;
        font-weight: bold;
        letter-spacing: 1.2px;
        margin-bottom: 50px;
    }

    .custom-card {
        background: rgba(0, 0, 0, 0.6);
        border: 1px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(8px);
        transition: all 0.3s ease;
        height: 300px;
        border-radius: 12px;
        padding: 20px;
    }

    .custom-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 12px 25px rgba(0,0,0,0.6);
        border-color: #ffffff;
    }

    .custom-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        color: #f8f9fa;
    }

    .card-title {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 15px;
    }

    .card-text {
        font-size: 1.1rem;
        line-height: 1.5;
    }

    @media (max-width: 768px) {
        .content-wrapper {
            padding: 60px 20px;
            text-align: center;
        }

        h1.display-large {
            font-size: 2rem;
            text-align: center;
        }

        .custom-card {
            height: auto;
            margin-bottom: 30px;
        }
    }
</style>

<div class="background-full">
    <div class="overlay"></div>
    <div class="content-wrapper">
        <h1 class="display-large">Kantor Pertanahan Kabupaten Karanganyar</h1>

        <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="card custom-card text-white shadow-lg h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <i class="fas fa-handshake custom-icon"></i>
                        <h5 class="card-title">Melayani</h5>
                        <p class="card-text">Memberikan pelayanan terbaik dengan cepat, mudah, dan ramah kepada masyarakat.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="card custom-card text-white shadow-lg h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <i class="fas fa-user-tie custom-icon"></i>
                        <h5 class="card-title">Profesional</h5>
                        <p class="card-text">Bekerja dengan kompetensi tinggi, integritas, dan bertanggung jawab.</p>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="card custom-card text-white shadow-lg h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <i class="fas fa-shield-alt custom-icon"></i>
                        <h5 class="card-title">Terpercaya</h5>
                        <p class="card-text">Membangun kepercayaan publik melalui transparansi dan akuntabilitas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
