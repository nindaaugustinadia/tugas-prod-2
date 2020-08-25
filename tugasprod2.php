<?php 

/**
 * 
 */
class pakaian

{
	public $merk;
	public $warna;
	public $ukuran;
	public $jenis;
	public $harga;
	
	public function pakaian_1()
	{

		return " pakaian tersebut merupakan pakaian dengan merk terbaik.";
	}
	public function pakaian_2()
	{
		return " pakaian tersebut memiliki warna yang bagus.";
	}
	public function pakaian_3()
	{
		return " pakaian tersebut memiliki berbagai ukuran.";
	}
	public function pakaian_4()
	{
		return " pakaian tersebut berjenis longdress. ";
	}
	public function pakaian_5()
	{
		return " pakaian tersebut mahal dan berkualitas. ";
	}
}



$barang = new barang();
$barang -> merk = "pakaian tersebut merupakan pakaian dengan merk terbaik." ;
$barang -> warna = "pakaian tersebut memiliki warna yang bagus.";
$barang -> ukuran = "pakaian tersebut memiliki berbagai ukuran.";
$barang -> manfaat = "pakaian tersebut berjenis longdress.";
$barang -> harga = "pakaian tersebut mahal dan berkualitas.";

echo "pakaian yang bagus untuk dibeli: ";
echo "<br>";
echo "1. " . $pakaian-> merk;
echo "<br>";
echo "2. " . $pakaian -> warna;
echo "<br>";
echo "3. " . $pakaian -> ukuran;
echo "<br>";
echo "4. " . $pakaian -> manfaat;
echo "<br>";
echo "5. " . $pakaian -> harga;
echo "<br>";


?>
