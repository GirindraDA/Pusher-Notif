<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Simple Bootstrap Card</title>

    <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
    <script>

      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;

      var pusher = new Pusher('184a328793e5e5b01276', {
        cluster: 'ap1'
      });

      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
        alert(JSON.stringify(data));
      });
    </script>
</head>
<body>

<div class="container mt-5">

    <div class="row">
        <div class="col-md-12 my-2">
            <h1>Pusher Realtime Notification</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="https://via.placeholder.com/150"  alt="Placeholder Image" width="150">
                    <h5 class="card-title mt-2">Nasi Goreng Kelabu</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="text-primary">Rp. 15.000</p>
                    <a href="{{ route('notif.realtime') }}" class="btn btn-primary">Beli</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="https://via.placeholder.com/150"  alt="Placeholder Image" width="150">
                    <h5 class="card-title mt-2">Nasi Goreng Hijau</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="text-primary">Rp. 15.000</p>
                    <a href="{{ route('notif.realtime') }}" class="btn btn-primary">Beli</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <img src="https://via.placeholder.com/150"  alt="Placeholder Image" width="150">
                    <h5 class="card-title mt-2">Nasi Goreng Merah</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="text-primary">Rp. 15.000</p>
                    <a href="{{ route('notif.realtime') }}" class="btn btn-primary">Beli</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
