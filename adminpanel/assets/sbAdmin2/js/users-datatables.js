
    var is_now_edit = false;
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        "ajax": "http://localhost/projects/admin/index.php/UsersManagement/createAjax",
        "columnDefs": [ 
            {
                "targets": [0,1,2,3],
                "className": "text-center"
            },
            {
                "targets": [3],
                //"data": null,
                "defaultContent": "<div class='d-flex flex-row justify-content-center align-items-center'><button class='btn btn-danger btn-icon-split mx-2 btn-sm' id='delete'><span class='text'><i class='fas fa-trash'></i></span></button ><button class='btn btn-info btn-icon-split mx-2 btn-sm' id='edit'><span class='text'><i class='fas fa-pen'></span></button></div>",
            },
            {
                "orderable": false, 
                "targets": [3],
            }
        ],
        'columns': [
            {

            },
            {

            },
            {
                "targets": [2],
                "data": 2,
                render: function( data, type, row ){
                    //console.log(row[3]);
                    if(type==='display') {
                        var role = $.parseJSON(data);
                        switch (role) {
                        case 1:
                            return "User";
                            break;
                        case 2:
                            return "Moderator";
                            break;
                        case 3:
                            return "Administrator";
                            break;
                        default:
                            return "User";
                        }
                    }
                    return data;
                }, 
            },
        ]
    } );
 
    $('#example tbody').on( 'click', '#confirm', function () {
        var table = $('#example').DataTable();
        is_now_edit = false;
        var id = table.row($(this).parents('tr')).data()[0];
        var params = "id="+id;
        var xmlhttp = new XMLHttpRequest(); 
        xmlhttp.open("POST", "http://localhost/projects/admin/index.php/UsersManagement/deleteUser/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(params);
        table.ajax.reload();
    } );
} );

$(document).ready(function() {
    var table = $('#example').DataTable();
    //var a=0;
    $('#example tbody').on( 'click', '#edit', function () {
        //console.log($('tr', $(this).parents('tr'))['prevObject'][0].children);
        //console.log(table.row($(this).parents('tr')).data()[3]);
        if(!is_now_edit) {
            is_now_edit = true;
            for (var i = 0; i < $('tr', $(this).parents('tr'))['prevObject'][0].children.length; i++) { 
                if(i==1) {
                    $('tr', $(this).parents('tr'))['prevObject'][0].children[i].innerHTML = '<td><input class="form-control" id="nick_edit" value="'+table.row($(this).parents('tr')).data()[i]+'"></td>';
                } else if(i==2) {
                    /* console.log($('tr'),$(this),$('td'));
                    console.log('.................');
                    console.log($('tr', $(this).parents('tr'))['prevObject'][0].children); */
                    //console.log(table.row($(this).parents('tr')).data()[i]);
                    var role = table.row($(this).parents('tr')).data()[i];
                    switch (role) {
                        case '1':
                            $('tr', $(this).parents('tr'))['prevObject'][0].children[i].innerHTML = "<div class='d-flex flex-row justify-content-center align-items-center'><select class='form-control' id='select_role'><option value='1' selected>User</option><option value='2'>Moderator</option><option value='3'>Administrator</option></select></div>";
                            break;
                        case '2':
                            $('tr', $(this).parents('tr'))['prevObject'][0].children[i].innerHTML = "<div class='d-flex flex-row justify-content-center align-items-center'><select class='form-control' id='select_role'><option value='1'>User</option><option value='2' selected>Moderator</option><option value='3'>Administrator</option></select></div>";
                            break;
                        case '3':
                            $('tr', $(this).parents('tr'))['prevObject'][0].children[i].innerHTML = "<div class='d-flex flex-row justify-content-center align-items-center'><select class='form-control' id='select_role'><option value='1'>User</option><option value='2'>Moderator</option><option value='3' selected>Administrator</option></select></div>";
                            break;
                        default:
                            $('tr', $(this).parents('tr'))['prevObject'][0].children[i].innerHTML = "<div class='d-flex flex-row justify-content-center align-items-center'><select class='form-control' id='select_role'><option value='1' selected>User</option><option value='2'>Moderator</option><option value='3'>Administrator</option></select></div>";
                    }
                }
                else if (i==3) {
                    $('tr', $(this).parents('tr'))['prevObject'][0].children[i].innerHTML = "<button class='btn btn-success btn-icon-split mx-2 btn-sm' id='save_edit'><span class='text'><i class='fas fa-save'></i></span></button><button class='btn btn-warning btn-icon-split mx-2 btn-sm' id='cancel_edit'><span class='text'><i class='fas fa-times'></i></span></button>";
                }
            }
        }
    } );

    $('#example tbody').on( 'click', '#delete', function () {
        //console.log($('tr', $(this).parents('tr'))['prevObject'][0].children);
        if(!is_now_edit) {
            is_now_edit = true;
            for (var i = 0; i < $('tr', $(this).parents('tr'))['prevObject'][0].children.length; i++) { 
                if (i==3) {
                    $('tr', $(this).parents('tr'))['prevObject'][0].children[i].innerHTML = "<button class='btn btn-success btn-icon-split mx-2 btn-sm' id='confirm'><span class='text'><i class='fas fa-check'></i></span></button><button class='btn btn-warning btn-icon-split mx-2 btn-sm' id='cancel_edit'><span class='text'><i class='fas fa-times'></i></span></button>";
                }
            } 
        }

    } );
} );

$(document).ready(function() {
    var table = $('#example').DataTable();
    $('#example tbody').on( 'click', '#cancel_edit', function () {
        is_now_edit = false;
        table.ajax.reload();
    } );
    var table = $('#example').DataTable();
    $('#example tbody').on( 'click', '#save_edit', function () {
        var id = table.row($(this).parents('tr')).data()[0];
        var nick = $('#nick_edit').val();
        var role = $('#select_role').children("option:selected").val();
        var params = "id="+id+"&nick="+nick+"&role="+role;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost/projects/admin/index.php/UsersManagement/updateUser/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(params);
        is_now_edit = false;
        //alert('Zmiany zostały zapisane '+ role);
        table.ajax.reload();
    } );
} );

$(document).ready(function() {
    var table = $('#example').DataTable();

    $('#add').on( 'click', function () {
        //console.log(table.$('tr').length);
        $('#addForm').modal('toggle');
        var nick = $('#nick').val();
        var password = $('#password').val();
        var role = $('#select').children("option:selected").val();
        var params = "nick=" + nick + "&password=" + password + "&role=" + role;
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("POST", "http://localhost/projects/admin/index.php/UsersManagement/addUser/", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send(params);
        table.ajax.reload(); 
        $('#nick').val('');
        $('#password').val('');
    } ); 

    $('#cancel').on( 'click', function () {
        $('#nick').val('');
        $('#password').val('');
    } );
    // Automatically add a first row of data
    //$('#addRow').click();
} );