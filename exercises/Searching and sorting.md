### 1. Write a PHP program to sort a list of elements using Quick sort.

```php
<?php
// Function to perform Quick Sort algorithm
function quick_sort($my_array)
{
    // Base case: if array has 0 or 1 elements, it's already sorted
    $length = count($my_array);
    if ($length <= 1) {
        return $my_array;
    }

    // Select pivot element (here, we choose the middle element)
    $pivot_key = (int)($length / 2);
    $pivot = $my_array[$pivot_key];

    // Partition the array into elements less than pivot and elements greater than pivot
    $left = $right = array();
    foreach ($my_array as $key => $value) {
        if ($key == $pivot_key) {
            continue;
        }
        if ($value <= $pivot) {
            $left[] = $value;
        } else {
            $right[] = $value;
        }
    }

    // Recursively sort the partitions
    return array_merge(
        quick_sort($left),
        array($pivot), // Pivot element
        quick_sort($right)
    );
}

$my_array = array(3, 0, 2, 5, -1, 4, 1);
echo 'Original Array : ' . implode(',', $my_array) . "\n";
$my_array = quick_sort($my_array);
echo 'Sorted Array : ' . implode(',', $my_array);
?>
```

### 2. Write a PHP program to sort a list of elements using Heap sort.

```php
<?php
// Define a Node class for representing elements in the heap
class Node
{
    private $_i; // Key value of the node

    // Constructor to initialize the node with a key value
    public function __construct($key)
    {
        $this->_i = $key;
    }

    // Method to get the key value of the node
    public function getKey()
    {
        return $this->_i;
    }
}

// Define a Heap class for implementing heap data structure
class Heap
{
    private $heap_Array; // Array to store heap elements
    private $_current_Size; // Current size of the heap

    // Constructor to initialize the heap
    public function __construct()
    {
        $this->heap_Array = array(); // Initialize heap array
        $this->_current_Size = 0; // Initialize current size
    }

    // Method to remove item with max key from the heap
    public function remove()
    {
        $root = $this->heap_Array[0]; // Get root element
        $this->heap_Array[0] = $this->heap_Array[--$this->_current_Size]; // Replace root with last element
        $this->bubbleDown(0); // Restore heap property
        return $root; // Return removed element
    }

    // Method to restore heap property by shifting down
    public function bubbleDown($index)
    {
        // Implementation of bubble down process
        $larger_Child = null;
        $top = $this->heap_Array[$index]; // Save root element
        while ($index < (int)($this->_current_Size / 2)) { // Loop until not on bottom row
            $leftChild = 2 * $index + 1;
            $rightChild = $leftChild + 1;

            // Find larger child
            if ($rightChild < $this->_current_Size && $this->heap_Array[$leftChild]->getKey() < $this->heap_Array[$rightChild]->getKey()) {
                $larger_Child = $rightChild;
            } else {
                $larger_Child = $leftChild;
            }

            if ($top->getKey() >= $this->heap_Array[$larger_Child]->getKey()) { // If top key is greater than or equal to larger child's key, break loop
                break;
            }

            // Shift child up
            $this->heap_Array[$index] = $this->heap_Array[$larger_Child];
            $index = $larger_Child; // Move down in the heap
        }
        $this->heap_Array[$index] = $top; // Restore root element
    }

    // Method to insert a node at a specific index in the heap
    public function insertAt($index, Node $newNode)
    {
        $this->heap_Array[$index] = $newNode;
    }

    // Method to increment current size of the heap
    public function incrementSize()
    {
        $this->_current_Size++;
    }

    // Method to get the current size of the heap
    public function getSize()
    {
        return $this->_current_Size;
    }

    // Method to return heap elements as an array
    public function asArray()
    {
        $arr = array();
        for ($j = 0; $j < sizeof($this->heap_Array); $j++) {
            $arr[] = $this->heap_Array[$j]->getKey();
        }
        return $arr;
    }
}

// Function to perform heapsort on a heap
function heapsort(Heap $Heap)
{
    $size = $Heap->getSize(); // Get size of the heap
    // Sift all nodes, except lowest level as it has no children
    for ($j = (int)($size / 2) - 1; $j >= 0; $j--) {
        $Heap->bubbleDown($j); // Bubble down to restore heap property
    }
    // Sort the heap
    for ($j = $size - 1; $j >= 0; $j--) {
        $BiggestNode = $Heap->remove(); // Remove max element from heap
        $Heap->insertAt($j, $BiggestNode); // Insert removed element in the sorted order
    }
    return $Heap->asArray(); // Return sorted array
}

// Input array to be sorted
$arr = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array : ";
echo implode(', ', $arr);
$Heap = new Heap(); // Create a new heap object
foreach ($arr as $key => $val) {
    $Node = new Node($val); // Create a new node for each element
    $Heap->insertAt($key, $Node); // Insert node into the heap
    $Heap->incrementSize(); // Increment heap size
}
$result = heapsort($Heap); // Perform heapsort on the heap
 echo "\nSorted Array : ";
 echo implode(', ',$result)."\n";
?>
```


