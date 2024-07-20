<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product'; // Sesuaikan dengan nama tabel Anda
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'harga', 'jumlah', 'foto', 'created_at', 'updated_at'];

    protected $validationRules = [
        'nama' => 'required|min_length[5]',
        'harga' => 'required|numeric',
        'jumlah' => 'required|numeric',
    ];

    protected $validationMessages = [
        'nama' => [
            'required' => 'Nama harus diisi',
            'min_length' => 'Nama minimal terdiri dari 5 karakter'
        ],
        'harga' => [
            'required' => 'Harga harus diisi',
            'numeric' => 'Harga harus berupa angka'
        ],
        'jumlah' => [
            'required' => 'Jumlah harus diisi',
            'numeric' => 'Jumlah harus berupa angka'
        ],
    ];
}
