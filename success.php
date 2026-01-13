<?php
session_start();
$refNo = $_GET['refno'] ?? '';
$orderId = $_SESSION['order_id'] ?? '';
$cardData = isset($_SESSION['card_data']) ? json_decode($_SESSION['card_data'], true) : null;
$cardId = 'KKD' . substr(md5($orderId), 0, 8);
$cardUrl = 'https://kadkahwin.digital/v/' . $cardId;
?>
<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berjaya - KadKahwin Digital</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .success-page { min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 40px 20px; }
        .success-card { background: var(--bg-card); border: 1px solid var(--border-color); border-radius: var(--radius-xl); padding: 48px; max-width: 600px; width: 100%; text-align: center; }
        .success-icon { width: 80px; height: 80px; background: linear-gradient(135deg, var(--primary), var(--primary-dark)); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px; font-size: 36px; }
        .success-card h1 { font-family: var(--font-display); font-size: 28px; margin-bottom: 12px; }
        .success-card .subtitle { color: var(--text-secondary); margin-bottom: 32px; }
        .card-link-box { background: rgba(0,0,0,0.3); border-radius: var(--radius-md); padding: 20px; margin-bottom: 24px; }
        .card-link-box label { display: block; font-size: 13px; color: var(--text-muted); margin-bottom: 8px; }
        .card-link-box input { width: 100%; padding: 14px; background: rgba(0,0,0,0.3); border: 1px solid var(--border-color); border-radius: var(--radius-md); color: var(--text-primary); font-size: 14px; text-align: center; }
        .share-btns { display: flex; gap: 12px; justify-content: center; margin-bottom: 24px; flex-wrap: wrap; }
        .share-btn { display: inline-flex; align-items: center; gap: 8px; padding: 12px 20px; background: #25d366; color: white; border-radius: var(--radius-md); text-decoration: none; font-weight: 600; font-size: 14px; transition: var(--transition); }
        .share-btn:hover { transform: translateY(-2px); }
        .share-btn.copy { background: var(--secondary); }
        .order-info { background: rgba(0,0,0,0.2); border-radius: var(--radius-md); padding: 16px; margin-bottom: 24px; text-align: left; }
        .order-info div { display: flex; justify-content: space-between; padding: 6px 0; color: var(--text-secondary); font-size: 13px; }
    </style>
</head>
<body>
    <div class="success-page">
        <div class="success-card">
            <div class="success-icon">💒</div>
            <h1>Tahniah! 🎉</h1>
            <p class="subtitle">Kad kahwin digital anda telah dicipta dan sedia untuk dikongsi!</p>
            
            <div class="card-link-box">
                <label>Link Kad Kahwin Anda</label>
                <input type="text" id="cardUrl" value="<?php echo $cardUrl; ?>" readonly onclick="this.select()">
            </div>
            
            <div class="share-btns">
                <a href="https://wa.me/?text=Anda%20dijemput%20ke%20majlis%20perkahwinan%20kami!%20<?php echo urlencode($cardUrl); ?>" target="_blank" class="share-btn">
                    📱 Kongsi WhatsApp
                </a>
                <button onclick="copyLink()" class="share-btn copy">📋 Salin Link</button>
            </div>
            
            <div class="order-info">
                <div><span>No. Pesanan</span><span><?php echo htmlspecialchars($orderId); ?></span></div>
                <div><span>No. Rujukan</span><span><?php echo htmlspecialchars($refNo); ?></span></div>
                <div><span>Status</span><span style="color:var(--primary)">✓ Aktif</span></div>
                <div><span>Tempoh Aktif</span><span>1 Tahun</span></div>
            </div>
            
            <a href="index.php" class="btn btn-secondary">← Kembali ke Laman Utama</a>
        </div>
    </div>
    <script>
        function copyLink() {
            const input = document.getElementById('cardUrl');
            input.select();
            document.execCommand('copy');
            alert('Link telah disalin!');
        }
    </script>
</body>
</html>
