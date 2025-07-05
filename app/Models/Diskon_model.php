<?php

namespace App\Models;

use CodeIgniter\Model;

class Diskon_model extends Model
{
    protected $table = 'diskon';
    protected $primaryKey = 'id';

    // ✅ Ini bagian penting!
    protected $allowedFields = ['tanggal', 'nominal', 'created_at', 'updated_at'];

    public function get_diskon_by_date($tanggal)
    {
        return $this->where('tanggal', $tanggal)->first();
    }
}