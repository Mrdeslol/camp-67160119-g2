<!-- resource/views/html101.blade.php -->
<!DOCTYPE html>
<html>
    <head> 
        <style>
            body { 
                background-color: #3f89caff;
            }
            
        </style>
        
    </head>
    <body>
        
        @extends('template.default')

        @section('content')
        <div class="container mt-4" style="background-color: #006ccac4  ; color: white; padding: 20px; border-radius: 10px;">

            <h1>Workshop #HTML - FORM</h1> 
            <form>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fname">ชื่อ</label>
                    </div>
                    <div class="col">
                        <input id ="fname" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fsur">นามสกุล</label>
                    </div>
                    <div class="col">
                        <input id ="fsur" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fdate">วัน/เดือน/ปีเกิด</label>
                    </div>
                    <div class="col">
                        <input type="date" id ="fdate" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fage">อายุ</label>
                    </div>
                    <div class="col">
                        <input id="fage" class="form-control">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fsex">เพศ</label>
                    </div>
                    <div class="col">
                        <div id="fsex">
                            <label><input type="radio" name="sex" value="ชาย"> ชาย</label>
                            <label><input type="radio" name="sex" value="หญิง"> หญิง</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fpic">รูป</label>
                    </div>
                    <div class="col">
                        <input id="fpic" type="file">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fadd">ที่อยู่</label>
                    </div>
                    <div class="col">
                        <textarea id="fadd"></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fcol">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <select id="fcol">
                            <option value="แดง">แดง</option>
                            <option value="น้ำเงิน">น้ำเงิน</option>
                            <option value="เหลือง">เหลือง</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fsog">แนวเพลง</label>
                    </div>
                    <div class="col">
                        <div id="fsog">
                            <label><input type="radio" name=songtype value="เพื่อชีวิต">เพื่อชีวิต </label>
                            <label><input type="radio" name=songtype value="ลูกทุ่ง"> ลูกทุ่ง </label>
                            <label><input type="radio" name=songtype value="อื่นๆ"> อื่นๆ </label>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12 col-md-4">
                        <label for="fcheck">ยินยอมให้เก็บข้อมูล</label>
                    </div>
                    <div class="col">
                        <input id="fcheck" type="checkbox">
                    </div>
                </div>
                <div class="row mt-6 mt-4">
                    <div class="col-sm-12 col-md-4">
                        <button type="reset" class="btn btn-light">Reset</button>
                    </div>
                    <div class="col">
                        <button type="button" onclick=checkValidate() class="btn btn-success">บันทึก</button>
                    </div>
            </form>
        </div>
        @endsection

        @push("script")
        <script>
            checkValidate = () => {

            // ตรวจ input ธรรมดา
            validateInput("fname");
            validateInput("fsur");
            validateInput("fdate");
            validateInput("fage");
            validateInput("fadd");

            // ตรวจ select
            validateInput("fcol");

            // ตรวจ ratio เพศ
            let sex = document.querySelector('input[name="sex"]:checked');
            let sexBox = document.getElementById("fsex");
            if (!sex) {
                sexBox.classList.add("is-invalid");
                sexBox.classList.remove("is-valid");
            } else {
                sexBox.classList.add("is-valid");
                sexBox.classList.remove("is-invalid");
            }

            // ตรวจ ratio แนวเพลง
            let song = document.querySelector('input[name="songtype"]:checked');
            let songBox = document.getElementById("fsog");
            if (!song) {
                songBox.classList.add("is-invalid");
                songBox.classList.remove("is-valid");
            } else {
                songBox.classList.add("is-valid");
                songBox.classList.remove("is-invalid");
            }

            // ตรวจ checkbox
            let check = document.getElementById("fcheck");
            if (!check.checked) {
                check.classList.add("is-invalid");
                check.classList.remove("is-valid");
            } else {
                check.classList.add("is-valid");
                check.classList.remove("is-invalid");
            }

            // สุดท้าย: ถ้ามี is-invalid → alert
            if (document.querySelector(".is-invalid")) {
                alert("กรุณากรอกข้อมูลให้ครบถ้วน");
                return;
            }

            alert("บันทึกข้อมูลสำเร็จ!");
        };

            function validateInput(id) {
                let el = document.getElementById(id);
                let value = el.value.trim();

                if (value === "") {
                    el.classList.add("is-invalid");
                    el.classList.remove("is-valid");
                } else {
                    el.classList.add("is-valid");
                    el.classList.remove("is-invalid");
                }
            }

            

        </script>
        @endpush


    

    </body>
</html>
