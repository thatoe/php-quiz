<?php
// example code

// $vehicleTypes = ['sport-car', 'truck', 'bike', 'boat'];
// $vehiclesSpeed = [150, 60, 100, 50]; // vehicles speed in km/h
// $distance = 350; // destination distance in km
// print("Duration of each vehicle to reach destination\n");
// for ($i=0;$i< count($vehicleTypes) ; $i++) {
// // The boat needs extra 15 min to get ready, so we add + 0.25H
// if ($vehicleTypes[$i] == 'boat') {
// print($vehicleTypes[$i] . ": ". ($distance/$vehiclesSpeed[$i]) + 0.25);
// } else {
// print($vehicleTypes[$i] . ": ". $distance/$vehiclesSpeed[$i]);
// }
// }

class Vehicle {
    public function __construct($vehicleTypes, $vehiclesSpeed, $distance) {
        $this->vehicleTypes = $vehicleTypes;
        $this->vehiclesSpeed = $vehiclesSpeed; 
        $this->distance = $distance;
    }
    public function GetDistance(){
        foreach($this->vehicleTypes as $key => $vehicleType){
            print($this->CalculateDistance($vehicleType,$key)."\n");
        }
    }
    
    private function CalculateDistance($vehicleType,$key){
        if($vehicleType == 'boad'){// The boat needs extra 15 min to get ready, so we add + 0.25H
            $distancePerVehicle = $this->distance/$this->vehicleSpeed[$key] + 0.25;
        }
        else{
            $distancePerVehicle = $this->distance/$this->vehiclesSpeed[$key];
        }
        
        return $vehicleType . " : " . $distancePerVehicle;
    }
}

$vehicleTypes = ['sport-car', 'truck', 'bike', 'boat'];
$vehiclesSpeed = [150, 60, 100, 50]; // vehicles speed in km/h
$distance = 350; // destination distance in km
$vehicle_data = new Vehicle($vehicleTypes,$vehiclesSpeed,$distance);
print("Duration of each vehicle to reach destination\n");
$vehicle_data->GetDistance();

?>