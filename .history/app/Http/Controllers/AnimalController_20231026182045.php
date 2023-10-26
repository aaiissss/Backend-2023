<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index()
    {
            foreach ($this->animals as $animal){
            echo $animal . "\n";
            }
            echo "Menampilkan data animals\n";
    }
    
    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store(Request $request)
    {
        $newAnimal = $request->input('animal');

        array_push($this->animals, $newAnimal);

        return response()->json(['message' => "Berhasil menambahkan $newAnimal kedalam data animals",'animals' => $this->animals]);
    }

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
            return response()->json(['message' => 'Tidak dapat menghapus data animal/ID tidak valid'], 400);
        }
    }
}