### 3. Write a PHP program to sort a list of elements using Insertion sort.

```php
<?php
// Function to perform insertion sort on an array
function insertion_Sort($my_array)
{
    // Iterate over each element in the array
    for ($i = 0; $i < count($my_array); $i++) {
        $val = $my_array[$i]; // Store the current element
        $j = $i - 1; // Initialize index for the previous element
        
        // Shift elements of my_array[0..i-1] that are greater than val
        // to one position ahead of their current position
        while ($j >= 0 && $my_array[$j] > $val) {
            $my_array[$j + 1] = $my_array[$j];
            $j--;
        }
        $my_array[$j + 1] = $val; // Place val at its correct position
    }
    return $my_array; // Return the sorted array
}

$test_array = array(3, 0, 2, 5, -1, 4, 1);

echo "Original Array :\n";
echo implode(', ', $test_array); // Display original array
echo "\nSorted Array :\n";
print_r(insertion_Sort($test_array)); // Display sorted array
?>
```

### 4. Write a PHP program to sort a list of elements using Selection sort.

```php
<?php
// Function to perform selection sort on an array
function selection_sort($data)
{
    // Loop through the array
    for ($i = 0; $i < count($data) - 1; $i++) {
        $min = $i;
        // Find the minimum element in the remaining unsorted array
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$j] < $data[$min]) {
                $min = $j;
            }
        }
        // Swap the minimum element with the first unsorted element
        $data = swap_positions($data, $i, $min);
    }
    return $data;
}

// Function to swap two elements in an array
function swap_positions($data1, $left, $right)
{
    // Backup the value of the element at the right position
    $backup_old_data_right_value = $data1[$right];
    // Swap the elements at the left and right positions
    $data1[$right] = $data1[$left];
    $data1[$left] = $backup_old_data_right_value;
    return $data1;
}

// Input array to be sorted
$my_array = array(3, 0, 2, 5, -1, 4, 1);

// Print the original array
echo "Original Array :\n";
echo implode(', ', $my_array);
echo "\nSorted Array :\n";

// Perform selection sort on the array and print the sorted array
echo implode(', ', selection_sort($my_array)) . PHP_EOL;
?>
```

### 5. Write a PHP program to sort a list of elements using Shell sort.

