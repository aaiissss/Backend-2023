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

    public function create(){
        //
    }
    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store(Request $request)
    {
        $newAnimal = $request->input('animal');

        array_push($this->animals, $newAnimal);

        return response()->json(['message' => "Berhasil menambahkan $newAnimal kedalam data animals",'animals' => $this->animals]);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update(Request $request, $id) 
    {
        $updatedAnimal = $request -> input('animal');
        if (isset($this->animals[$id])) {
            $this->animals[$id] = $updatedAnimal;
            return response()->json(['message' => "Berhasil mengubah data animal dengan ID $id menjadi $updatedAnimal", 'animals' => $this->animals]);
        } else {
            return response()->json(['message' => 'Tidak dapat menghapus data animal/ID tidak valid'], 400);
        }
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($id)
    {
        if (isset($this->animals[$id])) {
            array_splice($this->animals, $id, 1);
            return response()->json(['message' => "Data animal dengan ID $id berhasil dihapus", 'animals' => $this->animals]);
        } else {
            return response()->json(['message' => 'Tidak dapat menghapus data animal/ID tidak valid'], 400)}
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


