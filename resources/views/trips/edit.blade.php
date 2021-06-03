@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Velocity : Trips</title>
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    @yield('styles')
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div class="container">
         <div class="row my-5">
              <div class="col-md-8 mx-auto ">
                 <div class="card">
                      <div class="card-body">
                         <form action="{{route('admin.trips.update',$trip->id)}}" method="put" enctype="multipart/form-data">
                            {{csrf_field() }}
                            <input type="hidden" name="id" value="{{ $trip->id }}">
                              <div class="form-group">
                                  <label for="">Departure_city*</label>
                                  <input type="text" name="Departure_city" value="{{ $trip->Departure_city}}"
                                     id="" class="form-control"
                                     placeholder="Departure_city" value="" aria-describedby="helpId">
                              </div>
                              <div class="form-group">
                                <label for="">Arrival_city*</label>
                                <input type="text" name="Arrival_city" value="{{ $trip->Arrival_city}}"
                                   id="" class="form-control"
                                   placeholder="Arrival_city" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Departure_station*</label>
                                <input type="text" name="Departure_station"  value="{{ $trip->Departure_station}}"
                                   id="" class="form-control"
                                   placeholder="Departure_station" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Arrival_station*</label>
                                <input type="text" name="Arrival_station"  value="{{ $trip->Arrival_station}}"
                                   id="" class="form-control"
                                   placeholder="Arrival_station" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">price*</label>
                                <input type="text" name="price"  value="{{ $trip->price}}"
                                   id="" class="form-control"
                                   placeholder="price" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Arrival_Time*</label>
                                <input type="time" name="Arrival_Time" value="{{ $trip->Arrival_Time}}"
                                   id="Arrival_Time" class="form-control"
                                   placeholder="Arrival_Time" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="">Departure_Date*</label>
                                <input type="datetime-local" name="Departure_Date"  value="{{ $trip->Departure_Date}}"
                                   id="Departure_Date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">dispo*</label>
                                <select type="text" name="dispo"  value="{{ $trip->dispo}}"
                                   id="dispo" class="form-control">
                                   <option value="" selected disableded>choose a value</option>
                                   <option value="0">oui</option>
                                   <option value="1">no</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">train_id</label>
                                <input type="text" name="train_id"  value="{{ $trip->train_id}}"
                                   id="train_id" class="form-control">
                            </div>
                        </div>
                       <div class="modal-footer">
                         <button type="submit" class="btn btn-primary">Valider</button>
                        </div>
                      </form>
                      </div>
                 </div>

              </div>
         </div>
         <style>
            body{
                background-color: rgb(34,34,34);
                }
            nav{
                 display: flex;
                 height: 10vh;
                 width: 100%;
                 background: rgb(34,34,34);
                 align-items: center;
                 justify-content: space-between;
                 padding: 0 50px 0 100px;
                 flex-wrap: wrap;
                }
                nav .logo{
                  color: #fff;
                  font-size: 35px;
                  font-weight: 600;
                  z-index: 1;
                }
                nav ul{
                 display: flex;
                 flex-wrap: wrap;
                 list-style: none;
                }
                nav ul li{
                 margin: 0 5px;
                }
                nav ul li a{
                 color: #f2f2f2;
                 text-decoration: none;
                 font-size: 18px;
                 font-weight: 500;
                 padding: 8px 15px;
                 border-radius: 5px;
                 letter-spacing: 1px;
                 transition: all 0.3s ease;
                }
                nav ul li a.active,
                nav ul li a:hover{
                  color: rgb(255,183,0);
                }
                .box{
                  background: rgb(34,34,34);
                  box-shadow: 10px 15px 20px rgba(0, 0, 0, 0.3);
               }
               .table th{
                   color: white;
               }
                .card{
                    background-color: rgb(42, 41, 41);
                    box-shadow: 10px 15px 20px rgba(0, 0, 0, 0.3);
                }
                .card label{
                color: white;
                }
               .table td{
                   color: white;
               }
           </style>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        </body>
        </html>

      @yield('content')
