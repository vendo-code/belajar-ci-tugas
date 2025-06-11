<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProdukCategoryModel extends Model
{
	protected $table = 'ProdukCategory'; 
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama'
	];  
}