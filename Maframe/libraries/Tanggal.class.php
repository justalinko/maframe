<?php 

Class Tanggal{
	
	public function DateMonth($m,$now = false)
	{
		if($now == true)
		{
			$m = ceil(date('m'));
		}else{
			$m = $m;
		}
		switch ($m) {
			case 1:
				$bln = "Januari";
				break;
			case 2:
				$bln = "Februari";
				break;
			case 3:
				$bln = "Maret";
				break;
			case 4:
				$bln = "April";
				break;
			case 5:
				$bln = "Mei";
				break;
			case 6:
				$bln = "Juni";
				break;
			case 7:
				$bln = "Juli";
				break;
			case 8:
				$bln = "Agustus";
				break;
			case 9:
				$bln = "September";
				break;
			case 10:
				$bln = "Oktober";
				break;
			case 11:
				$bln = "November";
				break;
			case 12:
				$bln = "Desember";
				break;
		}
		return $bln;
	}
	public function DateWeek($w,$now = false)
	{
		if($now == true)
		{
			$w = date('d');
		}else{
			$w = $w;
		}
		$seminggu = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
		return $seminggu[$w];
	}
	public function DateNow($jam=false)
	{
		$bln = $this->DateMonth(ceil(date('m')));
		$seminggu = $this->DateWeek(date('d'));
		
		$hari = $seminggu[date('w')];
		$tglnow = date('d'); $tahun = date('Y');
		if($jam === true){
			$returnkan = $hari.", ".$tglnow." ".$bln." ".$tahun." , ".date('H:i:s');
		}else{ 
			$returnkan = $hari.", ".$tglnow." ".$bln." ".$tahun;
		}
		return $returnkan;
	}
}
?>