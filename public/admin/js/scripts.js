$(document).ready(function() {
    // Add active state to sidbar nav links
   
    $('#thongbaoTable').DataTable();
  
    // Check all sinh viên trong danh sách sinh viên
    $('#checkAllSV').click(function(){
        var arr_mssv = [];
        if($(this).is(':checked')){
            $('.checkItemSV').prop('checked', true);
            var data = $('#sinhvienTable').DataTable().rows().data();
            
            data.each(function (value, index) {
                var htmlObject = $(value[2]);
                arr_mssv.push(htmlObject.text());
            });
        }else{
            $('.checkItemSV').prop('checked', false);
            arr_mssv = [];
        }
        $("#ds_mssv_hidden").val(JSON.stringify(arr_mssv));
        if(arr_mssv.length>0){
            $("#btnSubmitXoaSV" ).prop('disabled', false);
        }else{
            $("#btnSubmitXoaSV" ).prop('disabled', true);
        }
    });
    // Check checkbox sinh viên trong danh sách sinh viên
    $('.checkItemSV').click(function(){
        var arr_mssv = JSON.parse($('#ds_mssv_hidden').val());
        if($(this).is(':checked')){
            arr_mssv.push($(this).val());
            $("#ds_mssv_hidden").val(JSON.stringify(arr_mssv));
        }else{
            $('#checkAllSV').prop('checked', false);
            var mssv = $(this).val();
            arr_mssv = jQuery.grep(arr_mssv, function(value) {
                return value != mssv;
            });
        }
        $("#ds_mssv_hidden").val(JSON.stringify(arr_mssv));
        if(arr_mssv.length>0){
            $("#btnSubmitXoaSV" ).prop('disabled', false);
        }else{
            $("#btnSubmitXoaSV" ).prop('disabled', true);
        }
    });
    $('#sinhvienTable').DataTable({
        "aaSorting": [],
        "columnDefs": [{ 
            "targets": 0,
            "orderable": false
        }],
        "drawCallback": function( settings ) {
            if($('#checkAllSV').is(':checked')){
                $('.checkItemSV').prop('checked', true);
            }
            
        }
    });
    // Check all sinh viên trong lớp học phần
    $('#checkAll').click(function(){
        var arr_mssv = [];
        if($(this).is(':checked')){
            $('.checkItem').prop('checked', true);
            var data = $('#lhp_dssvTable').DataTable().rows().data();
            data.each(function (value, index) {
                arr_mssv.push(value[2]);
            });
        }else{
            $('.checkItem').prop('checked', false);
            arr_mssv = [];
        }
        $("#ds_mssv_hidden").val(JSON.stringify(arr_mssv));
        if(arr_mssv.length>0){
            $("#btnSubmitXoa" ).prop('disabled', false);
        }else{
            $("#btnSubmitXoa" ).prop('disabled', true);
        }
    });
    // Check checkbox sinh viên trong lớp học phần
    $('.checkItem').click(function(){
        var arr_mssv = JSON.parse($('#ds_mssv_hidden').val());
        if($(this).is(':checked')){
            arr_mssv.push($(this).val());
            $("#ds_mssv_hidden").val(JSON.stringify(arr_mssv));
        }else{
            $('#checkAll').prop('checked', false);
            var mssv = $(this).val();
            arr_mssv = jQuery.grep(arr_mssv, function(value) {
                return value != mssv;
            });
        }
        $("#ds_mssv_hidden").val(JSON.stringify(arr_mssv));
        if(arr_mssv.length>0){
            $("#btnSubmitXoa" ).prop('disabled', false);
        }else{
            $("#btnSubmitXoa" ).prop('disabled', true);
        }
    });
    $('#lhp_dssvTable').DataTable({
        "aaSorting": [],
        "columnDefs": [{ 
            "targets": 0,
            "orderable": false
        }],
        "drawCallback": function( settings ) {
            if($('#checkAll').is(':checked')){
                $('.checkItem').prop('checked', true);
            }
            
        }
    });
    $('#lienheTable').DataTable();
    $('#btnSubmitXoa').on("click", function(e) {
        var arr_mssv = JSON.parse($('#ds_mssv_hidden').val());
        var text = "Bạn có chắc muốn xóa những sinh viên có MSSV là ";
        $.each(arr_mssv, function(key, value ) {
            text = text + value +", ";
        });
        $('#modalBodyXoa').text(text.slice(0,-2)+" ra khỏi lớp?");
    });
    $('#modalSubmitXoa').on("click", function(e) {
        $('#formXoaSinhvien').submit();
    });
    $('#btnSubmitXoaSV').on("click", function(e) {
        var arr_mssv = JSON.parse($('#ds_mssv_hidden').val());
        var text = "Bạn có chắc muốn xóa những sinh viên có MSSV là ";
        $.each(arr_mssv, function(key, value ) {
            text = text + value +", ";
        });
        $('#modalBodyXoaSV').text(text.slice(0,-2)+"?");
    });
    $('#btnSubmitTKShowModal').on("click", function(e) {
        e.preventDefault();
    });
    $('#modalSubmitTK').on("click", function(e) {
        var tile_chuyencan = $('#tile_chuyencan').val();
        var tile_kiemtra = $('#tile_kiemtra').val();
        var tile_thi = $('#tile_thi').val();
        var input_btn = $('<input>').attr('type', 'hidden')
                        .attr('name', "btnSubmitTK").val("btnSubmitTK");
        var input_cc = $('<input>').attr('type', 'hidden')
                    .attr('name', "tile_chuyencan").val(tile_chuyencan);
        var input_kt =$('<input>').attr('type', 'hidden')
                    .attr('name', "tile_kiemtra").val(tile_kiemtra);
        var input_thi =$('<input>').attr('type', 'hidden')
                    .attr('name', "tile_thi").val(tile_thi);
        $('#formDiemTongKet').append(input_btn);
        $('#formDiemTongKet').append(input_cc);
        $('#formDiemTongKet').append(input_kt);
        $('#formDiemTongKet').append(input_thi);
        $('#formDiemTongKet').submit();
    });
    $("#tile_chuyencan").bind('keyup mouseup', function () {
        $("#messageModal").contents().filter(function(){ return this.nodeType == 3; }).remove();
        $('#messageModal').append('Tổng các tỉ lệ không bằng 1!');
        var tile_chuyencan = parseFloat($('#tile_chuyencan').val());
        var tile_kiemtra = parseFloat($('#tile_kiemtra').val());
        var tile_thi = parseFloat($('#tile_thi').val());
        if((tile_chuyencan+tile_kiemtra+tile_thi)!=1){
            $('#messageModal').show();
        }else{
            $('#messageModal').hide();
        }
    });
    $("#tile_kiemtra").bind('keyup mouseup', function () {
        $("#messageModal").contents().filter(function(){ return this.nodeType == 3; }).remove();
        $('#messageModal').append('Tổng các tỉ lệ không bằng 1!');
        var tile_chuyencan = parseFloat($('#tile_chuyencan').val());
        var tile_kiemtra = parseFloat($('#tile_kiemtra').val());
        var tile_thi = parseFloat($('#tile_thi').val());
        console.log(tile_chuyencan+tile_kiemtra+tile_thi);
        if((tile_chuyencan+tile_kiemtra+tile_thi)!=1){
            $('#messageModal').show();
        }else{
            $('#messageModal').hide();
        }
    });
    $("#tile_thi").bind('keyup mouseup', function () {
        $("#messageModal").contents().filter(function(){ return this.nodeType == 3; }).remove();
        $('#messageModal').append('Tổng các tỉ lệ không bằng 1!');
        var tile_chuyencan = parseFloat($('#tile_chuyencan').val());
        var tile_kiemtra = parseFloat($('#tile_kiemtra').val());
        var tile_thi = parseFloat($('#tile_thi').val());
        if((tile_chuyencan+tile_kiemtra+tile_thi)!=1){
            $('#messageModal').show();
        }else{
            $('#messageModal').hide();
        }
    });
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    // Set new default font family and font color to mimic Bootstrap's default styling
    Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#292b2c';

    if($("#labelChart").val()&&$("#dataChart").val()){
        var label_ctx = JSON.parse($("#labelChart").val());
        var data_ctx = JSON.parse($("#dataChart").val());
        var data_max = Math.max.apply(Math, data_ctx);
        // Area Chart Example
        var ctx = document.getElementById("myAreaChart").getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: label_ctx,
                datasets: [{
                label: "Sessions",
                lineTension: 0.3,
                backgroundColor: "rgba(2,117,216,0.2)",
                borderColor: "rgba(2,117,216,1)",
                pointRadius: 5,
                pointBackgroundColor: "rgba(2,117,216,1)",
                pointBorderColor: "rgba(255,255,255,0.8)",
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(2,117,216,1)",
                pointHitRadius: 50,
                pointBorderWidth: 2,
                data: data_ctx,
                }],
            },
            options: {
                scales: {
                xAxes: [{
                    time: {
                    unit: 'date'
                    },
                    gridLines: {
                    display: false
                    },
                    ticks: {
                    maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                    min: 0,
                    max: data_max+100,
                    maxTicksLimit: 5
                    },
                    gridLines: {
                    color: "rgba(0, 0, 0, .125)",
                    }
                }],
                },
                legend: {
                display: false
                }
            }
        });
    }
    
});