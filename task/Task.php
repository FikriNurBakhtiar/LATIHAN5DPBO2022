<?php 

class Task extends DB{
	
	// Mengambil data
	function getTask(){
		
		$query = "SELECT * FROM tb_to_do";

		// Eksekusi query
		return $this->execute($query);
	}

	// Menginput data
	function addTask($tname, $tdetails, $tsubject, $tpriority, $tdeadline){
		
		$query = "INSERT INTO tb_to_do (name_td, details_td, subject_td, priority_td, deadline_td, status_td)
		VALUES ('$tname', '$tdetails', '$tsubject', '$tpriority', '$tdeadline', 'Belum')";

		// Eksekusi query
		return $this->execute($query);
	}

	// Menghapus data
	function delete($id){
		
		$query = "DELETE FROM tb_to_do WHERE id = $id";

		// Eksekusi query
		return $this->execute($query);
	}

	// Mengubah status data menjadi Selesai
	function selesai($id){
		
		$query = "UPDATE tb_to_do SET status_td = 'Sudah' WHERE id = $id";

		// Eksekusi query
		return $this->execute($query);
	}
	
}

?>