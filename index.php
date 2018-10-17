<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Location</h3>
        </div>
        <div class="panel-body">

          <div class="col-md-12">
            <div class="form-group">
              <input type="text" class="form-control" id="location" placeholder="Nama Lokasi">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
                <input type="text" class="form-control" id="longitude" placeholder="Latitude">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" id="latitude" placeholder="Latitude">
            </div>
          </div>
          <div class="col-md-6">
            <div id="addlocation">
              <div class="form-group">
                <input type="text" class="form-control" id="nearby0" placeholder="Nama Lokasi Terdekat">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <button type="button" class="btn btn-primary" name="button" onclick="addlocation()">Add Location</button>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <button type="button" class="btn btn-primary" onclick="save()" name="button">Submit</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </body>
</html>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script type="text/javascript">
  var i =0;
  function addlocation() {
    i++;
    console.log(i);
    $( "#addlocation" ).append( "<div class='form-group'>" );
    $( "#addlocation" ).append( "<input type='text' class='form-control' id='nearby"+i+"' placeholder='Nama Lokasi Terdekat'>" );
    $( "addlocation" ).append("</div>");

  }

  function uye() {
    var nearbyaa = new Array(1);
    var j;
    for (j = 0; j < 1; j++) {
        nearbyaa.push($('#nearby'+j+'').val());
    }
    console.log(nearbyaa);
  }

  function save() {
    $.ajax({
      url: "http://a2178626.ngrok.io/location",
      type: "POST",
      dataType: "xml/html/script/json", // expected format for response
      contentType: "application/json", // send as JSON
      data: JSON.stringify(
        { "Location": $('#location').val(),
          "Longitude": $('#longitude').val(),
          "Latitude": $('#latitude').val(),
          "Nearby": $('#nearby0').val(),
        }
      ),
      complete: function() {
        console.log("oke deh");
      },

      success: function() {
        //called when successful
     },

      error: function() {
        //called when there is an error
      },
    });
  }
</script>
