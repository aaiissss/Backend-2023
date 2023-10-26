<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public $animals = ['ayam', 'ikan'];

    # method index - menampilkan data animals
    public function index()
    {
        foreach (this->animals as $animal){
            echo $animal . "<br>";
        }
        echo "menampilkan data animals";
    }

    public funtion create(
        
    )
    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store(Request $request)
    {
        echo "Nama hewan: $request->nama";
        echo "<br";
        echo "Menambahkan hewan baru";
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update(Request $request, $id)
    {
        echo "Nama hewan: $request->nama";
        echo "<br>";
        echo "Mengupdate data hewan baru";
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($id)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        echo "Menghapus data hewan $id";
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(["Ayam", "Ikan"]);

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";


