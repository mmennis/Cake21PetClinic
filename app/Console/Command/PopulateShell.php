<?php 

define("OWNER_COUNT", 50);
define("VET_COUNT", 50);

class PopulateShell extends AppShell {
	
	public $uses = array('Owner', 'PetType', 'Pet', 'Visit', 'Vet', 'Specialty');

	public function main() {
		$this->out('Starting to populate PetClinic application database');
		$this->out("Owner count is: ".OWNER_COUNT);
		$this->out("Vet count is: ".VET_COUNT);
		
		$pet_names = explode(' ', "Max Tigger Jake Tiger Buddy Smokey Maggie Bear Sam Kitty Molly Bailey Sassy Shadow Simba Patch Lady Lucky Sadie Misty Rocky Sammy Lucy Princess Oreo Daisy Samantha Buster Charlie Casey Boots Cody Brandy Oliver Duke Precious Missy Bandit Oscar Jack Fluffy Ginger Harley Whiskers Abby Gizmo Rusty Taz Sasha Midnight Sandy Toby Baby Murphy Pepper Dakota Spike Sophie Katie Annie");
		
		$last_names = explode(' ', "Smith Jones Johnson Williams Lee Murphy");
		$first_names = explode(' ', "John Joe Frank James Brian Lewis Richard Jennifer Max Fred Barney Nick Tom Harry Edward");
		$cities = array("San Jose", "Santa Clara", "Milpitas", "Campbell", "Los Gatos", "Sunnyvale");
		
		$pet_type_names = explode(' ', "bird cat dog fish hamster horse iguana lizard mouse pig rabbit rat snake tortoise turtle");
		$pet_types = array();
		foreach ($pet_type_names as $pet_type_name) {
			array_push($pet_types, array('name' => $pet_type_name) );
		}
		$this->PetType->saveAll($pet_types);
		
		for ( $k = 0; $k < OWNER_COUNT; $k++ ) {
			$this->Owner->create();
			$owner = array
			(
				'last_name' => $last_names[array_rand($last_names, 1)],
				'first_name' => $first_names[array_rand($first_names, 1)],
				'address' => '1234 Helo There Drv.',
				'city' => $cities[array_rand($cities, 1)],
				'telephone' => '408-555-1212'	
			);
			$this->Owner->save($owner);
			
			$pet_count = rand(1,4);
			for ( $i = 0; $i < $pet_count; $i++ ) {
				$this->Pet->create();
				$pet = array
				(
					'name' => $pet_names[array_rand($pet_names)],
					'birth_date' => date("Y-m-d", mktime(0,0,0, rand(1,12), rand(1,30), date("Y") - rand(1,5))),
					'owner_id' => $this->Owner->id,
					'pet_type_id' => rand(1, count($pet_types))
				);	
				$this->Pet->save($pet);
				
				$visit_count = rand(1,3);
				for ( $l = 0; $l < $visit_count; $l++ ) {
					$this->Visit->create();
					$visit = array(
						'visit_date' => date("Y-m-d", mktime(0,0,0, rand(1,12), rand(1,30), date("Y") - rand(1,5))),
						'description' => "This is a stupid description.  It is just for a check up.",
						'pet_id' => $this->Pet->id
					);
					$this->Visit->save($visit);
				} // edn visits loop
			} // end pets loop
		} // end owners loop
		
		$specialty_names = explode(' ', "dentistry dermatology emergency imaging radiology surgery vision acupuncture psycotherapy");
		$specialty_types = array();
		foreach($specialty_names as $specialty_name) {
			array_push($specialty_types, array( 'name' => $specialty_name ));
		}
		$this->Specialty->saveAll($specialty_types);
		$specialty_ids = range(1,9);
		
		for ( $m = 0; $m < VET_COUNT; $m++) {
			$this->Vet->create();
			$vet = array(
				'Vet' => array(
					'last_name' => $last_names[array_rand($last_names, 1)],
					'first_name' => $first_names[array_rand($first_names, 1)]
				),
				'Specialty' => array(
					'Specialty' => array()
				)
			);
			shuffle($specialty_ids);
			foreach(array_rand($specialty_ids, 3) as $spec_id) {
				$vet['Specialty']['Specialty'][$spec_id + 1] = $spec_id + 1;
			}
			$this->Vet->save($vet);
			
		} // end vets loop
		
	} // end main function
	
}