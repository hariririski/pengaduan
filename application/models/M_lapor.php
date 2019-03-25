<?php
    class M_lapor extends CI_Model{

      function lihat(){
        $query=$this->db->query("SELECT * FROM jenis_pengaduan");
        return $query->result();
      }
      function semua_pengaduan(){
        $query=$this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan ORDER BY data_pengaduan.tanggal_pengaduan DESC");
        return $query->result();
      }
      function detail_pengaduan($id){
        $query=$this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan WHERE data_pengaduan.id_pengaduan='$id'");
        return $query->result();
      }
      function max(){
        $query=$this->db->query("SELECT MAX(nomor) from data_pengaduan");
        return $query->result();
      }

      function tambah(){
          $nama_lengkap = $this->input->post('nama_lengkap');
          $alamat = $this->input->post('alamat');
          $email = $this->input->post('email');
          $pekerjaan = $this->input->post('pekerjaan');
          $no_telepon = $this->input->post('no_telepon');
          $uraian_pengaduan = $this->input->post('uraian_pengaduan');
          $jenis_pengaduan = $this->input->post('jenis_pengaduan');
          $tanggal = $this->input->post('tanggal');
          $nama_bukti1 = $this->input->post('nama_bukti1');
          $nama_bukti2 = $this->input->post('nama_bukti2');
          $nama_bukti3 = $this->input->post('nama_bukti3');
          $nomor=0;
          $id_pelapor = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y"));
          $file_ktp=$this->random_name(20);
          $ktp=$this->upload_ktp($file_ktp);

          $file_bukti1=$this->random_name(20);
          $bukti1=$this->upload_bukti1($file_bukti1);

          $file_bukti2=$this->random_name(20);
          $bukti2=$this->upload_bukti2($file_bukti2);

          $file_bukti3=$this->random_name(20);
          $bukti3=$this->upload_bukti3($file_bukti3);

          $query=$this->db->query("SELECT MAX(nomor) as nomor_max from data_pengaduan");
           $query->result();
           foreach($query->result() as $max){
             $nomor=$max->nomor_max;
             $nomor++;
           }

          $data = array(
              'nama'=>$nama_lengkap,
              'id_pelapor'=>$id_pelapor,
              'alamat'=>$alamat,
              'email'=>$email,
              'pekerjaan'=>$pekerjaan,
              'no_telepon'=>$no_telepon
            );
            $cek=$this->db->insert('pelapor',$data);

          $data = array(
              'uraian'=>$uraian_pengaduan,
              'id_pengaduan'=>$id_pelapor.$nomor,
              'id_pelapor'=>$id_pelapor,
              'nomor'=>$nomor,
              'tanggal_pengaduan'=>$tanggal,
              'jenis_pengaduan'=>$jenis_pengaduan,
              'nama_bukti1'=>$nama_bukti1,
              'nama_bukti2'=>$nama_bukti2,
              'nama_bukti3'=>$nama_bukti3,
              'ktp'=>$ktp,
              'bukti1'=>$bukti1,
              'bukti2'=>$bukti2,
              'bukti3'=>$bukti3,
            );
          //print_r($data);
          $cek=$this->db->insert('data_pengaduan',$data);
          $id_pengaduan=$id_pelapor.$nomor;
          return $id_pengaduan;
      }

      function upload_ktp($name){
          $config['upload_path']          = './assets/upload/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['file_name']            = $name;
          $config['overwrite']		      	= false;
          $config['max_size']             = 10024; // 1MB
          // $config['max_width']            = 1024;
          // $config['max_height']           = 768;

          $this->load->library('upload', $config);

          if ($this->upload->do_upload('ktp')) {
            $data = array('upload_data' => $this->upload->data());
            return $data['upload_data']['file_name'];
          }
          return false;
        }

      function upload_bukti1($bukti1){
          $config['upload_path']          = './assets/upload/';
          $config['allowed_types']        = 'gif|jpg|png';
          $config['file_name']            = $bukti1;
          $config['overwrite']		      	= true;
          $config['max_size']             = 10024; // 1MB
          // $config['max_width']            = 1024;
          // $config['max_height']           = 768;

          $this->load->library('upload', $config);

          if ($this->upload->do_upload('bukti1')) {
            $data = array('upload_data' => $this->upload->data());
            return $data['upload_data']['file_name'];
          }
          return false;
        }

        function upload_bukti2($name){
            $config['upload_path']          = './assets/upload/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['file_name']            = $name;
            $config['overwrite']		      	= true;
            $config['max_size']             = 10024; // 1MB
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('bukti2')) {
              $data = array('upload_data' => $this->upload->data());
              return $data['upload_data']['file_name'];
            }
            return false;
          }

          function upload_bukti3($name){
              $config['upload_path']          = './assets/upload/';
              $config['allowed_types']        = 'gif|jpg|png';
              $config['file_name']            = $name;
              $config['overwrite']		      	= true;
              $config['max_size']             = 10024; // 1MB
              // $config['max_width']            = 1024;
              // $config['max_height']           = 768;

              $this->load->library('upload', $config);

              if ($this->upload->do_upload('bukti3')) {
                $data = array('upload_data' => $this->upload->data());
                return $data['upload_data']['file_name'];
              }
              return false;
            }


        function random_name($length) {
					 $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
					 $password = substr( str_shuffle( $chars ), 0, $length );
					 return $password;
				 }
    }
?>