```php
<?php
// Function to perform shell sort on the given array
function shell_Sort($my_array)
{
	// Initialize the gap size
	$x = round(count($my_array) / 2);
	
	// Loop until the gap size becomes 0
	while ($x > 0)
	{
		// Traverse through the array elements with the current gap
		for ($i = $x; $i < count($my_array); $i++)
		{
			// Store the current element in a temporary variable
			$temp = $my_array[$i];
			$j = $i;
			
			// Move elements of the array that are greater than temp by an interval of gap size
			// to positions ahead of their current position
			while ($j >= $x && $my_array[$j - $x] > $temp)
			{
				$my_array[$j] = $my_array[$j - $x];
				$j -= $x;
			}
			
			// Insert the temporary variable (stored element) at its correct position
			$my_array[$j] = $temp;
		}
		
		// Reduce the gap size for the next iteration
		$x = round($x / 2.2);
	}
	
	// Return the sorted array
	return $my_array;
}

// Test array to be sorted
$test_array = array(3, 0, 2, 5, -1, 4, 1);

// Display the original array
echo "Original Array :\n";
echo implode(', ', $test_array);

// Sort the array using shell sort
$sorted_array = shell_Sort($test_array);

// Display the sorted array
echo "\nSorted Array:\n";
echo implode(', ', $sorted_array) . PHP_EOL;
?>
```

### 6. Write a PHP program to sort a list of elements using Bubble sort.

```php
<?php
// Function to perform bubble sort on an array
function bubble_Sort($my_array )
{
    // Loop until no swaps are made
    do
    {
        $swapped = false; // Flag to track if any elements were swapped
        // Iterate over the array
        for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
        {
            // Compare adjacent elements
            if( $my_array[$i] > $my_array[$i + 1] )
            {
                // Swap elements if they are in the wrong order
                list( $my_array[$i + 1], $my_array[$i] ) =
                        array( $my_array[$i], $my_array[$i + 1] );
                $swapped = true; // Set swapped flag to true
            }
        }
    }
    // Continue loop until no swaps are made
    while( $swapped );
    
    return $my_array; // Return the sorted array
}

// Test array
$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array ); // Display original array
echo "\nSorted Array\n:";
echo implode(', ',bubble_Sort($test_array)). PHP_EOL; // Display sorted array
?>
```

### 7. Write a PHP program to sort a list of elements using Cocktail sort.

```php
<?php
// Function to perform Cocktail Shaker Sort on an array
function cocktailSort($my_array)
{
    // If the input is a string, convert it to an array of characters
    if (is_string($my_array))
        $my_array = str_split(preg_replace('/\s+/','',$my_array));

    // Loop until no swaps are made
    do {
        $swapped = false; // Flag to track if any elements were swapped

        // Forward pass through the array
        for($i = 0; $i < count($my_array); $i++) {
            // Check if the next element exists
            if(isset($my_array[$i+1])) {
                // Compare adjacent elements and swap if necessary
                if($my_array[$i] > $my_array[$i+1]) {
                    list($my_array[$i], $my_array[$i+1]) = array($my_array[$i+1], $my_array[$i]);
                    $swapped = true; // Set swapped flag to true
                }
            }			
        }

        // If no swaps were made in the forward pass, break out of the loop
        if ($swapped == false) break;

        $swapped = false; // Reset swapped flag

        // Backward pass through the array
        for($i = count($my_array) - 1; $i >= 0; $i--) {
            // Check if the previous element exists
            if(isset($my_array[$i-1])) {
                // Compare adjacent elements and swap if necessary
                if($my_array[$i] < $my_array[$i-1]) {
                    list($my_array[$i], $my_array[$i-1]) = array($my_array[$i-1], $my_array[$i]);
                    $swapped = true; // Set swapped flag to true
                }
            }
        }
    } while($swapped); // Continue loop until no swaps are made

    return $my_array; // Return the sorted array
}

// Test array
$test_array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ',$test_array ); // Display original array
echo "\nSorted Array\n:";
echo implode(', ',cocktailSort($test_array)). PHP_EOL; // Display sorted array
?>
```

### 8. Write a PHP program to sort a list of elements using Comb sort.

