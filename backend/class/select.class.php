<?php

class select {
	
	
	function select($type='')
	{	
		if ($type == 'concat')
		{
		$this->concat();
    	}
		elseif ($type == 'program')
		{
		$this->program();
    	}
		elseif ($type == 'subjek')
		{
			$this->subjek();
		}
		elseif ($type == 'sekolah')
		{
		$this->sekolah();
    	}
		elseif ($type == 'jabatan')
		{
		$this->jabatan();
	   	}
		elseif ($type == 'pemohon')
		{
		$this->pemohon();
	   	}
		elseif ($type == 'programpilih')
		{
		$this->programpilih();
	   	}
		elseif ($type == 'pemohonberjaya')
		{
		$this->pemohonberjaya();
	   	}
		elseif ($type == 'pelajar')
		{
		$this->pelajar();
	   	}
		elseif ($type == 'status')
		{
		$this->status();
	   	}
		elseif ($type == 'felo')
		{
		$this->felo();
	   	}
		elseif ($type == 'asrama')
		{
		$this->asrama();
	   	}	
		elseif ($type == 'kumpulanyuran')
		{
		$this->kumpulanyuran();
	   	}
		
		elseif ($type == 'subyuran')
		{
		$this->subyuran();
	   	}
		elseif ($type == 'yuran')
		{
		$this->yuran();
	   	}
		elseif ($type == 'yurand')
		{
		$this->yurand();
	   	}
		elseif($type == 'college')
		{
			$this->college();
		}
		elseif($type == 'lect_status')
		{
			$this->lecturer_status();
		}
		elseif($type == 'semester')
		{
			$this->semester();
		}
		
   }
	
