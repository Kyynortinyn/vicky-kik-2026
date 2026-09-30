<?php
// index.php - Restoran 11 RPL

$categories = [
    'mie' => '🍜 MIE',
    'dimsum' => '🥟 DIMSUM',
    'esbuah' => '🍧 ES BUAH',
    'beverages' => '🥤 BEVERAGES',
    'icecream' => '🍦 ICE CREAM',
    'paket' => '🍱 PAKET FEST'
];

$menu_list = [
    ['id' => 1, 'category' => 'mie', 'name' => 'MIE GACOAN', 'price' => 10000, 'sold' => '10RB+ terjual', 'likes' => 'Disukai oleh 1,6RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_858_20251027104529_optim.webp', 'has_options' => true, 'options' => [['name' => 'LEVEL 0', 'price' => 0], ['name' => 'LEVEL 1', 'price' => 260], ['name' => 'LEVEL 2', 'price' => 500], ['name' => 'LEVEL 3', 'price' => 750], ['name' => 'LEVEL 4', 'price' => 800], ['name' => 'LEVEL 6', 'price' => 910], ['name' => 'LEVEL 8', 'price' => 1300]]],
    ['id' => 2, 'category' => 'mie', 'name' => 'MIE HOMPIMPA', 'price' => 10000, 'sold' => '8RB+ terjual', 'likes' => 'Disukai oleh 1,2RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_859_20251027104639_optim.webp', 'has_options' => true, 'options' => [['name' => 'LEVEL 1', 'price' => 500], ['name' => 'LEVEL 2', 'price' => 750], ['name' => 'LEVEL 3', 'price' => 800], ['name' => 'LEVEL 4', 'price' => 918], ['name' => 'LEVEL 6', 'price' => 1301]]],
    ['id' => 3, 'category' => 'mie', 'name' => 'MIE SUIT', 'price' => 10000, 'sold' => '5RB+ terjual', 'likes' => 'Disukai oleh 900', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_836_20251027105030_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 4, 'category' => 'mie', 'name' => 'MIE YAMIN SPESIAL', 'price' => 13000, 'sold' => '3RB+ terjual', 'likes' => 'Disukai oleh 500', 'image' => 'https://images.unsplash.com/photo-1547928576-a4a33237cbc3?w=400&auto=format&fit=crop', 'has_options' => false, 'options' => []],
    ['id' => 5, 'category' => 'dimsum', 'name' => 'UDANG KEJU', 'price' => 9500, 'sold' => '15RB+ terjual', 'likes' => 'Disukai oleh 3RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_31_20251031170356_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 6, 'category' => 'dimsum', 'name' => 'UDANG RAMBUTAN', 'price' => 9150, 'sold' => '12RB+ terjual', 'likes' => 'Disukai oleh 2RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_32_20251031170419_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 7, 'category' => 'dimsum', 'name' => 'PANGSIT GORENG', 'price' => 9091, 'sold' => '7RB+ terjual', 'likes' => 'Disukai oleh 1RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_26_20251031170312_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 8, 'category' => 'dimsum', 'name' => 'SIOMAY AYAM', 'price' => 9000, 'sold' => '9RB+ terjual', 'likes' => 'Disukai oleh 1,4RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_27_20251121175820_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 9, 'category' => 'dimsum', 'name' => 'LUMPIA UDANG', 'price' => 9000, 'sold' => '6RB+ terjual', 'likes' => 'Disukai oleh 800', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_9_20251031170259_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 10, 'category' => 'esbuah', 'name' => 'ES GOBAK SODOR', 'price' => 10000, 'sold' => '10RB+ terjual', 'likes' => 'Disukai oleh 2RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_3_20230908134054_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 11, 'category' => 'esbuah', 'name' => 'ES PETAK UMPET', 'price' => 11000, 'sold' => '8RB+ terjual', 'likes' => 'Disukai oleh 1,1RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_4_20230908135128_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 12, 'category' => 'esbuah', 'name' => 'ES TELER LENGKAP', 'price' => 12000, 'sold' => '4RB+ terjual', 'likes' => 'Disukai oleh 950', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_6_20230908135711_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 13, 'category' => 'beverages', 'name' => 'ES TEH MANIS', 'price' => 4000, 'sold' => '25RB+ terjual', 'likes' => 'Disukai oleh 5RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_912_20251101091556_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 14, 'category' => 'beverages', 'name' => 'ES JERUK PERAS', 'price' => 5000, 'sold' => '11RB+ terjual', 'likes' => 'Disukai oleh 1,8RB', 'image' => 'https://dcostseafood.id/wp-content/uploads/2021/12/ES-JERUK-murni.jpg', 'has_options' => false, 'options' => []],
    ['id' => 15, 'category' => 'beverages', 'name' => 'LEMON TEA SEGAR', 'price' => 6000, 'sold' => '6RB+ terjual', 'likes' => 'Disukai oleh 700', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU__20251029173554_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 16, 'category' => 'icecream', 'name' => 'SUNDAE VANILA', 'price' => 12000, 'sold' => '9RB+ terjual', 'likes' => 'Disukai oleh 2,1RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_1048_20260511220011_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 17, 'category' => 'icecream', 'name' => 'BLUEBERRY CHEESECAKE SUNDAE', 'price' => 15000, 'sold' => '14RB+ terjual', 'likes' => 'Disukai oleh 2,8RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/APP/menu/MNU_1146_20260907115522_optim.webp', 'has_options' => false, 'options' => []],
    ['id' => 18, 'category' => 'paket', 'name' => 'PAKET HEMAT (MIE + TEH)', 'price' => 19500, 'sold' => '18RB+ terjual', 'likes' => 'Disukai oleh 4RB', 'image' => 'https://esb-order.oss-ap-southeast-5.aliyuncs.com/images/app/menu/MNU_283_20241213205507_optim.webp', 'has_options' => true, 'options' => [['name' => 'LEVEL 0', 'price' => 0], ['name' => 'LEVEL 1', 'price' => 170], ['name' => 'LEVEL 2', 'price' => 390], ['name' => 'LEVEL 3', 'price' => 500], ['name' => 'LEVEL 4', 'price' => 1000]]]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran 11 RPL</title>
    <style>
        :root {
            --primary: #3D2314;
            --primary-hover: #2A180D;
            --bg-body: #F8F9FA;
            --card-bg: #FFFFFF;
            --text-dark: #2B2D42;
            --text-muted: #888888;
            --border-color: #E0E0E0;
            --orange-btn: #E65100;
        }
        body { 
             background-image: url('https://cdn.discordapp.com/attachments/1052878508759715871/1547255750051635270/Tak_berjudul66_20260909214143.jpg?ex=6aa2c1b5&is=6aa17035&hm=43c653d7ad81ec13571ce1750ea70bd7ad1f5ceb45ba13739777036c691fe75e&'); 
             background-size: 500px;
             background-position: center;
             background-repeat: no-repeat;
             background-attachment: fixed;
    
    color: var(--text-dark); 
    padding-bottom: 90px; 
}

        * { box-sizing: border-box; margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; }
        body { background-color: var(--bg-body); color: var(--text-dark); padding-bottom: 90px; }

        .header { background: var(--primary); color: #fff; position: sticky; top: 0; z-index: 100; box-shadow: 0 2px 8px rgba(0,0,0,0.15); }
        .header-top { display: flex; justify-content: space-between; align-items: center; padding: 12px 16px; max-width: 800px; margin: 0 auto; }
        .brand-title { font-size: 1.1rem; font-weight: 800; letter-spacing: 0.5px; }
        .header-actions { display: flex; gap: 10px; align-items: center; }
        .icon-btn {
            background: rgba(255,255,255,0.15); border: none; color: #fff;
            padding: 0 12px; height: 38px; border-radius: 20px; font-size: 0.85rem; font-weight: 700;
            cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 4px;
            position: relative; transition: background 0.2s;
        }
        .icon-btn-circle { width: 38px; padding: 0; border-radius: 50%; font-size: 1.1rem; }
        .icon-btn:hover { background: rgba(255,255,255,0.25); }
        .cart-badge {
            position: absolute; top: -2px; right: -2px;
            background: #D90429; color: #fff; font-size: 0.65rem; font-weight: bold;
            width: 18px; height: 18px; border-radius: 50%; display: flex; align-items: center; justify-content: center;
        }

        .search-bar { background: #fff; padding: 10px 16px; border-bottom: 1px solid var(--border-color); }
        .search-box { max-width: 800px; margin: 0 auto; display: flex; align-items: center; background: var(--bg-body); border-radius: 8px; padding: 8px 12px; gap: 8px; }
        .search-box input { border: none; background: transparent; width: 100%; outline: none; font-size: 0.85rem; }

        .category-nav {
            background: #fff; display: flex; overflow-x: auto;
            border-bottom: 1px solid var(--border-color); position: sticky; top: 62px; z-index: 90;
            max-width: 800px; margin: 0 auto; scrollbar-width: none;
        }
        .category-nav::-webkit-scrollbar { display: none; }
        .category-item {
            padding: 12px 16px; font-size: 0.85rem; font-weight: 700;
            color: var(--text-muted); text-decoration: none; white-space: nowrap;
            border-bottom: 3px solid transparent; transition: all 0.2s;
        }
        .category-item:hover, .category-item.active { color: var(--primary); border-bottom-color: var(--primary); }

        .container { max-width: 800px; margin: 0 auto; padding: 16px; }
        .section-header { margin: 20px 0 12px 0; font-size: 1rem; font-weight: 800; color: var(--primary); display: flex; align-items: center; gap: 8px; }
        .section-header::after { content: ''; flex: 1; height: 1px; background: #DDD; }

        .menu-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: 12px; }
        .menu-card { background: var(--card-bg); border-radius: 10px; padding: 10px; border: 1px solid #EAEAEA; display: flex; flex-direction: column; justify-content: space-between; position: relative; transition: transform 0.2s; }
        .menu-card:hover { transform: translateY(-3px); }
        .menu-img { width: 100%; aspect-ratio: 1; object-fit: cover; border-radius: 6px; margin-bottom: 8px; background: #EEE; }
        .menu-title { font-size: 0.85rem; font-weight: 700; color: var(--text-dark); line-height: 1.2; margin-bottom: 4px; }
        .menu-price { font-size: 0.88rem; font-weight: 800; color: var(--primary); margin-bottom: 8px; }
        .btn-add { width: 100%; padding: 8px; background: var(--primary); color: #fff; border: none; border-radius: 6px; font-size: 0.8rem; font-weight: 700; cursor: pointer; transition: background 0.2s; }

        .modal-overlay { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); display: none; justify-content: center; align-items: flex-end; z-index: 1000; }
        .modal-overlay.active { display: flex; }
        .modal-content { background: #fff; width: 100%; max-width: 500px; border-top-left-radius: 16px; border-top-right-radius: 16px; max-height: 90vh; display: flex; flex-direction: column; animation: slideUp 0.25s ease-out; overflow: hidden; }
        @keyframes slideUp { from { transform: translateY(100%); } to { transform: translateY(0); } }

        .modal-header { padding: 14px 16px; border-bottom: 1px solid #F0F0F0; display: flex; justify-content: space-between; align-items: center; position: relative; }
        .modal-title { font-weight: 700; font-size: 0.95rem; color: #111; text-align: center; width: 100%; }
        .close-btn { position: absolute; right: 16px; background: none; border: none; font-size: 1.3rem; color: #888; cursor: pointer; }

        .modal-body { padding: 0; overflow-y: auto; flex: 1; }
        .item-detail { display: flex; padding: 16px; gap: 12px; align-items: flex-start; }
        .item-detail img { width: 75px; height: 75px; border-radius: 8px; object-fit: cover; }
        .item-info { flex: 1; }
        .item-info h4 { font-size: 0.95rem; font-weight: 800; color: #111; margin-bottom: 2px; }
        .item-info .meta { font-size: 0.72rem; color: #888; margin-bottom: 12px; }
        .item-info .price { font-size: 0.95rem; font-weight: 800; color: #E53935; }

        .counter-control { display: flex; align-items: center; gap: 8px; margin-top: 20px; }
        .btn-qty-minus { width: 26px; height: 26px; border: 1px solid #CCC; background: #fff; color: #888; border-radius: 4px; font-weight: bold; cursor: pointer; display: flex; align-items: center; justify-content: center; }
        .btn-qty-plus { width: 26px; height: 26px; border: none; background: #E65100; color: #fff; border-radius: 4px; font-weight: bold; cursor: pointer; display: flex; align-items: center; justify-content: center; }
        .qty-val { font-weight: 800; font-size: 0.9rem; padding: 0 4px; }

        .variant-header { background: #F4F4F5; padding: 8px 16px; font-size: 0.75rem; font-weight: 800; color: #666; letter-spacing: 0.3px; }
        .option-group { display: flex; flex-direction: column; }
        .option-item { display: flex; justify-content: space-between; align-items: center; padding: 12px 16px; border-bottom: 1px solid #F5F5F5; cursor: pointer; }
        .option-label { font-size: 0.85rem; font-weight: 700; color: #222; margin-bottom: 2px; display: block; }
        .option-price { font-size: 0.78rem; color: #666; display: block; }
        
        .custom-square-checkbox { width: 20px; height: 20px; border: 1px solid #B0B0B0; border-radius: 3px; display: inline-block; position: relative; background: #fff; }
        input[type="radio"] { display: none; }
        input[type="radio"]:checked + .custom-square-checkbox { border-color: #E65100; background-color: #E65100; }
        input[type="radio"]:checked + .custom-square-checkbox::after { content: '✓'; color: #fff; font-size: 13px; font-weight: bold; position: absolute; top: -1px; left: 4px; }

        .notes-container { padding: 12px 16px; display: flex; align-items: center; gap: 8px; border-top: 1px solid #F0F0F0; }
        .notes-icon { color: #888; font-size: 0.9rem; }
        .notes-input { width: 100%; border: none; font-size: 0.82rem; outline: none; color: #333; }

        .modal-footer { padding: 12px 16px; background: #fff; border-top: 1px solid #F0F0F0; }
        .submit-btn-modal { width: 100%; background: #E65100; color: #fff; border: none; padding: 12px; border-radius: 8px; font-weight: 700; font-size: 0.88rem; cursor: pointer; }

        .login-form { padding: 20px 16px; display: flex; flex-direction: column; gap: 12px; }
        .form-group { display: flex; flex-direction: column; gap: 4px; }
        .form-group label { font-size: 0.8rem; font-weight: 700; color: #444; }
        .form-group input { padding: 10px; border: 1px solid var(--border-color); border-radius: 6px; outline: none; font-size: 0.85rem; }
        .form-group input:focus { border-color: var(--primary); }

        .bottom-bar { position: fixed; bottom: 0; left: 0; right: 0; background: #fff; border-top: 1px solid var(--border-color); padding: 10px 16px; z-index: 80; box-shadow: 0 -2px 10px rgba(0,0,0,0.05); }
        .bottom-bar-content { max-width: 800px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; }
    </style>
</head>
<body class="TugasEnam">

    <header class="header">
        <div class="header-top">
            <div class="brand-title">RESTORAN 11 RPL</div>
            <div class="header-actions">
                <button class="icon-btn" onclick="openTableModal()" id="tableBtn">📍 <span id="tableBtnText">Meja ?</span></button>
                <button class="icon-btn icon-btn-circle" onclick="openLoginModal()" title="Profil / Login">👤</button>
                <button class="icon-btn icon-btn-circle" onclick="checkTableAndCart()" title="Keranjang">
                    🛒 <span class="cart-badge" id="cartBadge">0</span>
                </button>
            </div>
        </div>
    </header>

    <div class="search-bar">
        <div class="search-box">
            <span>🔍</span>
            <input type="text" placeholder="Cari makanan">
        </div>
    </div>

    <nav class="category-nav">
        <?php foreach($categories as $key => $name): ?>
            <a href="#<?= $key ?>" class="category-item"><?= $name ?></a>
        <?php endforeach; ?>
    </nav>

    <div class="container">
        <?php foreach($categories as $cat_key => $cat_name): ?>
            <div class="section-header" id="<?= $cat_key ?>"><?= $cat_name ?></div>
            <div class="menu-grid">
                <?php foreach($menu_list as $item): ?>
                    <?php if($item['category'] === $cat_key): ?>
                    <div class="menu-card">
                        <img src="<?= $item['image'] ?>" class="menu-img" alt="<?= $item['name'] ?>">
                        <div class="menu-title"><?= $item['name'] ?></div>
                        <div class="menu-price">Rp<?= number_format($item['price'], 0, ',', '.') ?></div>
                        <button class="btn-add" onclick='handleAddToCart(<?= json_encode($item) ?>)'>+ Tambah</button>
                    </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- MODAL MASUKKAN NOMOR MEJA -->
    <div class="modal-overlay" id="tableModal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Masukkan Nomor Meja</div>
                <button class="close-btn" onclick="closeModal('tableModal')">✕</button>
            </div>
            <div class="modal-body">
                <form class="login-form" onsubmit="saveTableNumber(event)">
                    <div class="form-group">
                        <label>Nomor Meja Anda</label>
                        <input type="number" id="tableInput" placeholder="MASUKAN NO MEJA" min="1" required>
                    </div>
                    <button type="submit" class="submit-btn-modal" style="margin-top: 10px;">Simpan Nomor Meja</button>
                </form>
            </div>
        </div>
    </div>

    <!-- MODAL MENU VARIANT -->
    <div class="modal-overlay" id="optionModal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Tambahkan Menu</div>
                <button class="close-btn" onclick="closeModal('optionModal')">✕</button>
            </div>
            
            <div class="modal-body">
                <div class="item-detail">
                    <img id="mImg" src="" alt="Food">
                    <div class="item-info">
                        <h4 id="mTitle">MIE GACOAN</h4>
                        <div class="meta" id="mMeta">10RB+ terjual | Disukai oleh 1,6RB</div>
                        <div class="price" id="mPrice">Rp15.000</div>
                    </div>
                    <div class="counter-control">
                        <button class="btn-qty-minus" onclick="changeQty(-1)">-</button>
                        <span class="qty-val" id="mQty">1</span>
                        <button class="btn-qty-plus" onclick="changeQty(1)">+</button>
                    </div>
                </div>

                <div id="variantSection">
                    <div class="variant-header">LEVEL PEDAS (Pilih 1)</div>
                    <div class="option-group" id="optionsList"></div>
                </div>

                <div class="notes-container">
                    <span class="notes-icon">📑</span>
                    <input type="text" class="notes-input" id="mNotes" placeholder="Catatan untuk Restoran">
                </div>
            </div>

            <div class="modal-footer">
                <button class="submit-btn-modal" id="addToCartBtn" onclick="submitToCart()">Masukkan ke Keranjang - Rp15.000</button>
            </div>
        </div>
    </div>

    <!-- MODAL PROFIL / LOGIN -->
    <div class="modal-overlay" id="loginModal">
        <div class="modal-content">
            <div class="modal-header">
                <div class="modal-title">Profil & Login</div>
                <button class="close-btn" onclick="closeModal('loginModal')">✕</button>
            </div>
            <div class="modal-body">
                <form class="login-form" onsubmit="handleLogin(event)">
                    <div class="form-group">
                        <label>Username / Email</label>
                        <input type="text" id="loginUser" placeholder="Masukkan username" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" id="loginPass" placeholder="Masukkan password" required>
                    </div>
                    <button type="submit" class="submit-btn-modal" style="margin-top: 10px;">Masuk Sekarang</button>
                </form>
            </div>
        </div>
    </div>

    <div class="bottom-bar">
        <div class="bottom-bar-content">
            <div>
                <div style="font-size: 0.75rem; color: var(--text-muted);">Total Biaya</div>
                <div style="font-weight: 800; font-size: 1.1rem; color: var(--primary);" id="bottomTotal">Rp0</div>
            </div>
            <button class="btn-add" style="width: auto; padding: 10px 20px;" onclick="checkTableAndCart()">Keranjang 🛒</button>
        </div>
    </div>

    <script>
        // ======================================================
        // KUNCI PENYIMPANAN BERSAMA (dipakai juga oleh halaman
        // keranjangpemesanan.html & hasil-bayar.html)
        // ======================================================
        const CART_KEY = 'r11rpl_cart';
        const TABLE_KEY = 'r11rpl_meja';

        let tableNumber = localStorage.getItem(TABLE_KEY) || null;
        let currentItem = null;
        let selectedQty = 1;
        let selectedLevelPrice = 0;
        let selectedLevelName = "";

        function getCart() {
            try {
                return JSON.parse(localStorage.getItem(CART_KEY)) || [];
            } catch (e) {
                return [];
            }
        }

        function setCart(cart) {
            localStorage.setItem(CART_KEY, JSON.stringify(cart));
        }

        function refreshCartUI() {
            const cart = getCart();
            const totalQty = cart.reduce((sum, it) => sum + it.qty, 0);
            const totalPrice = cart.reduce((sum, it) => sum + (it.qty * it.unitPrice), 0);
            document.getElementById('cartBadge').innerText = totalQty;
            document.getElementById('bottomTotal').innerText = `Rp${totalPrice.toLocaleString('id-ID')}`;
        }

        // Otomatis munculkan pop-up nomor meja saat pertama halaman dibuka
        window.onload = function() {
            if (tableNumber) {
                document.getElementById('tableBtnText').innerText = `Meja ${tableNumber}`;
            } else {
                openTableModal();
            }
            refreshCartUI();
        };

        function openTableModal() {
            document.getElementById('tableModal').classList.add('active');
        }

        function saveTableNumber(e) {
            e.preventDefault();
            const val = document.getElementById('tableInput').value;
            if (val) {
                tableNumber = val;
                localStorage.setItem(TABLE_KEY, tableNumber);
                document.getElementById('tableBtnText').innerText = `Meja ${tableNumber}`;
                closeModal('tableModal');
            }
        }

        function checkTableAndCart() {
            if (!tableNumber) {
                alert('Silakan masukkan nomor meja Anda terlebih dahulu!');
                openTableModal();
            } else {
                window.location.href = 'keranjangpemesanan.html';
            }
        }

        function handleAddToCart(item) {
            if (!tableNumber) {
                alert('Silakan masukkan nomor meja Anda terlebih dahulu sebelum memilih menu!');
                openTableModal();
            } else {
                openOptionModal(item);
            }
        }

        function openOptionModal(item) {
            currentItem = item;
            selectedQty = 1;
            selectedLevelPrice = 0;
            selectedLevelName = "";

            document.getElementById('mTitle').innerText = item.name;
            document.getElementById('mImg').src = item.image;
            document.getElementById('mMeta').innerText = `${item.sold} | ${item.likes}`;
            document.getElementById('mQty').innerText = selectedQty;
            document.getElementById('mNotes').value = "";

            const variantSection = document.getElementById('variantSection');
            const optionsList = document.getElementById('optionsList');
            optionsList.innerHTML = '';

            if (item.has_options && item.options.length > 0) {
                variantSection.style.display = 'block';
                item.options.forEach((opt, index) => {
                    const isChecked = index === 0 ? 'checked' : '';
                    if(index === 0) {
                        selectedLevelPrice = opt.price;
                        selectedLevelName = opt.name;
                    }

                    let displayPrice = opt.price === 0 ? 'Rp0' : `Rp${opt.price.toLocaleString('id-ID')}`;

                    optionsList.innerHTML += `
                        <label class="option-item">
                            <div>
                                <span class="option-label">${opt.name}</span>
                                <span class="option-price">${displayPrice}</span>
                            </div>
                            <input type="radio" name="level_option" value="${opt.price}" data-name="${opt.name}" ${isChecked} onchange="selectOption(this)">
                            <span class="custom-square-checkbox"></span>
                        </label>
                    `;
                });
            } else {
                variantSection.style.display = 'none';
            }

            updateTotalPrice();
            document.getElementById('optionModal').classList.add('active');
        }

        function openLoginModal() {
            document.getElementById('loginModal').classList.add('active');
        }

        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
        }

        function handleLogin(e) {
            e.preventDefault();
            const user = document.getElementById('loginUser').value;
            alert(`Selamat datang kembali, ${user}!`);
            closeModal('loginModal');
        }

        function selectOption(radio) {
            selectedLevelPrice = parseInt(radio.value);
            selectedLevelName = radio.getAttribute('data-name');
            updateTotalPrice();
        }

        function changeQty(delta) {
            if (selectedQty + delta >= 1) {
                selectedQty += delta;
                document.getElementById('mQty').innerText = selectedQty;
                updateTotalPrice();
            }
        }

        function updateTotalPrice() {
            if (!currentItem) return;
            let unitPrice = currentItem.price + selectedLevelPrice;
            let total = unitPrice * selectedQty;
            
            document.getElementById('mPrice').innerText = `Rp${unitPrice.toLocaleString('id-ID')}`;
            document.getElementById('addToCartBtn').innerText = `Masukkan ke Keranjang - Rp${total.toLocaleString('id-ID')}`;
        }

        function submitToCart() {
            const unitPrice = currentItem.price + selectedLevelPrice;
            const notes = document.getElementById('mNotes').value.trim();
            const cart = getCart();

            // Kalau produk + level + catatan sama persis, tambahkan qty saja
            const existing = cart.find(it =>
                it.productId === currentItem.id &&
                it.levelName === selectedLevelName &&
                it.notes === notes
            );

            if (existing) {
                existing.qty += selectedQty;
            } else {
                cart.push({
                    cartId: Date.now().toString(36) + Math.random().toString(36).slice(2, 7),
                    productId: currentItem.id,
                    name: currentItem.name,
                    image: currentItem.image,
                    basePrice: currentItem.price,
                    levelName: selectedLevelName,
                    levelPrice: selectedLevelPrice,
                    unitPrice: unitPrice,
                    qty: selectedQty,
                    notes: notes
                });
            }

            setCart(cart);
            refreshCartUI();
            closeModal('optionModal');
        }
    </script>
</body>
</html>
