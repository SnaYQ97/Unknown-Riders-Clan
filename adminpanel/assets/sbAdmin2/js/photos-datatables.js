    $(document).ready(function() {
        var is_now_edit = false;
        var deleteButton = '<button class="btn btn-danger btn-icon-split mx-2 btn-sm" id="delete"><span class="text"><i class="fas fa-trash"></i></span></button>';
        var editButton = '<button class="btn btn-success btn-icon-split mx-2 btn-sm" id="show_edit_modal" data-toggle="modal" data-target="#EditModal"><span class="text"><i class="fas fa-pen"></i></span></button>';
        var visibleStatusButton = '<button class="btn btn-primary btn-icon-split mx-2 btn-sm" id="visible"><span class="text"><i class="fas fa-eye"></i></span></button>';
        var showMoreButton = '<button class="btn btn-info btn-icon-split mx-2 btn-sm" id="showMore"><span class="text"><i class="fas text-light fa-chevron-down"></span></button>'
        
        var buttons = deleteButton + editButton + showMoreButton;
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
        
        // SHOW MORE FUNCTION
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

        function format(d) {
            return '<table class="table table-bordered table-hover" cellpadding = "5" cellspacing = "0" border = "0" style = "padding-left:50px;">' +
                '<tr>' +
                    '<th>Preview</th>' +
                    '<th>Add Date</th>' +
                    '<th>Added By</th>' +
                '</tr>' +
                '<tr>' +
                    '<td class="d-flex flex-row justify-content-center align-items-center">' + '<img style="max-width: 480px; max-height: 268px;" src=' + d.link + '>' + '</td>' +
                    '<td>' + d.add_date + '</td>' +
                    '<td>' + d.add_by + '</td>' +
                '</tr>' +
            '</table>';
        }

        // FUNKCJA PODGLĄDU W DODAWANIU NOWEGO ZDJĘCIA
        $('#exampleModal #link').on('paste', function () {
            var element = this;
            setTimeout(function () {
                var text = $(element).val();
                $('#exampleModal #preview').attr('src', text);
            }, 100);
        }); 

        // FUNKCJA PODGLĄDU W EDYCJI ZDJĘCIA
        $('#EditModal #link').on('paste', function () {
            var element = this;
            setTimeout(function () {
                var text = $(element).val();
                $('#EditModal #preview').attr('src', text);
            }, 100);
        });


        // DEFINIOWANIE TABELI
        var table = $('#example').DataTable( {
            "ajax": "http://unknownriders.pl/adminpanel/index.php/PhotosController/createAjax",
            "columns": [
                { data: 'id' },
                { data: 'link' },
                /* { data: 'author' }, */
                { 
                    "data": 'author',
                    "searchable": false,
                },
                {
                    "className": 'details-control dt-center',
                    "orderable": false,
                    "searchable": false,
                    "data": null,
                    "defaultContent": options
                },
            ],
            "order": [[0, 'desc']]
        });


        // PRZEKAZANIE DANYCH DO EDYCJI
        $('#example tbody ').on('click', '#show_edit_modal', function () {
            var tr = $(this).closest('tr');
            var tdi = tr.first("i.fas");
            //var tdt = tr.find("span.text i.fas");
            var row = table.row(tdi);

            $('#EditModal #preview').attr('src', row.data().link);
            $('#EditModal #preview').attr('alt', row.data().link);
            $('#EditModal #link').val(row.data().link);
            $('#EditModal #author').val(row.data().author);
            $('#EditModal #added_by').val(row.data().add_by);
            $('#EditModal #added_date').val(row.data().add_date);

            id = table.row(tdi).data().id;


            // ZAPIS EDYCJI
            $('#save_edit').on('click', function () {
                var link = $('#EditModal #link').val();
                var author = $('#EditModal #author').val();
                var addby = $('#EditModal #added_by').val();
                var adddate = $('#EditModal #added_date').val();
                
                var params = "id=" + id + "&link=" + link + "&author=" + author + "&addby=" + addby + "&adddate=" + adddate;
                var Request = new asyncRequest();
                Request.open("POST", "http://unknownriders.pl/adminpanel/index.php/PhotosController/updatePhoto", true);
                Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                //Request.setRequestHeader("Content-length", params.length);
                //Request.setRequestHeader("Connection", "close");

                Request.send(params);

                Request.onreadystatechange = function () {
                    if (this.readyState == 4) {
                        if (this.status == 200) {
                            table.ajax.reload();
                            $('#EditModal #link').val('');
                            $('#EditModal #author').val('');
                            $('#EditModal #added_by').val('');
                            $('#EditModal #added_date').val('');
                        }
                        else alert("Błąd komunikacji z serwerem: E:Con.Status " + this.statusText);
                    }
                }
            });


            // ANULOWANIE EDYCJI
            $('#cancel_edit').on('click', function () {
                $('#EditModal #link').val('');
                $('#EditModal #author').val('');
                $('#EditModal #added_by').val('');
                $('#EditModal #added_date').val('');
            });

        });

        // USUWANIE
        $('#example tbody ').on('click', '#delete', function () {
            var tr = $(this).closest('tr');
            var tdi = tr.first("i.fas");
            var tdt = tr.find("span.text i.fas");
            var row = table.row(tdi);

            //table.row(tdi).data().id //Znajdź id klikniętego przycisku
            
            //console.log(tr.find("td.details-control").children().html());
            tr.find("td.details-control").children().html("<button class='btn btn-success btn-icon-split mx-2 btn-sm' id='confirm'><span class='text'><i class='fas fa-check'></i></span></button><button class='btn btn-warning btn-icon-split mx-2 btn-sm' id='cancel'><span class='text'><i class='fas fa-times'></i></span></button>");
            
            $('#example tbody ').on('click', '#confirm', function () {
            
                var tr = $(this).closest('tr');
                var tdi = tr.first("i.fas");
                //var tdt = tr.find("span.text i.fas");
                var row = table.row(tdi);
                
                //console.log(row.data().id); //Znajdź id klikniętego przycisku);

                var id = row.data().id;
                var params = "id=" + id;
                var Request = new asyncRequest();
                Request.open("POST", "http://unknownriders.pl/adminpanel/index.php/PhotosController/deletePhoto", true);
                Request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                //Request.setRequestHeader("Content-length", params.length);
                //Request.setRequestHeader("Connection", "close");
                
                Request.send(params);

                Request.onreadystatechange = function () {
                    if (this.readyState == 4) {
                        if (this.status == 200) {
                            table.ajax.reload();
                            $('#exampleModal #link').val('');
                            $('#exampleModal #author').val('');
                        }
                        else alert("Błąd komunikacji z serwerem: E:Con.Status " + this.statusText);
                    }
                }
            });

            $('#example tbody ').on('click', '#cancel', function () {
                /* var optionsColumnInsideContent = tr.find("td.details-control").children();
                optionsColumnInsideContent.html(buttons); */
                table.ajax.reload();
            });
        });

        $('#add').on('click', function () {
            var link = $('#link').val();
            var author = $('#author').val();
            var addby = $('#user_nick').text();

            var params = "link=" + link + "&author=" + author + "&addby=" + addby;
            var Request = new asyncRequest();
            Request.open("POST", "http://unknownriders.pl/adminpanel/index.php/PhotosController/addPhoto", true);
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

        /* $('#example tbody').on('click', '#visible', function () {

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
        });   */
    } );