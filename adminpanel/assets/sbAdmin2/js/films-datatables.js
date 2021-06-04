    $(document).ready(function() {
        var is_now_edit = false;
        var deleteButton = '<button class="btn btn-danger btn-icon-split mx-2 btn-sm" id="delete"><span class="text"><i class="fas fa-trash"></i></span></button>';
        var editButton = '<button class="btn btn-success btn-icon-split mx-2 btn-sm" id="show_edit_modal" data-toggle="modal" data-target="#EditModal"><span class="text"><i class="fas fa-pen"></i></span></button>';
        var visibleStatusButton = '<button class="btn btn-primary btn-icon-split mx-2 btn-sm" id="visible"><span class="text"><i class="fas fa-eye"></i></span></button>';
        var buttons = deleteButton + editButton + visibleStatusButton;
        var options = '<div class="d-flex flex-row justify-content-center align-items-center td.details-control">' + buttons + '</div>';
        function asyncRequest() {
            try {
                Request = new XMLHttpRequest();
            }
            catch (e1) {
                Request = false;
            }
            return Request;
        }
        var table = $('#example').DataTable( {
            "ajax": "http://unknownriders.pl/adminpanel/index.php/FilmsController/createAjax",
            "columns": [
                { data: 'id' },
                { data: 'title' },
                { data: 'link' },
                { 
                    "data": 'add_by',
                    "searchable": false,
                },
                {   
                    data: 'visible',
                    render: function (data, type, row) {
                        if (row.visible == 1) {
                            console.log(row.visible);
                            console.log('1');
                            visibleStatusButton = '<button disabled class="btn btn-light btn-icon-split mx-2 btn-sm" id="visible"><span class="text"><i class="fas fa-eye text-primary"></i></span></button>';
                            buttons = deleteButton + editButton + visibleStatusButton;
                            options = '<div class="d-flex flex-row justify-content-center align-items-center td.details-control">' + buttons + '</div>';
                            return options;
                        }
                    },
                    "className": 'details-control dt-center',
                    "orderable": false,
                    "searchable": false,
                    "defaultContent": options
                },
            ],
            "order": [[0, 'desc']]
        });

        $('#example tbody ').on('click', '#show_edit_modal', function () {
            var tr = $(this).closest('tr');
            var tdi = tr.first("i.fas");
            //var tdt = tr.find("span.text i.fas");
            var row = table.row(tdi);

            $('#EditModal #exampleModalLabel').text(' '+row.data().title);
            $('#EditModal #title').val(row.data().title);
            $('#EditModal #link').val(row.data().link);
            $('#EditModal #added_by').val(row.data().add_by);

            id = table.row(tdi).data().id;

            $('#save_edit').on('click', function () {
                var title = $('#EditModal #title').val();
                var link = $('#EditModal #link').val();
                var addby = $('#EditModal #added_by').val();
                
                var params = "id=" + id + "&title=" + title + "&link=" + link + "&addby=" + addby;
                var Request = new asyncRequest();
                Request.open("POST", "http://unknownriders.pl/adminpanel/index.php/FilmsController/updateFilm", true);
                Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                //Request.setRequestHeader("Content-length", params.length);
                //Request.setRequestHeader("Connection", "close");

                Request.send(params);

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
            
            //console.log(tr.find("td.details-control").children().html());
            tr.find("td.details-control").children().html("<button class='btn btn-success btn-icon-split mx-2 btn-sm' id='confirm'><span class='text'><i class='fas fa-check'></i></span></button><button class='btn btn-warning btn-icon-split mx-2 btn-sm' id='cancel_edit'><span class='text'><i class='fas fa-times'></i></span></button>");
            
            $('#example tbody ').on('click', '#confirm', function () {
            
                var tr = $(this).closest('tr');
                var tdi = tr.first("i.fas");
                //var tdt = tr.find("span.text i.fas");
                var row = table.row(tdi);
                
                //console.log(row.data().id); //Znajdź id klikniętego przycisku);

                var id = row.data().id;
                var params = "id=" + id;
                var Request = new asyncRequest();
                Request.open("POST", "http://unknownriders.pl/adminpanel/index.php/FilmsController/deleteFilm", true);
                Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                //Request.setRequestHeader("Content-length", params.length);
                //Request.setRequestHeader("Connection", "close");
                
                Request.send(params);

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
                /* var optionsColumnInsideContent = tr.find("td.details-control").children();
                optionsColumnInsideContent.html(buttons); */
                table.ajax.reload();
            });
        });

        $('#add').on('click', function () {
            var title = $('#title').val();
            var link = $('#link').val();
            var addby = $('#user_nick').text();

            var params = "title=" + title + "&link=" + link + "&addby=" + addby;
            var Request = new asyncRequest();
            Request.open("POST", "http://unknownriders.pl/adminpanel/index.php/FilmsController/addFilm", true);
            Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            //Request.setRequestHeader("Content-length", params.length);
            //Request.setRequestHeader("Connection", "close");

            Request.send(params);

            Request.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        table.ajax.reload();
                    }
                    else alert("Błąd komunikacji z serwerem: E:Con.Status " + this.statusText);
                }
            }
        });

        $('#example tbody').on('click', '#visible', function () {

            var tr = $(this).closest('tr');
            var tdi = tr.first("i.fas");
            //var tdt = tr.find("span.text i.fas");
            var row = table.row(tdi);

            //console.log(row.data().id); //Znajdź id klikniętego przycisku);

            var id = row.data().id;
            var params = "id=" + id;
            var Request = new asyncRequest();
            Request.open("POST", "http://unknownriders.pl/adminpanel/index.php/FilmsController/MakeVisible", true);
            Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            //Request.setRequestHeader("Content-length", params.length);
            //Request.setRequestHeader("Connection", "close");

            Request.send(params);

            Request.onreadystatechange = function () {
                if (this.readyState == 4) {
                    if (this.status == 200) {
                        table.ajax.reload();
                    }
                    else alert("Błąd komunikacji z serwerem: E:Con.Status " + this.statusText);
                }
            }
        });  
    } );