<form method="post" action="proses_absensi.php">
    <!-- Input hidden untuk menyimpan informasi yang diperlukan -->
    <input type="hidden" name="id_siswa" value="<?= $data['id_siswa'] ?>">
    <input type="hidden" name="bulan" value="<?= $bulan ?>">
    
    <!-- Field untuk absensi -->
    <label for="ket">Keterangan:</label>
    <select name="ket" id="ket">
        <option value="H">Hadir</option>
        <option value="S">Sakit</option>
        <option value="I">Izin</option>
        <option value="A">Absen</option>
    </select>

    <!-- Tombol untuk submit form -->
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