```php
<?php
// Function to perform Comb Sort on an array
function combSort($my_array){
	$gap = count($my_array); // Set initial gap to the length of the array
    $swap = true; // Flag to track if any swaps were made
	while ($gap > 1 || $swap){ // Continue loop until gap is 1 and no swaps are made
		if($gap > 1) $gap /= 1.25; // Reduce the gap by 1.25 if it's greater than 1
 		$swap = false; // Reset swap flag
		$i = 0; // Initialize index variable
		while($i+$gap < count($my_array)){ // Loop through the array
			if($my_array[$i] > $my_array[$i+$gap]){ // Compare elements with the gap and swap if necessary
				list($my_array[$i], $my_array[$i+$gap]) = array($my_array[$i+$gap],$my_array[$i]); // Swap elements
				$swap = true; // Set swap flag to true
			}
			$i++; // Increment index
		}
	}
	return $my_array; // Return the sorted array
}
$test_array = array(3, 0, 2, 5, -1, 4, 1); // Test array
echo "Original Array :\n";
echo implode(', ',$test_array ); // Display original array
echo "\nSorted Array\n:";
echo implode(', ',combSort($test_array)). PHP_EOL; // Display sorted array
?>
```

### 9. Write a PHP program to sort a list of elements using Gnome sort.

```php
<?php
// Function to perform Gnome Sort on an array
function gnome_Sort($my_array){
	$i = 1; // Initialize the index
	$j = 2; // Initialize the second index
	while($i < count($my_array)){ // Loop until the index is less than the array length
		if ($my_array[$i-1] <= $my_array[$i]){ // If the previous element is less than or equal to the current element
			$i = $j; // Move to the next index
			$j++; // Increment the second index
		}else{
			// Swap the current and previous elements
			list($my_array[$i],$my_array[$i-1]) = array($my_array[$i-1],$my_array[$i]);
			$i--; // Move to the previous index
			if($i == 0){ // If at the beginning of the array
				$i = $j; // Move to the next index
				$j++; // Increment the second index
			}
		}
	}
	return $my_array; // Return the sorted array
}
$test_array = array(3, 0, 2, 5, -1, 4, 1); // Input array to be sorted
echo "Original Array :\n"; // Print original array label
echo implode(', ',$test_array ); // Print original array elements
echo "\nSorted Array :\n"; // Print sorted array label
echo implode(', ',gnome_Sort($test_array)). PHP_EOL; // Print sorted array
?>
```

### 10. Write a PHP program to sort a list of elements using Bucket sort.

```php
<?php
// Function to perform insertion sort on an array
function insertion_sort(&$elements, $fn = 'comparison_function') {
  if (!is_array($elements) || !is_callable($fn)) return; // Check if the input is valid
  for ($i = 1; $i < sizeof($elements); $i++) { // Loop through each element starting from the second
    $key = $elements[$i]; // Store the current element to be compared
                          // $key will be the right side element that will be
                          // compared against the left sorted elements. For
                          // min to max sort, $key should be higher than
                          // $elements[0] to $elements[$j]
    
    $j = $i - 1; // Set the index to the previous element
    while ( $j >= 0 && $fn($key, $elements[$j]) ) { // Loop through sorted elements to find the correct position for $key
      $elements[$j + 1] = $elements[$j]; // Shift elements to the right
      $j = $j - 1; // Move to the previous element
    }
    $elements[$j + 1] = $key; // Place $key in its correct position
  }
}

/**
 * Comparison function used to compare each element.
 * @param mixed $a
 * @param mixed $b
 * @returns bool True iff $a is less than $b.
 */
function comparison_function(&$a, &$b) {
  return $a < $b; // Compare if $a is less than $b
}

// Function to perform bucket sort on an array
function bucket_sort(&$elements) {
  $n = sizeof($elements); // Get the size of the array
  $buckets = array(); // Initialize an array to hold buckets
  // Initialize the buckets.
  for ($i = 0; $i < $n; $i++) { // Loop through each element
    $buckets[$i] = array(); // Create an empty bucket
  }
  // Put each element into matched bucket.
  foreach ($elements as $el) { // Loop through each element in the array
    array_push($buckets[ceil($el/10)], $el); // Put the element in the appropriate bucket
  }
  // Sort elements in each bucket using insertion sort.
  $j = 0; // Initialize a variable to keep track of the index
  for ($i = 0; $i < $n; $i++) { // Loop through each bucket
    // Sort only non-empty bucket
    if (!empty($buckets[$i])) { // Check if the bucket is not empty
      insertion_sort($buckets[$i]); // Sort the elements in the bucket
      // Move sorted elements in the bucket into original array.
      foreach ($buckets[$i] as $el) { // Loop through each element in the bucket
        $elements[$j++] = $el; // Move the element to the original array
      }
    }
  }
}

$a = array(-1,0,2,3,-2); // Define the input array
echo "Original Array :\n"; // Print original array label
insertion_sort($a); // Sort the elements
echo "\nSorted Array :\n"; // Print sorted array label
var_dump($a); // Print the sorted array
?>
```