	function concat()
	{	
		$con=connect();
		$query= "select * from konfig_subjekspm";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->id[$i]=$row['ID'];
			$this->kod_subjekspm[$i] = $row['KODSUBSPM'];
			$this->nama_subjekspm[$i] = $row['NAMASUBSPM'];
			$this->detail_subjekspm[$i] = $row['KETERANGANSPM'];
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	function program()
	{	
		$con=connect();
		session_start();
		$query= "select * from konfig_program where COLLEGE_ID = '".$_SESSION['college_id']."'";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->id_program[$i]     = $row['ID'];
			$this->kod_program[$i]    = $row['KODPROGRAM'];
			$this->nama_program[$i]   = $row['NAMAPROGRAM'];
			$this->jumsemprog[$i]     = $row['JUMSEMESTER'];
			$this->detail_program[$i] = $row['KETERANGANPROG'];
			//$this->kodsekprog[$i]     = $row['KODSEKOLAH'];
			//$this->kodjabprog[$i]     = $row['KODJABATAN'];
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	function subjek()
	{	
		$con=connect();
		session_start();
		$query= "select * from konfig_subjek";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->id_subjek[$i]     = $row['ID'];
			$this->kod_subjek[$i]     = $row['KODSUBJEK'];
			$this->nama_subjek[$i]   = $row['NAMASUBJEK'];
			$this->tarafsubjek[$i] = $row['TARAFSUBJEK'];
			$this->status[$i]     = $row['STATUS'];
			$this->jamkredit[$i]     = $row['JAMKREDIT'];
			$this->prasyarat[$i]     = $row['PRASYARAT'];
			$i++;
		}
		mysql_close($con);
	}	
	
	//-----------------------------------------------------------------------------
	
	function status()
	{	
		$con=connect();
		$query= "select * from konfig_status";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->kodstatus[$i] = $row['KODSTATUS'];
			$this->namastatus[$i] = $row['NAMASTATUS'];
			$this->detailstatus[$i] = $row['KETERANGANSTATUS'];
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	function jabatan()
	{	
		$con=connect();
		$query= "select * from konfig_jabatan";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->kod_jabatan[$i] = $row['KODJABATAN'];
			$this->nama_jabatan[$i] = $row['NAMAJABATAN'];
			$this->detail_jabatan[$i] = $row['KETERANGANJAB'];
			$this->kodsekjab[$i] = $row['KODSEKOLAH'];
			$this->jumprogjab[$i] = $row['JUMLAHPROG'];
			$i++;
		}
		mysql_close($con);
	}
	
	function semester(){
		$con = connect();
		$query= "select * from konfig_semester";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->sem_kod[$i] = $row['sem_code'];
			$this->sem_short[$i] = $row['sem_short'];
			$this->sem_description[$i] = $row['sem_description'];
			
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	function sekolah()
	{	
		$con=connect();
		$query= "select * from sekolah";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->kod_sekolah[$i] = $row['KODSEKOLAH'];
			$this->nama_sekolah[$i] = $row['NAMASEKOLAH'];
			$this->detail_sekolah[$i] = $row['KETERANGANSEK'];
			$this->jumlahjab[$i] = $row['JUMJABATAN'];
			$this->jumlahprog[$i] = $row['JUMPROGRAM'];
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	
	function pemohon()
	{	
		$con=connect();
		$query= "select * from pemohon";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->icphn[$i] = $row['IDPEMOHON'];
			$this->namaphn[$i] = $row['NAMAPEMOHON'];
			$this->jantinaphn[$i] = $row['JANTINA'];
			$this->tlahirphn[$i] = $row['TARIKHLAHIR'];
			$this->agamaphn[$i] = $row['AGAMA'];
			$this->tarafphn[$i] = $row['TARAFKAHWIN'];
			$this->wargaphn[$i] = $row['WARGANEGARA'];
			$this->emelphn[$i] = $row['EMEL'];
			$this->alamatphn[$i] = $row['ALAMAT'];
			$this->bandarphn[$i] = $row['POSKOD'];
			$this->poskodphn[$i] = $row['BANDAR'];
			$this->negeriphn[$i] = $row['NEGERI'];
			$this->hpphn[$i] = $row['NOTELEFON'];
			$this->telefonphn[$i] = $row['NOTELEFONR'];
			$this->jenissekphn[$i] = $row['JENISSEKPHN'];
			$this->namasekphn[$i] = $row['NAMASEKPHN'];
			$this->negerisekphn[$i] = $row['NEGERISEKPHN'];
			$this->statusphn[$i] = $row['STATUSPHN'];
			$this->progtawar[$i] = $row['PROGTAWAR'];
			
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	
	function pelajar()
	{	
		$con=connect();
		$query= "select * from pelajar";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->icpjr[$i] = $row['IDPELAJAR'];
			$this->namapjr[$i] = $row['NAMAPELAJAR'];
			$this->jantinapjr[$i] = $row['JANTINA'];
			$this->tlahirpjr[$i] = $row['TARIKHLAHIR'];
			$this->agamapjr[$i] = $row['AGAMA'];
			$this->tarafpjr[$i] = $row['TARAFKAHWIN'];
			$this->wargapjr[$i] = $row['WARGANEGARA'];
			$this->emelpjr[$i] = $row['EMEL'];
			$this->alamatpjr[$i] = $row['ALAMAT'];
			$this->bandarpjr[$i] = $row['BANDAR'];
			$this->poskodpjr[$i] = $row['POSKOD'];
			$this->negeripjr[$i] = $row['NEGERI'];
			$this->hppjr[$i] = $row['NOTELEFON'];
			$this->telefonpjr[$i] = $row['NOTELEFONR'];
			$this->fakspjr[$i] = $row['NOFAKS'];
			$this->telefonppjr[$i] = $row['NOTELEFONP'];
			$this->jenissekpjr[$i] = $row['JENISSEK'];
			$this->namasekpjr[$i] = $row['NAMASEK'];
			$this->negerisekpjr[$i] = $row['NEGERISEK'];
			$this->keturunanpjr[$i] = $row['KETURUNAN'];
			$this->penyakitpjr[$i] = $row['PENYAKITPJR'];
			$this->nokadpjr[$i] = $row['NOKADPJR'];
			$this->alahanpjr[$i] = $row['ALAHANPJR'];
			$this->darahpjr[$i] = $row['DARAHPJR'];
			$this->biladikpjr[$i] = $row['BILADIKPJR'];
			$this->umurpjr[$i] = $row['UMURPJR'];
			$this->bilkeluargapjr[$i] = $row['BILKELUARGA'];
			
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	
	function pemohonberjaya()
	{	
		$con=connect();
		extract($_POST);
		$query= "SELECT * FROM pelajar_umum pu, applicant_personal_info api WHERE pu.ICPELAJAR=api.ICNO and pu.PROGRAM = '$program'";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->id[$i] = $row['ID'];
			$this->namaphn[$i] = $row['NAME'];
			$this->icphn[$i] = $row['ICPELAJAR'];
			$this->jantinaphn[$i] = $row['GENDER_ID'];
			$this->tlahirphn[$i] = $row['BIRTHDATE'];
			$this->agamaphn[$i] = $row['RELIGION_ID'];
			$this->tarafphn[$i] = $row['MARITAL_STATUS_ID'];
			$this->wargaphn[$i] = $row['NATIONALITY_ID'];
			$this->emelphn[$i] = $row['EMEL'];
			$this->alamatphn[$i] = $row['ADDRESS1_P'];
			$this->bandarphn[$i] = $row['POSTCODE_P'];
			$this->poskodphn[$i] = $row['CITY_P'];
			$this->negeriphn[$i] = $row['STATES_ID'];
			$this->hpphn[$i] = $row['PHONE_NO1'];
			$this->telefonphn[$i] = $row['PHONE_NO2'];
			$this->progtawar[$i] = $row['PROGRAM_ID'];
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	
	function programpilih()
	{	
		$con=connect();
		$query= "select * from pemohon_program";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->icphn[$i] = $row['IDPEMOHON'];
			$this->program1[$i] = $row['PROG1'];
			$this->program2[$i] = $row['PROG2'];
			$this->program3[$i] = $row['PROG3'];
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	
	function felo()
	{	
		$con=connect();
		$query= "select * from konfig_felo";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->icfelo[$i] = $row['ICFELO'];
			$this->namafelo[$i] = $row['NAMAFELO'];
			$this->nostaffelo[$i] = $row['NOSTAF'];
			$this->bloktugasfelo[$i] = $row['BLOKTUGAS'];
			$this->masatugasfelo[$i] = $row['MASATUGAS'];
			$this->telefonfelo[$i] = $row['TELEFONFELO'];
			$this->tempohfelo[$i] = $row['TEMPOHFELO'];
			$i++;
		}
	mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	
	function asrama()
	{	
		$con=connect();
		$query= "select * from konfig_asrama order by KODBLOK";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->kodblok[$i] = $row['KODBLOK'];
			$this->namablok[$i] = $row['NAMABLOK'];
			$this->jumaras[$i] = $row['JUMARAS'];
			$this->jumbilik[$i] = $row['JUMBILIK'];
			$this->kapasiti[$i] = $row['KAPASITI'];
			$this->kapasitibilik[$i] = $row['KAPASITIPBILIK'];
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	
	function kumpulanyuran()
	{	
		$con=connect();
		$query= "select * from konfig_yurankumpulan order by KOD";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->kodyurankump[$i] = $row['KOD'];
			$this->namayurankump[$i] = $row['NAMAKUMPULAN'];
			$this->detailyurankump[$i] = $row['KETERANGAN'];
			$this->kategoriyurankump[$i] = $row['KATEGORI'];
			$i++;
		}
		mysql_close($con);
	}
	
	//----------------------------------------------------------------------------
	
	
	function subyuran()
	{	
		extract ($_GET);
		$id = $nama;
		$con=connect();
		$query= "select * from konfig_yuransubkumpulan where JENISKUMPULAN = '$id'";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->kodsubyuran[$i] = $row['KOD'];
			$this->namasubyuran[$i] = $row['NAMASUBKUMPULAN'];
			$this->jenissubyuran[$i] = $row['JENISKUMPULAN'];
			$this->kategorisubyuran[$i] = $row['KATEGORI'];
			$i++;
		}
		mysql_close($con);
	}
	//----------------------------------------------------------------------------
	
	function yuran()
	{	
		$con=connect();
		$query= "select * from konfig_kadaryuran";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->kodyuran[$i] = $row['KODYURAN'];
			$this->namayuran[$i] = $row['NAMAYURAN'];
			$this->programyuran[$i] = $row['PROGRAM'];
			$this->sesiyuran[$i] = $row['SESI'];
			$this->semyuran[$i] = $row['SEMESTER'];
			$this->jumlahyuran[$i] = $row['JUMLAH'];
			$i++;
		}
		mysql_close($con);
	}
	//----------------------------------------------------------------------------
	
	function yurand()
	{	
		$con=connect();
		$query= "select * from konfig_kadaryuran";
		$res=mysql_query($query,$con);
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		//$row = mysql_fetch_assoc($res);
		$i = 0;
		while($row = mysql_fetch_array($res)) 
		{
			$this->kodyuran[$i] = $row['KODYURAN'];
			$this->namayuran[$i] = $row['NAMAYURAN'];
			$this->programyuran[$i] = $row['PROGRAM'];
			$this->sesiyuran[$i] = $row['SESI'];
			$this->semyuran[$i] = $row['SEMESTER'];
			$this->jumlahyuran[$i] = $row['JUMLAH'];
			$i++;
		}
		mysql_close($con);
	}
	
	function college()
	{
		$con = connect();
		$query = "select * from college_list order by COLLEGE_ID asc";
		$res = mysql_query($query,$con) or die(mysql_error());
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		
		$i = 0;
		while($row = mysql_fetch_array($res))
		{
			$this->collegeid[$i] = $row['COLLEGE_ID'];
			$this->collegename[$i] = $row['COLLEGE_NAME'];
			$i++;
		}
		mysql_close();		
	}
	
	function lecturer_status()
	{
		$con = connect();
		$query = "select * from konfig_pensyarah_status order by ID asc";
		$res = mysql_query($query,$con) or die(mysql_error());
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		
		$i = 0;
		while($row = mysql_fetch_array($res))
		{
			$this->lect_status_id[$i] = $row['ID'];
			$this->lect_status_name[$i] = $row['STATUSNAME'];
			$this->lect_status_desc[$i] = $row['STATUSDESC'];
			$i++;
		}
	  mysql_close($con);
	}
}

?>