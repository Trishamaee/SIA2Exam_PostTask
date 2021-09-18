<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIA2_PostTask_Rabaca</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="{{ asset('js/app.js') }}" defer></script>

</head>
<body style=background-color:#00FFFF;">
  <div class="container p-5">
    <div class="header border border-dark bg-opacity-tan p-5 mb-5 mx-4">
      <h1 style="text-align:center; font-family:courier;">SIA2 FINAL EXAM API</h1>
      <br>
      <hr>
      <br>
      <h2 style="text-align:center;">Trisha Mae M. Rabaca</h2>
      <h3 style="text-align:center;">BSIT4A </h3>


    </div>
    <div class="content p-5 my-5 mx-4">
      <div class="user-input p-3">
        <form action="/" method="get ">
          @csrf
          <div class="row m-2" style="text-align:center;font-family:courier;">
            <div class="col-sm-6"><label for="value1">IP Address</label></div>
            <div class="col-sm-6"><label for="value1">Language</label></div>
          </div>
          <div class="row m-2" style="text-align:center;font-family:courier;">
            <div class="col-sm-6"><input type="text" name="q" id="" placeholder="Input IP Address" value="IP Address"></div>
            <div class="col-sm-6"><input type="text" name="language" id="" placeholder="EN" value="EN"></div>
          </div>
          <br>
          <div style="text-align:center;">
          <button type="submit">Submit</button>
          </div>
          <br>
        </form>
      </div>
    </div>
      <hr>
    <div class="border p-5 my-5 mx-4" style="text-align:center;font-family:courier;">
      <div class="results p-3">
        <div class="row">
          <div class="col-sm-12"><h3>Search Results</h3></div>
        </div>
        <div class="row border-dark m-4">
          @isset($data)
          <div class="col-3"><h4>Country</h4></div>
          <div class="col-9">
            {{print_r($data["LocalizedName"])}}
          </div>
          </div>

          @endisset
        </div>
      </div>
    </div>
  </div>
</body>
</html>