### 11. Write a PHP program to sort a list of elements using Counting sort.
```php
<?php
// Function to perform counting sort on an array
function counting_sort($my_array, $min, $max)
{
  $count = array(); // Initialize an array to store count of each element
  for($i = $min; $i <= $max; $i++) // Iterate over the range from min to max
  {
    $count[$i] = 0; // Initialize each count to zero
  }
 
  foreach($my_array as $number) // Iterate over the input array
  {
    $count[$number]++; // Increment the count of the current element
  }
  $z = 0; // Initialize a variable to keep track of the current index
  for($i = $min; $i <= $max; $i++) { // Iterate over the range from min to max
    while( $count[$i]-- > 0 ) { // Decrement the count of the current element until it becomes zero
      $my_array[$z++] = $i; // Fill the original array with the current element
    }
  }
  return $my_array; // Return the sorted array
}
$test_array = array(3, 0, 2, 5, -1, 4, 1); // Define the input array
echo "Original Array :\n"; // Print original array label
echo implode(', ',$test_array ); // Print the original array
echo "\nSorted Array\n:"; // Print sorted array label
echo implode(', ',counting_sort($test_array, -1, 5)). PHP_EOL; // Sort the array using counting sort and print the sorted array
?>
```

### 12. Write a PHP program to sort a list of elements using Radix sort.

```php
<?php
// Function to perform radix sort on an array
function radix_sort(&$elements) {
  // Array for 10 queues.
  $queues = array_fill(0, 10, array());
  // Find the maximum number of digits in the array
  $max_digits = strlen((string) max($elements));
  // Iterate over each digit position
  for ($i = 0; $i < $max_digits; $i++) {
    // Distribute elements into queues based on the current digit
    foreach ($elements as $el) {
      $digit = (int) str_pad((string) ($el / pow(10, $i)) % 10, 1, '0', STR_PAD_LEFT);
      array_push($queues[$digit], $el);
    }
    // Reconstruct the array from the queues
    $elements = array_reduce($queues, 'array_merge', array());
    // Clear queues for next iteration
    $queues = array_fill(0, 10, array());
  }
}

// Example usage:
$a = array(170, 45, 75, 90, 802, 24, 2, 66); // Define an example array
echo 'Original Array : ' . implode(', ', $a) . "\n";

radix_sort($a); // Sort the array using radix sort
echo "\nSorted Array:\n";
echo 'Original Array : ' . implode(', ', $a) . "\n";
?>
```

### 13. Write a PHP program to sort a list of elements using Bead sort.

```php
<?php
// Function to convert a multidimensional array into its columnar representation
function columns($my_array) {
    // Check if the input array is empty
    if (count($my_array) == 0)
        return array();
    // Check if the input array has only one row
    else if (count($my_array) == 1)
        return array_chunk($my_array[0], 1); // Split the single row into individual elements
    array_unshift($my_array, NULL); // Add a null element to the beginning of the array
    // Transpose the array using array_map and call_user_func_array
    $transpose = call_user_func_array('array_map', $my_array);
    // Filter out null elements from each column
    return array_map('array_filter', $transpose);
}

// Function to perform bead sort on an array
function bead_sort($my_array) {
    $poles = array(); // Initialize an empty array to represent the poles
    // Create poles with beads corresponding to each element in the input array
    foreach ($my_array as $e)
        $poles []= array_fill(0, $e, 1); // Fill each pole with beads
    // Convert the array of poles into its columnar representation and then back into an array
    return array_map('count', columns(columns($poles))); // Count the number of beads in each column
}

$test_array = array(3, 2, 5, 4, 1, 100); // Define an example array
echo "\nOriginal Array :\n";
echo implode(', ',$test_array ); // Print the original array
echo "\nSorted Array :\n";
echo implode(', ',bead_sort($test_array)). PHP_EOL; // Print the sorted array
?>
```

