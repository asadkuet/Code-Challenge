<?php   
class Person extends ArrayObject {
	// set Key, Value to the instance
	public function __set($name, $val) {
		$this[$name] = $val;
	}

	public function displayAsTable() {
		//Create iterator from parent class
		$iterator = $this->getIterator(); 
		
		$table =  '<table style="border-collapse: collapse">';
		$table .= '<tbody>';  
		
		//iterate through the iterator
		while($iterator->valid()) {		
			$table .= '<tr>';
			$table .= '<th style="padding: 5px; border: 1px solid #ddd">' . $iterator->key() . '</th>';
			$table .= '<td style="padding: 5px; border: 1px solid #ddd">' . $iterator->current() . '</td>';
			$table .= '</tr>';			
			$iterator->next();
		}   
			
		$table .= '</tbody>';
		$table .=  '</table>';    		
		return $table;
	} 
}

// make instance of Person class which is inherited from ArrayObject class
$obj = new Person();    

//set some keys & values
$obj->Name = 'Md. Asadujjaman Nur'; 
$obj->Email = 'asadece2k10@gmail.com'; 
$obj->Mobile = '+8801740227805'; 

// display the data
echo $obj->displayAsTable();

?>
