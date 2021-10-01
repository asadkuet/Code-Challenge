<?php   
class Person extends ArrayObject {
	
	public function __set($name, $val) {
		$this[$name] = $val;
	}

	public function displayAsTable() {
		$iterator = $this->getIterator(); 
		
		$table =  '<table style="border-collapse: collapse">';
		$table .= '<tbody>';  
		
		while($iterator->valid()) {		
			$table .= '<tr>';
			$table .= '<th style="border: 1px solid #ddd">' . $iterator->key() . '</th>';
			$table .= '<td style="border: 1px solid #ddd">' . $iterator->current() . '</td>';
			$table .= '</tr>';			
			$iterator->next();
		}   
			
		$table .= '</tbody>';
		$table .=  '</table>';    		
		return $table;
	} 
}

$obj = new Person();    
$obj->Name = 'Md. Asadujjaman Nur'; 
$obj->Email = 'asadece2k10@gmail.com'; 
$obj->Mobile = '+8801740227805'; 
echo $obj->displayAsTable();

?>