### 14. Write a PHP program to sort a list of elements using Bogo sort.

```php
<?php
// Function to check if a list is sorted in ascending order
function issorted($list)
{
    // Get the count of elements in the list
    $cnt = count($list);
    // Iterate through the list elements starting from the second element
    for($j = 1; $j < $cnt; $j++)
    {
        // If the previous element is greater than the current element, list is not sorted
        if($list[$j-1] > $list[$j])
		{
            return false; // Return false indicating list is not sorted
        }
    }
    return true; // Return true indicating list is sorted
}

// Function to perform Bogo Sort on a list
function bogo_sort($list)
{
    // Repeat shuffling until the list is sorted
    do
    {
        shuffle($list); // Shuffle the list
    }
    while(!issorted($list)); // Repeat until list is sorted
    return $list; // Return the sorted list
}

$test_array = array(100, 0, 2, 5, -1, 4, 1);
echo "\nOriginal Array :\n";
echo implode(', ',$test_array );
echo "\nSorted Array :\n";
echo implode(', ',bogo_sort($test_array)). PHP_EOL;
?>
```

### 15. Write a PHP program to sort a list of elements using Strand sort.

```php
<?php
// Create a new instance of SplDoublyLinkedList
$lst = new SplDoublyLinkedList();

// Iterate over the array and push each element into the linked list
foreach (array(100, 0, 2, 5, -1, 4, 1) as $v)
    $lst->push($v);

// Call the strandSort function to sort the linked list and iterate over the sorted elements
foreach (strandSort($lst) as $v)
    echo "$v ";

echo " " . PHP_EOL;

// Function to perform Strand Sort on a SplDoublyLinkedList
function strandSort(SplDoublyLinkedList $lst) {
    // Initialize an empty list to store the sorted elements
    $result = new SplDoublyLinkedList();

    // Continue until the input list is empty
    while (!$lst->isEmpty()) {
        // Initialize two lists: one to store the sorted elements and the other to store the remaining elements
        $sorted = new SplDoublyLinkedList();
        $remain = new SplDoublyLinkedList();

        // Move the first element from the input list to the sorted list
        $sorted->push($lst->shift());

        // Iterate over the remaining elements in the input list
        foreach ($lst as $item) {
            // Compare the top element of the sorted list with the current element
            // If the current element is greater than or equal to the top element, add it to the sorted list
            // Otherwise, add it to the remaining list
            if ($sorted->top() <= $item) {
                $sorted->push($item);
            } else {
                $remain->push($item);
            }
        }

        // Merge the sorted list with the result list
        $result = _merge($sorted, $result);

        // Update the input list to contain the remaining elements
        $lst = $remain;
    }

    // Return the sorted result list
    return $result;
}

// Function to merge two sorted lists
function _merge(SplDoublyLinkedList $left, SplDoublyLinkedList $right) {
    // Initialize an empty list to store the merged result
    $res = new SplDoublyLinkedList();

    // Continue until both lists are empty
    while (!$left->isEmpty() && !$right->isEmpty()) {
        // Compare the bottom elements of both lists
        // If the bottom element of the left list is smaller, remove and add it to the result list
        // Otherwise, remove and add the bottom element of the right list to the result list
        if ($left->bottom() <= $right->bottom()) {
            $res->push($left->shift());
        } else {
            $res->push($right->shift());
        }
    }

    // Add any remaining elements from the left list to the result list
    foreach ($left as $v)
        $res->push($v);

    // Add any remaining elements from the right list to the result list
    foreach ($right as $v)
        $res->push($v);

    // Return the merged result list
    return $res;
}
?>
```

