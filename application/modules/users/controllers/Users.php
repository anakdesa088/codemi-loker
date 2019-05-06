<?php 

class Users extends Manajemen_only 
{
	public function __construct()
	{
		parent::__construct();

		$this->not_logged_in();
		
		$this->data['page_title'] = 'Users';
		

		$this->load->model('model_users');
		$this->load->model('model_groups');
	}

	
	public function index()
	{
		if(!in_array('viewUser', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$user_data = $this->model_users->getUserData();

		$result = array();
		foreach ($user_data as $k => $v) {

			$result[$k]['user_info'] = $v;

			$group = $this->model_users->getUserGroup($v['id']);
			$result[$k]['user_group'] = $group;
		}

		$this->data['user_data'] = $result;

		$this->template->render('users/v_users', $this->data);
	}

	public function tambah_users()
	{
		if(!in_array('createUser', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		$this->form_validation->set_rules('groups', 'Group', 'required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required|matches[password]');
		$this->form_validation->set_rules('fname', 'Nama Depan', 'trim|required');

        if ($this->form_validation->run() == TRUE) {
            // true case
            $password = $this->password_hash($this->input->post('password'));
        	$data = array(
        		'username' => $this->input->post('username'),
        		'password' => $password,
        		'email' => $this->input->post('email'),
        		'firstname' => $this->input->post('fname'),
        		'lastname' => $this->input->post('lname'),
        		'phone' => $this->input->post('phone'),
        		'gender' => $this->input->post('gender'),
        	);

        	$create = $this->model_users->create($data, $this->input->post('groups'));
        	if($create == true) {
        		
        		$this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menambah User</span></div>');
        		redirect('users/', 'refresh');

        	}
        	else {
        		$this->session->set_flashdata('errors', 'Error occurred!!');
        		redirect('users/tambah_users', 'refresh');
        	}
        }
        else {
            // false case
        	$group_data = $this->model_groups->getGroupData();
        	$this->data['group_data'] = $group_data;

            $this->template->render('users/v_tambah_users', $this->data);
        }	

		
	}

	public function password_hash($pass = '')
	{
		if($pass) {
			$password = password_hash($pass, PASSWORD_DEFAULT);
			return $password;
		}
	}

	public function edit($id)
	{
		if(!in_array('updateUser', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		
	            // false case
	        	$user_data = $this->model_users->getUserData($id);
	        	$groups = $this->model_users->getUserGroup($id);

	        	$this->data['user_data'] = $user_data;
	        	$this->data['user_group'] = $groups;

	            $group_data = $this->model_groups->getGroupData();
	        	$this->data['group_data'] = $group_data;

				$this->template->render('users/v_edit_users', $this->data);	
	        
		
	}




public function proses_edit($id)
	{
		if(!in_array('updateUser', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		
			

			$this->form_validation->set_rules('groups', 'Group', 'required');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|is_unique[users.username]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		

			
	            // true case
		        if(empty($this->input->post('password')) && empty($this->input->post('cpassword'))) {
		        	$data = array(
		        		'username' => $this->input->post('username'),
		        		'email' => $this->input->post('email'),
		        		'firstname' => $this->input->post('fname'),
		        		'lastname' => $this->input->post('lname'),
		        		'phone' => $this->input->post('phone'),
		        		'gender' => $this->input->post('gender'),
		        	);

		        	$update = $this->model_users->edit($data, $id, $this->input->post('groups'));
		        	if($update == true) {
		        		$this->session->set_flashdata('success', 'Successfully created');
		        		redirect('users/', 'refresh');
		        	}
		        	else {
		        		$this->session->set_flashdata('errors', 'Error occurred!!');
		        		redirect('users/edit/'.$id, 'refresh');
		        	}
		        }
		        else {
		        	$this->form_validation->set_rules('password', 'Password', 'trim|required');
					$this->form_validation->set_rules('cpassword', 'Confirm password', 'trim|required|matches');

					

						$password = $this->password_hash($this->input->post('password'));

						$data = array(
			        		'username' => $this->input->post('username'),
			        		'password' => $password,
			        		'email' => $this->input->post('email'),
			        		'firstname' => $this->input->post('fname'),
			        		'lastname' => $this->input->post('lname'),
			        		'phone' => $this->input->post('phone'),
			        		'gender' => $this->input->post('gender'),
			        	);

			        	$update = $this->model_users->edit($data, $id, $this->input->post('groups'));
			        	if($update == true) {
			        		$this->session->set_flashdata('success', 'Successfully updated');
			        		redirect('users/', 'refresh');
			        	}
			        	else {
			        		$this->session->set_flashdata('errors', 'Error occurred!!');
			        		redirect('users/edit/'.$id, 'refresh');
			        	}
					

		        }
	        
		
	}
	public function delete($id)
	{
		if(!in_array('deleteUser', $this->permission)) {
			redirect('dashboard', 'refresh');
		}

		if($id) {
			if($this->input->post('confirm')) {
					$delete = $this->model_users->delete($id);
					if($delete == true) {
		        		$this->session->set_flashdata('success', 'Successfully removed');
		        		redirect('users/', 'refresh');
		        	}
		        	else {
		        		$this->session->set_flashdata('error', 'Error occurred!!');
		        		redirect('users/delete/'.$id, 'refresh');
		        	}

			}	
			else {
				$this->data['id'] = $id;
				$this->template->render('users/delete', $this->data);
			}	
		}
	}

	public function profile()
	{
		

		$user_id = $this->session->userdata('id');

		$user_data = $this->model_users->getUserData($user_id);
		$this->data['user_data'] = $user_data;

		$user_group = $this->model_users->getUserGroup($user_id);
		$this->data['user_group'] = $user_group;

        $this->template->render('users/v_profile', $this->data);
	}

	public function setting($id)
	{	
		
		if ($this->session->userdata('management')) {
				$cek_id_user = $this->model_users->m_cek_id_user($id);
				if ($cek_id_user) {
				$user_data = $this->model_users->getUserData($id);
	        	$groups = $this->model_users->getUserGroup($id);

	        	$this->data['user_data'] = $user_data;
	        	$this->data['user_group'] = $groups;

	            $group_data = $this->model_groups->getGroupData();
	        	$this->data['group_data'] = $group_data;

				$this->template->render('users/v_edit_profile', $this->data);	
				}else{
					redirect('dashboard');
				}
				
			}elseif ($this->session->userdata('dosen')) {
				$id_dosenn = $this->session->userdata('id');
				$cek_id_dosen = $this->model_users->m_cek_id_dosen($id_dosenn);
				if (!$cek_id_dosen == true) {
					$user_data = $this->model_users->getDosenData($id);
	        	$groups = $this->model_users->getUserGroup($id);

	        	$this->data['user_dosen'] = $user_data;
	        	$this->data['user_group'] = $groups;

	            $group_data = $this->model_groups->getGroupData();
	        	$this->data['group_data'] = $group_data;

				$this->template->render('users/v_edit_profile', $this->data);	
				}else{
					redirect('dashboard');
				}
				
			}	
		
	        
	            // false case
	        	
	        
		
	}
	public function proses_setting($id){
		

		if($id) {
			
			$dosen = $this->session->userdata('dosen');
			$management = $this->session->userdata('management');
			if ($management) {
				if(empty($this->input->post('password')) && empty($this->input->post('cpassword'))) {
		        	$data = array(
		        		'username' => $this->input->post('username'),
		        		'email' => $this->input->post('email'),
		        		'firstname' => $this->input->post('fname'),
		        		'lastname' => $this->input->post('lname'),
		        		'phone' => $this->input->post('phone'),
		        		'gender' => $this->input->post('gender'),
		        	);

		        	$update = $this->model_users->edit($data, $id);
		        	if($update == true) {
		        		$this->session->set_flashdata('success', 'Successfully updated');
		        		redirect('users/profile/'.$id, 'refresh');
		        	}
		        	else {
		        		$this->session->set_flashdata('errors', 'Error occurred!!');
		        		redirect('users/profile/'.$id, 'refresh');
		        	}
		        }
		        else {
		        	

					

						$password = $this->password_hash($this->input->post('password'));

						$data = array(
			        		'username' => $this->input->post('username'),
			        		'password' => $password,
			        		'email' => $this->input->post('email'),
			        		'firstname' => $this->input->post('fname'),
			        		'lastname' => $this->input->post('lname'),
			        		'phone' => $this->input->post('phone'),
			        		'gender' => $this->input->post('gender'),
			        	);

			        	$update = $this->model_users->edit($data, $id, $this->input->post('groups'));
			        	if($update == true) {
			        		$this->session->set_flashdata('success', 'Successfully updated');
			        		redirect('users/profile/'.$id, 'refresh');
			        	}
			        	else {
			        		$this->session->set_flashdata('errors', 'Error occurred!!');
			        		redirect('users/setting/'.$id, 'refresh');
			        	}
					}
			        
			}//end management
			if ($dosen) {
				if(empty($this->input->post('password')) && empty($this->input->post('cpassword'))) {
		        	$data = array(
		        		'alamat'=> $this->input->post('alamat'),
		        		'email' => $this->input->post('email'),
		        		'nama_dosen' => $this->input->post('nama_dosen'),
		        	
		        		'ho_hp' => $this->input->post('phone'),
		        		'jk' => $this->input->post('gender'),
		        	);

		        	$update = $this->model_users->edit($data, $id);
		        	if($update == true) {
		        		$this->session->set_flashdata('success', 'Successfully updated');
		        		redirect('users/profile/'.$id, 'refresh');
		        	}
		        	else {
		        		$this->session->set_flashdata('errors', 'Error occurred!!');
		        		redirect('users/profile/'.$id, 'refresh');
		        	}
		        }
		        else {
		        	

					

						$password = $this->password_hash($this->input->post('password'));

						$data = array(
			        		'alamat'=> $this->input->post('alamat'),
		        		'email' => $this->input->post('email'),
		        		'nama_dosen' => $this->input->post('nama_dosen'),
		        	
		        		'ho_hp' => $this->input->post('phone'),
		        		'jk' => $this->input->post('gender'),
			        	);

			        	$update = $this->model_users->edit_dorn($data, $id);
			        	if($update == true) {
			        		$this->session->set_flashdata('success', 'Successfully updated');
			        		redirect('users/profile/'.$id, 'refresh');
			        	}
			        	else {
			        		$this->session->set_flashdata('errors', 'Error occurred!!');
			        		redirect('users/setting/'.$id, 'refresh');
			        	}
					}
			        
			}


			
	            // true case
		        

		        
	        
	    }
	}

	public function fetchUsersDataById($id) 
	{
		if($id) {
			$data = $this->model_users->getUserDataid($id);
			echo json_encode($data);
		}

		return false;
	}
	public function hapus_users(){
		$id = $this->input->post('id_users');

		$response = array();
		if($id) {
			$delete = $this->model_users->m_hapus_users($id);
			if($delete == true) {
				$response['success'] = true;
				$response['messages'] = $this->session->set_flashdata('sukses','<div class="alert alert-success" role="alert"> <strong>Berhasil</strong> <span> Menghapus Semester</span></div>
					');	
			}
			else {
				$response['success'] = false;
				$response['messages'] = "Gagal";
			}
		}
		else {
			$response['success'] = false;
			redirect('mapel');
		}

		echo json_encode($response);
	}


}