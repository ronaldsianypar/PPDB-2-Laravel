<!DOCTYPE html>
<html>
<head>
	<title>PPDB</title>
</head>
<body>
	<form action="simpan" method="POST">
		{{ csrf_field() }}
		<table>	
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="id" nis="id" required></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama" required></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<select name="jns_kelamin" id="jns_kelamin" required>
						<option value="" disabled selected>Jenis Kelamin</option>
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="temp_lahir" id="temp_lahir" required></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" id="tgl_lahir" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><textarea name="alamat" id="alamat" required></textarea></td>
			</tr>
			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td><input type="text" name="asal_sekolah" id="asal_sekolah" required></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<select name="kelas" id="kelas">
						<option value="" disabled selected>Kelas</option>
						<option value="X">X</option>
						<option value="XI">XI</option>
						<option value="XII">XII</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>:</td>
				<td>
					<select name="jurusan" id="jurusan">
						<option value="" disabled selected>Jurusan</option>
						<option value="RPL">RPL</option>
						<option value="TKJ">TKJ</option>
						<option value="M">MMD</option>
						<option value="MMD">TBG</option>
						<option value="HTL">HTL</option>
						<option value="BDP">BDP</option>
						<option value="OTKP">OTKP</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
				<div class="form-group">
	            	<button type="submit" class="btn btn-success">Selesai</button>
	          	</div>
	          	</td>
          	</tr>
		</table>
	</form>
</body>
</html>