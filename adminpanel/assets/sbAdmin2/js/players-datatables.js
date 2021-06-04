
function format(d) {
    var commentHeader;
    var commentText;
    if(d.comment == ''){
        commentHeader = '';
        commentText = '';
    }else {
        commentHeader = '<th>Komentarz:</th>';
        commentText = '<td>' + d.comment + '</td>';
    }
    return '<table class="table table-bordered table-hover" cellpadding = "5" cellspacing = "0" border = "0" style = "padding-left:50px;">' +
        '<tr>' +
            '<th>Zarobione:</th>' +
            '<th>Wydane:</th>' +
            '<th>Różnica:</th>' +
            commentHeader +
        '<tr>' +
            '<td>' + d.earned + '</td>' +
            '<td>' + d.spent + '</td>' +
            '<td>' + d.difference + '</td>' +
            commentText +
        '</tr>' +
        '</table>';
}



    var is_now_edit = false;
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            "ajax": "http://urclan.beep.pl/adminpanel/index.php/PlayersController/createAjax",
            "columns": [
                { data: 'id' },
                { data: 'discord_code' },
                { data: 'game_nick' },
                { 
                    "data": 'level',
                    "searchable": false,
                },
                /*{ data: 'earned' },
                { data: 'spent' },
                { data: 'difference' },
                { 
                    data: 'comment',
                    render: function (data, type, row) {
                        if (data == '') {
                            return 'Brak komentarza';
                        } else {
                            return data;
                        }
                    }
                }, */
                { data: 'join_date' },
                { 
                    "data": 'add_by',
                    "searchable": false,
                },
                {   
                    "className": 'details-control dt-center',
                    "orderable": false,
                    "searchable": false,
                    "data": null,
                    "defaultContent": "<div class='d-flex flex-row justify-content-center align-items-center td.details-control'><button class='btn btn-danger btn-icon-split mx-2 btn-sm' id='delete'><span class='text'><i class='fas fa-trash'></i></span></button><button class='btn btn-success btn-icon-split mx-2 btn-sm' id='show_edit_modal' data-toggle='modal' data-target='#EditModal'><span class='text'><i class='fas fa-pen'></i></span></button><button class='btn btn-info btn-icon-split mx-2 btn-sm' id='showMore'><span class='text'><i class='fas text-light fa-chevron-down'></span></button></div>"
                },
            ],
            "order": [[0, 'desc']]
        });

        $('#example tbody ').on('click', '#showMore', function () {
            var tr = $(this).closest('tr');
            var tdi = tr.last("i.fas");
            var tdt = tr.find("span.text i.fas");
            var row = table.row(tdi);

            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
                tdt.last().removeClass('fa-chevron-up');
                tdt.last().addClass('fa-chevron-down');
                //tdt.first().text('Pokaż');

                //<button class="btn btn-info btn-icon-split mx-2 btn-sm" id="edit"><span class="text"><i class="fas fa-pen"></i></span></button>
            }
            else {
                // Open this row
                row.child(format(row.data())).show();
                tr.addClass('shown');
                tdt.last().removeClass('fa-chevron-down');
                tdt.last().addClass('fa-chevron-up');
                //tdt.first().text('Ukryj');
            }
        });

        $('#example tbody ').on('click', '#show_edit_modal', function () {
            var tr = $(this).closest('tr');
            var tdi = tr.first("i.fas");
            //var tdt = tr.find("span.text i.fas");
            var row = table.row(tdi);
            console.log($('#EditModal #exampleModalLabel').text('text'));

            $('#EditModal #exampleModalLabel').text('Edycja gracza' + row.data().game_nick);
            $('#EditModal #nick').val(row.data().game_nick);
            $('#EditModal #discord').val(row.data().discord_code);
            $('#EditModal #level').val(row.data().level);
            $('#EditModal #earned').val(row.data().earned);
            $('#EditModal #spent').val(row.data().spent);
            $('#EditModal #difference').val(row.data().difference);
            $('#EditModal #join').val(row.data().join_date);
            $('#EditModal #comment').val(row.data().comment);
            $('#EditModal #addby').val(row.data().add_by);

            id = table.row(tdi).data().id;

            $('#save_edit').on('click', function () {
                var nick = $('#EditModal #nick').val();
                var code = $('#EditModal #discord').val();
                var level = $('#EditModal #level').val();
                var earned = $('#EditModal #earned').val();
                var spent = $('#EditModal #spent').val();
                var difference = $('#EditModal #difference').val();
                var join = $('#EditModal #join').val();
                var comment = $('#EditModal #comment').val();
                var addby = $('#EditModal #addby').val();
                
                var params = "id=" + id + "&nick=" + nick + "&code=" + code + "&lvl=" + level + "&earned=" + earned + "&spent=" + spent + "&difference=" + difference + "&join=" + join + "&comment=" + comment + "&addby=" + addby;
                var Request = new asyncRequest();
                Request.open("POST", "http://urclan.beep.pl/adminpanel/index.php/PlayersController/updatePlayer/", true);
                Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                //Request.setRequestHeader("Content-length", params.length);
                //Request.setRequestHeader("Connection", "close");

                Request.send(params);

                function asyncRequest() {
                    try {
                        Request = new XMLHttpRequest();
                    }
                    catch (e1) {
                        Request = false;
                    }
                    return Request;
                }

                Request.onreadystatechange = function () {
                    if (this.readyState == 4) {
                        if (this.status == 200) {
                            table.ajax.reload();
                        }
                        else alert("Błąd komunikacji z serwerem: E:Con.Status " + this.statusText);
                    }
                }
            });

        });

        $('#example tbody ').on('click', '#delete', function () {
            var tr = $(this).closest('tr');
            var tdi = tr.first("i.fas");
            var tdt = tr.find("span.text i.fas");
            var row = table.row(tdi);

            //table.row(tdi).data().id //Znajdź id klikniętego przycisku
            

            tr.find("td.details-control").children().html("<button class='btn btn-success btn-icon-split mx-2 btn-sm' id='confirm'><span class='text'><i class='fas fa-check'></i></span></button><button class='btn btn-warning btn-icon-split mx-2 btn-sm' id='cancel_edit'><span class='text'><i class='fas fa-times'></i></span></button>");
             
            $('#example tbody ').on('click', '#confirm', function () {
            
                var tr = $(this).closest('tr');
                var tdi = tr.first("i.fas");
                //var tdt = tr.find("span.text i.fas");
                var row = table.row(tdi);
                
                console.log(row.data().id); //Znajdź id klikniętego przycisku);

                var id = row.data().id;
                var params = "id=" + id;
                var Request = new asyncRequest();
                Request.open("POST", "http://urclan.beep.pl/adminpanel/index.php/PlayersController/deletePlayer/", true);
                Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                //Request.setRequestHeader("Content-length", params.length);
                //Request.setRequestHeader("Connection", "close");
                
                Request.send(params);

                function asyncRequest() {
                    try {
                        Request = new XMLHttpRequest();
                    }
                    catch(e1) {
                        Request = false;
                    }
                    return Request;
                }

                Request.onreadystatechange = function () {
                    if (this.readyState == 4) {
                        if (this.status == 200) {
                            table.ajax.reload();
                        }
                        else alert("Błąd komunikacji z serwerem: E:Con.Status " + this.statusText);
                    }
                }
            });

            $('#example tbody ').on('click', '#cancel_edit', function () {
                var optionsColumninsideContent = tr.find("td.details-control").children();
                optionsColumninsideContent.html("<button class='btn btn-danger btn-icon-split mx-2 btn-sm' id='delete'><span class='text'><i class='fas fa-trash'></i></span></button><button class='btn btn-success btn-icon-split mx-2 btn-sm' id='show_edit_modal' data-toggle='modal' data-target='#EditModal'><span class='text'><i class='fas fa-pen'></i></span></button><button class='btn btn-info btn-icon-split mx-2 btn-sm' id='showMore'><span class='text'><i class='fas text-light fa-chevron-down'></span></button>");
            });
        });

        $('#add').on('click', function () {
            var nick = $('#nick').val();
            var code = $('#discord').val();
            var level = $('#level').val();
            var earned = $('#earned').val();
            var spent = $('#spent').val();
            var comment = $('#comment').val();
            var addby = $('#user_nick').text();




            var params = "nick=" + nick + "&code=" + code + "&lvl=" + level + "&earned=" + earned + "&spent=" + spent + "&comment=" + comment + "&addby=" + addby;
            var Request = new asyncRequest();
            Request.open("POST", "http://urclan.beep.pl/adminpanel/index.php/PlayersController/addPlayer/", true);
            Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            //Request.setRequestHeader("Content-length", params.length);
            //Request.setRequestHeader("Connection", "close");

            Request.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        table.ajax.reload();
                    }
                    else alert("Błąd komunikacji z serwerem: E:Con.Status " + this.statusText);
                }
            }

            Request.send(params);

            function asyncRequest() {
                try {
                    Request = new XMLHttpRequest();
                }
                catch (e1) {
                    Request = false;
                }
                return Request;
            }
        });
    } );