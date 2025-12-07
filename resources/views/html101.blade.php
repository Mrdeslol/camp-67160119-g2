<!-- resource/views/html101.blade.php -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Workshop HTML</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
        <style>
            body {
                font-family: 'Sarabun', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container mt-4">
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
                        <input type="date" id ="fdate"">
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
                        <ratio id="fsex">
                            <input type="radio"> ชาย
                            <input type="radio"> หญิง
                        </ratio>
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
                    <div id="fadd" class="col">
                        <textarea></textarea>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fcol">สีที่ชอบ</label>
                    </div>
                    <div class="col">
                        <select id="fcol">
                            <option>แดง</option>
                            <option>น้ำเงิน</option>
                            <option>เหลือง</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-4">
                        <label for="fsog">แนวเพลง</label>
                    </div>
                    <div class="col">
                        <ratio id="fsog">
                            <input type="radio"> เพื่อชีวิต
                            <input type="radio"> ลูกทุ่ง
                            <input type="radio"> อื่นๆ
                        </ratio>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12 col-md-4">
                        <label for="fchk">ยินยอมให้เก็บข้อมูล</label>
                    </div>
                    <div class="col">
                        <input id="fchk" type="checkbox">
                    </div>
                </div>
                <div class="row mt-6 mt-4">
                    <div class="col-sm-12 col-md-4">
                        <button type="reset" class="btn btn-light">Reset</button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
            </form>
        </div>
    </body>
</html>
