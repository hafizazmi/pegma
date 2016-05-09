<?php
class infomulti
{
	var $id;
	var $total;
	var $college_id;
	var $description;
	var $duration;
	
	var $designation;
	var $mobile_no;
	
	var $monthcode;
	var $monthno;
	var $monthdesc;
	
	var $sesi;
	var $jumlahsem;
	
	var $jenismarketing;
	var $peneranganmarketing;
	var $statusmarketing;
	
	var $jenispengguna;
	var $icpengguna;
	var $emel;
	var $username;
	
	var $intakecode;
	var $intakesesi;
	var $intakedesc;
	
	var $kodsubjek;
	var $namasubjek;
	var $tarafsubjek;
	var $statussubjek;
	var $jamkredit;
	var $prasyarat;
	var $is_li;
	
	var $kodspm;
	var $namaspm;
	var $descspm;
		
	var $kodprogram;
	var $namaprogram;
	var $keteranganprog;
	var	$mqa_kodprogram;
	
	var $chck_reg_doc_name;
	var $chck_reg_doc_name_bm;
	
	var $sem_code;
	var $sem_short;
	var $sem_description;
	
	var $icpensyarah;
	var $status_id;
	var $namapensyarah;
	var $nostaf;
	
	var $nama_syarikat;
	var $alamat1;
	var $alamat2;
	var $alamat3;
	var $no_pendaftaran;
	var $pegawai;
	var $no_telefon;
	var $no_faks;
    var $short_desc;
	
	var $agent_company_name;
	var $address1;
	var $address2;
	var $address3;
	var $postcode;
	var $city;
	var $state_id;
	var $country_id;
	var $agent_status;
	var $agent_reg_com_no;
	var $agent_code;
	var $approved_date;
	var $approved_status;
	var $person_incharge;
	var $active_status;
	
	var $college_name;
	var	$address;
	var $phone_no;
	var	$fax_no;
	
	var $session;
	var $semester;
	var $register_date;
	
