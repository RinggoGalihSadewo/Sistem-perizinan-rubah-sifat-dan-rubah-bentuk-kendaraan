<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="/images/admin/logo/logo.png" rel="icon">
  <title>Edit Data Pengguna</title>
  <link href="/vendors/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/ruang-admin.min.css" rel="stylesheet">
  
  <style>
      #map {
        height: 400px;
      }
      
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }
      
      #infowindow-content .title {
        font-weight: bold;
      }
      
      #infowindow-content {
        display: none;
      }
      
      #map #infowindow-content {
        display: inline;
      }
      
      .pac-card {
        background-color: #fff;
        border: 0;
        border-radius: 2px;
        box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
        margin: 10px;
        padding: 0 0.5em;
        font: 400 18px Roboto, Arial, sans-serif;
        overflow: hidden;
        font-family: Roboto;
        padding: 0;
      }
      
      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }
      
      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }
      
      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      
      #pac-input {
        margin-top: 3%;
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 40%;
      }
      
      #pac-input:focus {
        border-color: #4d90fe;
      }
      
      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      
      #target {
        width: 345px;
      }
  </style>
  
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="/img/logo/dishub.png">
        </div>
        <div class="sidebar-brand-text mx-3">Admin Perizinan</div>
      </a>
      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>
      <li class="nav-item active">
        <a class="nav-link collapsed" href="{{url('/admin/dashboard')}}">
          <i class="fas fa-users"></i>
          <span>Data Pengguna</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
          aria-controls="collapseForm">
          <i class="fas fa-file-alt"></i>
          <span>Data Jenis Surat</span>
        </a>
        <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/admin/data-rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/data-rubah-bentuk')}}">Rubah Bentuk</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-user-tie"></i>
          <span>Data Pejabat</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="simple-tables.html">Simple Tables</a>
            <a class="collapse-item" href="datatables.html">DataTables</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable2" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-file-signature"></i>
          <span>Data QR-Code</span>
        </a>
        <div id="collapseTable2" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/admin/data-qr-code/rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/data-qr-code/rubah-bentuk')}}">Rubah Bentuk</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGeQR" aria-expanded="true"
          aria-controls="collapseGeQR">
          <i class="fas fa-qrcode"></i>
          <span>Generate QR-Code</span>
        </a>
        <div id="collapseGeQR" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/admin/generate-qrcode-rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/generate-qrcode-rubah-bentuk')}}">Rubah Bentuk</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseVaQR" aria-expanded="true"
          aria-controls="collapseVaQR">
          <i class="fas fa-check-square"></i>
          <span>Validasi QR-Code</span>
        </a>
        <div id="collapseVaQR" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{url('/admin/validasi/rubah-sifat')}}">Rubah Sifat</a>
            <a class="collapse-item" href="{{url('/admin/validasi/rubah-bentuk')}}">Rubah Bentuk</a>
          </div>
        </div>
      </li>

    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="/img/boy.png" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Data Pengguna</h1>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
            <div class="card mb-4">
            <div class="card-body">
                <form action="/admin/dashboard/edit/{{$user->id}}" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Perusahaan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="{{$user->nama_perusahaan}}" name="namaPerusahaan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail2">Nama Pemilik</label>
                    <input type="text" class="form-control" id="exampleInputEmail2" value="{{$user->nama_pemilik}}" name="namaPemilik">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Kabupaten</label>
                    <input type="text" class="form-control" id="exampleInputEmail3" value="{{$user->kabupaten}}" name="kabupaten">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail4">NPWP</label>
                    <input type="text" class="form-control" id="exampleInputEmail4" value="{{$user->npwp}}" name="npwp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail5">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputEmail5" value="{{$user->alamat}}" name="alamat">
                </div>
                <input
                            id="pac-input"
                            class="form-control"
                            type="text"
                            placeholder="Cari alamat anda"
                            />
                            <div id="map" class="mt-3 mb-2"></div>
                            <input type="text" name="lat" id="lat" hidden="true" value="{{$user->map->lat}}">
                            <input type="text" name="lng" id="lng" hidden="true" value="{{$user->map->lng}}">
                <div class="form-group">
                    <label for="exampleInputEmail6">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail6" value="{{$user->email}}" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail7">No. HP</label>
                    <input type="text" class="form-control" id="exampleInputEmail7" value="{{$user->no_hp}}" name="noHp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            </div>
              
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b>Ringgo & Vina | IF ITERA</b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

    <!-- Google Maps API -->

    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4Hns7ZUFLMCxdRg6W_UZRl07Tcgv4h34&callback=initAutocomplete&libraries=places&v=weekly"
    async
></script>

    <script>
        var marker;

function taruhMarker(peta, posisiTitik){
    // membuat Marker
    if( marker ){
      // pindahkan marker
      marker.setPosition(posisiTitik);
      
    } else {
      // buat marker baru
      marker = new google.maps.Marker({
        position: posisiTitik,
        map: peta,
        // animation: google.maps.Animation.DROP,
        draggable: false,
        title: 'Posisi anda yang baru'
      });
    }

    document.getElementById('lat').value = posisiTitik.lat();
    document.getElementById('lng').value = posisiTitik.lng();
}

function initAutocomplete() {

  var latitude = "{{$user->map->lat}}";
  var longtitude = "{{$user->map->lng}}";
  
  console.log(latitude);
  console.log(longtitude);

  var lokasi = new google.maps.LatLng(latitude, longtitude)
  const map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -5.443429907357782, lng: 105.26257464716446 },
    zoom: 13,
    mapTypeId: "roadmap",
  });

  var marker = new google.maps.Marker({
    position: lokasi,
    title: "Posisi anda yang lama",
    map: map
 });

    google.maps.event.addListener(map, 'click', function(event) {
    taruhMarker(this, event.latLng);
  });

  // new google.maps.Marker({
  //   position: { lat: -5.443429907357782, lng: 105.26257464716446 },
  //   map,
  //   title: "Posisi anda",
  // });


  // Create the search box and link it to the UI element.
  const input = document.getElementById("pac-input");
  const searchBox = new google.maps.places.SearchBox(input);

  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  // Bias the SearchBox results towards current map's viewport.
  map.addListener("bounds_changed", () => {
    searchBox.setBounds(map.getBounds());
  });

  let markers = [];

  // Listen for the event fired when the user selects a prediction and retrieve
  // more details for that place.
  searchBox.addListener("places_changed", () => {
    const places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }

    // Clear out the old markers.
    markers.forEach((marker) => {
      marker.setMap(null);
    });
    markers = [];

    // For each place, get the icon, name and location.
    const bounds = new google.maps.LatLngBounds();

    places.forEach((place) => {
      if (!place.geometry || !place.geometry.location) {
        console.log("Returned place contains no geometry");
        return;
      }

      const icon = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25),
      };

      // Create a marker for each place.
      markers.push(
        new google.maps.Marker({
          map,
          icon,
          title: place.name,
          position: place.geometry.location,
        })
      );
      if (place.geometry.viewport) {
        // Only geocodes have viewport.
        bounds.union(place.geometry.viewport);
      } else {
        bounds.extend(place.geometry.location);
      }
    });
    map.fitBounds(bounds);
  });
}

function toggleBounce() {
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
    </script>

  <script src="/vendors/jquery/jquery.min.js"></script>
  <script src="/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/vendors/jquery-easing/jquery.easing.min.js"></script>
  <script src="/js/ruang-admin.min.js"></script>
  <script src="/vendors/chart.js/Chart.min.js"></script>
  <script src="/js/demo/chart-area-demo.js"></script> 

</body>

</html>