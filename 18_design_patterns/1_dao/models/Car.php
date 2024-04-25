<?php

    class Car {
        private $id;
        private $brand;
        private $km;
        private $color;

        // Id
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id = $id;
        }

        // Brand
        public function getBrand(){
            return $this->brand;
        }

        public function setBrand($brand){
            $this->brand = $brand;
        }
        
        // Km
        public function getKm(){
            return $this->km;
        }
                // intval os dados vem como str, mas aqui será manipulado p/ transformar em int
        public function setKm($km){
            $this->km = intval($km);
        }
        
        // Color
        public function getColor(){
            return $this->color;
        }

        public function setColor($color){
            $this->color = $color;
        }
        
    };


    interface CarDAOinterface{

        public function create(Car $car);

        public function findAll();

    };