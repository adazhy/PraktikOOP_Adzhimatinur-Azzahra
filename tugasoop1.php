<?php

echo "<b>Adzhimatinur Azzahra</b>";
echo "<br>";
echo "<b>011021075</b>";
echo "<br>";
echo "<b>3TI03</b>";
echo "<hr>";

# membuat class Animal
class Animal
{
    # property animals

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->hewan = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        foreach ($this->hewan as $animal) {
            echo $animal . '<br>';
        }
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($animals)
    {
        array_push($this->hewan, $animals);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $animals)
    {
        $this->hewan[$index] = $animals;

    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        unset($this->hewan[$index]);
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal(["kukang", "bunglon", "kucing"]);

echo "<i>Index - Menampilkan seluruh hewan <br></i>";
$animal->index();
echo "<br>";

echo "<i>Store - Menambahkan hewan baru <br></i>";
$animal->store('Harimau');
$animal->index();
echo "<br>";

echo "<i>Update - Mengupdate hewan <br></i>";
$animal->update(0, 'Kura kura');
$animal->index();
echo "<br>";

echo "<i>Destroy - Menghapus hewan <br></i>";
$animal->destroy(2);
$animal->index();
echo "<br>";