<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Berita</title>
</head>
<body>
    <h1>Edit Berita</h1>
    <form action="<?= base_url('admin/berita/edit_aksi/' . $berita['id_berita']) ?>" method="post" enctype="multipart/form-data">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" value="<?= $berita['judul'] ?>" required><br><br>

        <label for="konten">Konten:</label><br>
        <textarea name="konten" id="konten" rows="10" cols="50" required><?= $berita['konten'] ?></textarea><br><br>

        <label for="gambar">Gambar (opsional):</label><br>
        <?php if (!empty($berita['gambar'])): ?>
            <img src="<?= base_url('uploads/berita/' . $berita['gambar']) ?>" width="200" alt="Gambar Berita"><br>
        <?php endif; ?>
        <input type="file" name="gambar" id="gambar"><br><br>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="draft" <?= $berita['status'] == 'draft' ? 'selected' : '' ?>>Draft</option>
            <option value="published" <?= $berita['status'] == 'published' ? 'selected' : '' ?>>Published</option>
        </select><br><br>

        <button type="submit">Simpan Perubahan</button>
    </form>
</body>
</html>
