<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
     # property animals
     public $animals;
     # method constructor - mengisi data awal
     # parameter: data hewan (array)
     public function __construct($data)
     {
         $this->animals = $data;
     }
 
     # method index - menampilkan data animals
     public function index()
     {
         # gunakan foreach untuk menampilkan data animals (array)
         foreach ($this->animals as $animal){
             echo $animal;
             echo "<br>";
         }
     }
 
     # method store - menambahkan hewan baru
     # parameter: hewan baru
     public function store($data)
     {
         # gunakan method array_push untuk menambahkan data baru
         array_push($this->animals, $data);
     }
 
     # method update - mengupdate hewan
     # parameter: index dan hewan baru
     public function update($index, $data)
     {
         $this->animals[$index] = $data;
     }
 
     # method delete - menghapus hewan
     # parameter: index
     public function destroy($index)
     {
         # gunakan method unset atau array_splice untuk menghapus data array
         array_splice($this->animals, $index, 1);
     }
 }