<?php



include_once('dao/carDao.php');
include("carDao.php");


class CarDao implements CarDaoInterface{

    private $conn;
    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function findAll(){
        $cars = [];
       $stmt = $this->conn->query("select * from cars");

       $data = $stmt->fetchAll();
       foreach($data as $item){
        $car = new Car();
        $car->setId($item['id']);
        $car->setBrand($item['brand']);
        $car->setKm($item['km']);
        $car->setColor($item['color']);
    $cars[] = $car;
       }

return $cars;

        
    }

    public function create(Car $car)
    {
        $stmt = $this->conn->prepare("insert into cars (brand,km,color) values (:brand, :km,:color)");

        $stmt->bindParam(":brand", $car->getBrand);
        $stmt->bindParam(":km", $car->getKm);
        $stmt->bindParam(":color", $car->getColor);

        $stmt->execute();
    }


}