### 16. Write a PHP program to sort a list of elements using Patience sort.

```php
<?php
// Define a class named PilesHeap that extends SplMinHeap for sorting piles
class PilesHeap extends SplMinHeap {
    // Override the compare method to compare the top elements of the piles
    public function compare($pile1, $pile2) {
        return parent::compare($pile1->top(), $pile2->top());
    }
}

// Define the patience_sort function for sorting using patience sort algorithm
function patience_sort(&$n) {
    $piles = array(); // Initialize an array to store piles

    // Sort elements into piles
    foreach ($n as $x) {
        $low = 0; // Initialize low index for binary search
        $high = count($piles) - 1; // Initialize high index for binary search
        
        // Binary search to find the correct pile for the current element
        while ($low <= $high) {
            $mid = (int)(($low + $high) / 2); // Calculate mid index
            if ($piles[$mid]->top() >= $x) // If top element of pile is greater than or equal to current element
                $high = $mid - 1; // Update high index
            else
                $low = $mid + 1; // Update low index
        }
        
        $i = $low; // Assign the index of the pile
        if ($i == count($piles)) // If index is equal to the count of piles
            $piles[] = new SplStack(); // Create a new pile using SplStack
        $piles[$i]->push($x); // Push the current element onto the pile
    }

    // Create a priority queue to efficiently merge the piles
    $heap = new PilesHeap();
    foreach ($piles as $pile)
        $heap->insert($pile);

    // Merge the piles to sort the elements
    for ($c = 0; $c < count($n); $c++) {
        $smallPile = $heap->extract(); // Extract the smallest pile
        $n[$c] = $smallPile->pop(); // Pop the top element of the smallest pile and assign it to the array
        if (!$smallPile->isEmpty()) // If the smallest pile is not empty
            $heap->insert($smallPile); // Insert the pile back into the priority queue
    }
    assert($heap->isEmpty()); // Ensure that the priority queue is empty
}

// Example usage:
$a = array(100, 54, 7, 2, 5, 4, 1); // Define an array
print_r($a); // Print the original array
patience_sort($a); // Sort the array using patience sort
print_r($a); // Print the sorted array
?>
```

### 17. Write a PHP program to sort a list of elements using Merge sort.

```php
<?php
// Function to perform merge sort on an array
function merge_sort($my_array){
    // Base case: if the array has only one element, return it
    if(count($my_array) == 1 ) return $my_array;
    
    // Calculate the middle index of the array
    $mid = count($my_array) / 2;
    
    // Divide the array into two halves: left and right
    $left = array_slice($my_array, 0, $mid);
    $right = array_slice($my_array, $mid);
    
    // Recursively call merge_sort on each half
    $left = merge_sort($left);
    $right = merge_sort($right);
    
    // Merge the sorted halves
    return merge($left, $right);
}

// Function to merge two sorted arrays
function merge($left, $right){
    $res = array(); // Initialize an empty array to store the merged result
    
    // Compare elements from left and right arrays and merge them in sorted order
    while (count($left) > 0 && count($right) > 0){
        if($left[0] > $right[0]){
            $res[] = $right[0];
            $right = array_slice($right , 1);
        }else{
            $res[] = $left[0];
            $left = array_slice($left, 1);
        }
    }
    
    // If any elements are remaining in the left array, append them to the result
    while (count($left) > 0){
        $res[] = $left[0];
        $left = array_slice($left, 1);
    }
    
    // If any elements are remaining in the right array, append them to the result
    while (count($right) > 0){
        $res[] = $right[0];
        $right = array_slice($right, 1);
    }
    
    // Return the merged result
    return $res;
}

// Example usage:
$test_array = array(100, 54, 7, 2, 5, 4, 1); // Define an array
echo "Original Array : ";
echo implode(', ',$test_array ); // Print the original array
echo "\nSorted Array :"; 
echo implode(', ',merge_sort($test_array))."\n"; // Sort the array using merge sort and print the sorted array
?>
```

