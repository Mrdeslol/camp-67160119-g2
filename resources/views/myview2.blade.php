@extends('template.default')

@section('content')
    <h1>this is my view 1</h1>
    <input type="text" id="myinput" placeholder="input text value">
    <button onclick="myfunc()" >ตรวจสอบ</button>
    <button onclick="myfunc2()" >ตรวจสอบ</button>
    <button onclick="myfunc3()" >ตรวจสอบ</button>
@endsection

@push('script')
    <h1>this is my view 2</h1>
@endpush

@push('script')
    <h1>this is my view 3</h1>
@endpush

@push('script')
    
    <script>
        myvar = 1;
        let myvar2
        console.log(myvar);
        console.log(myvar2);
    </script>
    
    <script>
        myvar2 = "My Var 2";
        myvar2 = 2;
        console.log(myvar2);
    </script>
    
    <script>
        function myfunc() {
            console.log("myfunc called");
        }

        function myfunc2() {
            console.log("myfunc2 called");
        }

        myfunc3 = () => {console.log("myfunc3 called");}

        console.log(document.getElementById("myinput").value);

        function myfunc4(callback) {
            console.log("myfunc4 called");
            callback()  
        }
        myfunc4(myfunc3)


        let myarray = [10,20,30,40,50];
        myarray.forEach( (item) => {
            console.log(item,index);
        } );
    </script>
@endpush