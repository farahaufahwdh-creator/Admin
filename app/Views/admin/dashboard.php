<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Admin Panel - Kusuma Agrowisata</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        :root {
            --green: #2e7d32;
            --green-dark: #1b5e20;
            --green-light: #e8f5e9;
            --green-soft: #66bb6a;
            --bg: #f4f7f3;
            --text: #243027;
            --border: #d7e4d7;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Segoe UI, Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
        }

        .layout {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 230px;
            background: var(--green-dark);
            color: #fff;
            padding: 20px 0;
            flex-shrink: 0;
        }

        .sidebar h2 {
            font-size: 18px;
            text-align: center;
            margin: 0 0 20px;
            padding: 0 10px;
        }

        .sidebar a {
            display: block;
            color: #e8f5e9;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 14px;
            border-left: 4px solid transparent;
        }

        .sidebar a:hover {
            background: var(--green);
        }

        .sidebar a.active {
            background: var(--green);
            border-left: 4px solid #a5d6a7;
            font-weight: bold;
        }

        .sidebar .logout {
            margin-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, .2);
            padding-top: 15px;
        }

        .main {
            flex: 1;
            padding: 25px 30px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .topbar h1 {
            font-size: 22px;
            color: var(--green-dark);
            margin: 0;
        }

        .btn {
            display: inline-block;
            background: var(--green);
            color: #fff;
            border: none;
            padding: 9px 16px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        .btn:hover {
            background: var(--green-dark);
        }

        .btn-edit {
            background: #66bb6a;
        }

        .btn-edit:hover {
            background: var(--green);
        }

        .btn-del {
            background: #e53935;
        }

        .btn-del:hover {
            background: #b71c1c;
        }

        .btn-sm {
            padding: 6px 10px;
            font-size: 12px;
            margin-right: 5px;
        }

        .alert {
            background: var(--green-light);
            border: 1px solid var(--green-soft);
            color: var(--green-dark);
            padding: 10px 15px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .alert-error {
            background: #fdecea;
            border-color: #f5c6cb;
            color: #c62828;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            border: 1px solid var(--border);
            overflow-x: auto;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        th,
        td {
            padding: 10px 12px;
            text-align: left;
            border-bottom: 1px solid var(--border);
            max-width: 260px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        th {
            background: var(--green-light);
            color: var(--green-dark);
        }

        tr:hover td {
            background: #fafffa;
        }

        img.thumb {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 5px;
            vertical-align: middle;
        }

        .modal-overlay {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.45);
            align-items: center;
            justify-content: center;
            z-index: 100;
        }

        .modal-overlay.show {
            display: flex;
        }

        .modal {
            background: #fff;
            width: 100%;
            max-width: 520px;
            max-height: 88vh;
            overflow-y: auto;
            border-radius: 10px;
            padding: 22px 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            position: relative;
        }

        .modal h3 {
            margin-top: 0;
            color: var(--green-dark);
        }

        .modal label {
            display: block;
            font-size: 13px;
            margin: 12px 0 5px;
            color: #444;
        }

        .modal input[type=text],
        .modal input[type=number],
        .modal input[type=password],
        .modal textarea {
            width: 100%;
            padding: 8px 10px;
            border: 1px solid var(--border);
            border-radius: 6px;
            font-size: 14px;
            font-family: inherit;
        }

        .modal textarea {
            resize: vertical;
            min-height: 70px;
        }

        .modal img.preview {
            max-width: 130px;
            display: none;
            margin-bottom: 8px;
            border-radius: 6px;
        }

        .modal-actions {
            margin-top: 18px;
            display: flex;
            justify-content: flex-end;
            gap: 8px;
        }

        .close-btn {
            position: absolute;
            top: 14px;
            right: 18px;
            cursor: pointer;
            font-size: 20px;
            color: #888;
        }

        @media(max-width:768px) {
            .layout {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                display: flex;
                overflow-x: auto;
                padding: 10px;
            }

            .sidebar h2 {
                display: none;
            }

            .sidebar a {
                white-space: nowrap;
                padding: 10px 14px;
                border-left: none;
                border-bottom: 3px solid transparent;
            }

            .sidebar a.active {
                border-left: none;
                border-bottom: 3px solid #a5d6a7;
            }
        }
    </style>
</head>

<body>
    <div class="layout">

        <div class="sidebar">
            <h2>🌿 Kusuma Admin</h2>
            <?php foreach ($tables as $key => $t): ?>
                <a href="<?= base_url('admin/' . $key) ?>" class="<?= $key === $activeTable ? 'active' : '' ?>">
                    <?= esc($t['label']) ?>
                </a>
            <?php endforeach; ?>
            <div class="logout">
                <a href="<?= base_url('logout') ?>">🚪 Logout (<?= esc($username) ?>)</a>
            </div>
        </div>

        <div class="main">
            <div class="topbar">
                <h1><?= esc($conf['label']) ?></h1>
                <?php if (empty($conf['single'])): ?>
                    <button class="btn" onclick="openAddModal()">+ Tambah Data</button>
                <?php else: ?>
                    <button class="btn" onclick='openEditModal(<?= json_encode($rows[0] ?? [], JSON_HEX_APOS | JSON_HEX_QUOT) ?>)'>Edit Pengaturan</button>
                <?php endif; ?>
            </div>

            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert"><?= esc(session()->getFlashdata('success')) ?></div>
            <?php endif; ?>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-error"><?= esc(session()->getFlashdata('error')) ?></div>
            <?php endif; ?>

            <?php if (! empty($conf['single'])): ?>
                <div class="card" style="padding:20px;">
                    <table>
                        <?php foreach ($conf['columns'] as $field => $meta): ?>
                            <tr>
                                <th style="width:220px;"><?= esc($meta['label']) ?></th>
                                <td style="white-space:normal;">
                                    <?php if ($meta['type'] === 'image' && ! empty($rows[0][$field])): ?>
                                        <img class="thumb" src="<?= base_url($rows[0][$field]) ?>" alt="">
                                    <?php else: ?>
                                        <?= esc((string) ($rows[0][$field] ?? '')) ?>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            <?php else: ?>
                <div class="card">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <?php foreach ($conf['columns'] as $field => $meta): ?>
                                    <?php if ($field === 'password') continue; ?>
                                    <th><?= esc($meta['label']) ?></th>
                                <?php endforeach; ?>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (count($rows) === 0): ?>
                                <tr>
                                    <td colspan="10" style="text-align:center;color:#999;">Belum ada data.</td>
                                </tr>
                            <?php endif; ?>
                            <?php foreach ($rows as $row): ?>
                                <tr>
                                    <td><?= esc($row[$conf['pk']]) ?></td>
                                    <?php foreach ($conf['columns'] as $field => $meta): ?>
                                        <?php if ($field === 'password') continue; ?>
                                        <td>
                                            <?php if ($meta['type'] === 'image' && ! empty($row[$field])): ?>
                                                <img src="<?= base_url($row[$field]) ?>" class="thumb" alt="">
                                            <?php elseif ($meta['type'] === 'textarea'): ?>
                                                <?= esc(mb_strimwidth((string) ($row[$field] ?? ''), 0, 60, '...')) ?>
                                            <?php else: ?>
                                                <?= esc((string) ($row[$field] ?? '')) ?>
                                            <?php endif; ?>
                                        </td>
                                    <?php endforeach; ?>
                                    <td>
                                        <button class="btn btn-edit btn-sm" onclick='openEditModal(<?= json_encode($row, JSON_HEX_APOS | JSON_HEX_QUOT) ?>)'>Edit</button>
                                        <a class="btn btn-del btn-sm"
                                            href="<?= base_url('admin/' . $activeTable . '/hapus/' . $row[$conf['pk']]) ?>"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="modal-overlay" id="modalOverlay">
        <div class="modal">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h3 id="modalTitle">Tambah Data</h3>
            <form method="POST" action="<?= base_url('admin/' . $activeTable . '/simpan') ?>" enctype="multipart/form-data">
                <input type="hidden" name="id" id="field_id" value="">

                <?php foreach ($conf['columns'] as $field => $meta): ?>
                    <label for="field_<?= $field ?>"><?= esc($meta['label']) ?></label>

                    <?php if ($meta['type'] === 'image'): ?>
                        <img class="preview" id="preview_<?= $field ?>" src="" alt="">
                        <input type="file" name="<?= $field ?>" id="field_<?= $field ?>" accept="image/*"
                            onchange="previewImage(this, 'preview_<?= $field ?>')">
                        <small style="color:#888;display:block;">Kosongkan kalau tidak ingin ganti gambar.</small>

                    <?php elseif ($meta['type'] === 'textarea'): ?>
                        <textarea name="<?= $field ?>" id="field_<?= $field ?>"></textarea>

                    <?php elseif ($meta['type'] === 'password'): ?>
                        <input type="password" name="<?= $field ?>" id="field_<?= $field ?>" autocomplete="new-password">

                    <?php elseif ($meta['type'] === 'number'): ?>
                        <input type="number" name="<?= $field ?>" id="field_<?= $field ?>">

                    <?php else: ?>
                        <input type="text" name="<?= $field ?>" id="field_<?= $field ?>">
                    <?php endif; ?>
                <?php endforeach; ?>

                <div class="modal-actions">
                    <button type="button" class="btn btn-del" onclick="closeModal()">Batal</button>
                    <button type="submit" class="btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewImage(input, previewId) {
            const preview = document.getElementById(previewId);
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = e => {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        const BASE_URL = "<?= base_url() ?>";
        const overlay = document.getElementById('modalOverlay');
        const modalTitle = document.getElementById('modalTitle');

        function openModal() {
            overlay.classList.add('show');
        }

        function closeModal() {
            overlay.classList.remove('show');
        }

        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) closeModal();
        });

        function clearForm() {
            document.querySelectorAll('#modalOverlay input[type=text], #modalOverlay input[type=number], #modalOverlay input[type=password], #modalOverlay textarea')
                .forEach(el => el.value = '');
            document.querySelectorAll('#modalOverlay input[type=file]').forEach(el => el.value = '');
            document.querySelectorAll('#modalOverlay img.preview').forEach(el => {
                el.style.display = 'none';
                el.src = '';
            });
            document.getElementById('field_id').value = '';
        }

        function openAddModal() {
            clearForm();
            modalTitle.textContent = 'Tambah Data';
            openModal();
        }

        function openEditModal(data) {
            clearForm();
            modalTitle.textContent = 'Edit Data';
            document.getElementById('field_id').value = data['<?= $conf['pk'] ?>'] ?? '';

            for (const key in data) {
                const el = document.getElementById('field_' + key);
                if (!el) continue;

                if (el.type === 'file') {
                    const preview = document.getElementById('preview_' + key);
                    if (preview && data[key]) {
                        preview.src = BASE_URL + data[key];
                        preview.style.display = 'block';
                    }
                } else if (el.type !== 'password') {
                    el.value = data[key];
                }
            }
            openModal();
        }
    </script>
</body>

</html>