<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form>
    <label>Name :</label>
    <input type="text" name="name">
    <br/>
    <label>Email :</label>
    <input type="email" name="email"> 
    <br/>
    <label>Address :</label>
    <textarea name="address"></textarea>
    <br/>
    <label>Country :  </label>
    <select id="country" name="country">
     
    </select>
     <br/>
    <label>State :  </label>
    <select id="state" name="state">
     
    </select>
     <br/>
    <label>City :  </label>
    <select id="city" name="city">
     
    </select>
    <br/>
    <input type="submit" value="Submit">
  </form>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function(){
      //1. Populate Country Dropdown
      $.ajax({
        url: 'process/master.php',
        type:'POST',
        data: {action: 'get_countries'},
        success:function(response){
          console.log(response);
          var countries = JSON.parse(response);
          console.log(countries);
          $('#country').append('<option value="">--Select Country--</option>');
          for(var code in countries){
            console.log(countries[code]);
            $('#country').append('<option value="'+code+'">'+countries[code]+'</option>');
          }
        },
        error:function(err){
          console.log(err);
        }
      });
    
      //populate states based on country selection

      $('#country').on('change',function(){
        //alert('country selected');
        let countryCode = $(this).val();
        alert(countryCode);
        $.ajax({
          url: 'process/master.php',
          type:'POST',
          data: {action: 'get_states', countryCode: countryCode},
          success:function(response){
            console.log(response);
            var states = JSON.parse(response);
            console.log(states);
            $('#state').empty();
            $('#state').append('<option value="">--Select State--</option>');
            for(var code in states){
              console.log(states[code]);
              $('#state').append('<option value="'+code+'">'+states[code]+'</option>');
            }
          },
          error:function(err){
            console.log(err);
          }
        });
      });
    
      $('#state').on('change',function(){
        //alert('country selected');
        var stateCode = $(this).val();
        //alert(stateCode);
        $.ajax({
          url: 'process/master.php',
          type:'POST',
          data: {action: 'get_cities', countryCode: $('#country').val(), stateCode: stateCode},
          success:function(response){
            console.log(response);
            var cities = JSON.parse(response);
            console.log(cities);
            $('#city').empty();
            $('#city').append('<option value="">--Select City--</option>');
            for(var code in cities){
              console.log(cities[code]);
              $('#city').append('<option value="'+code+'">'+cities[code]+'</option>');
            }
          },
          error:function(err){
            console.log(err);
          }
        });
      });
    
    });
  </script>
</body>
</html>