	function infomulti($type)
	{
		if($type == 'month_info')
		{
			$this->month_info();
		}
		elseif($type == 'sesisem_info')
		{
			$this->sesisem_info();		
		}
		elseif( $type == 'marketing_type_info')
		{
			$this->marketing_type_info();
		}
		elseif( $type == 'staf_pemasaran')
		{
			$this->staf_pemasaran();
		}
		elseif( $type == 'intake_info')
		{
			$this->intake_info();
		}
		elseif( $type == 'info_subjek')
		{
			$this->info_subjek();
		}
		elseif($type == 'subjek_spm_info')
		{
			$this->subjek_spm_info();
		}
		elseif($type == 'program_info')
		{
			$this->program_info();
		}
		elseif($type == 'checklist_reg_doc_info')
		{
			$this->checklist_reg_doc_info();
		}
		elseif($type == 'konfig_semester_info')
		{
			$this->konfig_semester_info();
		}
		elseif($type == 'konfig_sesi_info')
		{
			$this->konfig_sesi_info();
		}
		elseif($type == 'jenis_pemberat_info')
		{
			$this->jenis_pemberat_info();
		}
		elseif($type == 'konfig_pensyarah')
		{
			$this->konfig_pensyarah();
		}
		elseif($type == 'konfig_negeri')
		{
			$this->konfig_negeri();
		}
		elseif($type == 'nationality_info')
		{
			$this->nationality_info();
		}
		elseif($type == 'religion_info')
		{
			$this->religion_info();
		}
		elseif($type == 'konfig_status_international')
		{
			$this->konfig_status_international();
		}		
		elseif($type == 'konfig_jenis_aduan')
		{
			$this->konfig_jenis_aduan();
		}	
		elseif($type == 'konfig_marketing_source')
		{
			$this->konfig_marketing_source();
		}	
		elseif($type == 'konfig_penaja'){
			$this->konfig_penaja();	
		}
		elseif($type == 'li_syarikat')
		{
			$this->li_syarikat();
		}
		elseif($type == 'konfig_kewangan')
		{
			$this->konfig_kewangan();
		}
		elseif($type == 'issue_mentee')
		{
			$this->issue_mentee();
		}
		elseif($type == 'konfig_jenissalah')
		{
			$this->konfig_jenissalah();
		}
		elseif ($type == 'konfig_peperiksaan')
		{
			$this->konfig_peperiksaan();
		}
		elseif($type == 'agent_marketing')
		{
			$this->agent_marketing();
		}
		elseif($type == "countries")
		{
			$this->countries();
		}
		elseif($type == "college_list")
		{
			$this->college_list();
		}
		elseif($type == 'konfig_hostel'){
			$this->konfig_hostel();	
		}
        elseif($type == "li_status_pendaftaran")
		{
			$this->li_status_pendaftaran();
		}
		 elseif($type == "konfig_carabayar")
		{
			$this->konfig_carabayar();
		}
		elseif($type == "races")
		{
			$this->races();
		}
		elseif($type == "alumni_status")
		{
			$this->alumni_status();
		}
		elseif($type == "konfig_convocation")
		{
			$this->konfig_convocation();
		}
		elseif($type == "pelajar_senaraikonvo")
		{
			$this->pelajar_senaraikonvo();
		}
		elseif($type == "konfig_status")
		{
			$this->konfig_status();
		}
		elseif($type == "konfig_intake_date")
		{
			$this->konfig_intake_date();
		}
		elseif($type == "konfig_register_date")
		{
			$this->konfig_register_date();
		}
		elseif($type == "konfig_pensyarah_status")
		{
			$this->konfig_pensyarah_status();
		}
	}
	//--------------------------------------------------------------------------
	function konfig_pensyarah_status()
	{
		$con = connect();
		$query = "select * from konfig_pensyarah_status order by ID asc";
		$res = mysql_query($query,$con) or die(mysql_error());
		$res_total = mysql_num_rows($res);
		$this->total = $res_total; 
		
		$i = 0;
		while($row = mysql_fetch_array($res))
		{
			$this->id[$i] = $row['ID'];
			$this->statusname[$i] = $row['STATUSNAME'];
			$this->statusdesc[$i] = $row['STATUSDESC'];
			$i++;
		}
	  mysql_close($con);
	}
	//--------------------------------------------------------------------------
	function konfig_register_date()
	{
		$con = connect();
		$q = "select * from konfig_register_date order by register_date desc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$this->total = mysql_num_rows($r);
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['id'];
			$this->register_date[$i] = $row['register_date'];
			$this->session[$i] = $row['session'];
			$this->semester[$i] = $row['semester'];
			$this->status[$i] = $row['status'];
			$this->created_on[$i] = $row['created_on'];
			$this->created_by[$i] = $row['created_by'];
			$i++;
		}
	}
	
	//--------------------------------------------------------------------------
	function konfig_intake_date()
	{
		$con = connect();
		$q = "select * from konfig_intake_date order by id asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r)){
			$this->id[$i] = $row['id'];
			$this->session[$i] = $row['session'];
			$this->semester[$i] = $row['semester'];
			$this->register_date[$i] = $row['register_date'];
			$this->status[$i] = $row['status'];
			$this->created[$i] = $row['created'];
			$i++;
		}
	}
	//--------------------------------------------------------------------------
	function pelajar_senaraikonvo()
	{
		$con = connect();
		$q = "select * from pelajar_senaraikonvo order by id asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r)){
			$this->icpelajar[$i] = $row['icpelajar'];
			$this->program_id[$i] = $row['program_id'];
			$this->session_intake[$i] = $row['session_intake'];
			$this->semester_intake[$i] = $row['semester_intake'];
			$this->convo_id[$i] = $row['convo_id'];
			$this->status[$i] = $row['status'];
			$this->created[$i] = $row['created'];
			$i++;
		}
		
	}
	//--------------------------------------------------------------------------
	function konfig_convocation()
	{
		$con = connect();
		$q = "select * from konfig_convocation order by sesi desc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r)){
			$this->id[$i] = $row['id'];
			$this->sesi[$i]= $row['sesi'];
			$this->semester[$i] = $row['semester'];
			$this->convo_date[$i] = $row['convo_date'];
			$this->status[$i] = $row['status'];
			$this->location_name[$i] = $row['location_name'];
			$this->address1[$i] = $row['address1'];
			$this->address2[$i] = $row['address2'];
			$this->address3[$i] = $row['address3'];
			$this->city[$i] = $row['city'];
			$this->postcode[$i] = $row['postcode'];
			$this->state_id[$i] = $row['postcode'];
			$this->country_id[$i] = $row['country_id'];
			$i++;
		}
	}
	
	//--------------------------------------------------------------------------
	function alumni_status()
	{
		$con = connect();
		$q   = "select * from alumni_status order by id asc";
		$r 	 = mysql_query($q,$con) or die(mysql_error()); 
		$this->total = mysql_num_rows($r);
		$i=0;
		while($row = mysql_fetch_array($r)){
			$this->id[$i] = $row['id'];
			$this->description[$i] = $row['description'];
			$i++;
		}
	}
	
	//--------------------------------------------------------------------------
	
	function races()
	{
		$con = connect();
		$q = "select * from races order by description asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		
		while($row = mysql_fetch_array($r)){
			$this->id[$i] = $row['id'];
			$this->description[$i] = $row['description'];
			$i++;
		}
	}
	
	//--------------------------------------------------------------------------
	function li_status_pendaftaran()
	{
		$con = connect();
		$q = "select * from li_status_pendaftaran ";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		
		$i=0;		
		while($row = mysql_fetch_array($r)){
			$this->id[$i] = $row['id'];
			$this->code[$i] = $row['code'];
			$this->description[$i] = $row['description'];
			$i++;
		}
	}
	//--------------------------------------------------------------------------
	
	function college_list()
	{
		$con = connect();
		$q = "select * from college_list order by COLLEGE_ID asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->college_id[$i] = $row['COLLEGE_ID'];
			$this->college_name[$i] = $row['COLLEGE_NAME'];
			$this->address[$i] = $row['ADDRESS'];
			$this->phone_no[$i] = $row['PHONE_NO'];
			$this->fax_no[$i] = $row['FAX_NO'];
			$i++; 
		}
	}
	//--------------------------------------------------------------------------
	function countries()
	{
		$con = connect();
		$q = "select * from countries order by description asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r)){
			$this->id[$i] = $row['id'];
			$this->description[$i] = $row['description'];
			$i++;
		}
	}
	
	//--------------------------------------------------------------------------
	function agent_marketing()
	{
		$con = connect();
		session_start();
		$q = "select * from agent_marketing where COLLEGE_ID='".$_SESSION['college_id']."'";
		$r = mysql_query($q, $con) or die(mysql_error());
		$this->total = mysql_num_rows($r);
		$i = 0;
		
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['ID'];
			$this->college_id[$i] = $row['COLLEGE_ID'];
			$this->agent_company_name[$i] = $row['AGENT_COMPANY_NAME'];
			$this->address1[$i] = $row['ADDRESS1'];
			$this->address2[$i] = $row['ADDRESS2'];
			$this->address3[$i] = $row['ADDRESS3'];
			$this->postcode[$i] = $row['POSTCODE'];
			$this->city[$i] = $row['CITY'];
			$this->state_id[$i] = $row['STATE_ID'];
			$this->country_id[$i] = $row['COUNTRY_ID'];
			$this->agent_status[$i] = $row['AGENT_STATUS'];
			$this->agent_reg_com_no[$i]	= $row['AGENT_REG_COM_NAME'];
			$this->agent_code[$i] = $row['AGENT_CODE'];
			$this->approved_date[$i] = $row['APPROVED_DATE'];
			$this->approved_status[$i] = $row['APPROVED_STATUS'];
			$this->person_incharge[$i] = $row['PERSON_INCHARGE'];
			$this->active_status[$i] = $row['ACTIVE_STATUS'];
			$i++;
		}
	}
	//--------------------------------------------------------------------------
    function konfig_peperiksaan()
        {
            $con = connect();
            $q = "select * from konfig_peperiksaan order by id asc";
            $r = mysql_query($q,$con) or die(mysql_error());
            
            $this->total = mysql_num_rows($r);
            $i=0;
            
            while($row = mysql_fetch_array($r))
            {
                $this->id[$i] = $row['id'];
                $this->short_desc[$i] = $row['short_desc'];
                $this->description[$i] = $row['description'];
                $i++;
            }
        }
        
	//-------------------------industrial training ---------------------------
	
	function li_syarikat()
	{
		$con = connect();
		$q = "select * from li_syarikat order by ID asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$this->total = mysql_num_rows($r);
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['ID'];
			$this->nama_syarikat[$i] = $row['NAMA_SYARIKAT'];
			$this->alamat1[$i] = $row['ALAMAT1'];
			$this->alamat2[$i] = $row['ALAMAT2'];
			$this->alamat3[$i] = $row['ALAMAT3'];
			$this->city[$i] = $row['CITY'];
			$this->postcode[$i] = $row['POSTCODE'];
			$this->state_id[$i] = $row['STATE_ID'];
			$this->country_id[$i] = $row['COUNTRY_ID'];
			$this->no_pendaftaran[$i] = $row['NO_PENDAFTARAN'];
			$this->pegawai[$i] = $row['PEGAWAI'];
			$this->email[$i] = $row['EMAIL'];
			$this->no_telefon[$i] = $row['NO_TELEFON'];
			$this->no_faks[$i] = $row['NO_FAKS'];
			$this->designation[$i] = $row['DESIGNATION'];
			$this->mobile_no[$i]   = $row['MOBILE_NO'];
			$i++;
		}
	}
	
	//------------------------------------------------------------------
	
	function konfig_marketing_source()
	{
		$con = connect();
		$q = "select * from konfig_marketing_source order by id asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$this->total = mysql_num_rows($r);
		$i = 0;
		while($row = mysql_fetch_array($r)){
			$this->id[$i] = $row['id'];
			$this->title[$i] = $row['title'];
			$this->description[$i] = $row['description'];
			$this->status[$i] = $row['status'];
			$i++;
		}
	}	
	
	//------------------------------------------------------------------
	function konfig_status_international()
	{
		$con = connect();
		$q = "select * from konfig_status_international order by id asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$this->total = mysql_num_rows($r);
		$i = 0;
		while($row = mysql_fetch_array($r)){
			$this->id[$i] = $row['id'];
			$this->description[$i] = $row['description'];
			$i++;
		}
	}
	
	//------------------------------------------------------------------
	
	function religion_info()
	{
		$con = connect();
		$qx   = "select * from religions order by id asc";
		$rx 	 = mysql_query($qx,$con) or die(mysql_error());
		$bil = mysql_num_rows($rx);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($rx)){		
		$this->id[$i] = $row['id'];
		$this->description[$i] = $row['description'];
		$i++;
	}
		
	}
	
	//-------------------------------------------------------------------
		function issue_mentee()
	{
		$con = connect();
		$qx   = "select * from issue_mentee order by isu_id asc";
		$rx 	 = mysql_query($qx,$con) or die(mysql_error());
		$bil = mysql_num_rows($rx);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($rx)){		
		$this->id[$i] = $row['isu_id'];
		$this->description[$i] = $row['description'];
		$i++;
		}
		
	}
	
	//-------------------------------------------------------------------
	function nationality_info()
	{
		$con = connect();
		$q   = "select * from nationalities order by id asc";
		$r 	 = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r)){		
		$this->id[$i] = $row['id'];
		$this->description[$i] = $row['description'];
		$i++;
		}
		
	}
	//-------------------------------------------------------------------
	function month_info()
	{
		$con = connect();
		$q = "select * from months order by MONTHNO asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$this->total = mysql_num_rows($r);
		
		$i = 0;
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['ID'];
			$this->monthno[$i] = $row['MONTHNO'];
			$this->monthcode[$i] = $row['MONTHCODE'];
			$this->monthdesc[$i] = $row['MONTHDESC'];	
			$i++;
		}
		
	}
	
	function sesisem_info()
	{
		$con = connect();
		$q   = "select * from konfig_sesisem order by SESI desc "; 
		$r = mysql_query($q,$con) or die(mysql_error());
		$this->total = mysql_num_rows($r);
		$i = 0;
		
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['ID'];
			$this->sesi[$i] = $row['SESI'];
			$this->jumlahsem[$i] = $row['JUMLAHSEM'];
			$i++;
		}
	}
	
	function marketing_type_info()
	{
		$con = connect();
		$query = "select * from jenis_pemasaran";
		$res = mysql_query($query,$con) or die(mysql_error());
		$no = mysql_num_rows($res);
		$this->total = $no;
		$i = 0;		
		while($row = mysql_fetch_array($res))
		{
			$this->id[$i] = $row['ID'];
			$this->jenismarketing[$i] = $row['JENISMARKETING'];
			$this->peneranganmarketing[$i] = $row['PENERANGANMARKETING'];
			$this->statusmarketing[$i] = $row['STATUS'];
			$i++;
		}
				
	}
	
	//----------------------------------------------------------------------
	function staf_pemasaran()
	{
		$con = connect();
		$q   = "select * from personal order by ID asc ";
		$r   = mysql_query($q,$con) or die(mysql_error());
		$this->total = mysql_num_rows($r);
		$i=0;
		while($row = mysql_fetch_array($r)){		
			$this->id[$i] = $row['ID'];
			$this->college_id[$i] = $row['COLLEGE_ID'];
			$this->name[$i] = $row['NAME'];
			$this->user_id[$i] = $row['USER_ID'];
			$this->address1[$i] = $row['ADDRESS1'];
			$this->address2[$i] = $row['ADDRESS2'];
			$this->address3[$i] = $row['ADDRESS3'];
			$this->city[$i] = $row['CITY'];
			$this->postcode[$i] = $row['POSTCODE'];
			$this->state_id[$i] = $row['STATE_ID'];
			$this->country_id[$i] = $row['COUNTRY_ID'];
			$this->gender_id[$i] = $row['GENDER_ID'];
			$this->nationality_id[$i] = $row['NATIONALITY_ID'];
			$this->religion_id[$i] = $row['RELIGION_ID'];
			$this->race_id[$i] = $row['RACE_ID'];
			$this->phoneno1[$i] = $row['PHONENO1'];
			$this->phoneno2[$i] = $row['PHONENO2'];
			$this->no_faks[$i] = $row['FAX'];
			$this->email[$i] =  $row['EMAIL'];
			$this->maritial_status_id[$i] = $row['MARITIAL_STATUS_ID'];
			$i++;
		}
	}
	
	/*function staf_pemasaran()
	{
		$con = connect();
		session_start();
		$query = "select ID,COLLEGE_ID,NAMAPENGGUNA,ICPENGGUNA,JENISPENGGUNA,EMEL from pengguna where JENISPENGGUNA ='MKS' 
		and COLLEGE_ID='".$_SESSION['college_id']."' order by ID asc";
		$res = mysql_query($query,$con) or die(mysql_error());
		$bil = mysql_num_rows($res);
		$this->total = $bil;
		$i = 0;
		
		while($row = mysql_fetch_array($res))
		{
			$this->id[$i] = $row['ID'];
			$this->college_id[$i] = $row['COLLEGE_ID'];
			$this->username[$i] = $row['NAMAPENGGUNA'];
			$this->icpengguna[$i] = $row['ICPENGGUNA'];
			$this->jenispengguna[$i] = $row['JENISPENGGUNA'];
			$this->emel[$i] = $row['EMEL'];
			$i++;
		}
		
	}*/
	
	function intake_info()
	{
		$con = connect();
		$q = "select * from konfig_intake order by id asc ";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		
		$i =0;
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['ID'];
			$this->intakecode[$i] = $row['INTAKECODE'];
			$this->intakesesi[$i] = $row['INTAKESESI'];
			$this->intakedesc[$i] = $row['INTAKEDESC'];
			$i++;
		}
				
	}
	
	function info_subjek()
	{
		$con = connect();
		
		$q = "select * from konfig_subjek where COLLEGE_ID='".$_SESSION['college_id']."' order by namasubjek asc ";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i = 0 ;
		while($row = mysql_fetch_array($r)){
			$this->id[$i] = $row['ID'];
			$this->college_id[$i] = $row['COLLEGE_ID'];
			$this->kodsubjek[$i] = $row['KODSUBJEK'];
			$this->namasubjek[$i] = $row['NAMASUBJEK'];
			$this->tarafsubjek[$i] = $row['TARAFSUBJEK'];
			$this->statussubjek[$i] = $row['STATUS'];
			$this->jamkredit[$i] = $row['JAMKREDIT'];
			$this->prasyarat[$i] = $row['PRASYARAT'];
			$this->is_li[$i] = $row['IS_LI'];
			$i++;
		}
		
	}
	
	function subjek_spm_info()
	{
		$con = connect();
		session_start();
		$q = "select * from konfig_subjekspm order by NAMASUBSPM asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i = 0 ;
		while($row = mysql_fetch_array($r)){
			$this->id[$i] = $row['ID'];
			$this->kodspm[$i] = $row['KODSUBSPM'];
			$this->namaspm[$i] = $row['NAMASUBSPM'];
			$this->descspm[$i]= $row['KETERANGANSPM'];
			$i++;
		}
		
	}
	
	function program_info()
	{
		$con = connect();
		session_start();
		$q = "select * from konfig_program where COLLEGE_ID='".$_SESSION['college_id']."' order by NAMAPROGRAM asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i = 0;
		while($row = mysql_fetch_array($r))
		{	
			$this->id[$i] = $row['ID'];
			$this->college_id[$i] = $row['COLLEGE_ID'];
			$this->kodprogram[$i] = $row['KODPROGRAM'];
			$this->namaprogram[$i]= $row['NAMAPROGRAM'];
			$this->jumlahsem[$i] = $row['JUMSEMESTER'];
			$this->keteranganprog[$i]=  $row['KETERANGANPROG'];
			$this->mqa_kodprogram[$i] = $row['MQA_KODPROGRAM'];
			$this->duration[$i] = $row['DURATION'];
			$i++;
		}
		
	}
	
	function checklist_reg_doc_info()
	{
		$con = connect();
		$q   = "select * from konfig_checklist_document order by ID asc";
		$r   = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['ID'];
			$this->chck_reg_doc_name[$i] = $row['DOKUMEN_NAME'];
			$this->chck_reg_doc_name_bm[$i] = $row['DOKUMEN_NAME_BM'];
			$i++;
		}
			 
	}
	
	function konfig_semester_info()
	{
		$con = connect();
		$q   = "select * from konfig_semester order by sem_code asc";
		$r   = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->sem_code[$i] = $row['sem_code'];
			$this->sem_short[$i] = $row['sem_short'];
			$this->sem_description[$i] = $row['sem_description'];
			$i++;			
		}
				
	}
	
	//---------------------------------------------------------------------

	function konfig_sesi_info()
	{
		$con = connect();
		$q   = "select * from konfig_sesisem order by SESI asc";
		$r   = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->sesi_id[$i] = $row['ID'];
			$this->sesi[$i] = $row['SESI'];
			$this->jumlahsem[$i] = $row['JUMLAHSEM'];
			$i++;			
		}
	}
	
	
	
	//----------------------------------------------------------------------
	
	
	function jenis_pemberat_info()
	{
		$con = connect();
		$q = "select * from konfig_jenispemberat";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bilrow = mysql_num_rows($r);
		$this->total = $bilrow;
		$i =0;
		
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] =  $row['ID'];
			$this->description[$i] = $row['DESCRIPTION'];
			$i++;
		}
		
	}
	
	function konfig_pensyarah()
	{
		$con = connect();
		session_start();
		$q = "select * from konfig_pensyarah where COLLEGE_ID='".$_SESSION['college_id']."'
			order by namapensyarah asc
			";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['ID'];
			$this->college_id[$i] = $row['COLLEGE_ID'];
			$this->icpensyarah[$i] = $row['ICPENSYARAH'];
			$this->namapensyarah[$i] = $row['NAMAPENSYARAH'];
			$this->status_id[$i] = $row['STATUS_ID'];
			$this->nostaf[$i] = $row['NOSTAF'];
			$i++;
		}
	
	}
	
	function konfig_negeri()
	{
		$con = connect();
		$q = "select * from states order by description asc";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['id'];				
			$this->description[$i] = $row['description'];
			$i++;
		}
		
	}
	function konfig_jenis_aduan()
	{
		$con = connect();
		$q = "select * from konfig_jenis_aduan";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['id'];				
			$this->description[$i] = $row['description'];
			$i++;
		}
		
	}
	function konfig_penaja()
	{
		$con = connect();
		$q = "select * from konfig_penaja order by kodpenaja";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->kodpenaja[$i] = $row['KODPENAJA'];				
			$this->namapenaja[$i] = $row['NAMAPENAJA'];
			$this->keteranganpenaja[$i] = $row['KETERANGANPENAJA'];
			$i++;
		}
		
	}
	function konfig_kewangan()
	{
		$con = connect();
		$q = "select * from konfig_kewangan order by code asc ";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['id'];
			$this->kod[$i] = $row['code'];				
			$this->description[$i] = $row['description'];
			$this->amount[$i] = $row['amount'];
			$this->type[$i] = $row['type'];
			$i++;
		}
		
	}
	function konfig_jenissalah()
	{
		$con = connect();
		$q = "select * from konfig_kewangan where type = '2' order by code";
		$r = mysql_query($q,$con) or die(mysql_error());
		$bil = mysql_num_rows($r);
		$this->total = $bil;
		$i=0;
		while($row = mysql_fetch_array($r))
		{
			$this->id[$i] = $row['id'];
			$this->kod[$i] = $row['code'];				
			$this->description[$i] = $row['description'];
			$this->amount[$i] = $row['amount'];
			$this->type[$i] = $row['type'];
			$i++;
		}
		
	}
	function konfig_hostel(){
		$con = connect();
		$query = "select * from asrama_blok
			order by nama_blok
			";
		$res = mysql_query($query, $con);
		$this->total = mysql_num_rows($res);
		$i=0;
		while($row = mysql_fetch_array($res)){
			$this->kod[$i] = $row['KOD'];
			$this->nama_blok[$i] = $row['NAMA_BLOK'];
			$this->bil_aras[$i] = $row['BIL_ARAS'];
			$this->alamat1[$i] = $row['ALAMAT1'];
			$this->alamat2[$i] = $row['ALAMAT2'];
			$this->alamat3[$i] = $row['ALAMAT3'];
			$this->poskod[$i] = $row['POSKOD'];
			$this->bandar[$i] = $row['BANDAR'];
			$this->negeri[$i] = $row['NEGERI'];
			$this->jenis[$i] = $row['JENIS'];
			$this->status[$i] = $row['STATUS'];
			$i++;
		}
	}
	function konfig_carabayar(){
		$con = connect();
		$query = "select * from konfig_carabayar
			order by description
			";
		$res = mysql_query($query, $con);
		$this->total = mysql_num_rows($res);
		$i=0;
		while($row = mysql_fetch_array($res)){
			$this->id[$i] = $row['id'];
			$this->description[$i] = $row['description'];
			
			$i++;
		}
	}
	function konfig_status(){
		$con = connect();
		$query = "select * from konfig_status
			order by namastatus
			";
		$res = mysql_query($query, $con);
		$this->total = mysql_num_rows($res);
		$i=0;
		while($row = mysql_fetch_array($res)){
			$this->id[$i] = $row['ID'];
			$this->kodstatus[$i] = $row['KODSTATUS'];
			$this->namastatus[$i] = $row['NAMASTATUS'];
			
			$i++;
		}
	}
}
?>