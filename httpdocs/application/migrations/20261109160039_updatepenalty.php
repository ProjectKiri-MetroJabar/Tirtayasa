<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Karena sebelumnya penalty untuk angkot terlalu kecil, maka akan dinaikkan ke 0.1 dari 0.05.

class Migration_updatepenalty extends CI_Migration {
	public function up() {
        $this->db->query("UPDATE tracks SET penalty = 2*penalty WHERE trackTypeId NOT LIKE 'bdo_MJT_%'");
    }
}