<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];
    switch($action){
      case 'get_countries':
          $countries = getCountryList();
          echo json_encode($countries);
          break;
      case 'get_states':
          if(isset($_POST['countryCode'])) {
              $countryCode = $_POST['countryCode'];
              $states = getStateList($countryCode);
              echo json_encode($states);
          } else {
              echo json_encode(['error' => 'Invalid parameters']);
          }
          break;
      case 'get_cities':
          if(isset($_POST['countryCode']) && isset($_POST['stateCode'])) {
              $countryCode = $_POST['countryCode'];
              $stateCode = $_POST['stateCode'];
              $cities = getCityList($countryCode, $stateCode);
              echo json_encode($cities);
          } else {
              echo json_encode(['error' => 'Invalid parameters']);
          }
          break;
    }
    exit;
    
}
function getCountryList()
{
    return [
        'US' => 'United States',
        'CA' => 'Canada',
        'GB' => 'United Kingdom',
        'AU' => 'Australia',
        'IN' => 'India',
    ];
} 

function getStateList($countryCode)
{
    $states = [
        'US' => ['CA' => 'California', 'TX' => 'Texas', 'NY' => 'New York'],
        'CA' => ['ON' => 'Ontario', 'QC' => 'Quebec', 'BC' => 'British Columbia'],
        'GB' => ['ENG' => 'England', 'SCT' => 'Scotland', 'WLS' => 'Wales'],
        'AU' => ['NSW' => 'New South Wales', 'VIC' => 'Victoria', 'QLD' => 'Queensland'],
        'IN' => ['MH' => 'Maharashtra', 'DL' => 'Delhi', 'KA' => 'Karnataka'],
    ];
    return isset($states[$countryCode]) ? $states[$countryCode] : [];
}

function getCityList($countryCode, $stateCode)
{
    $cities = [
        'US' => [
            'CA' => ['Los Angeles', 'San Francisco', 'San Diego'],
            'TX' => ['Houston', 'Dallas', 'Austin'],
            'NY' => ['New York City', 'Buffalo', 'Rochester'],
        ],
        'CA' => [
            'ON' => ['Toronto', 'Ottawa', 'Hamilton'],
            'QC' => ['Montreal', 'Quebec City', 'Laval'],
            'BC' => ['Vancouver', 'Victoria', 'Richmond'],
        ],
        'GB' => [
            'ENG' => ['London', 'Manchester', 'Birmingham'],
            'SCT' => ['Edinburgh', 'Glasgow', 'Aberdeen'],
            'WLS' => ['Cardiff', 'Swansea', 'Newport'],
        ],
        'AU' => [
            'NSW' => ['Sydney', 'Newcastle', 'Wollongong'],
            'VIC' => ['Melbourne', 'Geelong', 'Ballarat'],
            'QLD' => ['Brisbane', 'Gold Coast', 'Cairns'],
        ],
        'IN' => [
            'MH' => ['Mumbai', 'Pune', 'Nagpur'],
            'DL' => ['New Delhi', 'Dwarka', 'Rohini'],
            'KA' => ['Bangalore', 'Mysore', 'Mangalore'],
        ],
    ];
    return isset($cities[$countryCode][$stateCode]) ? $cities[$countryCode][$stateCode] : [];
}

?>