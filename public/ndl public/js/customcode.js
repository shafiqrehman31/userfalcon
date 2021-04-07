$('.datepicker').datepicker({
    format     : 'yyyy/mm/dd',
    startDate  : '-0d',
    autoclose  : true,
    autoOpen   : false,
    orientation: 'auto'
});

$('#select_store').select2();
$('#select_family').select2();
$('#SelectProductbyTitle').select2();
$('#SelectProductbyNumber').select2();

$("#example1").DataTable();
$('#example2').DataTable({
    "paging"      : true,
    "lengthChange": false,
    "searching"   : false,
    "ordering"    : true,
    "info"        : true,
    "autoWidth"   : false,
});

$('#mps-mis').DataTable({
    "paging"      : true,
    "lengthChange": false,
    "searching"   : true,
    "ordering"    : true,
    "info"        : true,
    "autoWidth"   : false,
});
$('#mps-side').DataTable({
    "paging"      : true,
    "lengthChange": false,
    "searching"   : true,
    "ordering"    : true,
    "info"        : true,
    "autoWidth"   : false,
});

$('#mps-color').DataTable({
    "paging"      : true,
    "lengthChange": false,
    "searching"   : true,
    "ordering"    : true,
    "info"        : true,
    "autoWidth"   : false,
});

$('#mps-shape').DataTable({
    "paging"      : true,
    "lengthChange": false,
    "searching"   : true,
    "ordering"    : true,
    "info"        : true,
    "autoWidth"   : false,
});

$('#mps-product-type').DataTable({
    "paging"      : true,
    "lengthChange": false,
    "searching"   : true,
    "ordering"    : true,
    "info"        : true,
    "autoWidth"   : false,
});

$('#mps-polish').DataTable({
    "paging"      : true,
    "lengthChange": false,
    "searching"   : true,
    "ordering"    : true,
    "info"        : true,
    "autoWidth"   : false,
});
$('#mps-users').DataTable({
    "paging"      : true,
    "lengthChange": false,
    "searching"   : true,
    "ordering"    : true,
    "info"        : true,
    "autoWidth"   : false,
})
;$('#mps-order').DataTable({
    "paging"      : false,
    "lengthChange": false,
    "searching"   : true,
    "ordering"    : true,
    "info"        : true,
    "autoWidth"   : false,
});
