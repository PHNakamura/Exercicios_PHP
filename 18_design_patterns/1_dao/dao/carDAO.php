<?php

    include_once("models/Car.php");

    class CarDAO implements CarDAOinterface{

        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn;
        }

        public function findAll() {

            $cars = [];

            $sql = "SELECT * FROM cars";

            $stmt = $this->conn->query($sql);

            $data = $stmt->fetchAll();

            foreach ($data as $item){
                $car = new Car();

                $car->setId($item['id']);
                $car->setBrand($item['brand']);
                $car->setKm($item['km']);
                $car->setColor($item['color']);

                $cars[] = $car;

            }
                
            return $cars;

        }

        public function create (Car $car) {

            $query = "INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)";

            $stmt = $this->conn->prepare($query);

            // Fiz por conta porque o bindParam não parava de pedir uma variável na sintaxe do comando. Até funcionava, mas não parava de "mostrar um erro de sintaxe (sublinhado em amarelo)"
            $aux1 = $car->getBrand();
            $aux2 = $car->getKm();
            $aux3 = $car->getColor();

            $stmt->bindParam(":brand", $aux1, PDO::PARAM_STR);
            $stmt->bindParam(":km", $aux2, PDO::PARAM_INT);
            $stmt->bindParam(":color", $aux3, PDO::PARAM_STR);

            $stmt->execute();
            
        }
    };