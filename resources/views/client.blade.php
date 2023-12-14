@include('sweetalert::alert')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Tambahkan skrip SweetAlert setelah semua dependensi dimuat -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12 my-">
                <h1>Pusher Realtime Notification to Admin</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/150"  alt="Placeholder Image" width="150">
                        <h5 class="card-title mt-2">Nasi Goreng Merah</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <p class="text-primary">Rp. 15.000</p>
                        <a href="{{ route('notif.realtime.admin') }}" class="btn btn-primary">Admin pesan</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('184a328793e5e5b01276', {
          cluster: 'ap1'
        });

        var channel = pusher.subscribe('client-channel');
        channel.bind('client-event', function(data) {
          Swal.fire({
              icon: 'success',
              title: 'success!',
              text: data.message,
          });
        });
      </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
