@extends('template._master')

<!-- Title App -->
@section('title', 'Export')

@section('content')

<div class="content-wrapper">
    <!-- Title Header -->
    <div class="row page-title-header mb-0">
        <div class="col-12">
            <div class="page-header" style="border:0;padding-bottom:0;margin-bottom:0">
                <h4 class="page-title">Export File</h4>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="padding-left:0; padding-bottom: 0;">
                    <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Export File</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="card card-hover">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="label">Years</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="years">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="label">Month</label>
                                    <div class="input-group">
                                      <select name="" id="month" class="form-control">
                                          <option value="01">January</option>
                                          <option value="02">February</option>
                                          <option value="03">March</option>
                                          <option value="04">April</option>
                                          <option value="05">May</option>
                                          <option value="06">June</option>
                                          <option value="07">July</option>
                                          <option value="08">August</option>
                                          <option value="09">September</option>
                                          <option value="10">October</option>
                                          <option value="11">November</option>
                                          <option value="12">Desember</option>
                                      </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label class="label">Import File</label>
                                    <div class="input-group">
                                      <input type="text" class="form-control" name="inpt-file">
                                      <input type="file" class="display-0" id="file-import">
                                      <div class="input-group-append">
                                        <button class="input-group-text" id="btn-chose" style="border-radius: 0px 4px 4px 0px">
                                            <i class="fas fa-file-import fa-lg"></i>
                                        </button>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    jQuery(function($) {
        // set variable
        var final_arr = []
        var user_group = []
        var arr1 = []
        // group array
        var group_by = (array, key) => {
            // Return the end result
            let dataX = array.reduce((result, currentValue) => {
                // If an array already present for key, push it to the array. Else create an array and push the object
                (result[currentValue[key]] = result[currentValue[key]] || []).push(currentValue);
                // Return the current iteration `result` value, this will be taken as next iteration `result` value and accumulate
                return result;
            }, {}); // empty object is the initial value for result object
            // change array format
            for (let index in dataX) {
                arr1.push(dataX[index])
            }
            return arr1
        }

        var array_sum = (total, num) => {
            return total + num;
        }

        var getDaysArray = function(year, month) {
            var monthIndex = month - 1; // 0..11 instead of 1..12
            var names = [ 'sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat' ];
            var date = new Date(year, monthIndex, 1);
            var result = [];
            while (date.getMonth() == monthIndex) {
                // names[date.getDay()] => get days name
                let get_month = date.getMonth() // get month
                    get_month = parseInt(get_month) + parseInt(1) // get years
                let get_year = date.getFullYear().toString().substr(-2)

                result.push(get_month + '/' + date.getDate()  + '/' + get_year);
                date.setDate(date.getDate() + 1);
            }
            
            return result;
        }

        var change_item_position = function moveArrayItemToNewIndex(arr, old_index, new_index) {
            if (new_index >= arr.length) {
                var k = new_index - arr.length + 1;
                while (k--) {
                    arr.push(undefined);
                }
            }
            arr.splice(new_index, 0, arr.splice(old_index, 1)[0]);
            return arr; 
        };

        $('#btn-chose').on('click', function(e) {
            e.preventDefault()

            $('#file-import').trigger('click')
        })

        $('#file-import').on('change', function(){
            var doc = document.getElementById("file-import").files; // get data doc file
            var calculate = 0;
            var user_key = 0;
            var del_arr = []
            var xlsx_data = []
            // trigger click
            $('input[name="inpt-file"]').val(doc[0].name)

            var reader = new FileReader()
            // onload
            reader.onload = function(e) {
                var data = e.target.result // onload data
                var workbook = XLSX.read(data, {type: 'binary'})
                workbook.SheetNames.forEach(function(sheetName){
                    var _arr_data = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName], {raw: false}) // get sheet data
                    $.each(_arr_data, function(k,v){
                        v.Time = v.Time.split(' ')
                    })
                    // call function array group
                    var _arr_group = group_by(_arr_data, 'User')
                    // loop data
                    $.each(_arr_group, function(k,_val){
                        for(key in _val){
                            if (typeof final_arr[_val[key].User] == 'undefined') {
                                final_arr[_val[key].User] = {}
                            }
                            // ambil data user
                            final_arr[_val[key].User]['User'] = _val[key].User 
                            // ambil waktu jam masuk kerja
                            if(_val[key].B === '0'){
                                // medapatkan waktu masuk paling awal
                                if (typeof final_arr[_val[key].User]['in_'+_val[key].User+'_'+_val[key].Time[0]] == 'undefined') {
                                    final_arr[_val[key].User]['in_'+_val[key].User+'_'+_val[key].Time[0]] = _val[key].Time[1]
                                }
                            } 
                            // ambil waktu jam pulang kerja
                            if (_val[key].B === '1') {
                                final_arr[_val[key].User]['out_'+_val[key].Time[0]] = _val[key].Time[1]
                                // jika tidak absen pada saat masuk kerja, tapi absen saat pulang kerja
                                if (typeof final_arr[_val[key].User]['in_'+_val[key].User+'_'+_val[key].Time[0]] == 'undefined') {
                                    calculate =  parseInt(9) / parseInt(9)
                                    final_arr[_val[key].User][_val[key].Time[0]] = parseFloat(calculate)
                                }
                                // jika absen pada saat masuk dan pulang kerja (complate)
                                else {
                                    let start = moment(final_arr[_val[key].User]['in_'+_val[key].User+'_'+_val[key].Time[0]], 'HH:mm')
                                    let end = moment(final_arr[_val[key].User]['out_'+_val[key].Time[0]], 'HH:mm')
                                        calculate = parseFloat(end.diff(start, 'hours')) / parseFloat(9)
                                        calculate = calculate.toFixed(1)
                                        // calculate
                                        final_arr[_val[key].User][_val[key].Time[0]] = parseFloat(calculate)
                                }
                            }
                            // tidak absen pada saat pulang kerja
                            else {
                                calculate = parseInt(9) / parseInt(9)
                                final_arr[_val[key].User][_val[key].Time[0]] = parseFloat(calculate)
                            }

                            // del_arr.push('in_'+_val[key].User+'_'+_val[key].Time[0])

                            if (typeof _val[parseInt(key)+1] == 'undefined' || _val[parseInt(key)+1].Time[0] != _val[parseInt(key)].Time[0]) {
                                if (typeof final_arr[_val[key].User]['Total Point'] == 'undefined') {
                                    final_arr[_val[key].User]['Total Point'] = parseFloat(final_arr[_val[key].User][_val[key].Time[0]])
                                } else {
                                    let t_point = final_arr[_val[key].User][_val[key].Time[0]]
                                        t_point = final_arr[_val[key].User]['Total Point'] += parseFloat(final_arr[_val[key].User][_val[key].Time[0]])
                                        // medapatkan 2 digit angka setelah calculate
                                        t_point = t_point.toFixed(1)
                                    final_arr[_val[key].User]['Total Point'] = parseFloat(t_point)
                                }
                            }
                        }
                    })
                    // console.log(final_arr);
                    // return false
                    for (let key in final_arr) {
                        for (let okey in final_arr[key]) {
                            if (okey.search('in_') > -1) {
                                delete final_arr[key][okey]
                            }
                            if (okey.search('out_') > -1) {
                                delete final_arr[key][okey]
                            }
                        }
                    }
                    // set header
                    var header = getDaysArray($('#years').val(), $('#month').val())
                    
                    var xlsx_header = ['User', 'Total Point'].concat(header)
                    // sort index key array
                    for(let i in final_arr){
                        xlsx_data.push(final_arr[i])
                    }

                    // export
                    var ws = XLSX.utils.json_to_sheet(
                            xlsx_data
                        , {
                            header: xlsx_header
                        });
                    var wb = XLSX.utils.book_new();
                    XLSX.utils.book_append_sheet(wb, ws, 'Rekap');
                    XLSX.writeFile(wb, 'Rekap Absen.xlsx');

                })
            }
            // reader err
            reader.onerror = function(err) {
                    console.log(err);
                }
            // read file
            reader.readAsBinaryString(doc[0])
        })

    })
</script>
@endsection

