@extends('layouts.app')

@section('content')
<head>
  <title>Pagrindinis</title>
  <link rel="icon" type="image/png" href="data:image/jpeg;base64, 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ek5UY3prYzlkIj8+Cjx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IlhNUCBDb3JlIDQuNC4wLUV4aXYyIj4KIDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+CiAgPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgIHhtbG5zOmRjPSJodHRwOi8vcHVybC5vcmcvZGMvZWxlbWVudHMvMS4xLyIKICAgIHhtbG5zOkdJTVA9Imh0dHA6Ly93d3cuZ2ltcC5vcmcveG1wLyIKICAgIHhtbG5zOnRpZmY9Imh0dHA6Ly9ucy5hZG9iZS5jb20vdGlmZi8xLjAvIgogICAgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIgogICB4bXBNTTpEb2N1bWVudElEPSJnaW1wOmRvY2lkOmdpbXA6OWU3NzE0OGUtYTcxYS00ODgyLTk0MjctNjdkMTQxNzE1M2E4IgogICB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjNlMzA0MmQyLTE2YTctNDQ5OS1iOTQ0LTJhNzdlNzNhNmVhZiIKICAgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOjI1MTNkZDU2LWE1MWMtNGZlZS1iYTVlLTg1ZWZjOWZkY2I0YiIKICAgZGM6Rm9ybWF0PSJpbWFnZS9wbmciCiAgIEdJTVA6QVBJPSIyLjAiCiAgIEdJTVA6UGxhdGZvcm09IldpbmRvd3MiCiAgIEdJTVA6VGltZVN0YW1wPSIxNjUwMjEyMDQ0NjQ3NjQwIgogICBHSU1QOlZlcnNpb249IjIuMTAuMzAiCiAgIHRpZmY6T3JpZW50YXRpb249IjEiCiAgIHhtcDpDcmVhdG9yVG9vbD0iR0lNUCAyLjEwIj4KICAgPHhtcE1NOkhpc3Rvcnk+CiAgICA8cmRmOlNlcT4KICAgICA8cmRmOmxpCiAgICAgIHN0RXZ0OmFjdGlvbj0ic2F2ZWQiCiAgICAgIHN0RXZ0OmNoYW5nZWQ9Ii8iCiAgICAgIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6YWM3M2Y1MmYtMWE3Yi00MDFiLWE5NGMtZjQ4NjY1NzI0NjM0IgogICAgICBzdEV2dDpzb2Z0d2FyZUFnZW50PSJHaW1wIDIuMTAgKFdpbmRvd3MpIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTA0LTE3VDE5OjE0OjA0Ii8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+CiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIAogICAgICAgICAgICAgICAgICAgICAgICAgICAKPD94cGFja2V0IGVuZD0idyI/PiJSSiMAAAAGYktHRAD/AP8A/6C9p5MAAAAHdElNRQfmBBEQDgSUJI7iAAACzUlEQVRIS6WUW08TQRiG3z21u9tutRSU41qKShMEJaIQg4nR6J3IhTHR4A/wH/g3jPfGxEQvuPfKH0AwxGgM0chRSDHtFgrbhW237Tqz2+XUbpvQp5mZdr+Zd95+8+0wY0MjNupRriDa0Y5w9BzAMLDJx4PneJRLJWyt/nVGm2WqkZOw1bEGhmWhXkmgTERLlTIGrX3cN7fRUyqgYBVRIXqXkpePbVmLr/NQOIT23m4IBROv9CX0Fn6T2SRAZn8L3cR7qQuCIGBnK428rruLTuHr3CpasG0b02bmSLjKqLGAh2XDifsJU3zF6UJKfyFDU+5oO410Elk1Xso58RO7nsJX3EPnZCevXu540jpIl2VF90GDrDcV/yJ1k0OVHX8Kmd0tAAbbiVkh6k5oQFPxn1wQ76KTyIauwwwOYE4cw+vwKLTDpWdIC0OTWx3/iQFsjlxAalLF6tU2pBj+MH6mtHgHOhCq4M29LKYHd3G7x8DMcA5v7+6Aq2ofbVJLU+czSQNKgLxKZC+32eiLFPD84p4T90zUo6nzPsVyxsNaJB1zkEci6Iq35Hxjj5QHc8xd0YSdW8KyEXZ+tuT8w68Q9kxS2KUikEsD2g+s5+P4pJELjdDIue/dEggE0NmvwrIstHEVPG7bRZd44Die3VbIDAYcx2Hzz4q7oA5NnVMiEwmsPnuCr09fYmPqESI9rmtKSzmP34lj6MEQlJgCURERU2MYfzEOMea+/i3lXL2hOhsdb9J5CcmppBMnD9yxDr7iHixfO0VRFfABeoURzuLc86Otac6/oI0hr2UkEYEQFrA+t94wJRRfcZ5UC03B4udFpNfSCPeFEbsWAyuymP84j8x3es/7p4TiW4pMxcbwxC1oWde53CkjmogiNZeCTWK0DGmZ6plt7BtGddVJGh7oxvIKWLK1LElgdAbagka+y5BlGWIwCFPP44C0+gD/Af/MBZ+yieFlAAAAAElFTkSuQmCC"></link>
  <style>
  		body { 
          min-width: 1300px;
  		}
        .banner {
          background-color: #34282C;
          font-size: 10px;
          color: white;
          height: 30px;
          width: 100%;
          text-align: left;
          padding-top: 4px;
          padding-left: 4px;
        }
        .button {
 		  border: solid;
          color: black;
          padding: 10px 20px;
          text-align: left;
          align-items: center;
          display: flex;
          font-size: 18px;
          margin: 10px 0px;
          cursor: pointer;
          width: 100%;
          height: 10%;
          background-color: #FFFFFF;
		}
        .button22 {
 		  border: solid;
          color: black;
          padding: 10px 20px;
          text-align: center;
          display: flex;
          align-items: center;
          font-size: 18px;
          margin: 10px 0px;
          cursor: pointer;
          width: 40%;
          height: 10%;
          background-color: #FFFFFF;
		}
        .notavailable {
          opacity: 0.7;
          border: solid;
          border-color: #888888;
          color: black;
          padding: 10px 20px;
          text-align: left;
          align-items: center;
          display: flex;
          font-size: 18px;
          margin: 10px 0px;
          width: 100%;
          height: 10%;
          background-color: RGB(238,238,238);
        }
        .btnimg {
          height: 55px;
          width: 54px;
          margin-right: 40px;
          object-fit: cover;
        }
        .button:hover {
          background-color: #E5E4E2;
        }
        .button22:hover {
          background-color: #E5E4E2;
        }
        .center {
          margin: auto;
          width: 40%;
          border: 1px solid black;
          border-top:none;
          padding: 10px;
        }
        .aboveDivHeader{
            padding-top: 60px;
            border-left:none;
            border-right:none;
            border-top:none;
            height: min-content;
          	max-width:700px;
          	min-width:700px;
        }
        .belowDivHeader{
            background-color: RGB(238,238,238);
          	max-width:700px;
          	min-width:700px;
            white-space: nowrap;
            overflow: hidden;
        }
        *{
          margin:0;
          padding:0;
          font-family:Arial;
        }
  		.bannerLeft{
            float: left;
            width: 78%;
  		}
  		a:hover{
          color:#cbd7d3;
  		}
  		.icon{
          width:2%;
          float:left;
          padding-left:3px;
          padding-right:3px;
          max-width:14px;
          min-width:14px;
  		}
  		input{
  		padding-left:3px;
  		}
        
   </style>
</head>

<div>asgard</div>
    <div class="d-flex" id="wrapper">
        @if(Auth::user())
            @if(Auth::user()->role == 'admin')
                @include('adminpanel.adminSidebar')
            @endif
        @endif
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <h3 class="page-title">Topics</h3>
                    @foreach($topics as $topic)
                        <div class="card">
                            <div class="card-body mb-2">
                                <h5 class="card-title">{{$topic->title}}</h5>
                                <a href="{{route('topics.show', $topic->id)}}" class="inline_block btn btn-primary">Go
                                    To Quiz</a>
                                @if(Auth::user())
                                    @if(Auth::user()->role == 'admin')
                                        <a href="{{route('topics.edit', $topic->id)}}"
                                           class="inline_block btn btn-warning">Edit</a>
                                           <div>asgard</div>
                                        <form class="inline_block" action="{{route('topics.destroy', $topic->id)}}"
                                              method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-xs btn-danger" type="submit">Delete</button>
                                        </form>
                                    @endif
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection