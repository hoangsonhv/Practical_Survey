<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link href="{{asset("toastr.css")}}" rel="stylesheet"/>
    <script src="{{asset("toastr.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Survey</title>
</head>
<body>
    <div class="container" style="margin-top: 50px;width: 1000px;">
        <div>
            <h2 style="text-align: center; color: #0400ff">FPT - Khảo sát ý kiến sinh viên</h2>
        </div>
        @if(session()->has("success"))
            <div class="alert alert-info">
                {{ session()->get("success") }}
            </div>
        @endif

            <form action="{{url("surveys")}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control"  name="name">
                    @error("name")<div class="alert alert-danger" style="width: 30%;height: 40px;padding: 5px 15px;" >{{$message}}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    @error("email")<div class="alert alert-danger" style="width: 30%;height: 40px;padding: 5px 15px;"" >{{$message}}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Phone</label>
                    <input type="number" class="form-control" name="phone">
                    @error("phone")<div class="alert alert-danger" style="width: 30%;height: 40px;padding: 5px 15px;" >{{$message}}</div>@enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Comment</label>
                    <textarea class="form-control" name="comment" id="exampleFormControlTextarea1" rows="3"></textarea>
                    @error("comment")<div class="alert alert-danger" style="width: 30%;height: 40px;padding: 5px 15px;" >{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Gửi</button>
                <div id="alert">
                </div>
            </form>

    </div>
</body>

</html>
