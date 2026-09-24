<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_metrojabartrans extends CI_Migration {
	public function up() {
			$this->db->query("INSERT INTO `tracktypes` VALUES('metrojabartrans', 'Metro Jabar Trans', NULL, '12.50');");
	}
}
