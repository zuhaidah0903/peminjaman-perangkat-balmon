
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Berita Acara Kembali</title>
	<style>
		body {  
 		   font-family: 'Helvetica'  
		}
		.line-title{
			border: 0;
			border-style: inset;
			border-top: 2.5px solid #4169E1;
		}
		.center-div {
			margin-left: auto; margin-right: auto;
		}
		.center-text {
			text-align: center;
		}
		.t-justify{
			text-align: justify;
		}
		.t-bold {
			font-weight: bold;
		}
		.t-14{
			font-size: 14px;
		}
		
		.w-100{
			width: 100%;
		}
		.w-85{
			width: 87%;			
		}
		.border {
			border: 1px solid #000;			
		}
		p{
			margin: 0px;
			font-size: 12px;
		}
		.t-underline{
			text-decoration: underline;
		}
		.mt-20{
			margin-top: 20px
		}
		.mb-10{
			margin-bottom: 10px
		}
		.f-left {
			float: left;
		}
		.n-wrap{
			white-space: nowrap;
		}
		.v-top {
			 vertical-align:top
		}

		#table * {
			font-size: 12px;
		}
		#table {                

                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #000;
                padding: 2px 8px 2px 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {                
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }

	</style>
</head>
<body>
	<table style="width: 100%;">
		<tr> 
			<td style="width:5%;" align="left">
				<img src="data:image/png;base64,<?php print_r($logo); ?>" style="position: absolute; height: auto; width: 170px">	
			</td>
		</tr>
		<!-- <tr> -->
			<!-- <td style="width:5%" align="right">
				<img src="data:image/png;base64,<?php print_r($logo2); ?>" style="position: absolute; height: auto;"width="100">
			</td> -->
			<tr>
			<table style="width: 100%;">
			<td align="right">
				<span style="line-height: 1.4; font-size: 11px; font-weight: bold; color: #4169E1">
					KEMENTRIAN KOMUNIKASI DAN INFORMATIKA RI
					<br>DIREKTORAT JENDERAL SUMBER DAYA DAN PERANGKAT POS DAN INFORMATIKA
					<br>BALAI MONITOR SPEKTRUM FREKUENSI RADIO KELAS II PONTIANAK
				</span>
				<br>
				<span style="line-height: 1.3; font-size: 10.3px; font-weight: bold; color: #4169E1">
					Indonesia Teknoneksi Semakin Digital Semakin Maju
				</span>
				<br>
				<span style="line-height: 1.4; font-size: 8px; font-weight: bold; color: #4169E1">
					Jl. Ahmad Yani Km. 13 Pontianak, Telp/Fax: (0561) 575979, Email: <u style="color: #00BFFF">tu.upt.pontianak@kominfo.go.id</u>
				</span>
				<hr class="line-title">
			</td>
		</tr>
	</table>

	<div class="w-85 center-div mt-20">	
		<p class="t-underline center-text t-14 t-bold">
			BERITA ACARA PENGEMBALIAN PAKAI BARANG INVENTARIS (SEMENTARA)
		</p>
		<p class="center-text mb-10">
			Nomor: &nbsp;&nbsp;&nbsp; /PBI/Balmon-61/DJSDPPI/Kominfo/<?php print_r($bulan_angka); ?>/
		</p>
		<p class="t-justify" >
			Pada hari ini <?php print_r($hari); ?> tanggal <?php print_r($tanggal); ?> bulan <?php print_r($bulan); ?> tahun <?php print_r($tahun); ?> masing-masing yang bertanda tangan dibawah ini :
		</p>
		
		<table >
			<tr>
				<td class="v-top">
					<p style="margin-right: 20px">1</p>
				</td>
				<td class="v-top">
					<p class="n-wrap" style="margin-right: 10rem;">TUESY APRILIANA, SE</P>	
				</td>
				<td class="v-top">
					<p class="t-justify mb-10">Selaku Petugas BMN Balai Monitor Spektrum Frekuensi Radio Kelas II Pontianak Jl. Ahmad Yani II Km. 13 Pontianak, selanjutnya disebut PIHAK PERTAMA</P>	
				</td>
			</tr>
			<tr>
				<td class="v-top">
					<p style="margin-right: 20px">2</p>
				</td>
				<td class="v-top">
					<p class="n-wrap" style="margin-right: 10rem;">
						<?php print_r($data[0]->name); ?>
					</p>	
				</td>
				<td class="v-top">
					<p class="t-justify mb-10" >Selaku Ketua Tim Kegiatan <?php echo $data[0]->kegiatan ?></P>	
				</td>
			</tr>
		</table>


		<p class="t-justify mb-10">PIHAK PERTAMA telah menyerahkan kepada PIHAK KEDUA dan PIHAK KEDUA menerima dari PIHAK PERTAMA barang tersebut dibawah ini dengan keadaan baik, dan cukup satuan maupun jumlahnya dengan rincian sebagai berikut ;</p>
		<table style="margin-top: 15px" id="table">
			<tr>
				<td>
					<p class="t-bold" st>No</p>
				</td>
				<td >
					<p class="t-bold n-wrap" >Kode Barang</p>
				</td>
				<td >
					<p class="t-bold" >NUP</p>
				</td>
				<td class="n-wrap center-text" style="width: 7rem">
					<p class="t-bold" >Nama Barang</p>
				</td>
				<td class="n-wrap center-text" style="width: 7rem">
					<p class="t-bold" >Mark/Type</p>
				</td>
				<td >
					<p class="t-bold" >Unit</p>
				</td>
				<td class="n-wrap center-text" style="width: 7rem">
					<p class="t-bold" >Harga Perolehan</p>
				</td>
			</tr>
			<?php $total= []; ?>
			<?php foreach ($data as $key => $value) {?>

			<tr>
				<td>
					<p><?php print_r($key+1); ?></p>
				</td>
				<td>
					<p><?php print_r($value->kd_perangkat); ?></p> 
				</td>
				<td>
					<p><?php print_r($value->NUP); ?></p> 
				</td>
				<td>
					<p><?php print_r($value->nma_perangkat); ?></p> 
				</td>
				<td>
					<p><?php print_r($value->merk); ?></p> 
				</td>
				<td><p><?php print_r($value->jml); ?></p> </td>
				<?php 
					$pilihAngka = preg_replace('/[^0-9]/', '', $value->rp_aset);
					$jumlahPerList = $pilihAngka * $value->jml;
					array_push($total, $jumlahPerList);	

				?>
				<td><?php echo "Rp " .  number_format($jumlahPerList ,2,',','.'); ?></td>
			</tr>								
			<?php } ?> 
			<tr>
				<td colspan="6">
					<p class="t-bold" style="margin-top: 17px; margin-bottom: 17px; text-align: right;">TOTAL</p>
				</td>
				<td><?php echo  'Rp '.number_format(array_sum($total) ,2,',','.') ; ?></td>
			</tr>						
		</table>
		<p class="t-justify" style="margin-top: 15px; margin-bottom: 30px">
			Demikian Berita Acara Pengembalian Pinjam Pakai Barang Inventaris ini dibuat menurut keadaan yang sebenarnya.
		</p>
		<table style="width: 100%">
			<tr>
				<td class="v-top center-text" style="width: 50%">
					<p style="margin-bottom: 60px" class="t-bold">PIHAK KEDUA</p>
					<p style="" class="t-bold"><?php print_r(strtoupper($data[0]->name) ); ?></p>
					<p style="margin-bottom: 45px" class="t-bold"><?php print_r('NIP. '.strtoupper($data[0]->nip) ); ?></p>
				</td>
				<td class="v-top center-text" style="width: 50%">
					<p style="margin-bottom: 60px" class="t-bold ">PIHAK PERTAMA</p>
					<p style="" class="t-bold t-underline">TUESY APRILIANA</p>
					<p style="margin-bottom: 45px" class="t-bold">NIP. 19820412 200502 2 001</p>
				</td>
			</tr>
			<tr>
				<td colspan="2" class="v-top center-text">
					<p class="t-bold ">Mengetahui,</p>
					<p style="margin-bottom: 60px" class="t-bold ">Kasubag Tata Usaha & Rumah Tangga</p>
					<p style="" class="t-bold t-underline">KIKI RATNA NOVIANSARI, ST</p>
					<p style="" class="t-bold">NIP. 19821106 200502 2 001</p>
				</td>
			</tr>
		</table>
	</div>
</body>
</html> 
<?php //exit(); ?>